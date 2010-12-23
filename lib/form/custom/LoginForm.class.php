<?php

class LoginForm extends sfForm {

  public function configure() {
    $this->setWidgets(array(
      'login' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword()
    ));
  }
}
