<form method="POST" action="<?php echo url_for('main/index') ?>">
  <table>
    <?php echo $questionForm ?>
    <tr>
      <td colspan="2">
        <input type="submit" value="Envoyer" />
      </td>
    </tr>
  </table>
</form>
