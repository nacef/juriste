<?php

/**
 * Rdv form base class.
 *
 * @method Rdv getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRdvForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_rdv'             => new sfWidgetFormInputHidden(),
      'date_rdv'           => new sfWidgetFormDateTime(),
      'id_avocat'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'), 'add_empty' => false)),
      'id_vente'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vente'), 'add_empty' => false)),
      'commentaire_avocat' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_rdv'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_rdv')), 'empty_value' => $this->getObject()->get('id_rdv'), 'required' => false)),
      'date_rdv'           => new sfValidatorDateTime(array('required' => false)),
      'id_avocat'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Utilisateur'))),
      'id_vente'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Vente'))),
      'commentaire_avocat' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rdv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rdv';
  }

}
