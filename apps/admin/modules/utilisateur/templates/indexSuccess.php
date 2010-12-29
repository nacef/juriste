<h1>Utilisateurs List</h1>

<table>
  <thead>
    <tr>
      <th>Id utilisateur</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Login</th>
      <th>Password</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($utilisateurs as $utilisateur): ?>
    <tr>
      <td><a href="<?php echo url_for('utilisateur/edit?id_utilisateur='.$utilisateur->getIdUtilisateur()) ?>"><?php echo $utilisateur->getIdUtilisateur() ?></a></td>
      <td><?php echo $utilisateur->getNom() ?></td>
      <td><?php echo $utilisateur->getPrenom() ?></td>
      <td><?php echo $utilisateur->getLogin() ?></td>
      <td><?php echo $utilisateur->getPassword() ?></td>
      <td><?php echo $utilisateur->getType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('utilisateur/new') ?>">New</a>
