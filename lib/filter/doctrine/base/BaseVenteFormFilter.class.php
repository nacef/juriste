<?php

/**
 * Vente filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'montant'       => new sfWidgetFormFilterInput(),
      'numero_cc'     => new sfWidgetFormFilterInput(),
      'cvv2'          => new sfWidgetFormFilterInput(),
      'date_validite' => new sfWidgetFormFilterInput(),
      'nom'           => new sfWidgetFormFilterInput(),
      'prenom'        => new sfWidgetFormFilterInput(),
      'id_question'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'id_agent'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'montant'       => new sfValidatorPass(array('required' => false)),
      'numero_cc'     => new sfValidatorPass(array('required' => false)),
      'cvv2'          => new sfValidatorPass(array('required' => false)),
      'date_validite' => new sfValidatorPass(array('required' => false)),
      'nom'           => new sfValidatorPass(array('required' => false)),
      'prenom'        => new sfValidatorPass(array('required' => false)),
      'id_question'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Question'), 'column' => 'id_question')),
      'id_agent'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
    ));

    $this->widgetSchema->setNameFormat('vente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vente';
  }

  public function getFields()
  {
    return array(
      'id_vente'      => 'Number',
      'montant'       => 'Text',
      'numero_cc'     => 'Text',
      'cvv2'          => 'Text',
      'date_validite' => 'Text',
      'nom'           => 'Text',
      'prenom'        => 'Text',
      'id_question'   => 'ForeignKey',
      'id_agent'      => 'ForeignKey',
    );
  }
}
