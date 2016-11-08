<?php get_header();  ?>

<div class="main">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <section class="splash">
          <div class="splash-container">
            <h1><?php the_field('splash_heading') ?></h1>
            <hr>
            <h3><?php the_field('splash_subheading'); ?></h3>
          </div>
        </section>
       
        <section class="recent">
          <h2><?php the_field('recent_heading'); ?></h2>
          <div class="recent-container container">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
          </div>
        </section>

        <section class="hi">
          <div class="container">
            <div class="hi-left">
              <h3><?php the_field('hi_heading'); ?></h3>
              <p><?php the_field('hi_copy'); ?></p>
            </div><!-- 
             --><div class="hi-right">
              <img src="<?php the_field('hi_image'); ?>" alt="">
            </div>
          </div>
        </section>

        <section class="what">
          
          <h2><?php the_field('what_heading'); ?></h2>
          <?php while(has_sub_field('what_content')): ?>
            <div class="what-container">
              <h3><?php the_sub_field('what_subheading'); ?></h3>
              <p><?php the_sub_field('what_copy'); ?></p>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </section>

        <footer>
          <h3><?php the_field('footer_heading'); ?></h3>
          <?php while(has_sub_field('footer_links')): ?>
            <div class="footer-container">
              
            </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </footer>
        

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>