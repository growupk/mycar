<?php
function evista_starter_scripts() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js', false, '2.2.4', true);
		wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap');
		wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, '3.3.7', true);
		wp_enqueue_script('bootstrap');

    wp_deregister_script('jasny-bootstrap');
		wp_register_script('jasny-bootstrap', '//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js', false, '3.1.3', true);
		wp_enqueue_script('jasny-bootstrap');

    wp_deregister_script('evista-starter');
		wp_register_script('evista-starter', get_template_directory_uri().'/assets/js/app.js', false, '1.0.0', true);
		wp_enqueue_script('evista-starter');
	}
}
add_action('init', 'evista_starter_scripts');

function evista_starter_styles(){
  if(!is_admin()){
    wp_register_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  	wp_enqueue_style( 'bootstrap' );

		wp_register_style( 'jasny-bootstrap', '//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css' );
  	wp_enqueue_style( 'jasny-bootstrap' );

		wp_register_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'font-awesome' );

    wp_register_style( 'main', get_bloginfo('stylesheet_directory').'/assets/css/main.css' );
  	wp_enqueue_style( 'main' );
  }
}
add_action('init', 'evista_starter_styles');
