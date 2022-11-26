<?php
// Header
get_header();

// Content blocks
get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="container px-4 mx-auto my-28">
    <?php
    the_content();
    ?>
</div>
<?php
// Footer
get_footer();
