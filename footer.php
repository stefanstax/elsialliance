<!-- ACF Related Fields -->
<?php
$footerContent = get_field("addresses_group", 132);

// Logo
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

// Website Description
$site_description = get_bloginfo('description');

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->


<footer id="contact" class="site-footer" role="contentinfo">
  <!-- Footer main div -->
  <div class="container flex justify-center items-start gap-[40px] mx-auto p-4">
    <div class="flex flex-col justify-start items-start w-full md:w-6/12">
      <?php
      if (has_custom_logo()) {
        echo '<img class="exclude__global" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
      } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
      } ?>
      <p><?php echo $site_description; ?></p>
      <div class="bg-slate-50 shadow-2xl w-full max-w-[200px] h-[2px] mb-8"></div>
      <div class="flex gap-[10px] text-white items-center">
        <a href="https://www.linkedin.com/company/european-laudato-si-alliance/" target="_blank">
          <iconify-icon width="24" height="24" icon="akar-icons:linkedin-v2-fill"></iconify-icon>
        </a>
        <a href="https://twitter.com/ELSiAEurope" target="_blank">
          <iconify-icon width="24" height="24" icon="akar-icons:twitter-fill"></iconify-icon>
        </a>
      </div>
    </div>
    <div class="flex flex-col justify-start items-start w-full md:w-6/12">
      <?php if (has_nav_menu('legal-menu')) : ?>
        <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
          <p class="text-white font-black">Legal Menu</p>
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
      <a href="mailto:contact@staxy.io?Subject=Inqurity regarding ELSIA Website" class="mt-4 bg-[#7ba9a9] p-4 rounded-md shadow-2xl" target=" _blank" rel="sponsored">
        <span>Contact Developer</span>
        <img class="w-0" src="https://cdn.staxtalks.com/files/assets/2022/08/03182513/staxtalks-logo.png" alt="Stefan Stax Business Logo - Black colored outline logo - Illustrated logo representing an S" title="Stefan Stax - Helping Small businesses thrive with technological improvements" /></a>
    </div>
  </div>
</footer>

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