$(document).ready(function($){


    var modal = $("#myModal");
    var modalBtn = $("#myBtn");
    var modalSpan = $("#modalclose");
    
    // modalBtn.click(() => {
    //     modal.css({display: "block"});
    // });
    modalSpan.click(() => {
        modal.css({display: "none"});
    });
    modal.click((event) => {     
        if(event.target == $(".mymodal-content")[0]
        || event.target == $(".mymodal-content p")[0]
        || event.target == $(".mymodal-content div")[0]
        || event.target == $(".mymodal-content select")[0]
        || event.target == $(".mymodal-content p")[1]
        || event.target == $(".mymodal-content div")[1]
        || event.target == $(".mymodal-content select")[1] 
        || event.target == $(".mymodal-content p")[2]
        || event.target == $(".mymodal-content div")[2] 
        || event.target == $(".mymodal-content div")[3]
        || event.target == $(".mymodal-content div")[4]
        || event.target == $(".mymodal-content div")[5]
        || event.target == $(".mymodal-content div")[6]
        || event.target == $(".mymodal-content div")[7]
        || event.target == $(".mymodal-content div")[8]
        || event.target == $(".mymodal-content div")[9]
        || event.target == $(".mymodal-content div")[10]) {
        modal.css({display: "block"});   
        } else modal.css({display: "none"});    
    });

    $("#submit-button").click(() => {
        let lsItem1 = sessionStorage.getItem('lsChoice1');
        let choice1 = $(".select")[0].value;
        choice1 = lsItem1;
        choice1 = $(".select")[0].value;
        sessionStorage.setItem('lsChoice1', choice1);
        let lsItem2 = sessionStorage.getItem('lsChoice2');
        let choice2 = $(".select")[1].value;
        choice2 = lsItem2;
        choice2 = $(".select")[1].value;
        sessionStorage.setItem('lsChoice2', choice2);
    });

    $("#searchInput").on('input', function(e){
        e.preventDefault();
        var value = this.value.toLowerCase().trim();
        var posts = $(".content .card .card-title");

        if (value != '') {

            posts.each(function(elem){
                if(this.innerText.toLowerCase().search(value) == -1) {
                    this.classList.add('hide');
                    $(this).parents(".eachPost").css({display: "none"});
                } 
            });

        } else {
            posts.each(function(elem){
                this.classList.remove('hide');
                $(this).parents(".eachPost").css({display: "block"});
            });
        }
    });


    
    let splitStrArr = []; 
    let cartArr = [];
    for (let i = 0; i < $(".xoo-wsc-pname").length; i++) {
        cartArr.push($(".xoo-wsc-pname")[i].innerText);
    }
    const intersect = function (nums1, nums2) {
        let result = [];

        let map = nums1.reduce((acc, i) => {
            acc[i] = acc[i] ? acc[i] + 1 : 1;
            return acc;
        }, {});

        for (let i = 0; i < nums2.length; i++) {
            const current = nums2[i];
            let count = map[current];

            if(count && count > 0) {
                result.push(current);
                map[current] -= 1;
            }
        }
        
        return result.length;

    }

    $(".eachPost").each(function(i){
        splitStrArr = $(".card__ingredients")[i].innerText.split(', ');
        let newPer = intersect(splitStrArr, cartArr);
        $(this).css({order: "-" + newPer});
        if ($(this).css('order') == '0') {
            $(this).css({display: "none"});
        }
    });
    

    // $(".suggest-recipe__form__sumbit").click((ev) => {
    //     ev.preventDefault();
    //     let btn = $(".suggest-recipe__form__sumbit");
    //         form = $(".suggest-recipe__form");
    //         mess = $(".mess");
    //     btn.addClass('waiting-send');
    //     $.ajax({
    //         url: '',
    //         type: "POST",
    //         data: form.serialize(),
    //         success: function(){
    //             btn.removeClass('waiting-send');
    //             mess.html('<div class="alert alert-success">Вы успешно предложили рецепт!</div>'); 
    //         },
    //         error: function(){
    //             mess.html('<div class="alert alert-danger">Ошибка отправки!</div>');
    //             btn.removeClass('waiting-send');
    //         }
    //     })
    // });

});

