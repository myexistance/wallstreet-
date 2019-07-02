<?php
    /* Template Name: Commercial Template */
?>
<?php get_header(); ?>





  <div id="postList" class="row cardList">
    <?php
    $lastservice = new WP_Query('type=post&post_per_page=-1');

    if($lastservice -> have_posts() ): ?>
    <main role="main">
    <!-- <main class="container" role="main"> -->

        <div id="postList" class="row cardList">

        <?php while( $lastservice -> have_posts() ): $lastservice -> the_post() ?>

            <div class="card col-3 col-sm-8 col-md-12 mr-auto ml-auto mb-2">




                <img><?php the_post_thumbnail('featured-small'); ?></img>
                <!-- <div class="content">

                </div> -->


          </div>

        <?php endwhile; ?>

        <?php else: ?>
            <p>There is no post</p>


          </div>
          </div>

        <?php endif;

        wp_reset_postdata();

        ?>




  </div>







<?php if( have_posts() ): ?>

  <div class="col <?php echo $contentorder; ?>">

    <div id="postList" class="row cardList">

    <?php while( have_posts() ): the_post() ?>

        <div class="card col-3 col-sm-8 col-md-12 mr-auto ml-auto mb-4">





            <img><?php the_post_thumbnail('featured-small'); ?></img>


      </div>

    <?php endwhile; ?>

    <?php else: ?>
        <p>There is no post</p>


      </div>
      </div>

    <?php endif;



    $lastservice = new WP_Query('type=post&post_per_page=-1&offset=-1');

    if($lastservice -> have_posts() ): ?>


        <div id="postList" class="row">

        <?php while( $lastservice -> have_posts() ): $lastservice -> the_post() ?>

            <div class="col-3 col-sm-8 col-md-12 mr-auto ml-auto mb-2">




                <img><?php the_post_thumbnail('featured-small'); ?></img>
                <!-- <div class="content">

                </div> -->


          </div>

        <?php endwhile; ?>

        <?php else: ?>
            <p>There is no post</p>


          </div>



        <?php endif;

        wp_reset_postdata();








    ?>
</div>





<?php get_footer(); ?>
