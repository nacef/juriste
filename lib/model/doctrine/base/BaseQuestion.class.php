<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Question', 'doctrine');

/**
 * BaseQuestion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_question
 * @property string $nom
 * @property string $prenom
 * @property string $code_postal
 * @property string $pays
 * @property string $telephone
 * @property string $email
 * @property string $texte_question
 * @property Doctrine_Collection $TraitementAgent
 * @property Doctrine_Collection $Vente
 * @property Doctrine_Collection $Rappel
 * 
 * @method integer             getIdQuestion()      Returns the current record's "id_question" value
 * @method string              getNom()             Returns the current record's "nom" value
 * @method string              getPrenom()          Returns the current record's "prenom" value
 * @method string              getCodePostal()      Returns the current record's "code_postal" value
 * @method string              getPays()            Returns the current record's "pays" value
 * @method string              getTelephone()       Returns the current record's "telephone" value
 * @method string              getEmail()           Returns the current record's "email" value
 * @method string              getTexteQuestion()   Returns the current record's "texte_question" value
 * @method Doctrine_Collection getTraitementAgent() Returns the current record's "TraitementAgent" collection
 * @method Doctrine_Collection getVente()           Returns the current record's "Vente" collection
 * @method Doctrine_Collection getRappel()          Returns the current record's "Rappel" collection
 * @method Question            setIdQuestion()      Sets the current record's "id_question" value
 * @method Question            setNom()             Sets the current record's "nom" value
 * @method Question            setPrenom()          Sets the current record's "prenom" value
 * @method Question            setCodePostal()      Sets the current record's "code_postal" value
 * @method Question            setPays()            Sets the current record's "pays" value
 * @method Question            setTelephone()       Sets the current record's "telephone" value
 * @method Question            setEmail()           Sets the current record's "email" value
 * @method Question            setTexteQuestion()   Sets the current record's "texte_question" value
 * @method Question            setTraitementAgent() Sets the current record's "TraitementAgent" collection
 * @method Question            setVente()           Sets the current record's "Vente" collection
 * @method Question            setRappel()          Sets the current record's "Rappel" collection
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQuestion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('question');
        $this->hasColumn('id_question', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nom', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('prenom', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('code_postal', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('pays', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('telephone', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('email', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('texte_question', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('TraitementAgent', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

        $this->hasMany('Vente', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

        $this->hasMany('Rappel', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'date_question',
              'type' => 'timestamp',
              'format' => 'Y-m-d H:i:s',
             ),
             ));
        $this->actAs($timestampable0);
    }
}