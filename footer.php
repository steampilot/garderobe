<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garderobe
 */

/**
 * The footer widgets below are customized versions
 * @see https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033
 */
?>

</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<div id="footer-sidebar2">
				<?php
				if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
				}
				?>
			</div>
			<div id="footer-sidebar3">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
				}
				?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

    </body>
    </html>
