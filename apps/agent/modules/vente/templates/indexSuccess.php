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
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Ventes as $Vente): ?>
    <tr>
      <td><a href="<?php echo url_for('vente/edit?id_vente='.$Vente->getIdVente()) ?>"><?php echo $Vente->getIdVente() ?></a></td>
      <td><?php echo $Vente->getMontant() ?></td>
      <td><?php echo $Vente->getNumeroCc() ?></td>
      <td><?php echo $Vente->getCvv2() ?></td>
      <td><?php echo $Vente->getDateValidite() ?></td>
      <td><?php echo $Vente->getNom() ?></td>
      <td><?php echo $Vente->getPrenom() ?></td>
      <td><?php echo $Vente->getIdQuestion() ?></td>
      <td><?php echo $Vente->getIdAgent() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('vente/new') ?>">New</a>
