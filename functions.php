if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Advance Options',
		'menu_title'	=> 'Advance Options',
		'menu_slug' 	=> 'advance-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Options',
		'menu_title'	=> 'Global Options',
		'parent_slug'	=> 'advance-options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'parent_slug'	=> 'advance-options',
	));
	
}
