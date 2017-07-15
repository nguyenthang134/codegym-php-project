/**
 * Created by Admin on 7/15/2017.
 */
var slideIndex = 1;
showDivs(slideIndex);
setImgListIndex();

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    x[slideIndex-1].style.display = "block";
}

function setImgListIndex(){
    var x = document.getElementsByClassName("imgList");
    for(i = 0; i< x.length; i++){
        x[i].setAttribute("alt",i+1);
        x[i].onclick = function () {
            var index = parseInt(this.getAttribute("alt"));
            console.log(index);
            slideIndex = index;
            showDivs(index);
        }
    }
}




