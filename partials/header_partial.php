<?php
remove_action('genesis_after_header', 'genesis_do_nav');
remove_action('genesis_header', 'genesis_do_header');
add_action('genesis_header', 'stb_do_header');

// Create the custom header
function stb_do_header() {
	echo '<div class="title-area fixed-title">';
		echo '<p class="site-title" itemprop="headline">';
			echo '<a href="'. home_url() . '">' . bloginfo('name') . '</a>';
		echo '</p>';
	echo '</div>';
	echo '<nav class="nav-primary">';
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container' => 'div',
		'container_class' => 'wrap',
		'menu_class' => 'ffixed-nav'
	));
	echo '</nav>';
	if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Header Right') ) : else : endif;
}
?>