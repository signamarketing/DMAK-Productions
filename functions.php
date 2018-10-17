<?php



	// Add RSS links to <head> section

	automatic_feed_links();

	

	// Load jQuery

	if ( !function_exists(core_mods) ) {

		function core_mods() {

			if ( !is_admin() ) {

				wp_deregister_script('jquery');

				wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false);

				wp_enqueue_script('jquery');

			}

		}

		core_mods();

	}



	// Clean up the <head>

	function removeHeadLinks() {

    	remove_action('wp_head', 'rsd_link');

    	remove_action('wp_head', 'wlwmanifest_link');

    }

    add_action('init', 'removeHeadLinks');

    remove_action('wp_head', 'wp_generator');

    

    if (function_exists('register_sidebar')) {

    	register_sidebar(array(

    		'name' => __('Sidebar Widgets','html5reset' ),

    		'id'   => 'sidebar-widgets',

    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),

    		'before_widget' => '<div id="%1$s" class="widget %2$s">',

    		'after_widget'  => '</div>',

    		'before_title'  => '<h2>',

    		'after_title'   => '</h2>'

    	));

    }

    

    add_theme_support( 'post-formats', array('featured', 'gallery', 'image', 'quote', 'audio', 'video')); 





//temp remove admin bar

    // add_filter( 'show_admin_bar', '__return_false' );



//excerpt for blog



//     function custom_field_excerpt() {

//     global $post;

//     $text = get_field('blog_text');

//     if ( '' != $text ) {

//         $text = strip_shortcodes( $text );

//         $text = apply_filters('the_content', $text);

//         $text = str_replace(']]>', ']]>', $text);

//         $excerpt_length = 20; // 20 words

//         $excerpt_more = ' ...';

//         $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

//     }

//     return apply_filters('the_excerpt', $text);

// }




function excerptMore($more) {
	return '…';
}
add_filter('excerpt_more', 'excerptMore');

//author support for cpt

function add_pagination_to_author_page_query_string($query_string)

{

    if (isset($query_string['author_name'])) $query_string['post_type'] = array('blog_post');

    return $query_string;



}

add_filter('request', 'add_pagination_to_author_page_query_string');



//thumbnail support



    add_theme_support( 'post-thumbnails', array( 'post', 'blog_post', 'press_post', 'work_post') );

    set_post_thumbnail_size( 226, 0); // 50 pixels wide by 50 pixels tall, resize mode



    add_image_size( 'blog_thumbnail', 995, 0, true );

    add_image_size( 'work_postthumbnail', 186, 238, true );

    add_image_size( 'press_postthumbnail', 253, 0);



    add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );

    add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );



    function remove_thumbnail_dimensions( $html ) {

        $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );

        return $html;

    }







    function my_attachment_gallery($postid=0, $size='thumbnail', $attributes='') {

        if ($postid<1) $postid = get_the_ID();

        if ($images = get_children(array(

            'post_parent' => $postid,

            'post_type' => 'attachment',

            'order' => 'DESC',

            'numberposts' => 0,

            'post_mime_type' => 'image',)))

            foreach($images as $image) {

                $attachment=wp_get_attachment_image_src($image->ID, $size);

                ?><div class="feature"><img src="<?php echo $attachment[0]; ?>" <?php echo $attributes; ?> /></div><?php

            }



    }



// remove menus from admin



/*add_action( 'admin_menu', 'my_remove_menu_pages' );



function my_remove_menu_pages() { 

    remove_menu_page('edit.php');

    remove_menu_page('edit.php?post_type=acf');

    remove_submenu_page( 'admin.php', 'page=wpcf7' );

}*/



    // wp menus

    add_theme_support( 'menus' ); 



    // registering wp3+ menus

    register_nav_menus(

        array(

            'main-nav' => __( 'The Main Menu', 'bonestheme' ),   // main nav in header

            'footer-links' => __( 'Footer Links', 'bonestheme' ), // secondary nav in footer

            'follow-links' => __( 'Follow Links', 'bonestheme' ), // third nav in footer

            'subscribe-links' => __( 'Subscribe Links', 'bonestheme' ) // fourth nav in footer

        )

    );



/*********************

    MENUS & NAVIGATION

*********************/



// the main menu

function main_nav() {

    // display the wp3 menu if available

    wp_nav_menu(array(

        'container' => false,                           // remove nav container

        'container_class' => false,           // class of container (should you choose to use it)

        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name

        'menu_class' => 'top-nav',                       // adding custom nav class

        'theme_location' => 'main-nav',                 // where it's located in the theme

        'before' => '',                                 // before the menu

        'after' => '',                                  // after the menu

        'link_before' => '',                            // before each link

        'link_after' => '',                             // after each link

        'depth' => 0,                                   // limit the depth of the nav

        'fallback_cb' => 'bones_main_nav_fallback'      // fallback function

    ));

} /* end bones main nav */



// the footer menu (should you choose to use one)

function footer_links() {

    // display the wp3 menu if available

    wp_nav_menu(array(

        'container' => '',                              // remove nav container

        'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)

        'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name

        'menu_class' => 'nav footer-nav clearfix',      // adding custom nav class

        'theme_location' => 'footer-links',             // where it's located in the theme

        'before' => '',                                 // before the menu

        'after' => '',                                  // after the menu

        'link_before' => '',                            // before each link

        'link_after' => '',                             // after each link

        'depth' => 0,                                   // limit the depth of the nav

        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function

    ));

} 



function follow_links() {

    // display the wp3 menu if available

    wp_nav_menu(array(

        'container' => '',                              // remove nav container

        'container_class' => 'follow-links clearfix',   // class of container (should you choose to use it)

        'menu' => __( 'Follow Links', 'bonestheme' ),   // nav name

        'menu_class' => 'nav follow-nav clearfix',      // adding custom nav class

        'theme_location' => 'follow-links',             // where it's located in the theme

        'before' => '',                                 // before the menu

        'after' => '',                                  // after the menu

        'link_before' => '',                            // before each link

        'link_after' => '',                             // after each link

        'depth' => 0,                                   // limit the depth of the nav

        'fallback_cb' => 'bones_follow_links_fallback'  // fallback function

    ));

}



function subscribe_links() {

    // display the wp3 menu if available

    wp_nav_menu(array(

        'container' => '',                              // remove nav container

        'container_class' => 'subscribe-links clearfix',   // class of container (should you choose to use it)

        'menu' => __( 'Subscribe Links', 'bonestheme' ),   // nav name

        'menu_class' => 'nav subscribe-nav clearfix',      // adding custom nav class

        'theme_location' => 'subscribe-links',             // where it's located in the theme

        'before' => '',                                 // before the menu

        'after' => '',                                  // after the menu

        'link_before' => '',                            // before each link

        'link_after' => '',                             // after each link

        'depth' => 0,                                   // limit the depth of the nav

        'fallback_cb' => 'bones_subscribe_links_fallback'  // fallback function

    ));

}



/* end bones footer link */



// this is the fallback for header menu

function bones_main_nav_fallback() {

    wp_page_menu( array(

        'show_home' => true,

        'menu_class' => 'nav top-nav clearfix',      // adding custom nav class

        'include'     => '',

        'exclude'     => '',

        'echo'        => true,

        'link_before' => '',                            // before each link

        'link_after' => ''                             // after each link

    ) );

}



    // wp custom background (thx to @bransonwerner for update)

    // add_theme_support( 'custom-background',

    //     array(

    //     'default-image' => '',  // background image default

    //     'default-color' => '', // background color default (dont add the #)

    //     'wp-head-callback' => '_custom_background_cb',

    //     'admin-head-callback' => '',

    //     'admin-preview-callback' => ''

    //     )

    // );



// Body Class Function

function body_classes() {



    global $post;



 // echo some of these things

    if (is_category()) { echo "page_category"." "; }

    elseif (is_search()) { echo "page_search"." "; }

    elseif (is_tag()) { echo "page_tag"." "; }

    elseif (is_home()) { echo "page_home"." "; }

    elseif (is_404()) { echo "page_404"." "; }



    // echo page_(page name)

    if( is_page()) {

        $pn = $post->post_name;

        echo "page_".$pn." ";

    }



    // echo parent_(parent name)

    $post_parent = get_post($post->post_parent);

    $parentSlug = $post_parent->post_name;

    

    if ( is_page() && $post->post_parent ) {

            echo "parent_".$parentSlug." ";

    }



    // echo template_(template name)

    $temp = get_page_template();

    if ( $temp != null ) {

        $path = pathinfo($temp);

        $tmp = $path['filename'] . "." . $path['extension'];

        $tn= str_replace(".php", "", $tmp);

        echo "template_".$tn;

    }

}



// NEW CPT : Blog ///////////////////////////////////////////////////



function blog_cattaxonomy() {  

    register_taxonomy(  

        'blog_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'blog_post',        //post type name

        array(  

            'hierarchical' => true,  

            'label' => 'Categories',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/blog/category', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'blog_cattaxonomy');



function blog_tagtaxonomy() {  

    register_taxonomy(  

        'blog_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'blog_post',        //post type name

        array(  

            'hierarchical' => false,  

            'label' => 'Tags',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/blog/tag', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'blog_tagtaxonomy');



//Registering Custom Post Type: Blog



add_action( 'init', 'register_blogpost', 20 );

function register_blogpost() {

    $labels = array(

        'name' => _x( 'Blog', 'my_custom_post','custom' ),

        'singular_name' => _x( 'Blog', 'my_custom_post', 'custom' ),

        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),

        'add_new_item' => _x( 'Add New Blog Post', 'my_custom_post', 'custom' ),

        'edit_item' => _x( 'Edit Blog Post', 'my_custom_post', 'custom' ),

        'new_item' => _x( 'New Blog Post', 'my_custom_post', 'custom' ),

        'view_item' => _x( 'View Blog Post', 'my_custom_post', 'custom' ),

        'search_items' => _x( 'Search Blog Posts', 'my_custom_post', 'custom' ),

        'not_found' => _x( 'No Blog Posts found', 'my_custom_post', 'custom' ),

        'not_found_in_trash' => _x( 'No Blog Posts found in Trash', 'my_custom_post', 'custom' ),

        'parent_item_colon' => _x( 'Parent Blog Post:', 'my_custom_post', 'custom' ),

        'menu_name' => _x( 'Blog Posts', 'my_custom_post', 'custom' ),

    );



    $args = array(

        'labels' => $labels,

        'hierarchical' => false,

        'description' => 'Custom Blog Posts',

        'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),

        'taxonomies' => array( 'blog_tags','blog_categories'),

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'can_export' => true,

        'rewrite' => array('slug' => '/blog','with_front' => FALSE),

        'public' => true,

        'has_archive' => 'blog',

        'capability_type' => 'post'

    );  

    register_post_type( 'blog_post', $args );//max 20 charachter cannot contain capital letters and spaces

}



// NEW CPT : Press ///////////////////////////////////////////////////



function press_cattaxonomy() {  

    register_taxonomy(  

        'press_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'press_post',        //post type name

        array(  

            'hierarchical' => true,  

            'label' => 'Categories',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/press/category', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'press_cattaxonomy');



function press_tagtaxonomy() {  

    register_taxonomy(  

        'press_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'press_post',        //post type name

        array(  

            'hierarchical' => false,  

            'label' => 'Tags',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/press/tag', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'press_tagtaxonomy');



//Registering Custom Post Type: Press



add_action( 'init', 'register_presspost', 20 );

function register_presspost() {

    $labels = array(

        'name' => _x( 'Press', 'my_custom_post','custom' ),

        'singular_name' => _x( 'Press', 'my_custom_post', 'custom' ),

        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),

        'add_new_item' => _x( 'Add New Press Post', 'my_custom_post', 'custom' ),

        'edit_item' => _x( 'Edit Press Post', 'my_custom_post', 'custom' ),

        'new_item' => _x( 'New Press Post', 'my_custom_post', 'custom' ),

        'view_item' => _x( 'View Press Post', 'my_custom_post', 'custom' ),

        'search_items' => _x( 'Search Press Posts', 'my_custom_post', 'custom' ),

        'not_found' => _x( 'No Press Posts found', 'my_custom_post', 'custom' ),

        'not_found_in_trash' => _x( 'No Press Posts found in Trash', 'my_custom_post', 'custom' ),

        'parent_item_colon' => _x( 'Parent Press Post:', 'my_custom_post', 'custom' ),

        'menu_name' => _x( 'Press Posts', 'my_custom_post', 'custom' ),

    );



    $args = array(

        'labels' => $labels,

        'hierarchical' => false,

        'description' => 'Custom Press Posts',

        'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),

        'taxonomies' => array( 'press_tags','press_categories'),

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'can_export' => true,

        'rewrite' => array('slug' => '/press','with_front' => FALSE),

        'public' => true,

        'has_archive' => 'press',

        'capability_type' => 'post'

    );  

    register_post_type( 'press_post', $args );//max 20 charachter cannot contain capital letters and spaces

}  



// NEW CPT : Work ///////////////////////////////////////////////////



function work_cattaxonomy() {  

    register_taxonomy(  

        'work_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'work_post',        //post type name

        array(  

            'hierarchical' => true,  

            'label' => 'Categories',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/videos/category', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'work_cattaxonomy');



function work_tagtaxonomy() {  

    register_taxonomy(  

        'work_tags',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'work_post',        //post type name

        array(  

            'hierarchical' => false,  

            'label' => 'Tags',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => '/videos/tag', // This controls the base slug that will display before each term

                'with_front' => false // Don't display the category base before 

            )

        )  

    );  

}  

add_action( 'init', 'work_tagtaxonomy');



//Registering Custom Post Type: Work



add_action( 'init', 'register_workpost', 20 );

function register_workpost() {

    $labels = array(

        'name' => _x( 'Work', 'my_custom_post','custom' ),

        'singular_name' => _x( 'Work', 'my_custom_post', 'custom' ),

        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),

        'add_new_item' => _x( 'Add New Work Post', 'my_custom_post', 'custom' ),

        'edit_item' => _x( 'Edit Work Post', 'my_custom_post', 'custom' ),

        'new_item' => _x( 'New Work Post', 'my_custom_post', 'custom' ),

        'view_item' => _x( 'View Work Post', 'my_custom_post', 'custom' ),

        'search_items' => _x( 'Search Work Posts', 'my_custom_post', 'custom' ),

        'not_found' => _x( 'No Work Posts found', 'my_custom_post', 'custom' ),

        'not_found_in_trash' => _x( 'No Work Posts found in Trash', 'my_custom_post', 'custom' ),

        'parent_item_colon' => _x( 'Parent Work Post:', 'my_custom_post', 'custom' ),

        'menu_name' => _x( 'Work Posts', 'my_custom_post', 'custom' ),

    );

 

    $args = array(

        'labels' => $labels,

        'hierarchical' => false,

        'description' => 'Custom Work Posts',

        'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),

        'taxonomies' => array( 'work_tags','work_categories'),

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'can_export' => true,

        'rewrite' => array('slug' => '/videos','with_front' => true),

        'public' => true,

        'has_archive' => 'videos',

        'capability_type' => 'post'

    );  

    register_post_type( 'work_post', $args );//max 20 charachter cannot contain capital letters and spaces

}  



//register new sidebar



if ( function_exists('register_sidebar') ) {



   register_sidebar(array(

       'name' => 'Instagram',

       'before_widget' => '<div class="instagram-snaps">',

       'after_widget' => '</div>',

       'before_title' => '<h1 class="presstitle">',

       'after_title' => '</h1>'

    ));



    register_sidebar(array(

       'name' => 'Single Post Sidebar',

       'before_widget' => '<div class="single-post-sidebar">',

       'after_widget' => '</div>',

       'before_title' => '<h2>',

       'after_title' => '</h2>'

    ));
    register_sidebar( array(
        'name' => 'Google Widget',
        'id' => 'google-review-sidebar',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );



}



//admin login screen



function my_login_logo() { ?>

    <style type="text/css">

        body.login div#login h1 a {

            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/_/img/dmak-float-logo.png);

            padding-bottom: 30px;

        }

    </style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );





//function to limit description to 300 characters

function limit($var, $limit) {

    if ( strlen($var) > $limit ) {

        return substr($var, 0, $limit) . '...';

    }

    else {

        return $var;

    }

}



// FACEBBOK SHARE

    function fbogmeta_header() {

        if (is_single()) {

            //getting the right post content

            $postsubtitrare = get_post_meta($post->ID, 'id-subtitrare', true);

            $post_subtitrare = get_post($postsubtitrare);

            $content = limit(strip_tags($post_subtitrare-> post_content),297);

            ?>

                <meta property="og:title" content="<?php the_title(); ?>"/>

                <meta property="og:description" content="<?php echo $content; ?>" />

                <!--<meta property="og:url" content="<?php the_permalink(); ?>"/>-->

            <?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id(     get_the_ID() ), 'thumbnail'); ?>

            <?php if ($fb_image) : ?>

            

            <meta property="og:image" content="<?php echo $fb_image[0]; ?>" />

            

            <?php endif; ?>

                <meta property="og:type" content="<?php

                if (is_single() || is_page()) { echo "article"; } else { echo "website";}     ?>"

            />

                <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>

            <?php

        }

    }

    add_action('wp_head', 'fbogmeta_header');



// TWITTER SHARE

    function twmeta_header() {

        if(is_single() || is_page()) {

            $twitter_url    = get_permalink( $leavename = true );

            $twitter_title  = get_the_title();

            $twitter_desc   = get_the_excerpt();

            $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );

            $twitter_thumb  = $twitter_thumbs[0];

            

            if(!$twitter_thumb) {

                  $twitter_thumb = 'https://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';

            }

            $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));

            ?>

              

            <meta name="twitter:card" content="summary_large_image" />

            <meta name="twitter:url" content="<?php echo $twitter_url; ?>" />

            <meta name="twitter:title" content="<?php echo $twitter_title; ?>" />

            <meta name="twitter:description" content="<?php echo $twitter_desc; ?>" />

            <meta name="twitter:image" content="<?php echo $twitter_thumb; ?>" />

            <meta name="twitter:site" content="@dmakproductions" />

            <?php if($twitter_name) { ?>

            <meta name="twitter:creator" content="@dmakproductions" />

            <?php

            }

        }

    }

    add_action('wp_head', 'twmeta_header');

    

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

remove_action( 'admin_print_styles', 'print_emoji_styles' );



add_action( 'init', 'my_deregister_heartbeat', 1 );

function my_deregister_heartbeat() {

	global $pagenow;



	if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )

		wp_deregister_script('heartbeat');

}    
function is_custom_post_type( $post = NULL )
{
    $all_custom_post_types = get_post_types( array ( '_builtin' => FALSE ) );

    // there are no custom post types
    if ( empty ( $all_custom_post_types ) )
        return FALSE;

    $custom_types      = array_keys( $all_custom_post_types );
    $current_post_type = get_post_type( $post );

    // could not detect current type
    if ( ! $current_post_type )
        return FALSE;

    return in_array( $current_post_type, $custom_types );
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
// add_filter( 'gform_next_button', 'dw_add_span_tags', 10, 2 );
// function dw_add_span_tags ( $button, $form ) {

// return $button .= "<i class='fas fa-angle-double-right'></i>";

// }

    