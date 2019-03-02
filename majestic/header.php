<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
	</head>
<body>
	<header>
	<div class="logo">
	   <?php	
	      $custom_logo_id = get_theme_mod( 'custom_logo' );
	      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	      if ( has_custom_logo() ) {
	              echo '<img src="'. esc_url( $logo[0] ) .'">';
	          } else {
	                  echo '<h1><a href="/lashes/">'. get_bloginfo( 'name' ) .'</a></h1>';
	          }
         ?>
    </div>
	<div class="banner">
		<img src="http://localhost/lashes/wp-content/uploads/2018/12/distant-city.jpg" />
	</div>
	<nav class="topnav" id="myTopnav">
            <?php wp_nav_menu( array(    
            	'menu' => 'Project Nav'
                 ) );
            ?>
    </nav>
</header>