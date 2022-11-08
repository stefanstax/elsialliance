<?php get_header(); ?>
<?php get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="container mx-auto my-28 p-4">
  <div class="single__content">
    <?php the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>