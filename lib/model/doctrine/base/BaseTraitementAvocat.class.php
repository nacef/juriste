<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TraitementAvocat', 'doctrine');

/**
 * BaseTraitementAvocat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_traitement_avocat
 * @property string $commentaire_avocat
 * @property integer $id_qualif_agent
 * @property integer $id_question
 * @property integer $id_agent
 * @property QualificationAgent $QualificationAgent
 * @property Question $Question
 * 
 * @method integer            getIdTraitementAvocat()   Returns the current record's "id_traitement_avocat" value
 * @method string             getCommentaireAvocat()    Returns the current record's "commentaire_avocat" value
 * @method integer            getIdQualifAgent()        Returns the current record's "id_qualif_agent" value
 * @method integer            getIdQuestion()           Returns the current record's "id_question" value
 * @method integer            getIdAgent()              Returns the current record's "id_agent" value
 * @method QualificationAgent getQualificationAgent()   Returns the current record's "QualificationAgent" value
 * @method Question           getQuestion()             Returns the current record's "Question" value
 * @method TraitementAvocat   setIdTraitementAvocat()   Sets the current record's "id_traitement_avocat" value
 * @method TraitementAvocat   setCommentaireAvocat()    Sets the current record's "commentaire_avocat" value
 * @method TraitementAvocat   setIdQualifAgent()        Sets the current record's "id_qualif_agent" value
 * @method TraitementAvocat   setIdQuestion()           Sets the current record's "id_question" value
 * @method TraitementAvocat   setIdAgent()              Sets the current record's "id_agent" value
 * @method TraitementAvocat   setQualificationAgent()   Sets the current record's "QualificationAgent" value
 * @method TraitementAvocat   setQuestion()             Sets the current record's "Question" value
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTraitementAvocat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('traitement_avocat');
        $this->hasColumn('id_traitement_avocat', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('commentaire_avocat', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('id_qualif_agent', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
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
        $this->hasColumn('id_agent', 'integer', 4, array(
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
        $this->hasOne('QualificationAgent', array(
             'local' => 'id_qualif_agent',
             'foreign' => 'id_qualif_agent'));

        $this->hasOne('Question', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

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