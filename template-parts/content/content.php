<div class="content">
	<div class="container">
		<div class="single__title">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="single__thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="single__ingredients">
			<p>Ингредиенты: <?php the_field('recipes_ingredients'); ?></p>
		</div>		
		<div class="entry-content single__instruction">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. Only visible to screen readers. */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>