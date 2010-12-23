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
    $this->Questions = Doctrine_Core::getTable('TraitementAgent')
      ->createQuery('a')
      ->execute();
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
    $this->forward404Unless($Question = Doctrine_Core::getTable('TraitementAgent')->find(array($request->getParameter('id_traitement_agent'))), sprintf('Object Question does not exist (%s).', $request->getParameter('id_traitement_agent')));
    $this->form = new TraitementAgentForm($Question);

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
      $Question = $form->save();

      $this->redirect('question/edit?id_traitement_agent='.$Question->getIdTraitementAgent());
    }
  }
}
