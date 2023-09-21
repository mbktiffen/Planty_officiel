<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Syne:wght@400;800&display=swap');
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="menu-container">
  <!-- burger menu -->
  <input type="checkbox" aria-label="Toggle menu" />
  <span></span>
  <span></span>
  <span></span>

  <!-- logo -->
  <a href="http://localhost/wordpress/" class="menu-logo">
    <img src="http://localhost/wordpress/wp-content/uploads/2023/08/Logo-1024x94.png" alt="My Awesome Website"/>
  </a>

  <!-- menu items -->
  <div class="menu">
    <ul class="espace">
    </ul>
    <ul>
      <li class="menu-item-20">
        <a href="http://localhost/wordpress/nous-rencontrer/">
          Nous rencontrer
        </a>
      </li>
      <li  class="menu-item-22">
        <a href="http://localhost/wordpress/admin/">
          Admin
        </a>
      </li>
      <li class="menu-item-27">
        <a href="http://localhost/wordpress/commander/">
          Commander
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--header id="header" role="banner">
    <div id="branding">
        <a href="http://localhost/wordpress/"><img src="<?=get_stylesheet_directory_uri()."/img/Logo.png"?>" id="img"></a>
    </div>

    <nav id="menu">
            <ul class="menu">
                <li class="menu-item-1">
                </li>
                <li class="menu-item-40">
                    <a href="http://localhost/wordpress/nous-rencontrer/" itemprop="url">Nous rencontrer</a>
                </li>
                <li class="menu-item-26">
                    <a href="http://localhost/wordpress/admin/">Admin</a>
                </li>
                <li class="menu-item-27">
                    <a href="http://localhost/wordpress/commander/" itemprop="url">Commander</a>
                </li>
                
            </ul>
    </nav>
</header-->
