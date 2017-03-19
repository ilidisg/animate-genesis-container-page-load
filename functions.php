//* Add extra CSS classes to animate the site-container
add_filter('genesis_attr_site-container', 'ig_animate_site_container');
function ig_animate_site_container($attributes) {
	
	$attributes['class'] .= ' animate-site-container fadeIn';
	return $attributes;

}
