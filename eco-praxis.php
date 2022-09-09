<?php

// Template Name: Page | Eco Praxis
get_header();
get_template_part("/template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="my-28">
  <?php
  get_template_part("/template-parts/pages/eco-praxis", "part");
  if (!empty(get_the_content())) { ?>
    <div class="container mx-auto mb-28 p-4">
      <?php
      echo the_content(); ?>
    </div>
  <?php } else { ?>
    <div class="container mx-auto my-28 p-4">
      <h2>We're making some content as we speak. Check again in a couple of days</h2>
    </div>
  <?php }
  get_footer();

  ?>
</div>