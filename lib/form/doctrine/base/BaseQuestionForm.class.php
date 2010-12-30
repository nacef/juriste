<?php

/**
 * Question form base class.
 *
 * @method Question getObject() Returns the current form's model object
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseQuestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_question'    => new sfWidgetFormInputHidden(),
      'nom'            => new sfWidgetFormInputText(),
      'prenom'         => new sfWidgetFormInputText(),
      'code_postal'    => new sfWidgetFormInputText(),
      'pays'           => new sfWidgetFormInputText(),
      'telephone'      => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'texte_question' => new sfWidgetFormTextarea(),
      'date_question'  => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_question'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_question')), 'empty_value' => $this->getObject()->get('id_question'), 'required' => false)),
      'nom'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'prenom'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'code_postal'    => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'pays'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telephone'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'texte_question' => new sfValidatorString(array('required' => false)),
      'date_question'  => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }

}
