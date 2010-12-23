<?php

/**
 * TraitementAgent filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTraitementAgentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'commentaire_agent'   => new sfWidgetFormFilterInput(),
      'id_qualif_agent'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('QualificationAgent'), 'add_empty' => true)),
      'id_question'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Question'), 'add_empty' => true)),
      'id_agent'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
      'rappel'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'date_rappel'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'commentaire_agent'   => new sfValidatorPass(array('required' => false)),
      'id_qualif_agent'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('QualificationAgent'), 'column' => 'id_qualif_agent')),
      'id_question'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Question'), 'column' => 'id_question')),
      'id_agent'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
      'rappel'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'date_rappel'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('traitement_agent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TraitementAgent';
  }

  public function getFields()
  {
    return array(
      'id_traitement_agent' => 'Number',
      'commentaire_agent'   => 'Text',
      'id_qualif_agent'     => 'ForeignKey',
      'id_question'         => 'ForeignKey',
      'id_agent'            => 'ForeignKey',
      'rappel'              => 'Boolean',
      'date_rappel'         => 'Date',
    );
  }
}
