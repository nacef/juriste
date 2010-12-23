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
	$this->widgetSchema['date_question'] = new sfWidgetFormInputHidden(array(), array(
		'value' => date('Y-m-d H:i:s')
	));
  }
}
