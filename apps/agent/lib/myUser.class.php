<?php

class myUser extends sfBasicSecurityUser
{
	public function getLoggedUser() {
		return $this->getAttribute('logged_user');
	}
	
	public function setLoggedUser($user_name) {
		$this->setAttribute('logged_user', $user_name);
	}
	
	public function getLoggedUserId() {
		return $this->getAttribute('logged_user_id');
	}
	
	public function setLoggedUserId($user_id) {
		$this->setAttribute('logged_user_id', $user_id);
	}

  public function getQuestionsCount() {
    return TraitementAgentTable::getInstance()->createQuery('t')
      ->select('COUNT(t.id_traitement_agent)')
      ->where('t.id_qualif_agent is NULL')
      ->andWhere('t.id_agent = ?', $this->getLoggedUserId())
      ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
  }
  
  public function getRappelsCount() {
    return RappelTable::getInstance()->createQuery('r')
      ->select('COUNT(r.id_rappel)')
      ->where('r.id_agent = ?', $this->getLoggedUserId())
      ->andWhere('r.cloture = ?', false)
      ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
  }
}
