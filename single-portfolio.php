<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h3><?php the_field('client_name'); ?></h3> 
          <p><?php the_field('tools') ?></p>
          <p><?php the_content(); ?> </p>
          <div class="portfolio_main_image"> 
            <img src="<?php the_field('image') ?>" alt=""> 
          </div>
          <p><?php the_field('demo') ?></p>
          
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->


    <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
<footer class="clearfix">
  <?php get_footer(); ?>
</footer>