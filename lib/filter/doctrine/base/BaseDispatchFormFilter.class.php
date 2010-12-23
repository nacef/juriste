<?php

/**
 * Dispatch filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDispatchFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'questions'   => new sfWidgetFormFilterInput(),
      'id_agent'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'questions'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_agent'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Utilisateur'), 'column' => 'id_utilisateur')),
    ));

    $this->widgetSchema->setNameFormat('dispatch_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dispatch';
  }

  public function getFields()
  {
    return array(
      'id_dispatch' => 'Number',
      'questions'   => 'Number',
      'id_agent'    => 'ForeignKey',
    );
  }
}
