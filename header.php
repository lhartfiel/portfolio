<!DOCTYPE html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Allura|Tangerine:400,700|Raleway:400,300,200,500,600|Dancing+Script|Sacramento' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<nav>
    <p><a href="http://www.lindsayhartfiel.com">Home</a></p>
  </nav>

<header>
  <div class="container">
   <!--  <h1>
      <a href="<?php //echo home_url( '/' ); ?>" title="<?php //bloginfo(); ?>" rel="home">
        <?php //bloginfo(); ?>
      </a>
    </h1> -->

    <?php //wp_nav_menu( array(
      //'container' => false,
      //'theme_locations' => 'primary'
    //)); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

