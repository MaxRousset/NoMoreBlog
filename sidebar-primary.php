<?php if ( is_active_sidebar( 'primary' ) ) { ?>

	<div id="sidebar-primary" class="sidebar">
		<style>
		.sidebar {
				width: 100%;
		}
		@media (min-width: 992px){
			.blog-main {
					width: 70%;
					float: left;
			}
			.sidebar {
					width: 25%;
					float: right;
					margin-block-start: 2em;
			}
		}
		</style>

	  <?php dynamic_sidebar( 'primary' ); ?>
	</div>



<?php } ?>
