if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked(event){
    var cartTotal = parseFloat(document.getElementsByClassName('cart-total-price')[0].innerText.replace('Rs.', ''))
    console.log(cartTotal)
    if(cartTotal == 0){
        alert('Please buy something...')
    }else{
        alert('Thank you for your purchase!!!')
        window.location.href = 'cart.php'
    }
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 0
    }
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-info')
    var j = cartItemContainer.length
    console.log(j)
    var total = 0
    for (k = 0; k < j; k++) {
        var cartRow = cartItemContainer[k].getElementsByClassName('cart-row')
        console.log(cartRow)
        //var total = 0

        
        
        var priceElement = cartItemContainer[k].getElementsByClassName('cart-price')
        console.log(priceElement)
        var quantityElement = document.getElementsByClassName('cart-quantity-input')[k]
        console.log(quantityElement)
        var price = parseFloat(priceElement[0].innerText.replace('Price: Rs.', ''))
        var quantity = quantityElement.value
        document.getElementsByClassName('cart-subtotal')[k].innerText = 'Rs.' + price*quantity
        total = total + (price * quantity)
        total = Math.round(total * 100) / 100

    }
    //document.getElementsByClassName('cart-subtotal')[0].innerText = 'Rs' + price*quantity
    document.getElementsByClassName('cart-final-subtotal')[0].innerText = 'Rs.' + total
    var subtotal = parseFloat(document.getElementsByClassName('cart-final-subtotal')[0].innerText.replace('Rs.', ''))
    if(subtotal == 0){
        total = 0
    }else{
        total = total + 150
    }
    document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs.' + total
}
// function updateCartTotal(){
//     var cartItemContainer = document.getElementsByClassName('cart-info')[0]
//     console.log(cartItemContainer)
//     var cartRows = cartItemContainer.getElementsByClassName('cart-row')
//     console.log(cartRows)
//     var total = 0
//     for(var i=0; i<cartRows.length; i++){
//         var cartRow = cartRows[i]
//         var priceElement = cartRow.getElementsByClassName('cart-price')[0]
//         var quantityElement = cartRow.getElementsByClassName('cart-quantity-input'[0])
//         var price = parseFloat(priceElement.innerText.replace('Rs.', ''))
//         console.log(price)
//         var quantity = quantityElement.value
//         total = total + (price*quantity)

//     }
//     total=Math.round(total * 100) / 100
//     // document.getElementsByClassName('cart-subtotal')[0].innerText = 'Rs.' + 
//     document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs' + total
// }

//below code is working partially
// function updateCartTotal(){
//     var cartItemContainer = document.getElementsByClassName('cart-info')[0]
//     console.log(cartItemContainer)
//     var cartRows = cartItemContainer.getElementsByClassName('cart-row')
//     console.log(cartRows)
//     var total = 0
//     for(var i=0; i<cartRows.length; i++){
//         var cartRow = cartRows[i]
//         console.log(cartRow)
//         var priceElement = cartRow.getElementsByClassName('cart-price')[0]
//         console.log(priceElement)
//         var quantityElement = document.getElementsByClassName('cart-quantity-input')[0]
//         console.log(quantityElement)
//         var price = parseFloat(priceElement.innerText.replace('Price: Rs.', ''))
//         console.log(price)
//         var quantity = quantityElement.value
//         console.log(quantity)
//         total = total + (price*quantity)

//     }
//     total=Math.round(total * 100) / 100
//     console.log(total)
//     // document.getElementsByClassName('cart-subtotal')[0].innerText = 'Rs.' + 
//     document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs' + total
// }


// function updateCartTotal() {
//     var cartItemContainer = document.getElementsByClassName('cart-info')
//     for (var j = 0; j < cartItemContainer.length; j++) {
//         var cartRows = cartItemContainer[j].getElementsByClassName('cart-row')
//         var total = 0
//         for (var i = 0; i < cartRows.length; i++) {
//             var cartRow = cartRows[i]
//             console.log(cartRow)
//             var priceElement = cartRow.getElementsByClassName('cart-price')[0]
//             console.log(priceElement)
//             var quantityElement = document.getElementsByClassName('cart-quantity-input')[0]
//             console.log(quantityElement)
//             var price = parseFloat(priceElement.innerText.replace('Price: Rs.', ''))
//             console.log(price)
//             var quantity = quantityElement.value
//             console.log(quantity)
//             total = total + (price * quantity)
//         }
//         total = Math.round(total * 100) / 100
//         document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs.' + total
//     }
// }