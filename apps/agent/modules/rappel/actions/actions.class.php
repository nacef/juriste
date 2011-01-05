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
<<<<<<< HEAD
    $rappel->setDateRappel(time());
    $rappelForm = new RappelForm($rappel);
//    unset($rappelForm['cloture']);
=======
    $rappelForm = new RappelForm($rappel);
    
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
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
