<script type="text/javascript">
  $(document).ready(function() {
    $('#traitement_agent_id_qualif_agent').change(function(){
      $('#sub_form').empty();
      var id_question = $('#question_id_question').val();
      if ($(this).val() == 1) {
        $.get('/agent_dev.php/rappel/form?id_question=' + id_question, function(data) {
          $('#sub_form').append(data);
        });          
      } else if ($(this).val() == 3) {
        $.get('/agent_dev.php/vente/form?id_question=' + id_question, function(data) {
          $('#sub_form').append(data);
        });                
      }
    });
  });
</script>    

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
      <div id="sub_form"></div>
      <p><input id="qualif_submit" type="submit" value="Sauvegarder" class="submit"/></p>
    </form>
  </div>
</div>

