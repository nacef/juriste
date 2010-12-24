<?php

class myUser extends sfBasicSecurityUser
{
	public function getLoggedUser() {
		return $this->getAttribute('logged_user');
	}
	
	public function setLoggedUser($user_id) {
		$this->setAttribute('logged_user', $user_id);
	}
}
