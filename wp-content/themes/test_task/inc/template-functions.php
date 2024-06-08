<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package test_task
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function test_task_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'test_task_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function test_task_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'test_task_pingback_header' );



/**
 * Gutenberg category
 */
function add_custom_block_categories($block_categories, $editor_context)
{
	if (!empty($editor_context->post)) {
		array_push(
			$block_categories,
			array(
				'slug'  => 'images-modules',
				'title' => __('Images-Module', 'test_task'),
				'icon'  => null,
			),
			array(
				'slug'  => 'text-images-modules',
				'title' => __('Images/Text module', 'test_task'),
				'icon'  => null,
			),
			array(
				'slug'  => 'text-modules',
				'title' => __('Text module', 'test_task'),
				'icon'  => null,
			),
			array(
				'slug'  => 'special',
				'title' => __('Special', 'test_task'),
				'icon'  => null,
			),
		);
	}
	return $block_categories;
}
add_filter('block_categories_all', 'add_custom_block_categories', 10, 2);

/**
 * Gutenberg blocks
 */
add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
	register_block_type(get_template_directory() . '/template-parts/blocks/text-images/top-page-banner');
	
}

/**
 * remove Gutenberg Block
 */
add_filter('allowed_block_types_all', 'allowed_block_types', 25, 2);
function allowed_block_types($allowed_blocks, $editor_context)
{

	if ('post' === $editor_context->post->post_type) {
        return array(
            'core/paragraph',
            'core/image',
            'core/gallery',
            'core/heading',
            'core/list',
            'core/list-item',
            'core/video',
            'core/embed',
            'core/spacer',
            'core/buttons',
            'core/separator',
            'acf/top-page-banner',
			
        );
    }

	return array(
		'acf/top-page-banner',
	);
}
