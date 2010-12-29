<?php

/**
 * Vente form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VenteForm extends BaseVenteForm
{
  private $question_id;
  
  public function configure()
  {
	  $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden(array(), array(
	    'value' => $this->question_id
	  ));
	  $this->widgetSchema['id_agent'] = new sfWidgetFormInputHidden(array(), array(
      'value' => sfContext::getInstance()->getUser()->getLoggedUser()
    ));
	  $this->widgetSchema['date_validite'] = new sfWidgetFormDate(array(
		  'format' => '%day% %month% %year%'
	  ));
  }
  
  public function setQuestionId($question_id) {
    $this->question_id = $question_id;
  }
  
}
