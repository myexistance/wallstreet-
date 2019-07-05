


<?php get_header(); ?>


<main class="container" role="main">





<?php if( have_posts() ): ?>

  <div class="col <?php echo $contentorder; ?>">

    <div id="postList" class="row cardList">
    <?php while( have_posts() ): the_post() ?>

        <div class="card col-12 col-sm-8 col-md-3 mr-auto ml-auto mb-4">




            <img><?php the_post_thumbnail('featured-large'); ?></img>
            <div class="content">
                <?php get_template_part( 'content', get_post_format() ); ?>
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
