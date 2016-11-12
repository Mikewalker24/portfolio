<?php get_header();  ?>

<div class="main">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <section class="splash" id="splash">
          <div class="splash-container">
            <h1><?php the_field('splash_heading') ?></h1>
            <hr>
            <h3><?php the_field('splash_subheading'); ?></h3>
          </div>
          <a href="#recent" id="chevron"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a>
        </section>
       
        <section class="recent" id="recent">
          <h2><?php the_field('recent_heading'); ?></h2>
          <div class="recent-container container">
            <div class="image-container">
             <?php while(has_sub_field('recent_images')): ?>
                <figure>
                  <a href="<?php the_sub_field('recent_url'); ?>"><img src="<?php the_sub_field('recent_image');?>" alt=""></a>
                  <a href="<?php the_sub_field('recent_url'); ?>"><figcaption>
                    <h2>Project Info</h2>
                  </figcaption></a>
                </figure>
                
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>
        </section>

        <section class="hi" id="hi">
          <div class="container">
           <div class="hi-container">
           
            <div class="hi-left">
              <div class="hi-outline">
                  <h3><?php the_field('hi_heading'); ?></h3>
                  <p><?php the_field('hi_copy'); ?></p>
              </div>
            </div><!-- 

             --><div class="hi-right">
              <img src="<?php the_field('hi_image'); ?>" alt="">
            </div>

          </div>
        </div>
        </section>

        <section class="what" id="what">
          <div class="container">
            <div class="heading-container clearfix">
              <h2><?php the_field('what_heading'); ?></h2>
            </div>
            <?php while(has_sub_field('what_content')): ?>
              <div class="what-container">
                <h4><?php the_sub_field('what_number'); ?></h4>
                <h3><?php the_sub_field('what_subheading'); ?></h3>
                <p><?php the_sub_field('what_copy'); ?></p>
              </div>
              <hr>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
          </div>
        </section>
        

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>