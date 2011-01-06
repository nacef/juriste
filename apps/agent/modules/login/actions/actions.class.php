<?php

/**
 * login actions.
 *
 * @package    juriste
 * @subpackage login
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
  public function executeLogin(sfWebRequest $request)
  {
	$this->form = new LoginForm();
	if ($request->isMethod('post')) {
		$login = $request->getParameter('login');
		$password = $request->getParameter('password');
		$agent = UtilisateurTable::getInstance()->findOneByLoginAndPasswordAndType($login, $password, 1);
		if ($agent) {
			$this->getUser()->setAuthenticated(true);
			$this->getUser()->setLoggedUserId($agent->getIdUtilisateur());
			$this->getUser()->setLoggedUser($agent->getNom() . ' ' . $agent->getPrenom());
			$this->redirect('@homepage');
		}
	}
  }
  
  public function executeLogout(sfWebRequest $request) {
	$this->getUser()->setAuthenticated(false);
	$this->redirect('@homepage');
  }
}
