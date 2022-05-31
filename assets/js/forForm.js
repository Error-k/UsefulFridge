$(document).ready(function($){
	
    let btn = $(".suggest-recipe__form__sumbit");
        form = $("#suggest-recipe__form");
        mess = $(".mess");
        inputTitle = $("#suggest-recipe__form__title");
        inputDescr = $("#suggest-recipe__form__descr");
        inputLink = $("#suggest-recipe__form__link");

    btn.click((ev) => {
        ev.preventDefault();

        let title = inputTitle.val();
        	descr = inputDescr.val();
        	link = inputLink.val();

        btn.addClass('waiting-send');
	 	$.ajax({
	        url: myPlugin.ajaxurl+'?action=get_in_touch',
	        type: "POST",
	        // processData: false,
	        // contentType: false,
	        cache: false,
	        data: form.serialize(), 
	        success: function(result){
	            btn.removeClass('waiting-send');
	            mess.html('<div class="alert alert-success">Вы успешно предложили рецепт!</div>'); 
	        },
	        error: function(){
	            mess.html('<div class="alert alert-danger">Ошибка отправки!</div>');
	            btn.removeClass('waiting-send');
	        }
	    });
    });
});