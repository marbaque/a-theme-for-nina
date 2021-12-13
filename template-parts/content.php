<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package White_Nina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="index-item">

		<?php if (has_post_thumbnail()) : ?>


			<?php if (is_home() || is_archive() || is_search()) : ?>
				<div class="item-media">
					<a href="<?php esc_url(get_permalink()); ?>" rel="bookmark">
						<?php the_post_thumbnail('medium', ['class' => 'index-img']); ?>
					</a>
				</div>
			<?php else : ?>
				<figure class="top">
					<?php the_post_thumbnail('whitenina-wide'); ?>
					<figcaption><?php echo get_the_post_thumbnail_caption(); ?></figcaption>
				</figure><!-- .featured-image full-bleed -->
			<?php endif; ?>
		<?php endif; ?>



		<div class="item-content">
			<div class="entry-meta">
				<?php
				whitenina_posted_on();
				?>
			</div><!-- .entry-meta -->
			<header class="entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;
				if ('post' === get_post_type()) :
				?>
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_excerpt(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'whitenina'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post(get_the_title())
					)
				);
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'whitenina'),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<footer class="entry-footer">
				<?php whitenina_entry_footer(); ?>
			</footer><!-- .entry-footer -->

		</div> <!-- .item-content -->
	</div> <!-- .index item -->
</article><!-- #post-<?php the_ID(); ?> -->