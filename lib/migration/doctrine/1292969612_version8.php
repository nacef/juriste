<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version8 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('dispatch', array(
             'id_dispatch' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'questions' => 
             array(
              'type' => 'integer',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '',
              'autoincrement' => '',
              'length' => '4',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id_dispatch',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('dispatch');
    }
}