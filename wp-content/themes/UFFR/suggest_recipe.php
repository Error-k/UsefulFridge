<?php 

/**
* Template Name: Предложить рецепт
*/

?>

<?php get_header(); ?>

<div class="content">
	<div class="container">
		<div class="suggest-recipe__row row">
			<div class="col suggest-recipe__col">
				<div>
					<form method="post" action="" class="suggest-recipe__form" id="suggest-recipe__form">
					<div class="suggest-recipe__form__title">
						<label>Название Вашего рецепта</label>
						<input id="suggest-recipe__form__title" type="text" name="suggest-recipe__form__title" method="post">
					</div>
					<div class="suggest-recipe__form__descr">
						<label>Описание Вашего рецепта</label>
						<textarea id="suggest-recipe__form__descr" name="suggest-recipe__form__descr"></textarea>
					</div>
					<div class="suggest-recipe__form__link">
						<label>Ссылка на источник рецепта (если рецепт взят из интернета)</label>
						<input id="suggest-recipe__form__link" type="text" name="suggest-recipe__form__link" method="post">
					</div>
					<div class="suggest-recipe__form__button">
						<label>Отправить рецепт на почту Администратору для рассмотрения</label>
						<button class="suggest-recipe__form__sumbit" type="submit" name="suggest-recipe__form__submit" method="post">Отправить</button>
					</div>
					<div class="mess"></div>
					
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div>	
<?php get_footer(); ?>
</body>
</html>