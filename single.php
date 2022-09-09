<?php
$titleGroup = get_field("title_group");
$sizes = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<?php get_header(); ?>
<?php get_template_part("template-parts/parts/introBanner/introBanner", "part"); ?>
<div class="container mx-auto my-28 p-4">
  <!-- Section Intro Image -->

  <div class="w-full banner__mini">
    <?php if (!empty(get_the_post_thumbnail())) {
      echo get_the_post_thumbnail();
    } else if (!empty($titleGroup["cover_image"])) {
      echo wp_get_attachment_image($titleGroup["cover_image"], $sizes);
    } else { ?>
      <picture>
        <source media="(min-width:1024px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo.jpg") ?>">
        <source media="(min-width:768px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-1024x213.jpg") ?>">
        <source media="(max-width:767px)" srcset="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-photo-768x160.jpg") ?>">
        <img src="<?= home_url("/wp-content/uploads/2022/01/what-we-do_cover-mobile.jpg") ?>" alt="Ocean view from the rocks">
      </picture>
    <?php } ?>
  </div>
  <!-- Title for a box -->
  <div class="w-full">
    <div class="section__title">
      <i class="fa-solid fa-scroll"></i>
      <h2><?php if (!empty($titleGroup["section_title"])) {
            echo $titleGroup["section_title"];
          } else {
            the_title();
          } ?>
      </h2>
    </div>
    <div class="section__subtitle">
      <h4>
        <?php if (!empty($titleGroup["section_intro"])) {
          echo $titleGroup["section_intro"];
        } else if (has_excerpt()) {
          the_excerpt();
        } else {
          echo "";
        } ?>
      </h4>
    </div>
    <div class="section__description">
      <p><?php if (!empty($titleGroup["section_description"])) {
            echo $titleGroup["section_description"];
          }
          ?>
      </p>
    </div>
  </div>
  <!-- WordPress Editor content goes below -->
  <div class="w-full">
    <div class="post__content">
      <?php if (!empty(get_the_content())) {
        the_content();
      } else { ?> <h2>No content could be found for this article. If you think this was an error please
          contact <a href="mailto:goodpeople@stefanstax.me?subject='Elsia Website Content | Inquiry'" target="_blank">website administrator</a> or navigate to
          another page or an article.</h2><?php } ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>