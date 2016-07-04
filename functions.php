<?php
	
function jirosworld_script_enqueue() {
    wp_enqueue_style( 'bootstr_stijl', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'mijnstijl', get_template_directory_uri() . '/styles/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'queerscript', get_template_directory_uri() . '/scripts/jquery1113-jiro.js', array(), '1.1.3', true );
    wp_enqueue_script( 'bootstr_script', get_template_directory_uri() . '/scripts/bootstrap-jiro.js', array(), '3.3.6', true );
    wp_enqueue_script( 'mijnscript', get_template_directory_uri() . '/scripts/javascripts.js', array(), '1.0.0', true );
    }
add_action( 'wp_enqueue_scripts', 'jirosworld_script_enqueue');
//bovenstaande hook wordt uitgevoerd als je wp_head aanroept in je page


function awesome_theme_setup() {
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary JirosWorld Navigation');
    register_nav_menu('secondary', 'Bottom navigation');
    
}

add_action('init', 'awesome_theme_setup');

/*
    ==========================================
     Theme support function
    ==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));

/*
    ==========================================
     Sidebar function
    ==========================================
*/
function awesome_widget_setup() {
    
    register_sidebar(
        array(  
            'name'  => 'Sidebar',
            'id'    => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );
    
}
add_action('widgets_init','awesome_widget_setup');

?>