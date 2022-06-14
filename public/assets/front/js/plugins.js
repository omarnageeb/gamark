// JavaScript Document

$(document).ready(function() {


    
    
      /* Demo purposes only */
  $("figure").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
    
    
    
    
$(window).load(function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});    
    
    
    
     $('.scroll-bottom a').click(function (e) {
                
                e.preventDefault();
                
                  $('html, body').animate({
                
                    scrollTop: $('#' + $(this).data('scroll')).offset().top
                
                }, 1000);
                
            });
    

    

    

    
      
        $('.list li').on('click', function () {
        
        $(this).addClass('active').siblings().removeClass('active');
        
     });
    
    
    
    
    
    
                
    $('.img-list #img1').on('click', function () {
        
            $(this).parent('.img-list').toggleClass('is-visible');
        
        if ($(this).parent('.img-list').hasClass('is-visible')) {
            
            
             $('.img1').fadeIn(500);
            
              $('.img2').fadeOut(10);
            
             $('.img3').fadeOut(10);
        
       
       
        } else {
            
                    $('.img1').fadeIn(500);
            
                  $('.img2').fadeOut(10);

                 $('.img3').fadeOut(10);
       }  
        
    }) ; 
    
    
    
    
      
       $('.navbaar .fa-bars').on('click', function () {
        
            $(this).parent('.navbaar').toggleClass('is-visible');
        
        if ($(this).parent('.navbaar').hasClass('is-visible')) {
            
            
             $('.outing').fadeIn(500);
            
        } else {
           
             $('.outing').fadeIn(500);
       }  
    
    
      }); 
    
    
    
    
        $('.outing').on('click', function () {
        
            $(this).parent('.outing').toggleClass('is-visible');
        
        if ($(this).parent('.outing').hasClass('is-visible')) {
            
            
             $('.outing').fadeOut(500);
            
           
         
        } else {
           
            
             $('.outing').fadeOut(500);
       }  
                        
    });
    
    
    

    
    
});


   



