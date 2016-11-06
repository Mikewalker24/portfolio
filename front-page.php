<?php get_header();  ?>

<div class="main">
<!--   <div class="container">
 -->
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

         <section class="featured-category">
			<div class="container">
				<div class="left">
					<figure>
						<img src="<?php the_field('left_image') ?>" alt="">
						<figcaption>
							<h2><?php the_field('left_title') ?></h2>
							<p><?php the_field('left_description') ?></p>
							<div class="button-container"><a href="#">Shop Now</a></div>
						</figcaption>
					</figure>
				</div><!-- 
				 --><div class="right"><!-- 
					 --><div class="top">
						<div class="top-left">
							<img src="<?php the_field('top_left_image') ?>" alt="">
						</figure>
							
						</div><!-- 
						 --><div class="top-right">
							<img src="<?php the_field('top_right_image') ?>" alt="">
						</figure>
						</div>
					</div><!-- 
					 --><div class="bottom">
						<figure>
							<img src="<?php the_field('bottom_image') ?>" alt="">
							<figcaption>
								<h2><?php the_field('bottom_hover_text') ?></h2>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>

        <section class="new-product">
	        <div class="container">
	        	<h2>New Product</h2>
		        <div class="flickity" data-flickity='{ "wrapAround": true, "cellAlign": "center" }'>
		        	<div class="flickity-cell clearfix">
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        	</div>

		        	<div class="flickity-cell">
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        		<figure>
		        			<img src="http://placekitten.com/300/300" alt="">
		        			<figcaption>
		        				<h4>Small Terrariums Plant for Desk</h4>
		        				<h5>$69</h5>
		        			</figcaption>
		        		</figure>
		        	</div>
		        </div>
	        </div>
        </section>

      <?php endwhile; // end the loop?>

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>