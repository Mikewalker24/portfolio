<?php 
/*Template Name: Contact*/
get_header();  ?>

<div class="main contact">
  <div class="container">

    <div class="contact-content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="contact-left">
          <h2><?php the_field('contact_left_h2'); ?></h2>
          <?php the_field('contact_left_copy') ?>
        </div><!-- 
         --><div class="contact-right">
          <h2><?php the_field('contact_right_h2'); ?></h2>
          <?php echo do_shortcode('[contact-form-7 id="82" title="Contact form 1"]'); ?>
          
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>