<?php
$whoWeAreBackground = get_field("background_image", 460);

$sizes = 'medium-banner'; // (thumbnail, medium, large,  or custom size)

$hero = get_field("point_group", 460);
$titleGroup = get_field("title_group", 460);
?>
<!-- Main container -->
<div class="container mx-auto p-4" id="whoWeAre">
  <!-- Blocks intregrated with ACF -->
  <div class="flex flex-wrap gap-[20px] wwa">
    <div class="w-full banner__mini">
      <!-- Banner for a box -->
      <?php if ($whoWeAreBackground) {
        echo wp_get_attachment_image($whoWeAreBackground, $sizes);
      } else { ?>
        <picture>
          <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section.jpg") ?>">
          <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section-800x300.jpg") ?>">
          <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section-768x300.jpg") ?>">
          <img src="<?= home_url("/wp-content/uploads/2022/01/who-we-are_cover-mobile.jpg") ?>" alt="Flowers">
        </picture>
      <?php } ?>
      <!-- Title for a box -->
      <div>
        <a href="<?php if (!empty($titleGroup["link"])) {
                    echo $titleGroup["link"];
                  } else {
                    echo "https://elsiaalliandev.wpengine.com/who-we-are";
                  } ?>">
          <div class="section__title">
            <!-- empty value check whether the field has any value assigned to it if yes proceed with presenting content if not display generic default content which is hard coded -->
            <i class="fa-solid fa-users"></i>
            <?php if (!empty($titleGroup["section_title"])) { ?>
              <h2><?php echo $titleGroup["section_title"]; ?></h2>
            <?php } else { ?>
              <h2>[Fallback] Who We Are</h2>
            <?php } ?>
          </div>
        </a>
        <div class="section__subtitle">
          <?php if (!empty($titleGroup["section_intro"])) { ?>
            <h4><?php echo $titleGroup["section_intro"] ?></h4>
            <!-- Removed per request -->
            <!-- <?php if (!empty($titleGroup["link"])) { ?> <a href="<?php echo $titleGroup["link"]; ?>">Learn more <i
              style="margin-left: 5px;" class="fa-solid fa-share"></i></a><?php } ?> -->
          <?php } else { ?>
            <h4>[Fallback] The European Laudato Si’ Alliance is a network of Catholic organisations working together to
              bring the
              encyclical letter Laudato Si’ to life. Founded in 2019, it is currently composed by six members. They are:
              Caritas Europa, CIDSE, COMECE, JESC, Justice and Peace Europe and the Laudato Si’ Movement.</h4>
            <!-- Removed per request -->
            <!-- <?php if (!empty($titleGroup["link"])) { ?> <a href="<?php echo $titleGroup["link"]; ?>">Learn more <i style="margin-left: 5px;" class="fa-solid fa-share"></i></a><?php } ?> -->
          <?php } ?>
        </div>
        <div class="section__description">
          <p><?php if (!empty($titleGroup["section_description"])) {
                echo $titleGroup["section_description"];
              } else { ?>
              [Fallback] ELSiA intends to promote ecological justice and the social teaching of the Church as a shared and
              coordinated commitment of Catholic Alliances. ELSiA seeks to pool the existing capacities of Caritas Europa,
              CIDSE, COMECE, JESC, Justice and Peace Europe and the Laudato Si’ Movement with regard to integral ecology
              and the ecological conversion proposed by Pope Francis.
            <?php } ?></p>
        </div>
      </div>
    </div>
    <?php include("members.php"); ?>
  </div>
</div>