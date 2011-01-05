<div class="container_12">
<h2>Ventes de la journée</h2>

<table width="100%">
  <thead>
    <tr>
      <th>Id Vente</th>
      <th>Id Question</th>
	  <th>Agent</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Montant</th>
      <th>Numero cc</th>
      <th>Cvv2</th>
      <th>Date validite</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ventes as $vente): ?>
    <tr>
      <td><a href="<?php echo url_for('rdv/new?id_vente='.$vente->getIdVente()) ?>"><?php echo $vente->getIdVente() ?></a></td>
      <td><?php echo $vente->getIdQuestion() ?></td>
	  <td><?php echo $vente->getUtilisateur() ?></td>
      <td><?php echo $vente->getNom() ?></td>
      <td><?php echo $vente->getPrenom() ?></td>
      <td><?php echo $vente->getMontant() ?></td>
      <td><?php echo $vente->getNumeroCc() ?></td>
      <td><?php echo $vente->getCvv2() ?></td>
      <td><?php echo $vente->getDateValidite() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>  
