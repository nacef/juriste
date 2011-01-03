<?php

/**
 * Rappel form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RappelForm extends BaseRappelForm
{
  public function configure()
  {
    unset($this['date_creation'], $this['date_modification']);
    
    $this->widgetSchema['id_agent'] = new sfWidgetFormInputHidden(array(), array(
      'value' => sfContext::getInstance()->getUser()->getLoggedUserId()
    ));
    
    $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden();
    
    $this->widgetSchema['date_rappel'] = new sfWidgetFormDateTime(array(
      'date' => array(
        'format' => '%day%/%month%/%year%'
      ),
      'time' => array(
        'format' => '%hour%:%minute%'
      )
    ));

    $this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('reality');
  }
}
