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
	        	<div class="flickity-cell flickity-cell1">
	        		<h2>Plant For Interior</h2>
	        		<p>Bring freshness for your architecture</p>
	        	</div>
	        	<div class="flickity-cell flickity-cell2">
	        		<h2>Plant For Interior</h2>
	        		<p>Bring freshness for your architecture</p>
	        	</div>
	        	<div class="flickity-cell flickity-cell3">
	        		<h2>Plant For Interior</h2>
	        		<p>Bring freshness for your architecture</p>
	        	</div>
	        </div>
        </section>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>