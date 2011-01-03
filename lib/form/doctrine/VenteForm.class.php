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
    unset($this['date_creation'], $this['date_modification']);
    
    if ($this->question_id) {
  	  $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden(array(), array(
	      'value' => $this->question_id
  	  ));    
    } else {
  	  $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden();        
    }
	  
	  $this->widgetSchema['id_agent'] = new sfWidgetFormInputHidden(array(), array(
      'value' => sfContext::getInstance()->getUser()->getLoggedUserId()
    ));
    
    $this->widgetSchema['date_validite'] = new sfWidgetFormCCExpirationDate();
    
    $this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('reality');
  }
  
  public function setQuestionId($question_id) {
    $this->question_id = $question_id;
  }
  
  public function processValues($values) {
    $date_validite = $values['date_validite'];
    $expiry = str_pad($date_validite['month'], 2, ' ', STR_PAD_LEFT).'-'.$date_validite['year'];
    $values['date_validite'] = $expiry;
    return $values;
  }
  
}
