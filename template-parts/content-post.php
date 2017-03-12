<?php
/**
 * The template used for displaying page content
 *
 */
?>

<div class="blog-post">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php the_title( '<h2 class="blog-post-title">', '</h2>'); ?>
	</a>
	<p class="blog-post-meta"><?php the_date('F j, Y'); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php
	if (is_single()) {
		the_content();
	} else {
		the_excerpt();
	}

	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'swpboots' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'swpboots' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	?>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'swpboots' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>
</div>
