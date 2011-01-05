<h1>Questions List</h1>

<table>
  <thead>
    <tr>
      <th>Id traitement agent</th>
      <th>Commentaire agent</th>
      <th>Id qualif agent</th>
      <th>Id question</th>
      <th>Id agent</th>
      <th>Rappel</th>
      <th>Date rappel</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Questions as $Question): ?>
    <tr>
      <td><a href="<?php echo url_for('question/edit?question_id='.$Question->getIdTraitementAgent()) ?>"><?php echo $Question->getIdTraitementAgent() ?></a></td>
      <td><?php echo $Question->getCommentaireAgent() ?></td>
      <td><?php echo $Question->getIdQualifAgent() ?></td>
      <td><?php echo $Question->getIdQuestion() ?></td>
      <td><?php echo $Question->getIdAgent() ?></td>
      <td><?php echo $Question->getRappel() ?></td>
      <td><?php echo $Question->getDateRappel() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('question/new') ?>">New</a>
