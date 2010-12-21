<?php

class QuestionDispatcher {

  public static function getNextAgent() {
    $agent = UtilisateurTable::getInstance()->createQuery('a')
      ->where('a.type = 1')
      ->
  }
}
