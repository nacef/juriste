<?php

/**
 * main actions.
 *
 * @package    juriste
 * @subpackage main
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->questionForm = new QuestionForm();
    if ($request->isMethod('post')) {
      $this->questionForm->bind($request->getParameter('question'));
      if ($this->questionForm->isValid()) {
        
        Doctrine_Manager::connection()->beginTransaction();
        $nextAgent = QuestionDispatcher::getNextAgent()->getIdAgent();
        
        $question = $this->questionForm->save();
        
        $traitAgent = new TraitementAgent();
        $traitAgent->setQuestion($question);
        $traitAgent->setIdAgent($nextAgent);
        $traitAgent->save();
        
        $dispatch = DispatchTable::getInstance()->findOneByIdAgent($nextAgent);
        $dispatch->setQuestions($dispatch->getQuestions() + 1);
        $dispatch->save();
        
        Doctrine_Manager::connection()->commit();
        
        $this->redirect('main/success');
      }
    }
  }
  
  public function executeSuccess(sfWebRequest $request) {
  }
  
}
