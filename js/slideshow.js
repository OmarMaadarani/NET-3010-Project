let slideIdx = 1;
const MAX_SLIDES = 5
// Auto Scroll Through Slideshow every 30 seconds;
var timer = setInterval(nextSlide, 5000, 1, false);
function nextSlide(dir, isClicked) {
    // If button was clicked to change slide, reset timer
    if(isClicked) { resetTimer(); }
    slideIdx + dir > MAX_SLIDES ? changeSlide(1) : (slideIdx + dir < 1 ? changeSlide(MAX_SLIDES) : changeSlide(slideIdx += dir));
} 

function setSlide(idx) {    
    changeSlide(idx);
}   

function changeSlide(idx) {
    slideIdx = idx;
    var currSlides = document.getElementsByClassName('active');
    //var currSlides = document.getElementById(currSlidesId); // Get all Current Slide elements by theur IDs
    Array.from(currSlides).forEach(function (element) {
        element.classList.remove('active');
    });

    var newCurrSlide = document.getElementById("s" + slideIdx); // Get all Elements that are going to be the current slides by their ID
    newCurrSlide.classList.add("active");
    var newCurrThumb = document.getElementById("t" + slideIdx); // Get all Elements that are going to be the current slides by their ID
    newCurrThumb.classList.add("active");

}

function resetTimer() {
    clearInterval(timer);
    timer = setInterval(nextSlide, 5000, 1, false);
}