<?php

/**
 * Rappel form base class.
 *
 * @method Rappel getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRappelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_rappel'         => new sfWidgetFormInputHidden(),
      'id_agent'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'date_rappel'       => new sfWidgetFormDateTime(),
      'id_question'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => false)),
      'date_creation'     => new sfWidgetFormDateTime(),
      'date_modification' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_rappel'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_rappel')), 'empty_value' => $this->getObject()->get('id_rappel'), 'required' => false)),
      'id_agent'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'date_rappel'       => new sfValidatorDateTime(array('required' => false)),
      'id_question'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'))),
      'date_creation'     => new sfValidatorDateTime(),
      'date_modification' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('rappel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rappel';
  }

}
