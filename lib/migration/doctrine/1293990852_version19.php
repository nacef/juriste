<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version19 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('rappel', array(
             'id_rappel' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'id_agent' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '1',
              'autoincrement' => '',
              'length' => '4',
             ),
             'date_rappel' => 
             array(
              'type' => 'timestamp',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '',
              'autoincrement' => '',
              'length' => '25',
             ),
             'id_question' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '1',
              'autoincrement' => '',
              'length' => '4',
             ),
             'date_creation' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'date_modification' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id_rappel',
             ),
             ));
        $this->removeColumn('traitement_agent', 'rappel');
        $this->removeColumn('traitement_agent', 'date_rappel');
        $this->addColumn('vente', 'date_creation', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('vente', 'date_modification', 'timestamp', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->dropTable('rappel');
        $this->addColumn('traitement_agent', 'rappel', 'boolean', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             'default' => '0',
             ));
        $this->addColumn('traitement_agent', 'date_rappel', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
        $this->removeColumn('vente', 'date_creation');
        $this->removeColumn('vente', 'date_modification');
    }
}