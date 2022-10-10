<?php


// ! Scripts & Styles 
function registering_styles_stax()
{
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/css/navigation.css', array(), "0.3");
    wp_enqueue_style('homepage', get_template_directory_uri() . '/assets/css/homepage.css');
    wp_enqueue_style('introBanner', get_template_directory_uri() . '/assets/css/introBanner.css');
    wp_enqueue_style('titleLayout', get_template_directory_uri() . '/assets/css/title_layout.css');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');



    if (is_single()) {
        wp_enqueue_style('posts', get_template_directory_uri() . '/assets/css/posts.css');
    }

    if (is_page("who-we-are")) {
        wp_enqueue_style('whoweare', get_template_directory_uri() . '/assets/css/whoweare.css');
    }
}
add_action('wp_enqueue_scripts', 'registering_styles_stax');

add_theme_support('wp-block-styles');
add_theme_support('editor-styles');
// Load certain functions on the head itself so they would load instantly
function register_header_funcs_stax()
{
    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js');
    wp_enqueue_script('reorderImages', get_template_directory_uri() . '/assets/js/reorderImages.js', array(), "0.4");
}

add_action("wp_head", "register_header_funcs_stax");


// ! Menu Support
function register_menu_stax()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
            'legal-menu' => __("Legal Footer Menu"),
            'header-menu-pages' => __("Header Menu for Pages except Home Page")
        )
    );
}
add_action('init', 'register_menu_stax');


// ! Logo Support
function website_logo_stax()
{
    remove_theme_support('custom-logo');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'website_logo_stax', 11);



// ! Custom image sizes
// add_action('after_setup_theme', 'staxio_custom_theme_setup');

// function staxio_custom_theme_setup()
// {
//     add_image_size('fixed-banner', 1024, 213, false);
//     add_image_size('mobile-block', 300, 300, false);
//     add_image_size('square-block', 800, 800, false);
//     add_image_size("medium", 1280, 600, false);
// }



// // Register the three useful image sizes for use in Add Media modal
// add_filter('image_size_names_choose', 'staxio_custom_image_sizes');
// function staxio_custom_image_sizes($sizes)
// {
//     return array_merge($sizes, array(
//         'fixed-banner' => __('Fixed Banner'),
//     ));
// }

// ! SVG Support 
function svg_file_type_stax($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'svg_file_type_stax');

// ! Thumbnails support
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150, true); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size('category-thumb', 300, 9999); // 300 pixels wide (and unlimited height)
}


// ! Shorten default the_excerpt length in WordPress


// ! Members Post Type
// Members Custom Post Type
function members_init()
{
    // set up product labels
    $labels = array(
        'name' => 'Members',
        'singular_name' => 'Member',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Member',
        'new_item' => 'New Member',
        'all_items' => 'All Members',
        'view_item' => 'View Member',
        'search_items' => 'Search Members',
        'not_found' =>  'No Members Found',
        'not_found_in_trash' => 'No Members found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Members',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'member'),
        'query_var' => true,
        'menu_icon' => 'dashicons-networking',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type('member', $args);

    // register taxonomy
    register_taxonomy('member_category', 'member', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array('slug' => 'member-category')));
}
add_action('init', 'members_init');


// ! ACF Settings Page
function settings_init()
{
    // set up product labels
    $labels = array(
        'name' => 'Settings',
        'singular_name' => 'Settings',
        'add_new' => 'Add New Settings',
        'add_new_item' => 'Add New Settings',
        'edit_item' => 'Edit Settings',
        'new_item' => 'New Settings',
        'all_items' => 'All Settings',
        'view_item' => 'View Settings',
        'search_items' => 'Search Settings',
        'not_found' =>  'No Settings Found',
        'not_found_in_trash' => 'No Settings found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Settings',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => false,
        'has_archive' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Content Settings'),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array(
            "title",
            'custom-fields',
        )
    );
    register_post_type('Settings', $args);

    // register taxonomy
    // register_taxonomy('Settings_category', 'settings', array('hierarchical' => true, 'query_var' => true, 'rewrite' => array('slug' => 'member-category')));
}
add_action('init', 'settings_init');

function awesome_acf_responsive_image($image_id, $image_size, $max_width)
{

    // check the image ID is not blank
    if ($image_id != '') {

        // set the default src image size
        $image_src = wp_get_attachment_image_url($image_id, $image_size);

        // set the srcset with various image sizes
        $image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

        // generate the markup for the responsive image
        echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
    }
}


// Add theme support for selective refresh for widgets.
add_theme_support('customize-selective-refresh-widgets');

// Add support for Block Styles.
add_theme_support('wp-block-styles');

// Add support for full and wide align images.
add_theme_support('align-wide');

// Add support for editor styles.
add_theme_support('editor-styles');

// Add custom editor font sizes.
add_theme_support(
    'editor-font-sizes',
    array(
        array(
            'name'      => esc_html__('Extra small', 'twentytwentyone'),
            'shortName' => esc_html_x('XS', 'Font size', 'twentytwentyone'),
            'size'      => 16,
            'slug'      => 'extra-small',
        ),
        array(
            'name'      => esc_html__('Small', 'twentytwentyone'),
            'shortName' => esc_html_x('S', 'Font size', 'twentytwentyone'),
            'size'      => 18,
            'slug'      => 'small',
        ),
        array(
            'name'      => esc_html__('Normal', 'twentytwentyone'),
            'shortName' => esc_html_x('M', 'Font size', 'twentytwentyone'),
            'size'      => 20,
            'slug'      => 'normal',
        ),
        array(
            'name'      => esc_html__('Large', 'twentytwentyone'),
            'shortName' => esc_html_x('L', 'Font size', 'twentytwentyone'),
            'size'      => 24,
            'slug'      => 'large',
        ),
        array(
            'name'      => esc_html__('Extra large', 'twentytwentyone'),
            'shortName' => esc_html_x('XL', 'Font size', 'twentytwentyone'),
            'size'      => 40,
            'slug'      => 'extra-large',
        ),
        array(
            'name'      => esc_html__('Huge', 'twentytwentyone'),
            'shortName' => esc_html_x('XXL', 'Font size', 'twentytwentyone'),
            'size'      => 96,
            'slug'      => 'huge',
        ),
        array(
            'name'      => esc_html__('Gigantic', 'twentytwentyone'),
            'shortName' => esc_html_x('XXXL', 'Font size', 'twentytwentyone'),
            'size'      => 144,
            'slug'      => 'gigantic',
        ),
    )
);
