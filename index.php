<?php get_header(); ?>

<?php
  if ( have_posts() ) {
      while ( have_posts() ) {
          ?>
<div class="container">
    <div class="set_size">
        <?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail(array(200, 200));?>
        <p>Amet: <?php echo get_post_meta(get_the_ID(), $key = 'amet', $single = true); ?></p>
        <?php the_content();?>
        <p>E-Mail: <?php echo get_post_meta(get_the_ID(), $key = 'e-mail', $single = true); ?></p>
    </div>
</div>
<?php
    }
  }
?>
<?php get_footer(); ?>