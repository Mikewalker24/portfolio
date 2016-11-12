<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>



  <?php if ( is_front_page() ) { ?>
  <header>
    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>

    <div class="nav">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?> 
    </div>
  </header>
  <?php
  
    }
  
  else { ?>
     <header class="portfolio-header">
      <div class="portfolio-nav">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'portfolio-nav'
        )); ?> 
      </div>
      <h1 class="portfolio-header-title">Michael Walker</h1>
      <div class="portfolio-social">
        <a href="http://twitter.com/mikewalkercodes"><i class="fa fa-twitter" target="_blank"></i></a>
        <a href="mailto:hello@mikewalker.co"><i class="fa fa-envelope-o" target="_blank"></i></a>
        <a href="https://ca.linkedin.com/in/mike-walker-8a5a8348" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="http://github.com/mikewalker24"><i class="fa fa-github" target="_blank"></i></a>
      </div>
    </header>
      <?php
    }
 ?>





