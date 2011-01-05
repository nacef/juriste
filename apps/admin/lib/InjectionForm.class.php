<?php

class InjectionForm extends sfForm {
	public function configure() {
		$this->setWidgets(array(
			'fichier' => new sfWidgetFormInputFile()
		));
		
		$this->setValidators(array(
			'fichier' => new sfValidatorFile()
		));
		
		$this->widgetSchema->addFormFormatter('reality', new RealitySchemaFormatter($this->widgetSchema));
		$this->widgetSchema->setFormFormatterName('reality');
		
		$this->widgetSchema->setNameFormat("injection[%s]");
	}
}