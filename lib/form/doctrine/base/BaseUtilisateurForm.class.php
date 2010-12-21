<?php

/**
 * Utilisateur form base class.
 *
 * @method Utilisateur getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_utilisateur' => new sfWidgetFormInputHidden(),
      'nom'            => new sfWidgetFormInputText(),
      'prenom'         => new sfWidgetFormInputText(),
      'login'          => new sfWidgetFormInputText(),
      'password'       => new sfWidgetFormInputText(),
      'type'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_utilisateur' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_utilisateur')), 'empty_value' => $this->getObject()->get('id_utilisateur'), 'required' => false)),
      'nom'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'prenom'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'login'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'password'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'type'           => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('utilisateur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Utilisateur';
  }

}
