<?php

/**
 * Custom page walker for this theme.
 *
 */

if (!class_exists('White_Nina_Walker_Menu')) {
	/**
	 * CUSTOM PAGE WALKER
	 * A custom walker for pages.
	 */
	class White_Nina_Walker_Menu extends Walker_Nav_Menu
	{

		function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
		{
			$output .= "<li class='" .  implode(" ", $item->classes) . "'>";

			if ($item->url && $item->url != '#') {
				$output .= '<a href="' . $item->url . '">';
			} else {
				$output .= '<span>';
			}

			$output .= $item->title;

			if ($item->url && $item->url != '#') {
				$output .= '</a>';
			} else {
				$output .= '</span>';
			}

			// if ($args->walker->has_children) {
			// 	$output .= '<i class="caret fa fa-angle-down"></i>';
			// }
		}
	}
}
