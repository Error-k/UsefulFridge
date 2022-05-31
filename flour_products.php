<?php 

/**
* Template Name: Мучное
*/

?>

<?php get_header(); ?>
	
	<div class="content">
		<div class="container">
			<div class="row">

				<?php
				global $woocommerce;
				global $product;

				$filter = array(
					'product_cat' => 'flour_products',
				  	'posts_per_page' => -1, 
				   	'order' => 'ASC',
				   	'orderby' => 'title',
				   	'post_type' => 'product',
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
												<div class="col col-6 col-md-6">
				 									<button class="btn"><i class="bi bi-star"></i></button>
				 								</div>
				 								<div class="col col-6 col-md-6">
				 									<button class="btn"><i class="bi bi-x-octagon"></i></button>
												</div>
				 							</div>
				 					</div>

				 					<a href="?add-to-cart=<?php echo $post->ID; ?>" rel="nofollow" data-product_id="<?php echo $post->ID; ?>" data-quantity="1" class="add_to_cart button product_type_simple add_to_cart_button ajax_add_to_cart">
				 					<button  class="btn_add">
				 						Добавить
				 					</button>
				 					</a>
				 				</div>
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