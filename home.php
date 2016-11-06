<!-- This is the blog index -->

<?php get_header();  ?>

<div class="main blog-index">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <div class="blog-post">
        <a href="<?php the_permalink(); ?>"><img src=" <?php echo get_the_post_thumbnail_url($post, 'full'); ?> " alt=""></a>
        <p class="blog-date"><?php the_time('F j, Y'); ?></p>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <h3><a href="<?php the_permalink(); ?>">Continue reading</a></h3>
      </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>