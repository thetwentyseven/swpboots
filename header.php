<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container">

			<?php

					wp_nav_menu( array(
							'menu'              => 'header-menu',
							'theme_location'    => 'header-menu',
							'depth'             => 2,
							'container'         => 'nav',
							'container_class'   => 'blog-nav',
							'container_id'      => '',
							'menu_class'        => '',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
					);
			?>

		</div>
	</div>

	<div class="container">
		<?php if ( get_theme_mod( 'swpboots_logo' ) ) : ?>
				<div class='blog-header'>
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'swpboots_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
		<?php else : ?>
				<div class='blog-header'>
						<h1 class='blog-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class='lead blog-description'><?php bloginfo( 'description' ); ?></h2>
				</div>
		<?php endif; ?>
