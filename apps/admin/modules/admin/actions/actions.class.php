<?php

/**
 * admin actions.
 *
 * @package    juriste
 * @subpackage admin
 * @author     Nacef LABIDI <nacef.labidi@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeInjection(sfWebRequest $request)
  {
	$this->form = new InjectionForm();
    if ($request->isMethod('post'))
    {
		$this->form->bind($request->getParameter('injection'), $request->getFiles('injection'));
		if ($this->form->isValid())
		{
		  $file = $this->form->getValue('fichier');
		  $file->save(sfConfig::get('sf_upload_dir').'/injection.csv');
		  
			if (($handle = fopen(sfConfig::get('sf_upload_dir').'/injection.csv', "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
					if ($data[9] != '' || $data[8] != '') {
						$question = new Question();
						$question->setNom($data[4]);
						$question->setPrenom($data[5]);
						$question->setCodePostal($data[6]);
						$question->setPays($data[7]);
						$question->setTelephone($data[9]);
						$question->setEmail($data[8]);
						$question->setTexteQuestion(str_replace("\\", "", $data[3]));
	//					$question->setSite("lejuridique");
						$question->setDateQuestion($data[2]);
						$question->save();
					}
				}
				fclose($handle);
			}		  
		}
    }
	
  }
}
