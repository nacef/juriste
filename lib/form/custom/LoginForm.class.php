<?php

class LoginForm extends sfForm {

  public function configure() {
    $this->setWidgets(array(
      'login' => new sfWidgetFormInputText(array(), array(
        'class' => 'text large required'
      )),
      'password' => new sfWidgetFormInputPassword(array(), array(
        'class' => 'text large required'
      ))
    ));
  }
}
