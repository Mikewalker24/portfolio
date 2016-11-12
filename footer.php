<footer id="contact">
  <div class="container">
	  <h3><?php the_field('footer_heading'); ?></h3>
	  <div class="footer-container">
		<?php while(has_sub_field('footer_links')): ?>
		  <a href="<?php the_sub_field('social_url'); ?>" class="social" target="_blank"><?php the_sub_field('social_text'); ?></a>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	  </div>
	</div>

	  <div class="copyright">
	  	<div class="container clearfix">
	  		<div class="copyright-left">
	 	 		<p>&copy; Michael Walker 2016 | </p>
	 	 		<a href="mailto:hello@mikewalker.co"> hello@mikewalker.co</a>		
	  		</div>
	  		<div class="copyright-right">
	  			<p>Developed by Mike Walker | Designed by<a href="http://kindredstudio.ca" target="_blank">Kindred Studio</a></p>
	  		</div>	

	  	</div>
	  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>