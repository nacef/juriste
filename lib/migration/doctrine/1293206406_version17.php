<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version17 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('traitement_agent', 'date_creation', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('traitement_agent', 'date_modification', 'timestamp', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('traitement_agent', 'date_creation');
        $this->removeColumn('traitement_agent', 'date_modification');
    }
}