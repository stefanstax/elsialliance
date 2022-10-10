<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<div class="staxy__header_navigation" id="mainNavigation">
  <div class="staxy__header_content">
    <?php
    if (has_custom_logo()) { ?>
      <a href="<?php echo home_url(); ?>"><img src=" <?php echo $logo[0]; ?>" /></a>
    <?php } else {
      echo "<h1>" . get_bloginfo("name") . "</h1>";
    }

    ?>
    <!-- Menu toggler logic -->
    <div onClick="toggleMenu();" id="menuTrigger">
      <div class="menu__toggler">
        <div></div>
      </div>
    </div>
    <div class="staxy__navigation_items" id="menuToggler">
      <div class="staxy__navigation_container">
        <div class=" menu__close" onClick="toggleMenu();">
          <p>Menu</p>
          <img src="https://res.cloudinary.com/dnqicdh71/image/upload/v1639729887/ELSiA/apo10f7tinxvgoziox1s.svg" />
        </div>
        <!-- WordPress menu -> header-menu -->
        <div class="staxy__menu">
          <div class="menu__content">

            <?php
            if (is_front_page()) {
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'depth' => 10,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              ));
            } else {
              wp_nav_menu(array(
                'theme_location' => 'header-menu-pages',
                'depth' => 10,
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              ));
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>