<?php

function wptm_theme_styles() {

	wp_enqueue_style('google_font', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Archivo+Black|Cabin|Roboto+Mono');
	wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'wptm_theme_styles');

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

?>