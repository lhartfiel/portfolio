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
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Raleway:400,300,200,500,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<div class="main">
	<div class="home-header">
		<div class="container-top clearfix">
			<nav>
				<ul>
					<li>
						<i class="fa fa-caret-right"></i><a href="#aboutSection">About</a>
					</li>
					<li>
						<i class="fa fa-caret-right"></i><a href="#skillsSection">Skills</a>
					</li>
					<li>
						<i class="fa fa-caret-right"></i><a href="#portfolioSection">Portfolio</a>
					</li>
						<li><i class="fa fa-caret-right"></i><a href="#footerSection">Contact</a>
					</li>
				</ul>
			</nav>
			<div class="circles">
				<div class="outerMain">
					<div class="mainCircle">
						<div class="mainCircle-content">
							<h1 class='homeintro'>Hi, I'm Lindsay</h1>
							<h1 class="designer">Designer</h1>
							<h1 class="ampersand">&</h1>
							<h1 class="developer">Developer</h1>
							<div class="mainCircleSub">
								<h3>What can I do for YOU?</h3>	
							</div>
						</div>
					</div>			
				</div> <!-- .mainCircle -->
			
			
				<div class="sideCircles">
					<div class="top-small-circle">
						<div class="inquiry1">
							<h4>You might be curious to know...</h4>
							<i class="fa fa-hand-o-up"></i>
						</div>
						<h4 class="answer1">I’ve traveled to more than 15 countries and counting. If you like talking about exotic locales, let's grab coffee and chat!</h4>
					</div> <!-- .top-small-circle -->
					<div class="mid-small-circle">
						<div class="inquiry2">
							<h4>You might be surprised to learn…</h4>
							<i class="fa fa-hand-o-up"></i>
						</div>
						<h4 class="answer2">There's no swagger in my step...just a little hop! I've discovered that — like the right and left brain – my two feet CAN work together. I'm an avid zumba fan and have zumba-ed from Canada all the way down to Argentina. Roger Rabbit never knew what hit him. </h4>
					</div> <!-- .mid-small-circle -->
					<div class="bottom-small-circle">
						<div class="inquiry3">
							<h4>I'm a bit ashamed to say…</h4>
							<i class="fa fa-hand-o-up"></i>
						</div>
						<h4 class="answer3">I’m addicted to chocolate. Please don’t judge.</h4>
					</div> <!-- .bottom-small-circle -->
				</div><!-- /.sideCircles -->	
			</div><!-- /.circles -->
			<!-- <div class="lineIntersect"></div>	 -->
		</div> <!-- /.container-top -->
	</div> <!-- .home-header -->

	<div class="about clearfix" id="aboutSection">
		<div class="about-border"></div>
		<div class="container clearfix">
			<div class="about-text">		
				<h2>What’s up my sleeve…</h2>
				<p>I don’t carry a magic wand or don a pointy hat. I don’t have any special powers. And, I certainly wouldn’t call myself a wizard. BUT, I have been known to do a few tricks on websites.</p>	
				<p>Wanna see?</p>
			</div> <!-- .about-text -->
			<div class="about-photo">
				<img src="http://localhost:8888/portfolio/wp-content/uploads/2014/11/lindsay_photo.jpg" alt="Photo of Lindsay Hartfiel">
			</div><!-- /.about-photo -->
			<div class="contactCircle">
				<div class="Circlelink">
					<p><a href="#footerSection">Get in touch to find out!</a></p>
				</div>
			</div>
		</div> <!-- .container -->
	</div>	
	<div class="skills" id="skillsSection">
		<div class="container clearfix">
			<div class="skills-intro">
				<h2>She's Got Skills, Too</h2>
				<p>While my zumba skills may entertain you, they probably don’t provide much value. So, what exactly can I bring to the table? Take a look at the various tools and technologies I use.</p>
				<p>Oh, and did I mention I’m pretty good with design software?</p>
				<ul>
					<li>Adobe InDesign</li>
					<li>Adobe Photoshop</li>
					<li>Adobe Illustrator</li>
				</ul>
			</div> <!-- .skills-intro -->
			<div class="skills-graphic">
				<p>Where design meets development</p>
			</div>
			<div class="skills-tools">
				<div class="top-tools">
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
				</div>
				<div class="skillsCircles">
					<a href=""><div class="skillCircle1"></div></a>
					<div class="skillCircle2"></div>
					<div class="skillCircle3"></div>
				</div>
				<div class="skillRange">
					<ul>
						<i class="fa fa-reply"></i><li>I'm Lovin' It</li>
						<li>I'm Likin' It</li>
						<li>I'm Cool With It</li>
					</ul>
				</div>
			</div><!-- /.skills-tools -->
		</div> <!-- .container -->
	</div>	<!-- .skills -->
	<div class="featured-items clearfix" id="portfolioSection">
		<h2>Featured Portfolio Items</h2>
		<!-- Front page loop of portfolio items - only display items with a category of "featured" -->
		<div class="homeFeaturedImg clearfix">
		<?php 
			$featuredPortfolio = new WP_Query (
				array(
					'posts_per_page'=> 3,
					'post_type'=>'portfolio',
					'category_name' => 'featured'
				)
			); ?>
		<?php if($featuredPortfolio->have_posts()) : ?>
			<?php while($featuredPortfolio->have_posts()) : $featuredPortfolio->the_post(); ?>
				<div class="homePortfolioItem">
					<div class="featuredImg">
						<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
					</div>
					<a href="<?php the_permalink(); ?> ">
						<?php the_title(); ?>
					</a>	
					<p><?php the_field('tools') ?></p>
				</div>	
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		</div>

	</div>
</div> <!-- /.main -->
<footer id="footerSection">
<?php get_footer(); ?>
</footer>