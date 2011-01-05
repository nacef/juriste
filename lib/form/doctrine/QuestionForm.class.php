<?php

/**
 * Question form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class QuestionForm extends BaseQuestionForm
{
  public function configure()
  {
    unset($this['date_question'], $this['updated_at']);
    
    $this->widgetSchema->moveField('texte_question', sfWidgetFormSchema::BEFORE, 'nom');
    
    $this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('reality');
  }
}
