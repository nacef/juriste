<h1>Questions List</h1>

<table>
  <thead>
    <tr>
      <th>Id question</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Code postal</th>
      <th>Pays</th>
      <th>Telephone</th>
      <th>Email</th>
      <th>Texte question</th>
      <th>Date question</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($questions as $question): ?>
    <tr>
      <td><a href="<?php echo url_for('question/edit?id_question='.$question->getIdQuestion()) ?>"><?php echo $question->getIdQuestion() ?></a></td>
      <td><?php echo $question->getNom() ?></td>
      <td><?php echo $question->getPrenom() ?></td>
      <td><?php echo $question->getCodePostal() ?></td>
      <td><?php echo $question->getPays() ?></td>
      <td><?php echo $question->getTelephone() ?></td>
      <td><?php echo $question->getEmail() ?></td>
      <td><?php echo $question->getTexteQuestion() ?></td>
      <td><?php echo $question->getDateQuestion() ?></td>
      <td><?php echo $question->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('question/new') ?>">New</a>
