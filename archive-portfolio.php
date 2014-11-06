<?php
/*
Template Name: Portfolio Index
*/
get_header(); ?>

<div class="main">
  <div class="container">

   <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h3><?php the_field('client_name'); ?></h3> 
          <p><?php the_field('tools') ?></p>
          <p><?php the_field('short_description') ?></p>
          <div class="portfolio_images"> 
            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?> 
          </div>

        </div><!-- #post-## -->


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>