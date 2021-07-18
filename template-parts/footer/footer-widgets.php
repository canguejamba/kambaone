<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Kamba_One
 * @since Kamba-One 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>