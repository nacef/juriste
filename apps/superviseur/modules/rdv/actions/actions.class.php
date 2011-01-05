<?php

/**
 * rdv actions.
 *
 * @package    juriste
 * @subpackage rdv
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rdvActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rdvs = Doctrine_Core::getTable('Rdv')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RdvForm();
	unset($this->form['date_fin_rdv'], $this->form['commentaire_avocat']);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RdvForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($rdv = Doctrine_Core::getTable('Rdv')->find(array($request->getParameter('id_rdv'))), sprintf('Object rdv does not exist (%s).', $request->getParameter('id_rdv')));
    $this->form = new RdvForm($rdv);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($rdv = Doctrine_Core::getTable('Rdv')->find(array($request->getParameter('id_rdv'))), sprintf('Object rdv does not exist (%s).', $request->getParameter('id_rdv')));
    $this->form = new RdvForm($rdv);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($rdv = Doctrine_Core::getTable('Rdv')->find(array($request->getParameter('id_rdv'))), sprintf('Object rdv does not exist (%s).', $request->getParameter('id_rdv')));
    $rdv->delete();

    $this->redirect('rdv/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $rdv = $form->save();

      $this->redirect('rdv/edit?id_rdv='.$rdv->getIdRdv());
    }
  }
}
