<?php

/**
 * Question
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Question extends BaseQuestion
{

  public function save(Doctrine_Connection $conn = null) {
    $new = $this->isNew() ? true : false;
    
    $question = parent::save($conn);
    
    if ($new) {
      $traitement = new TraitementAgent();
      $traitement->setQuestion($this);
      $traitement->setIdAgent(QuestionDispatcher::getNextAgent()->getIdAgent());
      $traitement->save();

      $dispatch = DispatchTable::getInstance()->findOneByIdAgent($traitement->getIdAgent());
      $dispatch->setQuestions($dispatch->getQuestions() + 1);
      $dispatch->save();
    }    
    
    return $question;
  }

  public function __toString() {
    return $this->getIdQuestion();
  }

}
