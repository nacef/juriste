<?php

class QuestionDispatcher {

  public static function getNextAgent() {
    $agent = DispatchTable::getInstance()->createQuery('d')
      ->orderBy('d.questions ASC')
      ->fetchOne();
      
    return $agent;
  }
}
