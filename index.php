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
					<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
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
	</footer>

	</body>
</html>
