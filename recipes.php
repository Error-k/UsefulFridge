<?php 

/**
* Template Name: Рецепты
*/

?>

<?php get_header(); ?>
	<script>
	$(window).on('load',function(){
        if (sessionStorage.getItem('lsChoice1') == null && sessionStorage.getItem('lsChoice2') == null)      
            $('#myModal').css({display: "block"});
    });
	</script>
	<div class="content">
		<div class="container">

			<!-- <button class="btn" id="myBtn">
				Открыть модальное окно для выборов (для теста)
			</button> -->

			<div id="myModal" class="mymodal">
				<div class="mymodal-content">
					<div class="row">
						<div class="col-11" id="mymodal__title">
							<p>Пожалуйста, выберите время приёма пищи и тип питания!</p>
						</div>
						<div class="col-1">
							<span id="mymodalclose">
								&times;
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<p>Выберите, когда хотите совершить приём пищи:</p>
						</div>
						<div class="col-6">
							<select class="select">
								<option value="53">Не имеет значения</option>
								<!-- breakfast --><option value="48">Завтрак</option>
								<!-- dinner --><option value="49">Обед / Полдник</option>
								<!-- supper --><option value="50">Ужин</option>
								<!-- snack --><option value="51">Перекус</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<p>Выберите нужное ограничение в питании:</p>
						</div>
						<div class="col-6 ">
							<select class="select">
								<option value="53">Не имеет значения</option>
								<!-- without_gluten --><option value="44">Без глютена</option>
								<!-- without_lactose --><option value="46">Без лактозы</option>
								<!-- without_sugar --><option value="45">Без сахара</option>
								<!-- vegan --><option value="6">Веганское питание</option>
								<!-- vegetarian --><option value="5">Вегетарианское питание</option>
								<!-- healthy-diet --><option value="4">Правильное питание</option>
								<!-- halal --><option value="47">Халяль</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-12" id="submit-button">
							<a href="recipes"><button type="submit" class="btn btn-success">Выбрать</button></a>
						</div>
					</div>		
				</div>
			</div>
<script type="text/javascript">

var jsLsChoice1 = sessionStorage.getItem(`lsChoice1`);
var jsLsChoice2 = sessionStorage.getItem(`lsChoice2`);
</script>

<?php
if (isset($_GET['Choice1']))
{
    $php1 = $_GET['Choice1'];
    $php2 = $_GET['Choice2'];
    
    // echo $php3 = "$php1, $php2";
    
}
else
{

    echo '<script>';
    echo 'document.location.href="http://usefulfridge/recipes?Choice1=" + jsLsChoice1' . '+ "&Choice2=" + jsLsChoice2';
    // echo 'document.location.href="' . $_SERVER['REQUEST_URI'] . '?phplsChoice1=" + jsLsChoice1' . '+ "&phplsChoice2=" + jsLsChoice2';
    echo '</script>';
    exit();
}
?>
			<div class="row">

				<?php
				$filter = array(
					// 'category_name' => ${php3},
					'category__and' => array($php1, $php2),
					'posts_per_page' => -1,
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
									?>
									
									<div class="card-img-overlay">
										<h5 class="card-title"><?php the_title(); ?></h5>
				 					</div>
				 					<a href="<?php echo get_permalink(); ?>"><button  class="btn_add">
				 						Подробнее
				 					</button></a>
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