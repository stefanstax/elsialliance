<?php
// the query
$args = [
  "post_type" => "post",
  "posts_per_page" => -1
];

$the_query = new WP_Query($args);
?>


<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <?php if ($the_query->have_posts()) { ?>
      <?php while ($the_query->have_posts()) {
        $the_query->the_post(); ?>
        <div class="swiper-slide">
          <!-- Blog post link to | Custom or Post link  -->
          <a class="min-h-[120px] flex flex-col justify-between items-start bg-[#7ba9a9] text-[#f9f9f9] hover:bg-[#1a2e2e] hover:[font-black] rounded-md drop-shadow-xl p-2" href="<?php echo get_the_permalink(); ?>">
            <!-- Blog post title -->
            <h4 class="text-lg"><?php the_title(); ?></h4>
            <!-- Blog post icon  -->
            <span class="flex gap-[10px] justify-start items-center">
              <iconify-icon width="18" height="18" icon="akar-icons:book-open"></iconify-icon> Read for free
            </span>
          </a>
        </div>
      <?php } ?>

      <?php wp_reset_postdata(); ?>

  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <!-- <div class="swiper-scrollbar"></div> -->
</div>
<?php } else { ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php } ?>