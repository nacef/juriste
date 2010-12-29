<?php

/**
 * utilisateur actions.
 *
 * @package    juriste
 * @subpackage utilisateur
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class utilisateurActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->utilisateurs = Doctrine_Core::getTable('Utilisateur')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UtilisateurForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UtilisateurForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($utilisateur = Doctrine_Core::getTable('Utilisateur')->find(array($request->getParameter('id_utilisateur'))), sprintf('Object utilisateur does not exist (%s).', $request->getParameter('id_utilisateur')));
    $this->form = new UtilisateurForm($utilisateur);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($utilisateur = Doctrine_Core::getTable('Utilisateur')->find(array($request->getParameter('id_utilisateur'))), sprintf('Object utilisateur does not exist (%s).', $request->getParameter('id_utilisateur')));
    $this->form = new UtilisateurForm($utilisateur);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($utilisateur = Doctrine_Core::getTable('Utilisateur')->find(array($request->getParameter('id_utilisateur'))), sprintf('Object utilisateur does not exist (%s).', $request->getParameter('id_utilisateur')));
    $utilisateur->delete();

    $this->redirect('utilisateur/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $utilisateur = $form->save();

      $this->redirect('utilisateur/edit?id_utilisateur='.$utilisateur->getIdUtilisateur());
    }
  }
}
