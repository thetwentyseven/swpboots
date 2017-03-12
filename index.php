<?php
get_header(); ?>

	<div class="row">
		<div class="col-sm-8 blog-main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile;
			?>
      <!-- End of the main loop -->

      <!-- Add the pagination functions here. -->
			<nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>

		</div><!-- .blog-main -->


		<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

			<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
				<div id="primary-sidebar" class="sidebar-module" role="complementary">
					<?php dynamic_sidebar( 'main_sidebar' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

	  </div><!-- /.blog-sidebar -->

	</div><!-- .row -->

</div><!-- .container header.php -->

<?php get_footer(); ?>
