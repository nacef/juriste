<?php

/**
 * vente actions.
 *
 * @package    juriste
 * @subpackage vente
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class venteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request) {
    $this->ventes = VenteTable::getInstance()->createQuery('v')
      ->execute();
  }
}
