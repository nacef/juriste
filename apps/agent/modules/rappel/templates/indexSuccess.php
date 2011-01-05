<div class="container_12">
<h2>Liste des rappels</h2>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <!--th width="5%" scope="col">
        <input type="checkbox" name="checkbox" id="checkbox" class="checkall" /><label for="checkbox"></label></th-->
        <th width="20%" scope="col">Nom</th>
        <th width="20%" scope="col">Prenom</th>
        <th width="20%" scope="col">E-Mail</th>
        <th width="20%" scope="col">T&eacute;l&eacute;phone</th>
        <th width="20%" scope="col">Date rappel</th>
    </tr>
    <?php foreach($rappels as $rappel): ?>
    <tr>
        <!--td scope="col"><input type="checkbox" name="checkbox2" id="checkbox2" /></td-->
        <td scope="col"><?php echo $rappel->getQuestion()->getNom() ?></td>
        <td scope="col"><?php echo $rappel->getQuestion()->getPrenom() ?></td>
        <td scope="col"><?php echo $rappel->getQuestion()->getEmail() ?></td>
        <td scope="col"><?php echo $rappel->getQuestion()->getTelephone() ?></td>
        <td scope="col"><?php echo $rappel->getDateRappel() ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
