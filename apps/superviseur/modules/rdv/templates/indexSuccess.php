<h1>Rdvs List</h1>

<table>
  <thead>
    <tr>
      <th>Id rdv</th>
      <th>Date debut rdv</th>
      <th>Date fin rdv</th>
      <th>Id avocat</th>
      <th>Id vente</th>
      <th>Commentaire avocat</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rdvs as $rdv): ?>
    <tr>
      <td><a href="<?php echo url_for('rdv/edit?id_rdv='.$rdv->getIdRdv()) ?>"><?php echo $rdv->getIdRdv() ?></a></td>
      <td><?php echo $rdv->getDateDebutRdv() ?></td>
      <td><?php echo $rdv->getDateFinRdv() ?></td>
      <td><?php echo $rdv->getIdAvocat() ?></td>
      <td><?php echo $rdv->getIdVente() ?></td>
      <td><?php echo $rdv->getCommentaireAvocat() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('rdv/new') ?>">New</a>
