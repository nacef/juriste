<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version15 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->removeColumn('rdv', 'date_rdv');
        $this->addColumn('rdv', 'date_debut_rdv', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
        $this->addColumn('rdv', 'date_fin_rdv', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
    }

    public function down()
    {
        $this->addColumn('rdv', 'date_rdv', 'timestamp', '25', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
        $this->removeColumn('rdv', 'date_debut_rdv');
        $this->removeColumn('rdv', 'date_fin_rdv');
    }
}