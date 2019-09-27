<?php 

// Custom Parent Stylesheet
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



// Custom Login Style
function my_login_styling() {
    // wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/style-login.js' );
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_styling' );

function my_login_logo() { ?> 

    <style type="text/css">
		.login #login h1 a {
			background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/corporate-happiness-logo.svg');
		}
    </style>

    <?php
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

