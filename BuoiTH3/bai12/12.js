window.onload = function() {
    setTimeout ('swichtImage()', 3000);
}

var current = 1;
var numIMG = 6;

function swichtImage() {
    current++;
    document.images['myimage'].src = '../images/image' + current + '.jpg';
    if (current == numIMG)
        current = 0;
    setTimeout('swichtImage()', 3000);
}