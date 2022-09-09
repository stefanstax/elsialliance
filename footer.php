<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!-- ACF Related Fields -->
<?php
$footerContent = get_field("addresses_group", 132);

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->


<footer id="contact" class="site-footer" role="contentinfo">
  <!-- Footer main div -->
  <div class="mx__1280">
    <div class="row middle-xs">
      <div class="w-full address">
        <div class="box">
          <div class="virtual__address">
            <h5><?php echo $footerContent["contact_information"] ?><a href="mailto:<?php echo $footerContent["email_address"]; ?>"><?php echo $footerContent["email_address"]; ?></a>
            </h5>
            <h5 class="social__media_box">Connect with us: <a href="https://www.linkedin.com/company/european-laudato-si-alliance/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a> <a href="https://twitter.com/ELSiAEurope" target="_blank">
                <i class="fa-brands fa-twitter"></i></a></h5>
          </div>
        </div>
      </div>
      <div class="w-6/12 legal">
        <div class="box">
          <?php if (has_nav_menu('legal-menu')) : ?>
            <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
              <ul class="footer-navigation-wrapper">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'legal-menu',
                    'sub_menu' => true,
                    'items_wrap'     => '%3$s',
                    'container'      => true,
                    'depth'          => 0,
                    'link_before'    => false,
                    'link_after'     => false,
                    'fallback_cb'    => false,
                  )
                );
                ?>
              </ul>
            </nav>
          <?php endif; ?>
        </div>
      </div>
      <div class="w-6/12">
        <a href="https://staxtalks.com/" target="_blank" rel="sponsored"><img class="max-w-[75px] mx-auto" src="https://cdn.staxtalks.com/files/assets/2022/08/03182513/staxtalks-logo.png" alt="Stefan Stax Business Logo - Black colored outline logo - Illustrated logo representing an S" title="Stefan Stax - Helping Small businesses thrive with technological improvements" /></a>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->

</div><!-- #page -->
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    infinite: false,
    slidesPerView: 3,
    spaceBetween: 40,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    },
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
</script>

<?php wp_footer(); ?>

</body>

</html>