<?php
$bannerGroup = get_field("banner_group");
$sizes = 'custom'; // (thumbnail, medium, large, full or custom size)
// Global Variables
$globalBanner = get_field("global_banner", 825);
?>
<div class="page__banner">
    <div class="banner__overlay"></div>
    <!-- Banner display conditional logic -->
    <?php if (!empty($bannerGroup["banner_image"])) {
        echo wp_get_attachment_image($bannerGroup["banner_image"], $sizes, ["class" => "page__banner_background", "alt" => "Elsia -> Making difference with meaningful actions."]);
    } else if (!empty($globalBanner)) {
        echo wp_get_attachment_image($globalBanner, $sizes, ["class" => "page__banner_background", "alt" => "Elsia -> Making difference with meaningful actions."]);
    } else { ?>
        <picture>
            <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/introBanner__elsia.jpg") ?>">
            <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/introBanner__elsia-1024x610.jpg") ?>">
            <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/introBanner__elsia-768x457.jpg") ?>">
            <img src="<?= home_url("/wp-content/uploads/2022/01/intro-banner_cover-mobile.jpg") ?>" alt="Ocean view from the rocks">
        </picture>
    <?php } ?>
    <!-- Banner content for every page except front_page -->
    <?php if (!is_front_page() && empty($bannerGroup["banner_quote"])) { ?>
        <h1><?php echo the_title(); ?> </h1>
    <?php } else if (!is_front_page() && !empty($bannerGroup["banner_quote"])) { ?>
        <!-- Banner quote text -->
        <?php if (!empty($bannerGroup["banner_quote"])) { ?>
            <h1><?php echo $bannerGroup["banner_quote"]; ?></h1>
        <?php } else { ?>
            <h1><?php echo the_title(); ?></h1>
        <?php } ?>
    <?php } else if (is_front_page()) { ?>
        <div class="banner__content">
            <!-- Banner quote text -->
            <?php if (!empty($bannerGroup["banner_quote"])) { ?>
                <h1><?php echo $bannerGroup["banner_quote"]; ?></h1>
            <?php } else {
            ?>
                <h1><?php echo the_title(); ?></h1>
            <?php } ?>
            <!-- Banner email text and url -->
            <!-- <?php if ($bannerGroup["email_text"] && $bannerGroup["email_link"]) { ?>
                <a id="contactRotation" href="mailto:<?php echo $bannerGroup["email_link"] ?>"><?php echo $bannerGroup["email_text"] ?></a>
            <?php } else {
            ?>
                <a id="contactRotation" href="mailto:info@elsia-alliance.eu">Contact Us</a>
            <?php } ?> -->
        </div>
    <?php } ?>
</div>