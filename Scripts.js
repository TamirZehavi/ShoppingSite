if (document.readyState == ('loading')) {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() { //set all event listeners after page's done loading
    var AddToCartButtons = document.getElementsByClassName('add_to_cart_button');
    for (var i = 0; i < AddToCartButtons.length; i++) {
        AddToCartButtons[i].addEventListener('click', GetItemElements);
    }
    document.getElementsByClassName('purchase')[0].addEventListener('click', AddTotalPriceInput);
}

function AddTotalPriceInput() {
    var totalPriceHTML = document.getElementsByClassName('total_price')[0].innerHTML;
    document.getElementById('AddTotalPriceHere').value = totalPriceHTML;
}

numberOfItems = 0;

function GetItemElements(event) {
    var imageSrc = event.target.parentElement.parentElement.getElementsByClassName('item_picture')[1].src;
    var title = event.target.parentElement.parentElement.getElementsByClassName('title')[0].innerHTML;
    var price = event.target.parentElement.parentElement.getElementsByClassName('price')[0].innerHTML;

    AddToCart(title, price, imageSrc);
    UpdateTotalPrice();
}

function AddToCart(title, price, imageSrc) {
    //check for double items in cart popup
    var itemNames = document.getElementsByClassName('cart_title');
    for (var i = 0; i < itemNames.length; i++) {
        if (itemNames[i].innerHTML == title) {
            itemNames[i].parentElement.getElementsByClassName('quantity')[0].value++;
            return;
        }
    }
    numberOfItems++;

    var cartBottom = document.getElementsByClassName('cart_bottom_row')[0];
    var popup = document.getElementsByClassName('popup')[0];
    var cartItem = document.createElement('div');
    cartItem.classList.add('cart_item');
    var cartItemHTML = `
            <div class="cart_item_picture">
                <img class="cart_item_picture" src="${imageSrc}" alt="wolfie">
            </div>
            <div class="cart_title">${title}</div>
            <div class="cart_price">${price}</div>
            <input type="number" class="quantity" name="item` + numberOfItems + `[]" min="0" value="1">
            <input type="hidden" name="item` + numberOfItems + `[]" value="${price}">
            <input type="hidden" name="item` + numberOfItems + `[]" value="${title}">
            <input type="hidden" name="item` + numberOfItems + `[]" value="${imageSrc}">
            <button class="remove_button" type="button">Remove</button>`
    cartItem.innerHTML = cartItemHTML;
    popup.insertBefore(cartItem, cartBottom);

    cartItem.getElementsByClassName('remove_button')[0].addEventListener('click', RemoveItemFromCart);
    cartItem.getElementsByClassName('quantity')[0].addEventListener('change', QuantityChanged);
}

function IsCartEmpty() {
    var popup = document.getElementsByClassName('popup')[0];
    return popup.classList.contains('cart_item');
}

function RemoveItemFromCart(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    UpdateTotalPrice();
}

function QuantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value < 0) {
        input.value = 1;
    }
    if (input.value == 0) {
        RemoveItemFromCart(event);
    }

    UpdateTotalPrice();
}

function UpdateTotalPrice() {
    var totalPrice = 0;
    var allCartItems = document.getElementsByClassName('popup')[0];
    var cartItemArray = allCartItems.getElementsByClassName('cart_item');

    for (var i = 0; i < cartItemArray.length; i++) {
        var cartItem = cartItemArray[i];
        var price = cartItem.getElementsByClassName('cart_price')[0].innerHTML;
        var quantity = cartItem.getElementsByClassName('quantity')[0];
        var priceAsNumber = JSON.parse(price.substring(0, price.length - 1));
        var quantityAsNumber = quantity.value;
        totalPrice = totalPrice + (priceAsNumber * quantityAsNumber);
    }
    totalPrice = Math.round(totalPrice * 100) / 100
    document.getElementsByClassName('total_price')[0].innerHTML = 'Total:' + totalPrice + '$';

    if (totalPrice == 0) {
        document.getElementsByClassName('purchase')[0].disabled = true;
    } else {
        document.getElementsByClassName('purchase')[0].disabled = false;
    }

}

//Displaying a message when leaving the page
beenAskedAboutClosing = false;

document.addEventListener('mouseleave', function() {
    if (!beenAskedAboutClosing) {
        alert("Get the mouse's ass back in the window");
    }
    beenAskedAboutClosing = true;
});

//Add CSS hover functionality
var css = '.cart_item:hover{ background-color: #b6985f } .MainSells .item:hover {background-color: #ba538c;}';
var style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}
document.getElementsByTagName('head')[0].appendChild(style);


//Jquery code for toggeling popup visibilty
$(document).ready(function() {
    $('#cartImage').on('click', function() {
        $('.hide').fadeToggle('fast');
    })
});