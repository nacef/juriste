<?php

/**
 * TraitementAgent form base class.
 *
 * @method TraitementAgent getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTraitementAgentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_traitement_agent' => new sfWidgetFormInputHidden(),
      'commentaire_agent'   => new sfWidgetFormInputText(),
      'id_qualif_agent'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('QualificationAgent'), 'add_empty' => true)),
      'id_question'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => false)),
      'id_agent'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'rappel'              => new sfWidgetFormInputCheckbox(),
      'date_rappel'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_traitement_agent' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_traitement_agent')), 'empty_value' => $this->getObject()->get('id_traitement_agent'), 'required' => false)),
      'commentaire_agent'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_qualif_agent'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('QualificationAgent'), 'required' => false)),
      'id_question'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'))),
      'id_agent'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'rappel'              => new sfValidatorBoolean(array('required' => false)),
      'date_rappel'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('traitement_agent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TraitementAgent';
  }

}
