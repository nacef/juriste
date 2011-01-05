<?php

class QualifRappelForm extends TraitementAgentForm {

  public function configure() {
    $this->embedForm('rappel', new RappelForm());
  }
}
