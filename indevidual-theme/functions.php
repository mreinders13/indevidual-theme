<?php 
// Syylesheets
function load_stylesheets() {

	// Load normalize.css
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('normalize');
	// Load Style.css
	wp_register_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style');
	// Load screenResponse.css 
	wp_register_style('response', get_template_directory_uri() . '/css/screenResponse.css');
	wp_enqueue_style('response');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Google Fonts
function add_google_fonts()  {
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Muli:200,400', false );
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

// Site Logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 75,
        'width'                => 75,
        'unlink-homepage-logo' => true, 
    );
}
add_theme_support( 'custom-logo', $defaults );

//custom initial function
function getInitials($name){
	//split name using spaces
	$words=explode(" ",$name);
	$inits='';
	//loop through array extracting initial letters
		foreach($words as $word){
		$inits.=strtoupper(substr($word,0,1));
		}
	return $inits;	
}

// custom site logo
function customLogo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	 
	// if they set a logo, use it. else use get initials 
	if ( has_custom_logo() ) {
	    echo '<div class="custom-logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></div>';
	} else {
		// get initials
	    echo '<div class="custom-initials"><p>' . getInitials(get_bloginfo( 'name', 'display' )) . '</p></div>'; 
	}
}

// Menus
add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
	)
);

// Add header img
$header_info = array(
    'width'         => 1280,
    'height'        => 400,
	'flex-width'         => true,
    'flex-height'        => true,
    'default-image' => get_template_directory_uri() . '/img/WebBannerIMG.png',
);
add_theme_support( 'custom-header', $header_info );

?>