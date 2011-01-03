<?php

/**
 * rappel actions.
 *
 * @package    juriste
 * @subpackage rappel
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rappelActions extends sfActions
{
  public function executeForm(sfWebRequest $request)
  {
    $rappel = new Rappel();
    $rappel->setIdQuestion($request->getParameter('id_question'));
    $rappelForm = new RappelForm($rappel);
    
    return $this->renderText($rappelForm);
  }
  
  public function executeIndex(sfWebRequest $request) {
    $this->rappels = RappelTable::getInstance()->createQuery('r')
      ->where('r.id_agent = ?', $this->getUser()->getLoggedUserId())
      ->andWhere('r.cloture = ?', false)
      ->orderBy('r.date_rappel ASC')
      ->execute();
  }
  
}
