<?php

/**
 * Utilisateur
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Utilisateur extends BaseUtilisateur
{

/*
  public function save(Doctrine_Connection $conn = null) {
    $new = $this->isNew() ? true : false;
    
    $utilisateur = parent::save($conn);
    
    if ($this->getType() == 1 && $new) {
      $dispatch = new Dispatch();
      $dispatch->setIdAgent($this->getIdUtilisateur());
      $dispatch->setQuestions(0);
      $dispatch->save();            
    }    
    
    return $utilisateur;
  }
*/  
  public function __toString() {
    return $this->getLogin();
  }
}
