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


      <?php

      wp_nav_menu( array(
        'theme_location'    => 'left_menu',
        'depth'             => 1,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => '#navbarMobile',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>



      <!-- <a class="navbar-brand mx-auto" href="#"> -->
        <div id="logo" class="logo">
        <?php the_custom_logo(); ?>
        </div>
      <!-- </a> -->

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>
      </button>




            		<?php

            		wp_nav_menu( array(
            			'theme_location'    => 'right_menu',
            			'depth'             => 1,
            			'container'         => 'div',
            			'container_class'   => 'collapse navbar-collapse',
            			'container_id'      => '#navbarMobile',
            			'menu_class'        => 'nav navbar-nav ml-auto ',
            			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            			'walker'            => new WP_Bootstrap_Navwalker(),
            		) );
            		?>


                <!-- Mobile -->
                <div class="collapse" id="navbarMobile">
                    <ul class="nav navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="services">Services</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="e-design">E-Design</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="residential">Residential</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="commercial">Commercial</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="visit-us">Enquiry</a>
                      </li>

                    </ul>
                </div>
            </nav>
