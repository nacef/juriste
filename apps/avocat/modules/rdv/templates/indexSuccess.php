<div class="container_12">
<h2>Rdvs de la journée</h2>

<table width="100%">
  <thead>
    <tr>
      <th>Id Question</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Téléphone</th>
	  <th>Date RDV</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rdvs as $rdv): ?>
    <tr>
      <td><?php echo $rdv->getVente()->getIdQuestion() ?></td>
      <td><?php echo $rdv->getVente()->getQuestion()->getNom() ?></td>
      <td><?php echo $rdv->getVente()->getQuestion()->getPrenom() ?></td>
      <td><?php echo $rdv->getVente()->getQuestion()->getEmail() ?></td>
      <td><?php echo $rdv->getVente()->getQuestion()->getTelephone() ?></td>
      <td><?php echo $rdv->getDqteDebutRdv() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>  
