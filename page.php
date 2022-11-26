<?php
// $titleGroup = get_field("title_group");
// $backgroundImage = get_field("background_image");
// $titleGroupImage = $titleGroup["image"];
// Global Variables
$globalBanner = get_field("global_banner", 825);
get_header();
?>
<?php

get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>

<div class="container mx-auto mb-28 p-4">
  <div class="page_content">
    <?php the_content(); ?>
  </div>
</div>
<?php
get_footer();