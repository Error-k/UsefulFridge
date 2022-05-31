<?php 

add_action('wp_enqueue_scripts', 'fridge_styles');
add_action('wp_enqueue_scripts', 'fridge_scripts');

function fridge_styles() {
	wp_enqueue_style( 'fridge-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
};

function fridge_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'fridge-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	
};	

add_theme_support('custom-logo');
add_theme_support('menus');

function fridge_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action('after_setup_theme', 'fridge_add_woocommerce_support');
add_filter("gettext_ultimate-member","um_021522_change_reset_password_labels", 10, 3);
function um_021522_change_reset_password_labels( $translation, $text, $domain ){
 
     if( "To reset your password, please enter your email address or username below." == $text ){
         $translation = "Чтобы сбросить пароль, введите свой email адрес";
     }else if( "Enter your username or email" == $text ){
         $translation = "Введите свой email адрес";
     }else if( "Please provide your username or email" == $text ){
         $translation = "Пожалуйста, укажите свой адрес электронной почты";
     }else if( "If an account matching the provided details exists, we will send a password reset link. Please check your inbox." == $text ){
         $translation = "Если учетная запись, соответствующая предоставленным данным, существует, мы отправим ссылку для сброса пароля. Пожалуйста, проверьте свой почтовый ящик.";
     }
     return $translation;
}

add_action('wp_ajax_get_in_touch', 'get_in_touch_mail_function');
add_action('wp_ajax_nopriv_get_in_touch', 'get_in_touch_mail_function');

function get_in_touch_mail_function(){
	// if($_POST['title']) {

		$title = $_POST['suggest-recipe__form__title'];
		$descr = $_POST['suggest-recipe__form__descr'];
		$link = $_POST['suggest-recipe__form__link'];
		// $strTitle = strval($title);
		$current_user = wp_get_current_user();
		
		$to = "malinin-2000@mail.ru";
		$date = date ("d.m.Y");
		$time = date ("h:i");
		$from = $current_user->user_email;
		$subject = "Предложенный рецепт";

		$msg = "
		Название рецепта: $title
		Описание рецепта: $descr
		Ссылка на источник: $link
		Рецепт предложил: $from";
		wp_mail($to, $subject, $msg, "From: $from ");
	// }
	wp_die();
}

add_action('wp_enqueue_scripts', 'form__func');

function form__func() {
	wp_enqueue_script( 'form-script', get_template_directory_uri() . '/assets/js/forForm.js', array('jquery'), null, true);

	wp_localize_script('form-script', 'myPlugin', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
	));

	
}

	
?>
