<?php

/**
 * Question filter form base class.
 *
 * @package    juriste
 * @subpackage filter
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseQuestionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'            => new sfWidgetFormFilterInput(),
      'prenom'         => new sfWidgetFormFilterInput(),
      'code_postal'    => new sfWidgetFormFilterInput(),
      'pays'           => new sfWidgetFormFilterInput(),
      'telephone'      => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'texte_question' => new sfWidgetFormFilterInput(),
      'date_question'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nom'            => new sfValidatorPass(array('required' => false)),
      'prenom'         => new sfValidatorPass(array('required' => false)),
      'code_postal'    => new sfValidatorPass(array('required' => false)),
      'pays'           => new sfValidatorPass(array('required' => false)),
      'telephone'      => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'texte_question' => new sfValidatorPass(array('required' => false)),
      'date_question'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Question';
  }

  public function getFields()
  {
    return array(
      'id_question'    => 'Number',
      'nom'            => 'Text',
      'prenom'         => 'Text',
      'code_postal'    => 'Text',
      'pays'           => 'Text',
      'telephone'      => 'Text',
      'email'          => 'Text',
      'texte_question' => 'Text',
      'date_question'  => 'Date',
    );
  }
}
