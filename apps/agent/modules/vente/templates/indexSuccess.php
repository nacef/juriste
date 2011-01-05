<div class="container_12">
<h2>Mes Ventes</h2>

<table width="100%">
  <thead>
    <tr>
      <th>Id vente</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Montant</th>
      <th>Numero cc</th>
      <th>Cvv2</th>
      <th>Date validite</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Ventes as $Vente): ?>
    <tr>
      <td><?php echo $Vente->getIdVente() ?></td>
      <td><?php echo $Vente->getNom() ?></td>
      <td><?php echo $Vente->getPrenom() ?></td>
      <td><?php echo $Vente->getMontant() ?></td>
      <td><?php echo "xxxxxxxxxxxx".substr($Vente->getNumeroCc(), 12) ?></td>
      <td><?php echo $Vente->getCvv2() ?></td>
      <td><?php echo $Vente->getDateValidite() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>  
