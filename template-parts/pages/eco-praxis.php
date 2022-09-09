<?php

// ! Variabled needed for ACF integration
$singlePageGroupImage = get_field("single_page_group_image", 463);
$singlePageGroup = get_field("single_page_group", 463);

// ! Custom defined image sizes @wordpress int
$icons = "title-icon";
$sizes = 'full'; // (thumbnail, medium, large, full or custom size)

// ! Define some variables for easier update across file
$linkToLinkIcon = "https://res.cloudinary.com/dnqicdh71/image/upload/v1640876429/ELSiA/arrow-right.svg";

?>
<div class="container mx-auto p-4" id="what-we-do">
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
  <div class="w-full title">
    <div class="section__title">
      <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting
        content if not display generic default content which is hard coded -->
      <i class="fa-solid fa-map"></i>
      <?php if (!empty($singlePageGroup["section_title"])) { ?>
        <h2><?php echo $singlePageGroup["section_title"]; ?></h2>
      <?php } else { ?>
        <h2>Eco Praxis</h2>
      <?php } ?>
    </div>

    <!-- Sub-title -->
    <div class="section__subtitle">
      <?php if (!empty($singlePageGroup["section_intro"])) { ?>
        <h4><?php echo $singlePageGroup["section_intro"] ?></h4>
      <?php } else { ?>
        <h4>ELSiA promotes the uptake of ecological practices, they are an integral part of the ecological conversion we
          are called to in Laudato Si’.</h4>
      <?php } ?>
    </div>
    <!-- Section description -->
    <div class="section__description">
      <?php if (!empty($singlePageGroup["section_description"])) { ?>
        <p><?php echo $singlePageGroup["section_description"]; ?>
        <?php } else { ?>
        <p>To do so, we are starting with taking a snapshot of Laudato Si’ inspired initiatives from the publication of
          the encyclical to date, this is our baseline survey. The results of the survey will bring forward ways in
          which organisations, universities, dioceses, churches and communities are putting in practice Laudato
          Si’-inspired actions. We believe this will draw strength and inspiration, create powerful synergies to counter
          the devastating effects of climate change before irreversible damage will permanently alter the living
          conditions on this planet. The survey has been developed in close cooperation with Catholic stakeholders in
          Europe.</p>
      <?php } ?>
    </div>
  </div>
</div>