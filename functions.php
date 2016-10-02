<?php 

wp_enqueue_style( 'style', get_stylesheet_uri() );
//wp_register_style("jquery-ui-accordion", plugins_url("jquery.ui.accordion.min.css", __FILE__));

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/magnific-popup/jquery.magnific-popup.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'jquery.fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/jquery-ui-1.12.1.custom/jquery-ui.min.js', array ('jquery'), 1.1, true);
wp_enqueue_script( 'creative', get_template_directory_uri() . '/js/creative.js', array ( 'jquery' ), 1.1, true);

//function wpbootstrap_scripts_with_jquery()
//{
	//// Register the script like this for a theme:
	//wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	//// For either a plugin or a theme, you can then enqueue the script:
	//wp_enqueue_script( 'custom-script' );
//}
//add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>
