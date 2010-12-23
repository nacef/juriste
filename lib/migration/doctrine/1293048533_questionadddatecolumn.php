<?php

class Questionadddatecolumn extends Doctrine_Migration_Base
{
  public function up()
  {
    $this->addColumn('question', 'date_question', 'timestamp', '25', array(
         'fixed' => '0',
         'unsigned' => '',
         'primary' => '',
         'notnull' => '',
         'autoincrement' => '',
         ));    
  }

  public function down()
  {
    $this->removeColumn('question', 'date_question');
  }
}
