<table>
  <tbody>
    <tr>
      <th>Message Id:</th>
      <td><?php echo $Question->getIdQuestion() ?></td>
    </tr>
    <tr>
      <th>Posté par :</th>
      <td><?php echo $Question->getQuestion()->getPrenom() . ' ' . $Question->getQuestion()->getNom() ?></td>
    </tr>
    <tr>
      <th>Date dossier :</th>
      <td><?php echo $Question->getQuestion()->getDateQuestion() ?></td>
    </tr>
    <tr>
      <th>Domaine concerné :</th>
      <td></td>
    </tr>
    <tr>
      <th>Code postal :</th>
      <td><?php echo $Question->getQuestion()->getCodePostal() ?></td>
    </tr>
    <tr>
      <th>Pays :</th>
      <td><?php echo $Question->getQuestion()->getPays() ?></td>
    </tr>
    <tr>
      <th>Téléphone :</th>
      <td><?php echo $Question->getQuestion()->getTelephone() ?></td>
    </tr>
    <tr>
      <th>Email :</th>
      <td><?php echo $Question->getQuestion()->getEmail() ?></td>
    </tr>
  </tbody>
</table>

<?php include_partial('form', array('form' => $form)) ?>

<a href="<?php echo url_for('vente/new?question='.$Question->getIdQuestion()) ?>">Transformer en vente</a>
