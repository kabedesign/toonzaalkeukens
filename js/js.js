// Count ===========================================================================
var $status = $('.count');
var $slickElement = $('.keuken-slider');

$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
  var i = (currentSlide ? currentSlide : 0) + 1;
  $status.html('<span class="active">0'+ i + '</span><br>' + '0'+slick.slideCount);
});

// SLIDER ===========================================================================

$('.keuken-slider').slick({
	infinite: true,
	autoplay: true,
	autoplaySpeed: 2000,
});

$('.dealer-slider').slick({
	infinite: true,
	autoplay: true,
	arrows: false,
	speed: 2000,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
  responsive: [
    
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// GO TO TOP ===========================================================================

$(function(){$(".scroll").click(function(){
	$("html,body").animate({scrollTop:$(".site-header").offset().top},"1000");return false})})

// FADE IN ===========================================================================

$(function(){  // $(document).ready shorthand
  $('.page').fadeIn('fast');
});
$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.fade').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);       
            }
        }); 
    });    
});

// HAMBURGER ===========================================================================

var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }

