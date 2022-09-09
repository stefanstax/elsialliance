<?php

// ! Variabled needed for ACF integration
$singlePageGroupImage = get_field("single_page_group_image", 462);
$singlePageGroup = get_field("single_page_group", 462);

// ! Custom defined image sizes @wordpress int
$icons = "title-icon";
$sizes = 'full'; // (thumbnail, medium, large, full or custom size)

// ! Define some variables for easier update across file
$linkToLinkIcon = "https://res.cloudinary.com/dnqicdh71/image/upload/v1640876429/ELSiA/arrow-right.svg";

?>
<div class="container mx-auto mt-28 p-4">
  <!-- Section Intro Image -->

  <div class="w-full banner__mini">
    <?php if (!empty($singlePageGroupImage)) {
      echo wp_get_attachment_image($singlePageGroupImage, $sizes);
    } else { ?>
      <picture>
        <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo.jpg") ?>">
        <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-1024x213.jpg") ?>">
        <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-768x160.jpg") ?>">
        <img src="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-mobile.jpg") ?>" alt="Ocean view from the rocks">
      </picture>
    <?php } ?>
  </div>
  <!-- Section Title -->
  <!-- Title for a box -->
  <div class="w-full">
    <div class="section__title">
      <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting
        content if not display generic default content which is hard coded -->
      <i class="fa-solid fa-map"></i>
      <?php if (!empty($singlePageGroup["section_title"])) { ?>
        <h2><?php echo $singlePageGroup["section_title"]; ?></h2>
      <?php } else { ?>
        <h2>Eco Advocacy</h2>
      <?php } ?>
    </div>

    <!-- Sub-title -->
    <div class="section__subtitle">
      <?php if (!empty($singlePageGroup["section_intro"])) { ?>
        <h4><?php echo $singlePageGroup["section_intro"] ?></h4>
      <?php } else { ?>
        <h4>ELSiA promotes the message of the Catholic church on themes of integral ecology and climate and social
          justice, particularly at the EU level.</h4>
      <?php } ?>
    </div>
    <!-- Section description -->
    <div class="section__description">
      <?php if (!empty($singlePageGroup["section_description"])) { ?>
        <p><?php echo $singlePageGroup["section_description"]; ?>
        <?php } else { ?>
        <p>To do so, we propose a three-pronged approach: coordinating Laudato Si’ advocacy towards European
          institutions (eco-advocacy), promoting the exchange of ideas and best practices characterising a
          sustainable
          lifestyle (eco-praxis) and becoming a European laboratory for the spirituality of ecological conversion
          (eco-spirituality).</p>
      <?php } ?>
    </div>
  </div>
</div>