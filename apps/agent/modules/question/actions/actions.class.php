<?php

/**
 * question actions.
 *
 * @package    juriste
 * @subpackage question
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class questionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('question','next');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TraitementAgentForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TraitementAgentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($this->Question = Doctrine_Core::getTable('TraitementAgent')->find(array($request->getParameter('question_id'))), sprintf('Object Question does not exist (%s).', $request->getParameter('question_id')));
    $this->form = new TraitementAgentForm($this->Question);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($this->Question = Doctrine_Core::getTable('TraitementAgent')->find(array($request->getParameter('question_id'))), sprintf('Object Question does not exist (%s).', $request->getParameter('question_id')));
    $this->form = new TraitementAgentForm($this->Question);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Question = Doctrine_Core::getTable('TraitementAgent')->find(array($request->getParameter('id_traitement_agent'))), sprintf('Object Question does not exist (%s).', $request->getParameter('id_traitement_agent')));
    $Question->delete();

    $this->redirect('question/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      Doctrine_Manager::connection()->beginTransaction();
      
      $Question = $form->save();

      if ($Question->getIdQualifAgent() == 3) {
        $venteForm = new VenteForm();
        $venteForm->bind($request->getParameter('vente'));
        if ($venteForm->isValid()) {
          $vente = $venteForm->save();
          Doctrine_Manager::connection()->commit();
        } else {
          Doctrine_Manager::connection()->rollback();
        }
      } else if ($Question->getIdQualifAgent() == 1) {
        $rappelForm = new RappelForm();
        $rappelForm->bind($request->getParameter('rappel'));
        if ($rappelForm->isValid()) {
          $rappel = $rappelForm->save();
          Doctrine_Manager::connection()->commit();
        } else {
          Doctrine_Manager::connection()->rollback();
        }
      } else {
        Doctrine_Manager::connection()->commit();
      }
      $this->redirect('question/next');      
    }
  }
  
  public function executeNext(sfWebRequest $request) {
	  $nextQuestion = TraitementAgentTable::getInstance()->createQuery('t')
		  ->where('t.id_qualif_agent is NULL')
		  ->andWhere('t.id_agent = ?', $this->getUser()->getLoggedUserId())
		  ->orderBy('t.date_creation ASC')
		  ->fetchOne();
		
		if ($nextQuestion) {
		  $this->questionForm = new QuestionForm($nextQuestion->getQuestion());
		  $this->traitementAgentForm = new TraitementAgentForm($nextQuestion);
/*		  return $this->renderPartial('agentQuestion', array(
		    'questionForm' => $this->questionForm,
		    'traitementAgentForm' => $this->traitementAgentForm
		  ));*/
		}
  	else
  	  $this->redirect('main/index');
  }
  
  public function executeNextQuestionPartial(sfWebRequest $request) {
	  $nextQuestion = TraitementAgentTable::getInstance()->createQuery('t')
		  ->where('t.id_qualif_agent is NULL')
		  ->andWhere('t.id_agent = ?', $this->getUser()->getLoggedUserId())
		  ->orderBy('t.date_creation ASC')
		  ->fetchOne();
		
		if ($nextQuestion) {
		  $this->questionForm = new QuestionForm($nextQuestion->getQuestion());
		  $this->traitementAgentForm = new TraitementAgentForm($nextQuestion);
		  return $this->renderPartial('agentQuestion', array(
		    'questionForm' => $this->questionForm,
		    'traitementAgentForm' => $this->traitementAgentForm
		  ));
		}
  }
  
}
