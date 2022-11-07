<?php
get_header();
// Template Name: Who We Are Page

$singlePageGroupImage = get_field("single_page_group_image", 460);
$sizes = 'medium-banner'; // (thumbnail, medium, large,  or custom size)

$singlePageGroup = get_field("single_page_group", 460);
$singlePageBulletInfo = get_field("single_page_group_bullet_info", 460);
// Global Variables
$globalBanner = get_field("global_banner", 825);
?>

<!-- Banner -->
<?php get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>

<div class="container mx-auto my-28 p-4 nav_offset">
  <div class="w-full page__content">
    <div class="banner">
      <?php if (!empty($singlePageGroupImage)) {
        echo wp_get_attachment_image($singlePageGroupImage, $sizes);
      } else if (!empty($globalBanner)) {
        echo wp_get_attachment_image($globalBanner, $sizes);
      } else { ?>
        <!-- Banner Image - use fallsafe if no image was found -->
        <picture class="banner">
          <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section.jpg") ?>">
          <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section-800x300.jpg") ?>">
          <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/who-we-are_section-768x300.jpg") ?>">
          <img src="<?= home_url("/wp-content/uploads/2022/01/who-we-are_cover-mobile.jpg") ?>" alt="Flowers">
        </picture>
      <?php } ?>
    </div>
    <!-- Page Title -->
    <div class="w-full">
      <div class="section__title">
        <i class="fa-solid fa-users"></i>
        <?php if (!empty($singlePageGroup["section_title"])) { ?>
          <h2><?php echo $singlePageGroup["section_title"]; ?></h2>
        <?php } else { ?>
          <h2><?php the_title(); ?></h2>
        <?php } ?>
      </div>
      <div class="section__description">
        <?php if (!empty($singlePageGroup["section_intro"])) { ?>
          <h4><?php echo $singlePageGroup["section_intro"] ?></h4>
        <?php } ?>
      </div>
      <p style="margin-top: 3rem;"><?php the_field("wwa_description"); ?></p>
    </div>

    <div class="w-full">
      <?php if ($singlePageBulletInfo) { ?>
        <ul style="text-align:center">
          <h4 class="w-full"><?php echo $singlePageBulletInfo["point_title"]; ?>:</h4>
          <div class="flex flex-wrap gap-[5px] justify-center items-stretch">
            <li class="w-full md:w-6/12 lg:w-4/12 xl:w-3/12 bg-[#425f4b] text-[#f9f9f9] p-2 rounded-xl">
              <p><?php echo $singlePageBulletInfo["point_one"]; ?></p>
            </li>
            <li class="w-full md:w-6/12 lg:w-4/12 xl:w-3/12 bg-[#425f4b] text-[#f9f9f9] p-2 rounded-xl">
              <p><?php echo $singlePageBulletInfo["point_two"]; ?></p>
            </li>
            <li class="w-full md:w-6/12 lg:w-4/12 xl:w-3/12 bg-[#425f4b] text-[#f9f9f9] p-2 rounded-xl">
              <p><?php echo $singlePageBulletInfo["point_three"]; ?></p>
            </li>
            <li class="w-full md:w-6/12 lg:w-4/12 xl:w-3/12 bg-[#425f4b] text-[#f9f9f9] p-2 rounded-xl">
              <p><?php echo $singlePageBulletInfo["point_four"]; ?></p>
            </li>
            <li class="w-full md:w-6/12 lg:w-4/12 xl:w-3/12 bg-[#425f4b] text-[#f9f9f9] p-2 rounded-xl">
              <p><?php echo $singlePageBulletInfo["point_five"]; ?></p>
            </li>
          </div>
        </ul>
      <?php } ?>
    </div>
    <div class="w-full members">
      <?php include("template-parts/parts/sections/members.php"); ?>
    </div>
    <!-- WP Content -->
    <div class="w-full wp__post">
      <?php if (!empty(get_the_content()) or get_the_title()) {
        the_content();
      } else { ?>
        <h2>No cotent found for given page. If you think this was a mistake, please contact the <a href="mailto:contact@stefanstax.me" target="_blank">website administrator</a> or navigate with menu to
          another
          page.</h2>
      <?php } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>