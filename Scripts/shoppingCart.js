var shoppingcart = ["Uw Winkelmandje:", "<br>"];

function pc1(){
    var item = document.getElementById('pc1').innerHTML;
    shoppingcart.push(item);
}

function pc2(){
    var item = document.getElementById('pc2').innerHTML;
    shoppingcart.push(item);
}

function pc3(){
    var item = document.getElementById('pc3').innerHTML;
    shoppingcart.push(item);
}

function pc4(){
    var item = document.getElementById('pc4').innerHTML;
    shoppingcart.push(item);
}

function pc5(){
    var item = document.getElementById('pc5').innerHTML;
    shoppingcart.push(item);
}

function pc6(){
    var item = document.getElementById('pc6').innerHTML;
    shoppingcart.push(item);
}

function pc7(){
    var item = document.getElementById('pc7').innerHTML;
    shoppingcart.push(item);
}

function pc8(){
    var item = document.getElementById('pc8').innerHTML;
    shoppingcart.push(item);
}

function pc9(){
    var item = document.getElementById('pc9').innerHTML;
    shoppingcart.push(item);
}

function showCart(){
    var i;
    var print = document.getElementById('ShowCart');
    print.innerHTML = "";
    for(i=0;i<shoppingcart.length;i++){
        print.innerHTML += "<br>";
        print.innerHTML += shoppingcart[i];
    }
}