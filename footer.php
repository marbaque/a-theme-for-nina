<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package White Nina
 */

?>

<footer id="colophon" class="site-footer">

	<div class="footer-menu-wrapper">
		<?php
		if (has_nav_menu('footer')) {
			echo '<ul class="footer-menu">';
			wp_nav_menu(
				array(
					'container'  		=> '',
					'items_wrap'		=> '%3$s',
					'theme_location'	=> 'footer',
					'depth'				=> 1,
				)
			);
		}
		echo '</ul>';

		if (has_nav_menu('social')) {
			echo '<ul class="social-menu">';
			wp_nav_menu(
				array(
					'container'  		=> '',
					'items_wrap'		=> '%3$s',
					'theme_location'	=> 'social',
					'depth'				=> 1,
				)
			);
		}
		echo '</ul>';
		?>
	</div>

	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'whitenina')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'whitenina'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'whitenina'), 'whitenina', 'Mario Badilla');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>