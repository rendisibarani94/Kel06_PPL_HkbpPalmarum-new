var burgerBar = document.querySelector('.burger-bar');
var listName = document.querySelector('.list-name-android');
var nav = document.querySelector('nav');

var buka = false;
burgerBar.addEventListener('click', function(){
    buka = !buka;
    if(buka){
        nav.style.backgroundColor = "#23283C"
        nav.style.color = "#fffff"
        listName.style.display = "block";
    }else{
        nav.style.backgroundColor = "transparent"
        nav.style.color = "white"
        listName.style.display = "none";
    }
});

document.addEventListener("scroll", function(){
    if(window.scrollY > 204){
        nav.style.backgroundColor = "#2A2B32"
        nav.style.color = "#B6B6B6"
    }else{
        nav.style.backgroundColor = "transparent"
        nav.style.color = "white"
    }
})

window.addEventListener('scroll', function() {
    var boxes = document.querySelectorAll('.card');
    for (var i = 0; i < boxes.length; i++) {
        var box = boxes[i];
        var boxTop = box.getBoundingClientRect().top; 
        var triggerBottom = window.innerHeight * 0.8; 

        if (boxTop < triggerBottom) {
            box.classList.add('is-visible');
        } else {
            box.classList.remove('is-visible'); 
        }
    }
});

window.addEventListener('scroll', function() {
    var boxes = document.querySelectorAll('.card_1');
    for (var i = 0; i < boxes.length; i++) {
        var box = boxes[i];
        var boxTop = box.getBoundingClientRect().top; 
        var triggerBottom = window.innerHeight * 0.8; 

        if (boxTop < triggerBottom) {
            box.classList.add('is-visible');
        } else {
            box.classList.remove('is-visible'); 
        }
    }
});

$(document).ready(function() {
    var $slider = $('.schedule-slider');
    var $controls = $('.schedule-control');
  
    var slideWidth = $('.schedule-item').width();
    var slideCount = $('.schedule-item').length;
  
    var sliderWidth = slideWidth * slideCount;
    $slider.width(sliderWidth);
  
    var currentIndex = 0;
  
    function slideTo(index) {
      if (index < 0 || index >= slideCount) {
        return;
      }
  
      var position = index * -slideWidth;
      $slider.css('transform', 'translateX(' + position + 'px)');
      currentIndex = index;
    }
  
    $controls.click(function() {
      var direction = $(this).hasClass('prev') ? -1 : 1;
      slideTo(currentIndex + direction);
    });
  });

  
  var scrollButton = document.getElementById('scrollButton');

  scrollButton.addEventListener('click', function() {
    var targetElement = document.getElementById('targetElement');

    if (targetElement) {
      var targetPosition = targetElement.offsetTop;

      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });