<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 
 * @package Zoom_ZUM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Playfair+Display:900i,400&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

    <?php wp_head(); ?>

  </head>


  <body <?php body_class(); ?>>
  	<?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">
   <img src="<?php echo zoomzum_get_custom_logo(); ?>" height="60" alt="Together for Knowledge" class="logo"> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	<?php
			$menu = wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'walker' => new Class_Walker,
				'container' => 'ul',
				'menu_class' => 'navbar-nav',
				'echo' => false
			) );
			
			echo $menu;
			?>
    
  </div>
</nav>

