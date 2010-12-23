<?php

/**
 * Dispatch form base class.
 *
 * @method Dispatch getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDispatchForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_dispatch' => new sfWidgetFormInputHidden(),
      'questions'   => new sfWidgetFormInputText(),
      'id_agent'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_dispatch' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_dispatch')), 'empty_value' => $this->getObject()->get('id_dispatch'), 'required' => false)),
      'questions'   => new sfValidatorInteger(array('required' => false)),
      'id_agent'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dispatch[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dispatch';
  }

}
