<?php //index.php is the last resort template, if no other templates match ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Allura|Tangerine:400,700|Raleway:400,300,200,500,600|Dancing+Script|Sacramento' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<div class="main">
	<!-- Heading Section -->
	<div class="home-header" id="home">
		<div class="container-top">
			<div class="header-circle">
				<div class="head-content">
					<h1 class="myname">Lindsay Hartfiel</h1>
					<h1 class="title">Designer & Developer</h1>
					<div class="top-line"> </div>
					<p>Let's create something amazing</p>
				</div><!-- /.head-content -->	
			</div>	
		</div> <!-- /.container-top -->
	</div> <!-- .home-header -->

	<!-- Navigation -->
	<nav>
		<p><a href="#aboutSection">About</a></p>
		<p><a href="#skillsSection">Skills</a></p>
		<p><a href="#portfolioSection">Portfolio</a></p>
		<p><a href="#footerSection">Contact</a></p>
	</nav>

	<!-- Intro Section -->
	<div class="introSection">
		<div class="container">
			<div class="insideContainer">
				<h1><?php the_field('intro_headline'); ?></h1>
				<p><?php the_field('intro_body'); ?></p>
				<div class="decorativeImg">
					<img src="<?php the_field('decorative_icon'); ?>" alt=""> 
				</div>
				<div class="decorativeLine"></div>
			</div><!-- /.insideContainer -->
		</div> <!-- .container -->
	</div><!-- /.introSection -->

	<!-- About Section -->
	<div class="textContainer" id="aboutSection">
		<div class="aboutImg">
			<div class="imageShape">
				<div class="container">
					<div class="aboutContent">
						<div class="about-photo">
							<img src="<?php the_field('about_image'); ?>" alt="Photo of Lindsay Hartfiel">
						</div><!-- /.about-photo -->
						<div class="about-text">
							<h3><?php the_field('about_subhead'); ?></h3>
							<p><?php the_field('about_body'); ?></p>
						</div>
						<div class="decorativeImg aboutIcon">
							<img src="<?php the_field('decorative_icon'); ?>" alt=""> 
						</div>	
					</div> <!-- .aboutContent -->
				</div> <!-- .container -->
			</div> <!-- .imageShape -->
		</div> <!-- .aboutImg -->
	</div>	

	<!-- Skills Section -->
	<div class="skills" id="skillsSection">
		<div class="container clearfix">
			<div class="skills-intro">
				<h2><?php the_field('skills_subhead'); ?></h2>
				<p><?php the_field('skills_body'); ?></p>
			</div> <!-- .skills-intro -->
			<div class="skills-tools">
				<div class="top-tools">
					<div class="skillRange">
						<ul>
							<li>I'm Lovin' It</li>
							<li>I'm Likin' It</li>
							<li>I'm Cool With It</li>
						</ul>
					</div>
					<div class="skillCircles">
						<div class="skillsLine"></div>
						<div class="skillCircle skillCircle1"><a href=""><i class="fa fa-angle-down"></i></a></div>
						<div class="skillCircle skillCircle2"><i class="fa fa-angle-down"></i></div>
						<div class="skillCircle skillCircle3"><i class="fa fa-angle-down"></i></div>
					</div>
					<div class="allSkills">
						<ul class="bestSkills">
							<li>HTML5</li>
							<li>CSS3</li>
							<li>SASS</li>
							<li>WordPress</li>
						</ul>
						<ul class="goodSkills">
							<li>Git</li>
							<li>Grunt</li>
							<li>jQuery</li>
						</ul>
						<ul class="fairSkills">
							<li>Javascript</li>
							<li>APIs</li>
						</ul>
					</div><!-- /.allSkills -->		
				</div>
				
			</div><!-- /.skills-tools -->
			<!-- <p>Oh, and did I mention I’m pretty good with design software?</p>
			<ul>
				<li>Adobe InDesign</li>
				<li>Adobe Photoshop</li>
				<li>Adobe Illustrator</li>
			</ul> -->
		</div> <!-- .container -->
	</div>	<!-- .skills -->

	<!-- Portfolio Section -->
	<div class="featured-items" id="portfolioSection">
		<div class="imageShape">
			<div class="container clearfix">
				<div class="portfolioIntro clearfix">
					<div class="portfolioText">
						<h3><?php the_field('portfolio_subhead'); ?></h3>
						<p><?php the_field('portfolio_body'); ?></p>
						<div class="decorativeImg aboutIcon">
							<img src="<?php the_field('decorative_icon'); ?>" alt=""> 
						</div>	
					</div>
				</div>
			</div><!-- /.container -->	
		</div>
	</div>

		<!-- Front page loop of portfolio items - only display items with a category of "featured" -->
	<div class="portfolioItems">
		<div class="container">
			<h2>Featured Portfolio Items</h2>
			<div class="homeFeaturedImg clearfix">
			<?php 
				$featuredPortfolio = new WP_Query (
					array(
						'posts_per_page'=> 4,
						'post_type'=>'portfolio',
						'category_name' => 'featured'
					)
				); ?>
			<?php if($featuredPortfolio->have_posts()) : ?>
				<?php while($featuredPortfolio->have_posts()) : $featuredPortfolio->the_post(); ?>
					<div class="homePortfolioItem clearfix">
						<div class="featuredImg">
							<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
						</div>
						<div class="itemInfo">
							<a href="<?php the_permalink(); ?> ">
								<?php the_title(); ?>
							</a>	
							<p><?php the_field('tools') ?></p>
						</div>
					</div>	
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			</div>
			<!-- <div class="portfolioCallout">
				<p>Click on each item to view more</p>
			</div> --><!-- /.portfolioCallout -->
		</div> <!-- .container -->	
	</div>
</div> <!-- /.main -->

<!-- Footer -->
<footer id="footerSection">
	<?php get_footer(); ?>
</footer>