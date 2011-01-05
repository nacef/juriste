<?php

/**
 * login actions.
 *
 * @package    juriste
 * @subpackage login
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
  public function executeLogin(sfWebRequest $request)
  {
	$this->form = new LoginForm();
	if ($request->isMethod('post')) {
		$login = $request->getParameter('login');
		$password = $request->getParameter('password');
		$superviseur = UtilisateurTable::getInstance()->findOneByLoginAndPasswordAndType($login, $password, 3);
		if ($superviseur) {
			$this->getUser()->setAuthenticated(true);
			$this->getUser()->setLoggedUserId($superviseur->getIdUtilisateur());
			$this->getUser()->setLoggedUser($superviseur->getPrenom() . ' ' . $superviseur->getNom());
			$this->redirect('@homepage');
		}
	}
  }
  
  public function executeLogout(sfWebRequest $request) {
	$this->getUser()->setAuthenticated(false);
	$this->redirect('@homepage');
  }
}
