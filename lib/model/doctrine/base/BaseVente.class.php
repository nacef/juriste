<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Vente', 'doctrine');

/**
 * BaseVente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_vente
 * @property string $montant
 * @property string $numero_cc
 * @property string $cvv2
 * @property string $date_validite
 * @property string $nom
 * @property string $prenom
 * @property integer $id_question
 * @property integer $id_agent
 * @property Question $Question
 * @property Utilisateur $Utilisateur
 * @property Doctrine_Collection $Rdv
 * 
 * @method integer             getIdVente()       Returns the current record's "id_vente" value
 * @method string              getMontant()       Returns the current record's "montant" value
 * @method string              getNumeroCc()      Returns the current record's "numero_cc" value
 * @method string              getCvv2()          Returns the current record's "cvv2" value
 * @method string              getDateValidite()  Returns the current record's "date_validite" value
 * @method string              getNom()           Returns the current record's "nom" value
 * @method string              getPrenom()        Returns the current record's "prenom" value
 * @method integer             getIdQuestion()    Returns the current record's "id_question" value
 * @method integer             getIdAgent()       Returns the current record's "id_agent" value
 * @method Question            getQuestion()      Returns the current record's "Question" value
 * @method Utilisateur         getUtilisateur()   Returns the current record's "Utilisateur" value
 * @method Doctrine_Collection getRdv()           Returns the current record's "Rdv" collection
 * @method Vente               setIdVente()       Sets the current record's "id_vente" value
 * @method Vente               setMontant()       Sets the current record's "montant" value
 * @method Vente               setNumeroCc()      Sets the current record's "numero_cc" value
 * @method Vente               setCvv2()          Sets the current record's "cvv2" value
 * @method Vente               setDateValidite()  Sets the current record's "date_validite" value
 * @method Vente               setNom()           Sets the current record's "nom" value
 * @method Vente               setPrenom()        Sets the current record's "prenom" value
 * @method Vente               setIdQuestion()    Sets the current record's "id_question" value
 * @method Vente               setIdAgent()       Sets the current record's "id_agent" value
 * @method Vente               setQuestion()      Sets the current record's "Question" value
 * @method Vente               setUtilisateur()   Sets the current record's "Utilisateur" value
 * @method Vente               setRdv()           Sets the current record's "Rdv" collection
 * 
 * @package    juriste
 * @subpackage model
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vente');
        $this->hasColumn('id_vente', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('montant', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('numero_cc', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('cvv2', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('date_validite', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('nom', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
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
        $this->hasOne('Question', array(
             'local' => 'id_question',
             'foreign' => 'id_question'));

        $this->hasOne('Utilisateur', array(
             'local' => 'id_agent',
             'foreign' => 'id_utilisateur'));

        $this->hasMany('Rdv', array(
             'local' => 'id_vente',
             'foreign' => 'id_vente'));
    }
}