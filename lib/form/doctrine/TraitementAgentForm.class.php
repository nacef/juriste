<?php

/**
 * TraitementAgent form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TraitementAgentForm extends BaseTraitementAgentForm
{
  public function configure()
  {
    unset($this['date_creation'], $this['date_modification']);
    
    $this->widgetSchema['commentaire_agent'] = new sfWidgetFormTextarea();
    $this->widgetSchema['id_agent'] = new sfWidgetFormInputHidden(array(), array(
      'value' => sfContext::getInstance()->getUser()->getLoggedUserId()
    ));
    $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden();
    
    $this->widgetSchema->setLabel('id_qualif_agent', 'Qualif Agent');

    $this->widgetSchema->setLabel('id_qualif_agent', 'Qualif Agent');

    $this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('reality');    
  }
}
