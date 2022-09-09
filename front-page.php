<?php
// Header
get_header();

// Content blocks
get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="my-28">
    <?php
    get_template_part("template-parts/parts/sections/who-we-are", "part");
    get_template_part("template-parts/parts/sections/what-we-do", "part");
    get_template_part("template-parts/parts/sections/news", "part"); ?>
</div>
<?php
// Footer
get_footer();
