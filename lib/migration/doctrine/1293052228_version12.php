<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version12 extends Doctrine_Migration_Base
{
    public function up()
    {
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
    }

    public function down()
    {
        $this->removeColumn('traitement_agent', 'rappel');
        $this->removeColumn('traitement_agent', 'date_rappel');
    }
}