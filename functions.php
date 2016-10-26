<?php
// Link et Script du Head
// Avec Wordpress, il existe une autre façon de linker les feuilles de style CSS ou les scripts js
// Plus d'info ici :) https://developer.wordpress.org/themes/basics/including-css-javascript/
function wpc_styles() {
	// PROD
	wp_register_script( 'js', get_template_directory_uri().'/build/assets/js/main.min.js' );
	wp_register_style( 'css', get_template_directory_uri().'/build/assets/css/main.min.css' );
	// LOCAL
	// wp_register_script( 'js', get_template_directory_uri().'/assets/js/main.js' );
	// wp_register_style( 'css', get_template_directory_uri().'/assets/css/style.css' );
// Question: Est-ce que vous avez compris pourquoi je separe mes scripts de prod et de developpement local ? :)
	// wp_register_script( 'jquery', get_template_directory_uri().'/build/assets/lib/jquery/jquery.min.js' );
	// wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'js' );
	wp_enqueue_style( 'css' );
}
add_action('wp_enqueue_scripts', 'wpc_styles');
add_action('wp_enqueue_style', 'wpc_styles');

// Customization Coding Days
// Aller on se fait plaisir, on customize un peu Wordpress :) 
function wpc_dashboard_widget_function() {
	echo
	"<ul>
		<li>Une cr&eacute;ation <a href='https://coding-days.com'>Coding Days !!!</a></li>
	</ul>";
}
function wpc_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'Informations techniques', 'wpc_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );
function remove_footer_admin () {
	echo 'Fait avec &#9829; par les Geeks de Coding Days :D';
}
add_filter('admin_footer_text', 'remove_footer_admin');


?>
