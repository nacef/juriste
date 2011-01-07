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
    $rappel->setDateRappel(time());
    $rappelForm = new RappelForm($rappel);
//    unset($rappelForm['cloture']);
    return $this->renderText($rappelForm);
  }
  
  public function executeIndex(sfWebRequest $request) {
    $this->rappels = RappelTable::getInstance()->createQuery('r')
      ->where('r.id_agent = ?', $this->getUser()->getLoggedUserId())
      ->andWhere('r.cloture = ?', false)
      ->orderBy('r.date_rappel ASC')
      ->execute();
  }
  
  public function executeRappeler(sfWebRequest $request) {
    $this->forward404Unless($rappel = Doctrine_Core::getTable('Rappel')->find(array($request->getParameter('id_rappel'))), sprintf('Ce rappel n\'existe pas (%s).', $request->getParameter('id_rappel')));
    
    $traitement = new TraitementAgent();
    $traitement->setIdQuestion($rappel->getIdQuestion());
    $traitement->setIdAgent($rappel->getIdAgent());
    $traitement->setPriorite(1);
    $traitement->save();
    
    $rappel->setCloture(true);
    $rappel->save();
    
    $this->redirect('question/next');
  }
  
}
