<footer>
	<div id="footer-sidebar" class="secondary">
		<div class="container">
			<div id="footer-sidebar1">
				<?php 
					if(is_active_sidebar ('footer-sidebar1')){
					dynamic_sidebar('footer-sidebar1');
				} ?>	
			</div> <!-- .footer-sidebar1 -->
			<div id="footer-sidebar2">
				<?php 
					if(is_active_sidebar('footer-sidebar2')){
					dynamic_sidebar('footer-sidebar2');
					} ?>;
			</div> <!-- .footer-sidebar2 -->
			<div id="footer-sidebar3">
				<?php 
					if(is_active_sidebar('footer-sidebar3')){
					dynamic_sidebar('footer-sidebar3');
					} ?>
			</div>
		</div><!-- /.container -->	
	</div>
  <div class="footer-copyright">
    <p>&copy; Made by Lindsay Hartfiel <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>