<?php

// ! Variabled needed for ACF integration
$singlePageGroupImage = get_field("single_page_group_image", 464);
$singlePageGroup = get_field("single_page_group", 464);

// ! Custom defined image sizes @wordpress int
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
  <div class="w-full">
    <div class="section__title">
      <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting
        content if not display generic default content which is hard coded -->
      <i class="fa-solid fa-map"></i>
      <?php if (!empty($singlePageGroup["section_title"])) { ?>
        <h2><?php echo $singlePageGroup["section_title"]; ?></h2>
      <?php } else { ?>
        <h2>Eco Spirituality</h2>
      <?php } ?>
    </div>

    <!-- Sub-title -->
    <div class="section__subtitle">
      <?php if (!empty($singlePageGroup["section_intro"])) { ?>
        <h4><?php echo $singlePageGroup["section_intro"] ?></h4>
      <?php } else { ?>
        <h4>Eco spirituality is a manifestation of the spiritual connection between human beings and the environment, it
          connects the science of ecology and spirituality. </h4>
      <?php } ?>
    </div>
    <!-- Section description -->
    <div class="section__description">
      <?php if (!empty($singlePageGroup["section_description"])) { ?>
        <p><?php echo $singlePageGroup["section_description"]; ?>
        <?php } else { ?>
        <p>The shift required to fully embrace a sustainable lifestyle will need to happen firstly and foremost in our
          hearts and minds and under the inspired thought and moral leadership of the Church. This awareness will
          inspire our actions and choices in our day to day life and for this reason each person of faith needs now more
          than ever to nourish their soul with eco-spirituality. Caring for our souls is also caring for our planet.
          ELSiA, with the help of partners and experts, organises activities that will create a safe space to explore
          spiritual tradition of Christianity and explore new ways of liturgy deeply connected with all elements of
          Creation.</p>
      <?php } ?>
    </div>
  </div>
</div>