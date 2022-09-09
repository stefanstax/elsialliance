<?php get_header(); ?>

<!-- Banner -->
<?php get_template_part("/template-parts/parts/introBanner/introBanner"); ?>
<div class="mx__1280 flex-col archive">
    <div class="row">
        <?php
        while (have_posts()) : the_post();
        ?> <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="box">
                    <?php
                    // TODO Blog post featured image - add a fall back
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                    if ($featured_img_url) {
                    ?>
                        <figure>
                            <img loading="lazy" src="<?php echo $featured_img_url ?>" width="150px" height="150px" />
                        </figure>
                    <?php }
                    // Blog post title
                    ?> <h4><?php the_title(); ?></h4>
                    <!-- Blog post category - linkable -->

                    <!-- Blog post excerpt (150 characters) -->
                    <?php
                    the_excerpt();
                    ?>
                    <!-- Blog post link to  -->
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Continue reading <img loading="lazy" src="https://res.cloudinary.com/dnqicdh71/image/upload/v1640876429/ELSiA/arrow-right.svg" /></a>
                </div>
            </div> <?php
                endwhile;
                    ?>

        <?php
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>