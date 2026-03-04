let img1 = document.getElementById('hinh1');
let img2 = document.getElementById('hinh2');

img1.addEventListener("mouseover", function () {
    img2.style.visibility = 'visible';
});

img1.addEventListener ("mouseout", function () {
   img2.style.visibility = 'hidden'; 
});