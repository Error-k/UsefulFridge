<?php 
	$suggest__recipe__form__title = $_POST['suggest-recipe__form__title'];
	$suggest__recipe__form__descr = $_POST['suggest-recipe__form__descr'];
	$suggest__recipe__form__link = $_POST['suggest-recipe__form__link'];

	$current_user = wp_get_current_user();
	
	$to = "malinin-2000@mail.ru";
	$date = date ("d.m.Y");
	$time = date ("h:i");
	$from = $current_user->user_email;
	$subject = "Предложенный рецепт";

	$msg = "
	Название рецепта: $suggest__recipe__form__title /n
	Описание рецепта: $suggest__recipe__form__descr /n
	Ссылка на источник: $suggest__recipe__form__link";
	mail($to, $subject, $msg, "From: $from ");
?>