<?php 

/**
* Template Name: Стоп-лист
*/

?>

<?php get_header(); ?>
	<div class="content">
		<div class="container">
			<div class="row">

				<?php
				$filter = array(
					// 'category_name' => ${php3},
					// 'category__and' => array($php1, $php2),
					'posts_per_page' => -1, 
					// 'post__in' => [295, 297, 296],
				);
				$query = new WP_Query( $filter );
				
				if ( $query->have_posts()){
					while ( $query->have_posts() ){
						$query->the_post();
						?>
						<div class="eachPost col-md-4 col-lg-3 col-sm-6 col-6 my-2">
							
								<div class="card text-white">
									<?php 
									the_post_thumbnail();
									//the_field('ingredients_img');
									?>
									
									<div class="card-img-overlay">
										<h5 class="card-title"><?php the_title(); ?></h5>
				 							<div class="row">
												<div class="col">
				 									<button class="btn"><i class="bi bi-star"></i></button>
				 								</div>
				 							</div>
				 					</div>
				 					<button  class="btn_add">
				 						Подробнее
				 					</button>
				 				</div>
				 				<p class="card__ingredients">
				 					<?php the_field('recipes_ingredients'); ?>
				 				</p>
				 			</div>
				 			<?php
				 }
				}
				wp_reset_postdata();
			?>
			</div>
		</div>
	</div>

		<?php get_footer(); ?>
</body>
</html>