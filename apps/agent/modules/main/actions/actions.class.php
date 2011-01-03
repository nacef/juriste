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
  }
  
  public function executeDashboard(sfWebRequest $request) {
    $this->questionsCount = $this->getUser()->getQuestionsCount();
    $this->rappelsCount = $this->getUser()->getRappelsCount();
  }
  
}
