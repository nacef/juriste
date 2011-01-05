<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Rappel', 'doctrine');

/**
 * BaseRappel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_rappel
 * @property integer $id_agent
 * @property timestamp $date_rappel
 * @property boolean $cloture
 * @property integer $id_question
 * @property Question $Question
 * @property Utilisateur $Utilisateur
 * 
 * @method integer     getIdRappel()    Returns the current record's "id_rappel" value
 * @method integer     getIdAgent()     Returns the current record's "id_agent" value
 * @method timestamp   getDateRappel()  Returns the current record's "date_rappel" value
 * @method boolean     getCloture()     Returns the current record's "cloture" value
 * @method integer     getIdQuestion()  Returns the current record's "id_question" value
 * @method Question    getQuestion()    Returns the current record's "Question" value
 * @method Utilisateur getUtilisateur() Returns the current record's "Utilisateur" value
 * @method Rappel      setIdRappel()    Sets the current record's "id_rappel" value
 * @method Rappel      setIdAgent()     Sets the current record's "id_agent" value
 * @method Rappel      setDateRappel()  Sets the current record's "date_rappel" value
 * @method Rappel      setCloture()     Sets the current record's "cloture" value
 * @method Rappel      setIdQuestion()  Sets the current record's "id_question" value
 * @method Rappel      setQuestion()    Sets the current record's "Question" value
 * @method Rappel      setUtilisateur() Sets the current record's "Utilisateur" value
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRappel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rappel');
        $this->hasColumn('id_rappel', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_agent', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('date_rappel', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('cloture', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
        $this->hasColumn('id_question', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Question', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

        $this->hasOne('Utilisateur', array(
             'local' => 'id_agent',
             'foreign' => 'id_utilisateur'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'date_creation',
              'type' => 'timestamp',
              'format' => 'Y-m-d H:i:s',
             ),
             'updated' => 
             array(
              'name' => 'date_modification',
              'type' => 'timestamp',
              'format' => 'Y-m-d H:i:s',
             ),
             ));
        $this->actAs($timestampable0);
    }
}