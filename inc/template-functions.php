<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package gccwp-2018
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gcc_wp_2018_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gcc_wp_2018_body_classes' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gcc_wp_2018_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gcc_wp_2018_pingback_header' );
if ( ! function_exists( 'gcc_wp_2018_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function gcc_wp_2018_posted_on() {
  $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
		$posted_on = sprintf (
			/* translators: %s: post date. */
			 esc_html_x( ' %s', 'post date', 'gcc-wp-2018' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
}
endif;

/**
* Removes or edits the 'Protected:' part from posts titles protected with a password.
*/

add_filter( 'protected_title_format', 'remove_protected_text' );
function remove_protected_text() {
return __('%s');
}
/** Function for displaying only child pages of parent. **/
function gcc_wp_2018_list_child_pages( $args = '' ) { 

global $post;
$top_parent = $post->ID;
$defaults = array(    
        'title_li' => '',
        'child_of' => $top_parent,
        'exclude'      => '',
        'title_li'     => __( 'In This Section' ),
        'echo'         => 1,
        'authors'      => '',
        'sort_column'  => 'menu_order, post_title',
        'sort_order' => 'asc',
        'link_before'  => '',
        'link_after'   => '',
        'item_spacing' => 'preserve',
        'walker'       => '',
        'sort_order' => 'asc',
        'sort_column' => 'post_title',
        'depth' => 3
    );
 
    $r = wp_parse_args( $args, $defaults );
 
    if ( ! in_array( $r['item_spacing'], array( 'preserve', 'discard' ), true ) ) {
        // invalid value, fall back to default.
        $r['item_spacing'] = $defaults['item_spacing'];
    }
 
    $output       = '';
    $current_page = 0;
 
    // sanitize, mostly to keep spaces out
    $r['exclude'] = preg_replace( '/[^0-9,]/', '', $r['exclude'] );
 
    // Allow plugins to filter an array of excluded pages (but don't put a nullstring into the array)
    $exclude_array = ( $r['exclude'] ) ? explode( ',', $r['exclude'] ) : array();
 
    /**
     * Filters the array of pages to exclude from the pages list.
     *
     * @since 2.1.0
     *
     * @param array $exclude_array An array of page IDs to exclude.
     */
    $r['exclude'] = implode( ',', apply_filters( 'wp_list_pages_excludes', $exclude_array ) );
 
    // Query pages.
    $r['hierarchical'] = 0;
    $pages             = get_pages( $r );
 
    if ( ! empty( $pages ) ) {
        if ( $r['title_li'] ) {
            $output .= '<div class="widget"><h3>' . $r['title_li'] . '</h3><ul class="vertical menu accordion-menu"  data-accordion-menu data-submenu-toggle>';
        }
        global $wp_query;
        if ( is_page() || is_attachment() || $wp_query->is_posts_page ) {
            $current_page = get_queried_object_id();
        } elseif ( is_singular() ) {
            $queried_object = get_queried_object();
            if ( is_post_type_hierarchical( $queried_object->post_type ) ) {
                $current_page = $queried_object->ID;
            }
        }
 
        $output .= walk_page_tree( $pages, $r['depth'], $current_page, $r );
 
        if ( $r['title_li'] ) {
            $output .= '</ul></div>';
        }
    }
 
    /**
     * Filters the HTML output of the pages to list.
     *
     * @since 1.5.1
     * @since 4.4.0 `$pages` added as arguments.
     *
     * @see wp_list_pages()
     *
     * @param string $output HTML output of the pages list.
     * @param array  $r      An array of page-listing arguments.
     * @param array  $pages  List of WP_Post objects returned by `get_pages()`
     */
    $html = apply_filters( 'wp_list_pages', $output, $r, $pages );
 
    if ( $r['echo'] ) {
        echo $html;
    } else {
        return $html;
    }
}
add_shortcode('gcc_wp_2018_childpages', 'gcc_wp_2018_list_child_pages');