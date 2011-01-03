<h1>Ventes List</h1>

<table>
  <thead>
    <tr>
      <th>Id vente</th>
      <th>Montant</th>
      <th>Numero cc</th>
      <th>Cvv2</th>
      <th>Date validite</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Id question</th>
      <th>Id agent</th>
      <th>Date creation</th>
      <th>Date modification</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ventes as $vente): ?>
    <tr>
      <td><a href="<?php echo url_for('vente/edit?id_vente='.$vente->getIdVente()) ?>"><?php echo $vente->getIdVente() ?></a></td>
      <td><?php echo $vente->getMontant() ?></td>
      <td><?php echo $vente->getNumeroCc() ?></td>
      <td><?php echo $vente->getCvv2() ?></td>
      <td><?php echo $vente->getDateValidite() ?></td>
      <td><?php echo $vente->getNom() ?></td>
      <td><?php echo $vente->getPrenom() ?></td>
      <td><?php echo $vente->getIdQuestion() ?></td>
      <td><?php echo $vente->getIdAgent() ?></td>
      <td><?php echo $vente->getDateCreation() ?></td>
      <td><?php echo $vente->getDateModification() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vente/new') ?>">New</a>
