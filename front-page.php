<?php get_header();  ?>

<div class="main">
<!--   <div class="container">
 -->
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <section class="hero">
	        
	        <div class="flickity" data-flickity='{ "wrapAround": true }'>
	        	<?php while(has_sub_field('hero_slider')): ?>
		        	<div class="flickity-cell" style="background-image: url(<?php the_sub_field('hero_image'); ?>);background-size: cover;">
		        		<h2><?php the_sub_field('hero_title'); ?></h2>
		        		<p><?php the_sub_field('hero_subtitle'); ?></p>
		        		<div class="button-container"><a href="#">Shop Now</a></div>
		        	</div>
		        <?php endwhile; ?>
	        </div>

			

        </section>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>