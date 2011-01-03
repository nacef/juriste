<?php

class Addquestionsitecolumn extends Doctrine_Migration_Base
{
  public function up()
  {
	$this->addColumn('question', 'site', 'string', array('length' => '50'));
  }

  public function down()
  {
	$this->removeColumn('question', 'site');
  }
}
