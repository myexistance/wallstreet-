<?php get_header(); ?>





  <div id="postList" class="row cardList">
    <?php if( have_posts() ): ?>
      <main class="container" role="main">

      <div class="col <?php echo $contentorder; ?>">

        <div id="postList" class="row cardList">

        <?php while( have_posts() ): the_post() ?>

            <div class="card col-12 col-sm-8 col-md-12 mr-auto ml-auto mb-4">







              <div class="content">
                  <?php the_content(); ?>
              </div>
              <hr>
              <img><?php the_post_thumbnail(); ?></img>
              <hr>

          </div>

        <?php endwhile; ?>

        <?php else: ?>
            <p>There is no post</p>


          </div>
          </div>

        <?php endif; ?>





  </div>


















<?php get_footer(); ?>
