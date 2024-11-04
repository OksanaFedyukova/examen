<?php get_header(); ?>
<main style="padding: 2rem;">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
  ?>
</main>
<?php get_footer(); ?>
