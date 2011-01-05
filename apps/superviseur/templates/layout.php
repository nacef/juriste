<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="header" class="png_bg">
      <div id="head_wrap" class="container_12">
      
        <!-- Logo -->
        <div id="logo" class="grid_4">
          <h1>Console <span>Superviseur</span></h1>
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
            <li><a id="menu-vente_index" href="<?php echo url_for('vente/index') ?>">Ventes</a></li>
            <li><a href="<?php echo url_for('rdv/index') ?>">Rdvs</a></li>
            <!--li><a href="<?php echo url_for('vente/index') ?>">Ventes</a></li>
            <li><a href="#">Stats</a></li-->
          </ul>
        </div>
	    </div>
	  </div>

    <!-- Sous menu -->
    <!--div id="sub_nav">
      <div id="subnav_wrap" class="container_12">
        <div id="subnav" class="grid_12">
          <ul>
            <li><a href="#" class="active">First</a></li>
            <li><a href="#" class="sub_nav_active">Active</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">Some Link</a></li>
            <li><a href="#">Nearly Last</a></li>
            <li><a href="#">Sample</a></li>
            <li><a href="#">Some Other Link</a></li>
            <li><a href="#" class="sub_nav_last">Last Link</a></li>
          </ul>
        </div>
      </div>
    </div-->
    

<<<<<<< HEAD
    <?php echo $sf_content ?>
=======
        <?php echo $sf_content ?>
>>>>>>> afea04357b2ddd3c83a3631dbe6e07986d2cd7e0
  </body></html>
