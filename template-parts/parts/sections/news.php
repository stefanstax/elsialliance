<?php
// Connection to ACF fields
$titleGroup = get_field("title_group");
$homePageGroup = get_field("title_group", 467);

// the query
$args = [
  "post_type" => "post",
  "posts_per_page" => -1
];

$the_query = new WP_Query($args);
?>


<div class="container mx-auto p-4" id="news">
  <div class="container">
    <a href="<?php if (!empty($homePageGroup["link"])) {
                echo $homePageGroup["link"];
              } else {
                echo home_url("/news");
              } ?>">
      <div class="w-full title">
        <div class="section__title">
          <i class="fa-solid fa-radio"></i>
          <?php if (!empty($homePageGroup["section_title"])) { ?>
            <h2><?php echo $homePageGroup["section_title"]; ?></h2>
          <?php } else { ?>
            <h2>News</h2>
          <?php } ?>
        </div>
    </a>

    <!-- Sub-title -->
    <div class="section__subtitle">
      <h4>
        <?php
        if (!empty($homePageGroup["section_intro"])) {
          echo $homePageGroup["section_intro"];
        } else {
          echo "Stay up to date with our work and read about upcoming initiatives.";
        } ?>
      </h4>
    </div>
    <!-- Section description -->
    <div class="section__description">
      <?php if (!empty($homePageGroup["section_description"])) { ?>
        <p><?php echo $homePageGroup["section_description"]; ?>
        <?php } ?>
    </div>
  </div>
  <div class="container">
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
              <a class="flex flex-col bg-[#7ba9a9] text-[#f9f9f9] hover:bg-[#1a2e2e] hover:[font-black] rounded-xl drop-shadow-xl p-3" href="<?php echo get_the_permalink(); ?>">
                <!-- Blog post title -->
                <p><?php the_title(); ?></p>
                <!-- Blog post icon  -->
                <span class="flex justify-start items-center">Learn more</span>
              </a>
            </div>
          <?php } ?>

          <?php wp_reset_postdata(); ?>

      </div>
      <!-- <div class="swiper-pagination"></div> -->

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
  <?php } else { ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php } ?>
  </div>
</div>