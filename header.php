<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >


        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">





      <!-- <a class="navbar-brand mx-auto" href="#"> -->
        <div id="logo" class="logo">
        <?php the_custom_logo(); ?>
        </div>
      <!-- </a> -->

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
      </button>




            		<?php

            		wp_nav_menu( array(
            			'theme_location'    => 'right_menu',
            			'depth'             => 1,
            			'container'         => 'div',
            			'container_class'   => 'collapse navbar-collapse',
            			'container_id'      => 'bs-example-navbar-collapse-1',
            			'menu_class'        => 'nav navbar-nav ml-auto ',
            			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            			'walker'            => new WP_Bootstrap_Navwalker(),
            		) );
            		?>


                </div>
            </nav>
