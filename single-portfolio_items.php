<?php get_header(); ?>

<div class="portfolio main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h2 class="entry-title"><?php the_title(); ?></h2>
          <hr>
          <p><?php the_field('project_subtitle'); ?></p>
          <img src="<?php the_field('project_image'); ?>" alt="">
          <p><?php the_field('project_credits'); ?></p>
          <hr class="divider">
          <div class="description-container">
            <h3><?php the_field('description_heading'); ?></h3>
            <p><?php the_field('description_text'); ?></p>
            <div class="portfolio-images">
              <img src="<?php the_field('description_image_left'); ?>" alt="">
              <img src="<?php the_field('description_image_right'); ?>" alt="">
            </div>
          </div>


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>