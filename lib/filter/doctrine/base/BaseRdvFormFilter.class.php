<?php

/**
 * Rdv filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRdvFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'date_rdv'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_avocat'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'id_vente'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vente'), 'add_empty' => true)),
      'commentaire_avocat' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'date_rdv'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'id_avocat'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
      'id_vente'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vente'), 'column' => 'id_vente')),
      'commentaire_avocat' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rdv_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rdv';
  }

  public function getFields()
  {
    return array(
      'id_rdv'             => 'Number',
      'date_rdv'           => 'Date',
      'id_avocat'          => 'ForeignKey',
      'id_vente'           => 'ForeignKey',
      'commentaire_avocat' => 'Text',
    );
  }
}
