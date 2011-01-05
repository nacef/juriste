<?php

/**
 * Rdv form.
 *
 * @package    juriste
 * @subpackage form
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RdvForm extends BaseRdvForm
{
  public function configure()
  {
	$this->widgetSchema['id_vente'] = new sfWidgetFormInputHidden();
	
	$this->widgetSchema['id_avocat'] = new sfWidgetFormDoctrineChoice(array(
		'model' => 'Utilisateur',
		'add_empty' => true,
		'table_method' => 'getAvocats'
	));
	
    $this->widgetSchema['date_debut_rdv'] = new sfWidgetFormDateTime(array(
      'date' => array(
        'format' => '%day%/%month%/%year%'
      ),
      'time' => array(
        'format' => '%hour%:%minute%'
      )
    ));
	
	$this->widgetSchema->setLabels(array(
		'date_debut_rdv' => 'Date RDV',
		'id_avocat' => 'Avocat'
	));
	
    $this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
    $this->widgetSchema->setFormFormatterName('reality');    
  }
}
