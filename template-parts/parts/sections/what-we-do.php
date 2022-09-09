<?php

// ! Variabled needed for ACF integration

$ecoAdvocacyGroup = get_field("advocacy_reference_content", 462);
$ecoPraxisGroup = get_field("praxis_reference_content", 463);
$ecoSpiritualityGroup = get_field("spirituality_reference_content", 464);
$homePageGroup = get_field("title_group", 461);

// ! Custom defined image sizes @wordpress int
$sizes = 'banner-default';
// ! Define some variables for easier update across file
$linkToLinkIcon = "https://res.cloudinary.com/dnqicdh71/image/upload/v1640876429/ELSiA/arrow-right.svg";

?>
<div class="container mx-auto p-4" id="what-we-do">
  <div class="flex flex-wrap gap-[20px]">
    <!-- Section Intro Image -->
    <div class="w-full banner__mini">
      <picture>
        <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo.jpg") ?>">
        <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-1024x213.jpg") ?>">
        <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-768x160.jpg") ?>">
        <img src="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-mobile.jpg") ?>" alt="Ocean view from the rocks">
      </picture>
    </div>
    <!-- Section Title -->
    <!-- Title for a box -->
    <a href="<?php if (!empty($homePageGroup["link"])) {
                echo $homePageGroup["link"];
              } else {
                echo home_url("/what-we-do");
              } ?>">
      <div class="w-full">
        <div class="section__title">
          <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting
        content if not display generic default content which is hard coded -->
          <i class="fa-solid fa-map"></i>
          <?php if (!empty($homePageGroup["section_title"])) { ?>
            <h2><?php echo $homePageGroup["section_title"]; ?></h2>
          <?php } else { ?>
            <h2>What we do</h2>
          <?php } ?>
        </div>
    </a>

    <!-- Sub-title -->
    <div class="section__subtitle">
      <?php if ($homePageGroup["section_intro"]) { ?>
        <h4><?php echo $homePageGroup["section_intro"] ?></h4>
      <?php } ?>
    </div>
    <!-- Section description -->
    <div class="section__description">
      <?php if (!empty($homePageGroup["section_description"])) { ?>
        <p><?php echo $homePageGroup["section_description"]; ?>
        <?php } else { ?>
        <p>To do so, we propose a three-pronged approach: coordinating Laudato Si’ advocacy towards European
          institutions (eco-advocacy), promoting the exchange of ideas and best practices characterising a
          sustainable
          lifestyle (eco-praxis) and becoming a European laboratory for the spirituality of ecological conversion
          (eco-spirituality).</p>
      <?php } ?>
    </div>
  </div>
  <div class="w-full flex flex-wrap gap-[20px] justify-center items-center">
    <!-- Eco Advocacy -->
    <div class="wwd">
      <a class="box" href="<?php if (!empty($ecoAdvocacyGroup["link"])) {
                              echo $ecoAdvocacyGroup["link"];
                            } else {
                              echo "eco-advocacy";
                            } ?>">
        <!-- Banner for a box -->
        <?php if (!empty($ecoAdvocacyGroup["image"])) {
          echo wp_get_attachment_image($ecoAdvocacyGroup["image"], $sizes);
        } else { ?>
          <img loading="lazy" width="350px" height="350px" class="rounded-5 min-h-[350px] colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco-advocacy_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php if (!empty($ecoAdvocacyGroup["title"])) {
            echo $ecoAdvocacyGroup["title"];
          } else { ?>
            Eco Advocacy
          <?php } ?>
        </h3>
      </a>
    </div>
    <!-- Eco Praxis -->
    <div class="wwd">
      <a href="<?php if (!empty($ecoPraxisGroup["link"])) {
                  echo $ecoPraxisGroup["link"];
                } else {
                  echo "eco-praxis";
                } ?>" class=" box">
        <!-- Banner for a box -->
        <?php if (!empty($ecoPraxisGroup["image"])) {
          echo wp_get_attachment_image($ecoPraxisGroup["image"], $sizes);
        } else { ?>
          <img loading="lazy" width="350px" height="350px" class="rounded-5 min-h-[350px] colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco_praxis_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php if (!empty($ecoPraxisGroup["title"])) {
            echo $ecoPraxisGroup["title"];
          } else { ?>
            Eco Praxis
          <?php } ?>
        </h3>
      </a>
    </div>
    <!-- Eco Spirituality -->
    <div class="wwd">
      <a href="<?php if (!empty($ecoSpiritualityGroup["link"])) {
                  echo $ecoSpiritualityGroup["link"];
                } else {
                  echo "eco-spirituality";
                } ?>" class="box">
        <!-- Banner for a box -->
        <?php if (!empty($ecoSpiritualityGroup["image"])) {
          echo wp_get_attachment_image($ecoSpiritualityGroup["image"], $sizes);
        } else { ?>
          <img loading="lazy" width="350px" height="350px" class="rounded-5 min-h-[350px] colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco_spirituality_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php if (!empty($ecoSpiritualityGroup["title"])) {
            echo $ecoSpiritualityGroup["title"];
          } else { ?>
            Eco Spirituality
          <?php } ?>
        </h3>
      </a>
    </div>
  </div>
</div>
</div>