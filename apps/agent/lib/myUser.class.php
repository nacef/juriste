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

}
