<?php get_header(); ?>
<?php get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="mx__1280">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <?php if (!empty(get_the_content())) {
                    the_content();
                } else { ?> <h2>No content could be found for this article. If you think this was an error please contact <a href="mailto:stax@stefanstax.com" target="_blank">website administrator</a> or navigate to another page or an article.</h2><?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>