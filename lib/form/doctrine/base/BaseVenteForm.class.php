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
      'montant'       => new sfWidgetFormInputText(),
      'numero_cc'     => new sfWidgetFormInputText(),
      'cvv2'          => new sfWidgetFormInputText(),
      'date_validite' => new sfWidgetFormInputText(),
      'nom'           => new sfWidgetFormInputText(),
      'prenom'        => new sfWidgetFormInputText(),
      'id_question'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => false)),
      'id_agent'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_vente'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_vente')), 'empty_value' => $this->getObject()->get('id_vente'), 'required' => false)),
      'montant'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero_cc'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cvv2'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'date_validite' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nom'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'prenom'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_question'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Question'))),
      'id_agent'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
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
