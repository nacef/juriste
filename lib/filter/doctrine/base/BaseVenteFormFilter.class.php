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
<<<<<<< HEAD
      'code_client'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
=======
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
      'montant'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_cc'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cvv2'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_validite'     => new sfWidgetFormFilterInput(),
      'nom'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prenom'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
<<<<<<< HEAD
      'id_question'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'id_agent'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
=======
      'id_question'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'id_agent'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
      'date_creation'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'date_modification' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
<<<<<<< HEAD
      'code_client'       => new sfValidatorPass(array('required' => false)),
      'montant'       => new sfValidatorPass(array('required' => false)),
      'numero_cc'     => new sfValidatorPass(array('required' => false)),
      'cvv2'          => new sfValidatorPass(array('required' => false)),
      'date_validite'     => new sfValidatorPass(array('required' => false)),
      'nom'           => new sfValidatorPass(array('required' => false)),
      'prenom'        => new sfValidatorPass(array('required' => false)),
      'id_question'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Question'), 'column' => 'id_question')),
      'id_agent'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
=======
      'montant'           => new sfValidatorPass(array('required' => false)),
      'numero_cc'         => new sfValidatorPass(array('required' => false)),
      'cvv2'              => new sfValidatorPass(array('required' => false)),
      'date_validite'     => new sfValidatorPass(array('required' => false)),
      'nom'               => new sfValidatorPass(array('required' => false)),
      'prenom'            => new sfValidatorPass(array('required' => false)),
      'id_question'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Question'), 'column' => 'id_question')),
      'id_agent'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
      'date_creation'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'date_modification' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
<<<<<<< HEAD
      'id_vente'      => 'Number',
      'code_client'       => 'Text',
      'montant'       => 'Text',
      'numero_cc'     => 'Text',
      'cvv2'          => 'Text',
      'date_validite'     => 'Text',
      'nom'           => 'Text',
      'prenom'        => 'Text',
      'id_question'   => 'ForeignKey',
      'id_agent'      => 'ForeignKey',
=======
      'id_vente'          => 'Number',
      'montant'           => 'Text',
      'numero_cc'         => 'Text',
      'cvv2'              => 'Text',
      'date_validite'     => 'Text',
      'nom'               => 'Text',
      'prenom'            => 'Text',
      'id_question'       => 'ForeignKey',
      'id_agent'          => 'ForeignKey',
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
      'date_creation'     => 'Date',
      'date_modification' => 'Date',
    );
  }
}
