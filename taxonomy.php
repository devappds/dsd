<?php 
add_action( 'customize_preview_init', 'twentythirteen_customize_preview_js' );

		// create AboutUscategories
		
		
		 register_post_type( 'Products',
			array(
				'labels' => array(
					'name'               => __('Products', 'gdlr-AboutUs'),
					'singular_name'      => __('Products', 'gdlr-AboutUs'),
					'add_new'            => __('Add New', 'gdlr-AboutUs'),
					'add_new_item'       => __('Add New Quote Products', 'gdlr-AboutUs'),
					'edit_item'          => __('Edit Quote Products', 'gdlr-AboutUs'),
					'new_item'           => __('New Quote Products', 'gdlr-AboutUs'),
					'all_items'          => __('Quote Products', 'gdlr-AboutUs'),
					'view_item'          => __('View Quote Products', 'gdlr-AboutUs'),
					'search_items'       => __('Search Products', 'gdlr-AboutUs'),
					'not_found'          => __('No Products  found', 'gdlr-AboutUs'),
					'not_found_in_trash' => __('No Products  found in Trash', 'gdlr-AboutUs'),
					'parent_item_colon'  => '',
					'menu_name'          => __('Quote Products', 'gdlr-AboutUs')
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => $AboutUs_slug  ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 5,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
			)
		);
			// create Products  categories
		$categories_labels = array(
    'label' => 'Quote Products Categories',
    'hierarchical' => true,
		'show_admin_column' => true,
    'query_var' => true
);

// Register taxonomies for extra post type capabilities
register_taxonomy('quote-products_categories', 'products', $categories_labels);	
		

	
?>