<div class="container_12">
<h2>Ventes de la journée</h2>

<table width="100%">
  <thead>
    <tr>
      <th>Code client</th>
      <th>Id Question</th>
      <th>Agent</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Telephone</th>
      <th>Montant</th>
      <th>Date validite</th>
      <th>Date vente</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ventes as $vente): ?>
    <tr>
      <td><a href="<?php echo url_for('rdv/new?id_vente='.$vente->getIdVente()) ?>"><?php echo $vente->getCodeClient() ?></a></td>
      <td><?php echo $vente->getIdQuestion() ?></td>
	  <td><?php echo $vente->getUtilisateur() ?></td>
      <td><?php echo $vente->getNom() ?></td>
      <td><?php echo $vente->getPrenom() ?></td>
      <td><?php echo $vente->getQuestion()->getEmail() ?></td>
      <td><?php echo $vente->getQuestion()->getTelephone() ?></td>
      <td><?php echo $vente->getMontant() ?></td>
      <td><?php echo $vente->getDateValidite() ?></td>
      <td><?php echo $vente->getDateCreation() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>  
