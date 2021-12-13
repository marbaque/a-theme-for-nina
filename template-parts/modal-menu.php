<?php

/**
 * Displays the menu icon and modal
 *
 * @package WordPress
 * @subpackage White Nina
 * @since White Nina 1.0
 */

?>

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
					<span class="toggle-text"><?php _e('Close Menu', 'white-nina'); ?></span>
					<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
						<polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon>
					</svg>
				</button><!-- .nav-toggle -->

				<?php

				$mobile_menu_location = 'primary';


				?>

				<nav class="mobile-menu" aria-label="<?php echo esc_attr_x('Mobile', 'menu', 'white-nina'); ?>" role="navigation">

					<ul class="modal-menu reset-list-style">

						<?php
						if ($mobile_menu_location) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);
						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => new WhiteNina_Walker_Page(),
								)
							);
						}
						?>

					</ul>

				</nav>

				<?php
				?>

			</div><!-- .menu-top -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->