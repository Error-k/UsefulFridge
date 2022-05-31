var cart ={};

const checkCart = () => {
        if( localStorage.getItem('cart') != null) {
            cart = JSON.parse(localStorage.getItem('cart'));
        }
    }
const renderCart = () => {
        var out = '';
        for (var key in cart){
            out += $(".card-title").text() + cart[key] + '<br>';
        }
        $('.cartContent').html(out);
    };
checkCart();
renderCart();
console.log(cart);