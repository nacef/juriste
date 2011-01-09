<form method="POST" action="<?php echo url_for('login/login') ?>" id="loginform">
  <div id="logo">
    <h1>Console <span>Agent</span></h1>
  </div>

  <label>Login</label><br />
    <?php echo $form['login']->render() ?>
  <br />

  <div class="clearfix">&nbsp;</div>
  
  <label>Password</label><br />
    <?php echo $form['password']->render() ?>
  <br />

  <div class="clearfix">&nbsp;</div>

  <p>
    <input name="btnLogin" type="submit" class="submit" id="btnLogin" value="Login" />
  </p>
</form>
