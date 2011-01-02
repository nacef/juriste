<div class="container_12">
  <div class="grid_6">
    <h2>Question</h2>
    <form>
      <?php echo $questionForm ?>
    </form>
  </div>
  <div class="grid_6">
    <h2>Qualification agent</h2>
    <form method="POST" action="<?php echo url_for('question/update?question_id='.$traitementAgentForm->getObject()->getIdTraitementAgent()) ?>">
      <?php echo $traitementAgentForm ?>
      <p><input type="submit" value="Sauvegarder" class="submit"/></p>
    </form>
  </div>
</div>

