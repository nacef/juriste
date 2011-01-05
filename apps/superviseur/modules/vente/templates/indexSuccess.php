<div class="container_12">
<h2>Ventes de la journée</h2>

<table width="100%">
  <thead>
    <tr>
<<<<<<< HEAD
      <th>Id Vente</th>
      <th>Id Question</th>
	  <th>Agent</th>
=======
      <th>Id Question</th>
      <th>Id Vente</th>
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
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
<<<<<<< HEAD
      <td><a href="<?php echo url_for('rdv/new?id_vente='.$vente->getIdVente()) ?>"><?php echo $vente->getIdVente() ?></a></td>
      <td><?php echo $vente->getIdQuestion() ?></td>
	  <td><?php echo $vente->getUtilisateur() ?></td>
=======
      <td><?php echo $vente->getIdQuestion() ?></td>
      <td><?php echo $vente->getIdVente() ?></td>
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
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
