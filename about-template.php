<?php
    /* Template Name: About Template */
?>
<?php get_header(); ?>





  <div id="postList" class="row cardList">
    <?php if( have_posts() ): ?>
      <main class="container" role="main">

      <div class="col <?php echo $contentorder; ?>">

        <div id="postList" class="row cardList">

        <?php while( have_posts() ): the_post() ?>

            <div class="card col-3 col-sm-8 col-md-12 mr-auto ml-auto mb-2">





              <h5 class="textCenter mb-4"><?php the_title(); ?></h5>
              <div class="center mb-4">
              <img class="floatLeft"><?php the_post_thumbnail(); ?>
              </div>
              <div class="card col-8 col-sm-8 col-md-8 mr-auto ml-auto">
                  <?php the_content(); ?>
              </div>



          </div>

        <?php endwhile; ?>

        <?php else: ?>
            <p>There is no post</p>


          </div>
          </div>

        <?php endif; ?>





  </div>


















<?php get_footer(); ?>
