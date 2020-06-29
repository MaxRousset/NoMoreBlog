<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>

</head>

	<?php get_header(); ?>
	<!-- Blog start -->
	<div class="main-container">

		<div class="blog-main">
			<?php	if (have_posts()) : while (have_posts()) : the_post();?>
				<article>
					<h2>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h2>

					<?php the_content();?>


					<?php
					if ( is_home() ) {
					    // This is the blog posts index
							the_time('F jS, Y');
					} else {
					    // This is not the blog posts index
					}
					?>

				</article>
				<hr/>
			<?php endwhile;
				endif;
			?>
		</div> <!-- /.blog-main -->

		<!-- Sidebar-->
		<?php get_sidebar( 'primary' ); ?>


	</div> <!-- /.container -->



	<footer class="blog-footer">
	<?php wp_footer(); ?>
	<!--Made with love in larache-->
	</footer>

	</body>
</html>
