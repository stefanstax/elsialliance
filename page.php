<?php
$titleGroup = get_field("title_group");
$backgroundImage = get_field("background_image");
$titleGroupImage = $titleGroup["image"];
// Global Variables
$globalBanner = get_field("global_banner", 825);
get_header();
?>
<?php

get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>

<div class="container mx-auto mb-28 p-4">
  <div class="page__content">
    <!-- Banner Image - use fallsafe if no image was found -->
    <?php if (!empty($backgroundImage)) { ?>
      <img class="page__intro_image" <?php awesome_acf_responsive_image($backgroundImage, 'fixed-banner', '1920px'); ?> alt="Elsia -> Making difference with meaningful actions." />
    <?php } else if (!empty($globalBanner)) { ?>
      <img class="page__intro_image" <?php awesome_acf_responsive_image($globalBanner, 'fixed-banner', '1920px'); ?> alt="Elsia -> Making difference with meaningful actions." />
    <?php } else { ?>
      <div class="w-full banner__mini">
        <picture>
          <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/activities_cover-photo.jpg") ?>">
          <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/activities_cover-photo-800x300.jpg") ?>">
          <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/activities_cover-photo-768x300.jpg") ?>">
          <img src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2022/01/activities_cover-mobile.jpg" alt="View from the tree hill">
        </picture>
      </div>
    <?php } ?>
    <!-- Page Title -->
    <div class="w-full">
      <div class="section__title">
        <i class="fa-solid fa-users"></i>
        <?php if (!empty($titleGroup["section_title"])) { ?>
          <h2><?php echo $titleGroup["section_title"]; ?></h2>
        <?php } else { ?>
          <h2><?php the_title(); ?></h2>
        <?php } ?>
      </div>
      <div class="section__description">
        <?php if (!empty($titleGroup["section_intro"])) { ?>
          <h4><?php echo $titleGroup["section_intro"] ?></h4>
          <?php if (!empty($titleGroup["link"])) { ?>
            <a href="<?php echo $titleGroup["link"]; ?>">
              <?php if (!empty($titleGroup["link_text"])) {
                echo $titleGroup["link_text"];
              } else { ?> Learn More <?php } ?> </a><?php } ?>
        <?php } ?>
      </div>
      <p style="margin-top: 3rem;"><?php the_field("wwa_description"); ?></p>
    </div>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</div>
</div>
<?php
get_footer();
