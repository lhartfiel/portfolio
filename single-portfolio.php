<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content single-Post-Item">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="portfolio-Item-content">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="decorativeImg aboutIcon">
              <img src="<?php the_field('icon'); ?>" alt=""> 
            </div>  
            <h3><?php the_field('client_name'); ?></h3> 
            <p><?php the_field('tools') ?></p>
            <div class="description"><?php the_content(); ?> </div>
          </div><!-- /.portfolio-Item-content -->
          <div class="portfolio_main_image"> 
            <img src="<?php the_field('image') ?>" alt=""> 
          </div>
          <div class="demo"><?php the_field('demo') ?></div>
          
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation clearfix">
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