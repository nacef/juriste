<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('a[id|="menu"][class="active"]').toggleClass('active');
	      $("#menu-<?php echo $sf_request->getParameter('module').'_'.$sf_request->getParameter('action') ?>").toggleClass('active');
      });
    </script>    
  </head>
  <body>
    <div id="header" class="png_bg">
      <div id="head_wrap" class="container_12">
      
        <!-- Logo -->
        <div id="logo" class="grid_4">
          <h1>Console<span>Agent</span></h1>
        </div>
        
        <!-- Infos connexion -->
        <div id="controlpanel" class="grid_8">
          <ul>
            <li><p>Utilisateur connecté <strong><?php echo $sf_user->getLoggedUser() ?></strong></p></li>
            <li><a href="<?php echo url_for('login/logout') ?>" class="last">Déconnexion</a></li>
          </ul>
        </div>
        
        <!-- Menu -->
        <div id="navigation" class="grid_12">
          <ul>
            <li><a id="menu-main_dashboard" href="<?php echo url_for('main/dashboard') ?>" class="active">Tableau de bord</a></li>
            <li><a id="menu-utilisateur_index" href="<?php echo url_for('utilisateur/index') ?>">Utilisateurs</a></li>
          </ul>
        </div>
	    </div>
	  </div>

    <div id="main_content_wrap" class="container_12">
    <?php if ($sf_user->hasFlash('message')): ?>
      <?php $flash = $sf_user->getFlash('message') ?>
        <div class="notification <?php echo $flash['icon'] ?> canhide">
          <p><strong><?php echo $flash['type'] ?>: </strong>
          <?php echo $flash['text'] ?>
          </p>
        </div>      
      <?php endif; ?>
      <?php echo $sf_content ?>
    </div>
  </body>
</html>
