


<?php get_header(); ?>

<?php if ( get_header_image() ) : ?>
<main class="container" role="main">
  <img src="<?php header_image(); ?>" height="450" width="100%">

<?php endif; ?>

<!-- <h1>This is from our index.php file</h1> -->
<?php
if( have_posts() ): ?>

  <div class="col <?php echo $contentorder; ?>">

    <div id="postList" class="row cardList">
    <?php $i = 1; while( have_posts() && $i <4): the_post() ?>

        <div class="card col-12 col-sm-12 col-md-4 mr-auto ml-auto mb-4">

            <div class="head">
            <h5 class=""><?php the_title(); ?></h5>
            <hr>
            </div>

            <img><?php the_post_thumbnail('featured-large'); ?></img>
            <div class="content">
                <p><?php get_template_part( 'content', get_post_format() ); ?></p>
            </div>



      </div>




    <?php $i++; endwhile; ?>

<?php else: ?>
    <p>There is no post</p>


  </div>
  </div>

<?php endif; ?>

</div>


<?php get_footer(); ?>
