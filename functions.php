<?php


// Register Nav Walker class_alias
require_once('wp_bootstrap_navwalker.php');


/*
 * Languages
 *
 */
//
// function register_strings() {
//   pll_register_string('madesangoi', 'Services');
//   pll_register_string('madesangoi', 'Portfolio');
// }
// add_action('init','register_strings');

  /*
   * stylesheets
   *
   */

function madesangoi_styles(){

  //adding stylesheets
  wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700,900', array(), '1.0.0');
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array() , '4.0.0');
  wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array() , '4.7');
  wp_register_style('style', get_template_directory_uri() . '/style.css', array() , '1.0');

  //Enqueues the style
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('googlefont');
  wp_enqueue_style('style');


  wp_register_script('script', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0.0', true );
  //add javascript files
  wp_enqueue_script('jquery');
  wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts', 'madesangoi_styles');


  // Theme Support
  function madesangoi_theme_setup(){


  load_theme_textdomain( 'madesangoi' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	  add_theme_support( 'title-tag' );

    add_theme_support('post-thumbnails');

    add_image_size('portfolio-full', 840, true);
    add_image_size('portfolio', 400, 360, true);
    add_image_size('portfolio2', 600, 360, true);
    add_image_size('portfolio-front', 390, 340, true);
    add_image_size('post-thumb-front', 290, 230, true);

    add_image_size('post-thumb', 740, 360, true);
    add_image_size('post-thumbbig', 740,  true);
    add_image_size('post-thumb-link', 250, 250, true);


    // update_option('thumbnail_size_w', 250);
    // update_option('thumbnail_size_h', 350);


    //add_image_size( 'madesangoi-post-image', 200, 100, true );

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'madesangoi'),
      'languages' => __('Secondary Menu', 'madesangoi'),
      'social-menu' => __('Social Menu', 'madesangoi')
    ));

    // Post Formats
    add_theme_support('post-formats', array('link'));


    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
  }
  add_action('after_setup_theme','madesangoi_theme_setup');

     /*
     * Custom excerpt limit
     *
     */
    function excerpt($limit) {

         $excerpt = explode(' ', get_the_excerpt(), $limit);

         if (count($excerpt)>=$limit) {

             array_pop($excerpt);

             $excerpt = implode(" ",$excerpt).'...';

         } else {

             $excerpt = implode(" ",$excerpt);

         }

            $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

         return $excerpt;

    }

    function content($limit) {

         $content = explode(' ', get_the_content(), $limit);

         if (count($content)>=$limit) {

             array_pop($content);

             $content = implode(" ",$content).'...';

         } else {

            $content = implode(" ",$content);

         }

             $content = preg_replace('/[.+]/','', $content);

             $content = apply_filters('the_content', $content);

             $content = str_replace(']]>', ']]&gt;', $content);

         return $content;
    }

    function title($limit) {

         $title = explode(' ', get_the_title(), $limit);

         if (count($title)>=$limit) {

             array_pop($title);

             $title = implode(" ",$title).'...';

         } else {

            $title = implode(" ",$title);

         }

        $title = preg_replace('`[[^]]*]`','',$title);
         return $title;
    }


    // Widget Locations

    function wpb_init_widgets($id){

      register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
      ));


    register_sidebar( array(
		'name'          => __( 'Services-1', 'madesangoi' ),
		'id'            => 'services-1',
		'description'   => __( 'Add widgets here to appear is front page services section', 'madesangoi' ),
		'before_widget' => '<div class="col-md-4 col-sm-12">',
		'after_widget'  => '</div>'
	) );




    }
add_action('widgets_init', 'wpb_init_widgets');

//
/*
* Customizer File
*/
//
require get_template_directory(). '/inc/customizer.php';



//Creating Custom Post Types -- Portfolio --

function madesangoi_portfolio() {
	$labels = array(
		'name'               => _x( 'portfolio', 'madesangoi' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name', 'madesangoi' ),
		'menu_name'          => _x( 'portfolio', 'admin menu', 'madesangoi' ),
		'name_admin_bar'     => _x( 'portfolio', 'add new on admin bar', 'madesangoi' ),
		'add_new'            => _x( 'Add New', 'book', 'madesangoi' ),
		'add_new_item'       => __( 'Add New Image', 'madesangoi' ),
		'new_item'           => __( 'New Images', 'madesangoi' ),
		'edit_item'          => __( 'Edit Image', 'madesangoi' ),
		'view_item'          => __( 'View Images', 'madesangoi' ),
		'all_items'          => __( 'All Images', 'madesangoi' ),
		'search_items'       => __( 'Search Images', 'madesangoi' ),
		'parent_item_colon'  => __( 'Parent Images:', 'madesangoi' ),
		'not_found'          => __( 'No Images found.', 'madesangoi' ),
		'not_found_in_trash' => __( 'No Images found in Trash.', 'madesangoi' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'madesangoi' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'         => array( 'category' )
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'madesangoi_portfolio' );



function the_breadcrumb() {
    echo '<a href="'.home_url().'" ">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


?>
