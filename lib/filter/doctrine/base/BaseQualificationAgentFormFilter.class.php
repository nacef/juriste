<?php

/**
 * QualificationAgent filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQualificationAgentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'texte_qualification' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'texte_qualification' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('qualification_agent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'QualificationAgent';
  }

  public function getFields()
  {
    return array(
      'id_qualif_agent'     => 'Number',
      'texte_qualification' => 'Text',
    );
  }
}
