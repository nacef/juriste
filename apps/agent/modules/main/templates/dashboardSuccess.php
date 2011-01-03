<div id="main_content_wrap" class="container_12">
  <!-- start icon dock-->
  <div id="icondock" class="grid_12">
    <ul>
      <li><a href="<?php echo url_for('question/index') ?>" rel="facebox" title="Consultez vos questions"><img src="/images/icondock/email.png" alt="Questions" /><br />Questions
      <?php if ($questionsCount > 0): ?>
      <span><?php echo $questionsCount ?></span>
      <?php endif; ?>
      </a></li>
      <li><a href="<?php echo url_for('rappel/index') ?>" rel="tipsy" title="Rappels clients"><img SRC="/images/icondock/bell.png" alt="Rappels" /><br />Rappels
      <?php if ($rappelsCount > 0): ?>
      <span><?php echo $rappelsCount ?></span>
      <?php endif; ?>
      </a></li>
      <li><a href="#" rel="tipsy" title="Mes ventes"><img SRC="/images/icondock/coins.png" alt="Ventes" /><br />Ventes</a></li>
      <li><a href="#" rel="tipsy" title="Mes clients"><img SRC="/images/icondock/user.png" alt="Clients" /><br />Clients</a></li>
      <li><a href="#" rel="tipsy" title="Mes stats"><img SRC="/images/icondock/chart_bar.png" alt="Stats" /><br />Stats</a></li>
      <li><a href="#" rel="tipsy" title="Mes notes"><img SRC="/images/icondock/comment.png" alt="Notes"/><br />Notes</a></li>
      <li><a href="#" rel="tipsy" title="View Your Contact List"><img SRC="/images/icondock/book_addresses.png" alt="Contacts" /><br />Contacts</a></li>
      <li><a href="#" rel="tipsy" title="Check Your Events"><img SRC="/images/icondock/date.png" alt="Events" /><br />Events</a></li>
      <li><a href="#" rel="tipsy" title="Manage Incoming Orders"><img SRC="/images/icondock/basket.png" alt="Orders" /><br />Orders</a></li>
    </ul>
  </div>    
</div>

