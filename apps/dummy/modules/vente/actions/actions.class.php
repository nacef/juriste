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
    $this->ventes = Doctrine_Core::getTable('Vente')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $vente = new Vente();
    $vente->setIdQuestion(1);
    $this->form = new VenteForm($vente);
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
    $this->forward404Unless($vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object vente does not exist (%s).', $request->getParameter('id_vente')));
    $this->form = new VenteForm($vente);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object vente does not exist (%s).', $request->getParameter('id_vente')));
    $this->form = new VenteForm($vente);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vente = Doctrine_Core::getTable('Vente')->find(array($request->getParameter('id_vente'))), sprintf('Object vente does not exist (%s).', $request->getParameter('id_vente')));
    $vente->delete();

    $this->redirect('vente/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vente = $form->save();

      $this->redirect('vente/edit?id_vente='.$vente->getIdVente());
    }
  }
}
