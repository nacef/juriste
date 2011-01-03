<?php

/**
 * vente actions.
 *
 * @package    juriste
 * @subpackage vente
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class venteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Ventes = Doctrine_Core::getTable('Vente')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $question_id = $request->getParameter('question');
    $this->form = new VenteForm();
    $this->form->setQuestionId($question_id);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VenteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($Vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object Vente does not exist (%s).', $request->getParameter('id_vente')));
    $this->form = new VenteForm($Vente);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($Vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object Vente does not exist (%s).', $request->getParameter('id_vente')));
    $this->form = new VenteForm($Vente);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($Vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object Vente does not exist (%s).', $request->getParameter('id_vente')));
    $Vente->delete();

    $this->redirect('vente/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Vente = $form->save();

      $this->redirect('vente/edit?id_vente='.$Vente->getIdVente());
    }
  }
  
  public function executeForm(sfWebRequest $request) {
    $vente = new Vente();
    $vente->setIdAgent($this->getUser()->getLoggedUserId());
    $vente->setIdQuestion($request->getParameter('id_question'));
    $venteForm = new VenteForm($vente);
    return $this->renderText($venteForm);
  }

  public function executeFormTest(sfWebRequest $request) {
    $vente = new Vente();
    $vente->setIdAgent($this->getUser()->getLoggedUserId());
    $vente->setQuestion(QuestionTable::getInstance()->find(20));
    $this->venteForm = new VenteForm($vente);
    if ($request->isMethod('post')) {
      $this->venteForm->bind($request->getParameter('vente'));
      if ($this->venteForm->isValid()) {
        $this->venteForm->save();
      }
    }
  }

}
