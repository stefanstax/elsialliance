<?php

// ! Variabled needed for ACF integration


$ecoAdvocacyGroup = get_field("advocacy_reference_content", 462);
$ecoPraxisGroup = get_field("praxis_reference_content", 463);
$ecoSpiritualityGroup = get_field("spirituality_reference_content", 464);
$homePageGroup = get_field("title_group", 461);

// ! Custom defined image sizes @wordpress int
$icons = "title-icon";
$sizes = 'full'; // (thumbnail, medium, large, full or custom size)

// ! Define some variables for easier update across file
$linkToLinkIcon = "https://res.cloudinary.com/dnqicdh71/image/upload/v1640876429/ELSiA/arrow-right.svg";

?>
<div class="container mx-auto mb-28 p-4" id="what-we-do">
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
  <div class="w-full">
    <div class="section__title">
      <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting content if not display generic default content which is hard coded -->
      <i class="fa-solid fa-map"></i>
      <?php if (!empty($singlePageGroup["section_title"])) { ?>
        <h2><?php echo $singlePageGroup["section_title"]; ?></h2>
      <?php } else { ?>
        <h2>What we do</h2>
      <?php } ?>
    </div>
    <div class="section__subtitle">
      <!-- Sub-title -->
      <?php if ($singlePageGroup["section_intro"]) { ?>
        <h4><?php echo $singlePageGroup["section_intro"] ?></h4>
      <?php } ?>
    </div>
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

  <div class="flex flex-wrap gap-[20px] justify-center items-center">
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
          <figure>
            <img loading="lazy" width="350px" height="350px" class="rounded-5 colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco-advocacy_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
          </figure>
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php echo $ecoAdvocacyGroup["title"]; ?>
        </h3>
      </a>
    </div>
    <!-- Eco Praxis -->
    <div class="wwd">
      <a href="<?php if (!empty($ecoPraxisGroup["link"])) {
                  echo $ecoPraxisGroup["link"];
                } else {
                  echo "eco-praxis";
                } ?>" class="box">
        <!-- Banner for a box -->
        <?php if (!empty($ecoPraxisGroup["image"])) {
          echo wp_get_attachment_image($ecoPraxisGroup["image"], $sizes);
        } else { ?>
          <figure>
            <img loading="lazy" width="350px" height="350px" class="rounded-5 colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco_praxis_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
          </figure>
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php echo $ecoPraxisGroup["title"]; ?>
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
          <figure>
            <img loading="lazy" width="350px" height="350px" class="rounded-5 colored-gradient-bg" src="https://elsiaalliandev.wpengine.com/wp-content/uploads/2021/12/eco_spirituality_background-300x300.jpg" alt="ELSiA intro banner showing view on the ocean from a distance">
          </figure>
        <?php } ?>
        <!-- Title for a box -->
        <h3>
          <?php echo $ecoSpiritualityGroup["title"]; ?>
        </h3>
      </a>
    </div>
  </div>
</div>