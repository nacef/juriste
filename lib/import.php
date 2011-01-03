<?php
//setlocale(LC_ALL, 'fr_FR.utf8'); 
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
require_once(dirname(__FILE__).'/vendor/xmlrpc/lib/xmlrpc.inc');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
 
$databaseManager = new sfDatabaseManager($configuration);
 
function rpcexample_rpc_convert($x) {
  $keys = array_keys($x->me);
  $val = &$x->me[$keys[0]];

  switch($x->mytype) {
    // Scalar
    case 1:
      return $val;
    // Array
    case 2:
      $ret = array();
      foreach($val as $v) {
        // Don't preserve keys
        $ret[] = rpcexample_rpc_convert($v);
      }
      return $ret;
    // Struct
    case 3:
      $ret = array();
      foreach($val as $k => $v) {
        // Preserve keys
        $ret[$k] = rpcexample_rpc_convert($v);
      }
      return $ret;
  }
}

function get_question_list($session) {

  return $session->send('views.get', array(
    array('value' => 'questions','type' => 'string')
  ));
}

function get_node($session, $nid) {
  return $session->send('node.get', array(
    array('value' => $nid, 'type' => 'int')
  ));
}

function delete_node($session, $nid) {
  $session->send('node.delete', array(
    array('value' => $nid, 'type' => 'int')
  ));
}


//get_node(58);
//get_question_list();

class DrupalXmlrpc {

  function __construct( $domain = '', $apiKey = '', $endPoint = '', $verbose = FALSE )
  {
    $this->domain = $domain;
  
    $this->kid = $apiKey;
  
    $this->endpoint = $endPoint;

    $this->verbose = $verbose;
  
    $this->client = new xmlrpc_client('/services/xmlrpc', $this->endpoint);
    
    $retVal = $this->send('system.connect', array());
    
    $this->session_id = $retVal['sessid'];
    
    if ($this->verbose) {
       $func = 'DrupalXmlrpc->__construct:';
       if ($this->session_id)
            error_log( $func.' got anonymous session id fine' );
       else error_log( $func.' failed to get anonymous session id!' );
    }
  }

  /***********************************************************************
  * Function for sending xmlrpc requests
  */
  public function send( $methodName, $functionArgs = array() )
  {
    $message = new xmlrpcmsg($methodName);

    if ($methodName != 'system.connect') {
      $timestamp = (string)time();
      $nonce = $this->getUniqueCode("10");

      // prepare a hash
      $hash_parameters = array( $timestamp, $this->domain, $nonce, $methodName );
      $hash = hash_hmac("sha256", implode(';', $hash_parameters), $this->kid);
      
      $message->addParam(new xmlrpcval($hash, "string"));
      $message->addParam(new xmlrpcval($this->domain, "string"));
      $message->addParam(new xmlrpcval($timestamp, "string"));
      $message->addParam(new xmlrpcval($nonce, "string"));
      $message->addParam(new xmlrpcval($this->session_id, "string"));
      
      foreach($functionArgs as $arg) {
        $message->addParam(new xmlrpcval($arg['value'], $arg['type']));
      }
    }
    $result = $this->client->send($message);
    
    return rpcexample_rpc_convert($result->value());
  }

  /***************************************************
   * login and return user object
   */
  public function userLogin( $userName = '', $userPass = '' )
  {
    if ($this->verbose)
         error_log( 'DrupalXmlrpc->userLogin() called with userName "'.$userName.'" and pass "'.$userPass.'"' );

    $retVal = $this->send('user.login', array(
      array('value' => $userName, 'type' => 'string'),
      array('value' => $userPass, 'type' => 'string')
    ));
    
    if (!$retVal) {
       if ($this->verbose)
          error_log( 'userLogin() failed! errno "'.xmlrpc_errno().'" msg "'.xmlrpc_error_msg().'"' );
       return FALSE;
    }
    else {
       // remember our logged in session id:
       $this->session_id = $retVal['sessid'];
       $user = $retVal['user'];
       $this->authenticated_user = $user;
       return $user;
    }
  }

  /***************************************************
   * logout, returns 0 for okay, or -1 for error.
   */
  public function userLogout()
  {
    $retVal = $this->send( 'user.logout', array() );
    if (!$retVal) {
       if ($this->verbose)
          error_log( 'userLogout() failed! errno "'.xmlrpc_errno().'" msg "'.xmlrpc_error_msg().'"' );
       return -1;
    }

    return 0; // meaning okay
  }

  /***************************************************
  * Function for generating a random string, used for
  * generating a token for the XML-RPC session
  */
  private function getUniqueCode($length = "")
  {
    $code = md5(uniqid(rand(), true));
    if ($length != "")
         return substr($code, 0, $length);
    else return $code;
  }
}



// create a drupal session:
$localDomain   = '127.0.0.1';
$apiKey        = '93df78585de72c25a3a16ca7f5571f74';
$endPoint      = 'www.lejuridique.com';
$drupalSession = new DrupalXmlrpc( $localDomain, $apiKey, $endPoint, TRUE );
if ($drupalSession->session_id) {
  $userName   = 'nacef';
  $userPass   = '!!juridique10*';
  $drupalUser = $drupalSession->userLogin( $userName, $userPass );

  if ($drupalUser) {
    
    foreach(get_question_list($drupalSession) as $viewNode) {
      $node = get_node($drupalSession, $viewNode['nid']);
      
      $question = new Question();
      $question->setNom($node['field_nom'][0]['value']);
      $question->setPrenom($node['field_prenom'][0]['value']);
      $question->setCodePostal($node['field_cp'][0]['value']);
      $question->setPays($node['field_pays'][0]['value']);
      $question->setTelephone($node['field_telephone'][0]['value']);
      $question->setEmail($node['field_email'][0]['value']);
      $question->setTexteQuestion(utf8_encode($node['field_question'][0]['value']));
//      $question->setSite($node['field_site'][0]['value']);
      $question->save();

      delete_node($drupalSession, $viewNode['nid']);      
    }

    $drupalSession->userLogout();
  } else {
    $retVal = 'login_failed';
  }
} else {
  $retVal = 'connection failed';
}

