<?php wp_footer(); ?>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<footer class="container-fluid">


<nav class="social-icon list-group-horizontal">
  <?php

              wp_nav_menu( array(
                  'menu'              => 'social_menu',
                  'theme_location'    => 'social_menu',
                  'container'         => '',
                  'container_class'   => '',
                  'container_id'      => '',
                  
                  'menu_class'        => 'social-icon list-group-horizontal',

                  'walker'            => new wp_bootstrap_navwalker())
              );
  ?>



</nav>
<p class="float-right">&copy; 2019 Hanjan Design, Inc. / Customised Theme by &middot; <a href="https://myexistance.github.io/Joon.portFolio/">Joon</a> &middot;</p>

   <!-- <button onclick="window.location.href = 'http://www.facebook.com/WallStDesign/';"  target="_blank" type="button" class="btn btn-default btn-lg">
  <i class="fa fa-facebook-official"></i>
  </button>
  <button onclick="window.location.href = 'http://instagram.com/wallstdesigns';" target="_blank" type="button" class="btn btn-default btn-lg">
  <i class="fa fa-instagram"></i>
  </button>
  <button onclick="window.location.href = 'https://www.pinterest.com/WallStDesigns1/';" target="_blank" type="button" class="btn btn-default btn-lg">
  <i class="fa fa-pinterest-square"></i>
  </button> -->
   <!-- <p class="float-right"><a href="#">Back to top</a></p> -->


</div>
</footer>
