<?php

// Template Name: Page | News

get_header();
get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="my-28">
    <?php
    get_template_part("template-parts/pages/news", "part"); ?>
</div>
<?php get_footer(); ?>