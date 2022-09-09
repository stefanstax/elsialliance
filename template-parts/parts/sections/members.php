<?php

// ! Looping specific custom post type
$args = array(
  'post_type' => 'member',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
);
$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) { ?>
  <!-- Section content -->
  <div class="w-full flex flex-wrap gap-[5px] my-6 justify-center items-center">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="w-5/12 lg:w-3/12 xl:w-2/12 bg-[#fff] justify-center items-center p-3 rounded-2xl">
        <a class="w-full" href="<?php echo the_field("organisation_link"); ?>" target="_blank">
          <?php if (get_the_post_thumbnail()) : /* Show the featured image if there is one */ ?>
            <?php the_post_thumbnail(); ?> <?php endif; ?>
        </a>
      </div>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>

<?php } ?>