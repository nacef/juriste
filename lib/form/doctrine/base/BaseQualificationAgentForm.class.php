<?php

/**
 * QualificationAgent form base class.
 *
 * @method QualificationAgent getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQualificationAgentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_qualif_agent'     => new sfWidgetFormInputHidden(),
      'texte_qualification' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_qualif_agent'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_qualif_agent')), 'empty_value' => $this->getObject()->get('id_qualif_agent'), 'required' => false)),
      'texte_qualification' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('qualification_agent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QualificationAgent';
  }

}
