<?php
	
    if ( ! function_exists( 'jolarti_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jolarti_setup() {

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'jolarti' ),
    ) );

}
endif;

add_theme_support('post-formats',array('aside','image','video'));

//mijn eigen stylesheet functie
//de eerste string is zomaar een handle, het pad naar de stylesheet moet absoluut zijn, dus get directory van je hele wordpress installatie en concateneer die met het pad naar je stylesheet en een lege array omdat er geen dependancies in zitten - dan geef je een version number voor toekomstige devs en tot slot op welke media je site geprint mag worden - dat laatste is een boolean voor javascript omdat het beter is om die scripts in de footer aan te roepen 
function jirosworld_script_enqueue() {
    // wp_enqueue_style( 'bootstrapstijl', get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'mijnstijl', get_template_directory_uri() . '/styles/style.css', array(), '1.0.0', 'all' );
    // wp_enqueue_script( 'mijnscript', get_template_directory_uri() . '/scripts/javascripts.js', array(), '1.0.0', true );
    }
//maak hier een hook door met een actie je functie an te roepen 
//gek genoeg moet je van het enque een string maken 
add_action( 'wp_enqueue_scripts', 'jirosworld_script_enqueue');
//bovenstaande hook wordt uitgevoerd als je wp_head aanroept in je page

	// Add RSS links to <head> section
	automatic_feed_links();
	
	// // Load jQuery
	// if ( !is_admin() ) {
	//    wp_deregister_script('jquery');
	//    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	//    wp_enqueue_script('jquery');
	// }
	
	// // Clean up the <head>
	// function removeHeadLinks() {
 //    	remove_action('wp_head', 'rsd_link');
 //    	remove_action('wp_head', 'wlwmanifest_link');
 //    }
 //    add_action('init', 'removeHeadLinks');
 //    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>