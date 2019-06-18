<?php
    /* Template Name: Services Template */
?>
<?php get_header(); ?>


<!-- <h1>This is from our index.php file</h1> -->




<?php
$lastservice = new WP_Query('type=post&post_per_page=-1');

if($lastservice -> have_posts() ): ?>
<main class="container" role="main">
  <div class="col <?php echo $contentorder; ?>">

    <div id="postList" class="row cardList">
    <?php while( $lastservice -> have_posts() ): $lastservice -> the_post() ?>

        <div class="card col-12 col-sm-8 col-md-12 mr-auto ml-auto mb-4">




            <h2 class="textCenter"><?php the_title(); ?></h2>
            <div class="content">
                <?php the_content(); ?>
            </div>

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
