<?php

/**
 * TraitementAvocat form base class.
 *
 * @method TraitementAvocat getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTraitementAvocatForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_traitement_avocat' => new sfWidgetFormInputHidden(),
      'commentaire_avocat'   => new sfWidgetFormInputText(),
      'id_qualif_agent'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('QualificationAgent'), 'add_empty' => true)),
      'id_question'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => false)),
      'id_agent'             => new sfWidgetFormInputText(),
      'date_creation'        => new sfWidgetFormDateTime(),
      'date_modification'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_traitement_avocat' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_traitement_avocat')), 'empty_value' => $this->getObject()->get('id_traitement_avocat'), 'required' => false)),
      'commentaire_avocat'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_qualif_agent'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('QualificationAgent'), 'required' => false)),
      'id_question'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'))),
      'id_agent'             => new sfValidatorInteger(),
      'date_creation'        => new sfValidatorDateTime(),
      'date_modification'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('traitement_avocat[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TraitementAvocat';
  }

}
