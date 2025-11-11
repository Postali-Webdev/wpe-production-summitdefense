<?php

function udesly_theme_utils_get_term_id_by_slug($slug, $type)
{
    $term = get_term_by("slug", $slug, $type);

    if ($term) {
        return $term->term_id;
    }
    return 0;
}

function udesly_theme_utils_get_post_id_by_slug($slug, $type)
{
    $post = get_page_by_path($slug, OBJECT, $type);

    if ($post) {
        return $post->ID;
    }
    return 0;
}

function udesly_new_summit_defense_setup()
{
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support("html5", [
        "comment-form",
        "comment-list",
        "gallery",
        "caption",
        "style",
        "script",
        "navigation-widgets",
    ]);

    add_theme_support("woocommerce");

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    $logo_width = 300;
    $logo_height = 100;

    add_theme_support("custom-logo", [
        "height" => $logo_height,
        "width" => $logo_width,
        "flex-width" => true,
        "flex-height" => true,
        "unlink-homepage-logo" => true,
    ]);

    add_theme_support("title-tag");

    add_theme_support("menus");

    // Add theme support for selective refresh for widgets.
    add_theme_support("customize-selective-refresh-widgets");

    // Add support for Block Styles.
    add_theme_support("wp-block-styles");

    // Add support for full and wide align images.
    add_theme_support("align-wide");

    // Add support for editor styles.
    add_theme_support("editor-styles");

    // Add support for responsive embedded content.
    add_theme_support("responsive-embeds");

    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "udesly_new_summit_defense_setup");

add_action("admin_notices", function () {
    if (function_exists("udesly_define_post_type")) {
        return;
    }
    $class = "notice notice-error";
    $message =
        "The theme will not work properly without the Udesly App plugin installed!";
    printf(
        '<div class="%1$s"><p>%2$s</p></div>',
        esc_attr($class),
        esc_html($message)
    );
});

add_action("wp_loaded", function () {
    if (!function_exists("udesly_define_post_type") && !is_admin()) {
        wp_die(
            "The theme will not work properly without the Udesly App plugin installed!"
        );
    }
});

require_once get_template_directory() .
    "/tgm-plugin/class-tgm-plugin-activation.php";

add_action("tgmpa_register", "udesly_register_required_plugins");

function udesly_register_required_plugins()
{
    $plugins = [
        [
            "name" => "Udesly App",
            "slug" => "udesly-wp-app",
            "source" =>
                "https://github.com/udesly-adapter/udesly-wp-app/archive/master.zip",
        ],
    ];

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = [
        "id" => "udesly", // Unique ID for hashing notices for multiple instances of TGMPA.
        "default_path" => "", // Default absolute path to bundled plugins.
        "menu" => "tgmpa-install-plugins", // Menu slug.
        "parent_slug" => "themes.php", // Parent menu slug.
        "capability" => "edit_theme_options", // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        "has_notices" => true, // Show admin notices or not.
        "dismissable" => true, // If false, a user cannot dismiss the nag message.
        "dismiss_msg" => "", // If 'dismissable' is false, this message will be output at top of nag.
        "is_automatic" => false, // Automatically activate plugins after installation or not.
        "message" => "", // Message to output right before the plugins table.
    ];

    tgmpa($plugins, $config);
}

function define_post_types_for_new_summit_defense()
{
    if (!function_exists("udesly_define_post_type")) {
        return;
    }

    udesly_define_post_type("archive-blog", [
        "labels" => [
            "name" => __("Blogs"),
            "singular_name" => __("Blog"),
        ],
        "rewrite" => [
            "name" => __("archive-blog"),
        ],
    ]);
    udesly_define_post_type("archive-reviews", [
        "labels" => [
            "name" => __("Reviews"),
            "singular_name" => __("Review"),
        ],
        "rewrite" => [
            "name" => __("archive-reviews"),
        ],
    ]);
}

add_action("init", "define_post_types_for_new_summit_defense");

add_action("acf/init", function () {
    if (!function_exists("udesly_custom_field_text")) {
        return;
    }

    udesly_register_custom_fields_for_post_type("archive-blog", [
        udesly_custom_field_text([
            "name" => "author",
            "label" => "exerpt",
            "instructions" => "",
        ]),
        udesly_custom_field_date([
            "name" => "datetime",
            "label" => "datetime",
            "instructions" => "",
        ]),
        udesly_custom_field_text([
            "name" => "category",
            "label" => "category",
            "instructions" => "",
        ]),
    ]);
    udesly_register_custom_fields_for_post_type("archive-reviews", [
        udesly_custom_field_text([
            "name" => "date",
            "label" => "Date",
            "instructions" => "",
        ]),
        udesly_custom_field_text([
            "name" => "reviewer",
            "label" => "Title",
            "instructions" => "",
        ]),
    ]);
});


function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages

    if(is_home()){
      $query->set('posts_per_page', 10);
    }

    if(is_category()){
      $query->set('posts_per_page', 10);
    }

    if(is_tag()){
      $query->set('posts_per_page', 10);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

function widgets_init(){
  register_sidebar(array(
    'name'=>__('Related Links San Jose','related-links'),
    'id'=> 'sidebar-1',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links San Francisco','related-links'),
    'id'=> 'sidebar-2',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links Oakland','related-links'),
    'id'=> 'sidebar-3',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links Redwood city','related-links'),
    'id'=> 'sidebar-4',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links Sacramento','related-links'),
    'id'=> 'sidebar-5',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Page Sidebar','page-sidebar'),
    'id'=> 'sidebar-6',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links Burlingame','related-links'),
    'id'=> 'sidebar-7',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links Pleasanton','related-links'),
    'id'=> 'sidebar-8',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
  register_sidebar(array(
    'name'=>__('Related Links San Rafael','related-links'),
    'id'=> 'sidebar-9',
    'before_title'=>'<div id="cat">',
    'after_title'=>'</div>',
  ));
}
add_action('widgets_init','widgets_init');

function wpb_search_filter($query)
{
if ($query->is_search)
{
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

function add_trailing_slash_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var section = document.querySelector('.section-latest-news');
        if (section) {
            var blogLink = section.querySelector('a[href="/blog"]');
            if (blogLink && !blogLink.href.endsWith('/')) {
                blogLink.href += '/';
            }
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'add_trailing_slash_script');

function custom_author_byline_shortcode() {
    // Get the author's display name
    $author_name = get_the_author();
    
    // Get the published date
    $published_date = get_the_date();
    
    // Output the byline
    return '<p class="author-byline">Written by: ' . esc_html($author_name) . ' / Published date: ' . esc_html($published_date) . '</p>';
}

// Register the shortcode
add_shortcode('author_byline', 'custom_author_byline_shortcode');

/**
 * Disable Theme/Plugin File Editors in WP Admin
 * - Hides the submenu items
 * - Blocks direct access to editor screens
 */
function postali_disable_file_editors_menu() {
    // Remove Theme File Editor from Appearance menu
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    // Optional: also remove Plugin File Editor from Plugins menu
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'postali_disable_file_editors_menu', 999 );

// Block direct access to the editors even if someone knows the URL
function postali_block_file_editors_direct_access() {
    wp_die( __( 'File editing through the WordPress admin is disabled.' ), 403 );
}
add_action( 'load-theme-editor.php', 'postali_block_file_editors_direct_access' );
add_action( 'load-plugin-editor.php', 'postali_block_file_editors_direct_access' );

/**
 * Disable the Additional CSS panel in the Customizer.
 * Primary method: remove the custom_css component early in load.
 */
function postali_disable_customizer_additional_css_component( $components ) {
    $key = array_search( 'custom_css', $components, true );
    if ( false !== $key ) {
        unset( $components[ $key ] );
    }
    return $components;
}
add_filter( 'customize_loaded_components', 'postali_disable_customizer_additional_css_component' );

/**
 * Fallback: remove the Additional CSS section if it's present.
 */
function postali_remove_customizer_additional_css_section( $wp_customize ) {
    if ( method_exists( $wp_customize, 'remove_section' ) ) {
        $wp_customize->remove_section( 'custom_css' );
    }
}
add_action( 'customize_register', 'postali_remove_customizer_additional_css_section', 20 );
