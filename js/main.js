$(document).ready(function () {
    $("#view-ln").click(function () {
        $(".shop-product-container").css("display", "block");
        $(".card").css("flex-direction", "row");
        $(".card").css("background", "#F5F6F9");
        $(".card").css("padding", "10px");
        $(".card-img").css("max-width", "40%");
        $(".card-img").css("max-height", "250px");
        $(".card-img").css("margin-right", "25px");
    });
    $("#view-sq").click(function () {
        $(".shop-product-container").css("display", "grid");
        $(".card").css("flex-direction", "column");
        $(".card").css("background", "#fff");
        $(".card").css("padding", "0px");
        $(".card-img").css("max-width", "100%");
        $(".card-img").css("max-height", "auto");
        $(".card-img").css("margin-right", "0px");
    });
});

$(function () {
    $("#customers-testimonials").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true
    });
});


$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });