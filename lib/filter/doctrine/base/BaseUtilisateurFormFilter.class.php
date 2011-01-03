<?php

/**
 * Utilisateur filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'            => new sfWidgetFormFilterInput(),
      'prenom'         => new sfWidgetFormFilterInput(),
      'login'          => new sfWidgetFormFilterInput(),
      'password'       => new sfWidgetFormFilterInput(),
      'type'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nom'            => new sfValidatorPass(array('required' => false)),
      'prenom'         => new sfValidatorPass(array('required' => false)),
      'login'          => new sfValidatorPass(array('required' => false)),
      'password'       => new sfValidatorPass(array('required' => false)),
      'type'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('utilisateur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utilisateur';
  }

  public function getFields()
  {
    return array(
      'id_utilisateur' => 'Number',
      'nom'            => 'Text',
      'prenom'         => 'Text',
      'login'          => 'Text',
      'password'       => 'Text',
      'type'           => 'Number',
    );
  }
}
