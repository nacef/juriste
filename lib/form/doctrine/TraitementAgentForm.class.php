<?php

/**
 * TraitementAgent form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TraitementAgentForm extends BaseTraitementAgentForm
{
  public function configure()
  {
    unset($this['date_creation'], $this['date_modification']);
    
    $this->widgetSchema['commentaire_agent'] = new sfWidgetFormTextarea();
    $this->widgetSchema['id_agent'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['id_question'] = new sfWidgetFormInputHidden();
  }
}
