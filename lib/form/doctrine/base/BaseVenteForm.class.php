<?php

/**
 * Vente form base class.
 *
 * @method Vente getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_vente'      => new sfWidgetFormInputHidden(),
      'code_client'       => new sfWidgetFormInputText(),
      'montant'       => new sfWidgetFormInputText(),
      'numero_cc'     => new sfWidgetFormInputText(),
      'cvv2'          => new sfWidgetFormInputText(),
      'date_validite'     => new sfWidgetFormInputText(),
      'nom'           => new sfWidgetFormInputText(),
      'prenom'        => new sfWidgetFormInputText(),
      'id_question'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => false)),
      'id_agent'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'date_creation'     => new sfWidgetFormDateTime(),
      'date_modification' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_vente'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_vente')), 'empty_value' => $this->getObject()->get('id_vente'), 'required' => false)),
      'code_client'       => new sfValidatorString(array('max_length' => 45)),
      'montant'           => new sfValidatorPass(),
      'numero_cc'         => new sfValidatorString(array('max_length' => 16)),
      'cvv2'              => new sfValidatorString(array('max_length' => 3)),
      'date_validite'     => new sfValidatorPass(array('required' => false)),
      'nom'               => new sfValidatorString(array('max_length' => 45)),
      'prenom'            => new sfValidatorString(array('max_length' => 45)),
      'id_question'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'))),
      'id_agent'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'date_creation'     => new sfValidatorDateTime(),
      'date_modification' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('vente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vente';
  }

}
