$(document).ready(function() {
    
  /*chven girchevt */
   $('.ul-sluu-3').slick({
  dots: true,
  speed: 800,
       
  autoplay: true,
  autoplaySpeed: 2000,      
       
adaptiveHeight: true,   
dots: false,
infinite: false,       
arrows: false,  
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1265,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,

          
      }
    },
    {
            breakpoint: 1000,
      settings: {
       dots: true,   
        slidesToShow: 3,
         speed: 700, 
        slidesToScroll: 3
      }
    }, 
    {   
      breakpoint: 780,
      settings: {
       dots: true,      
        slidesToShow: 2,
         speed: 700, 
         
        slidesToScroll: 1
      }
    }, 
    { 
      breakpoint: 550,
      settings: {
          dots: true,      
        slidesToShow: 1,
          speed: 200,  
        slidesToScroll: 1
      }
    }
  ]
});  
    
  /*home mobil */
   $('.o-divi-4-sl').slick({
  dots: true,
  speed: 200,
  prevArrow: true,  
  nextArrow: true,      
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        speed: 200,  
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
}); 
    
 /* sruliadi 3 */
   $('.o-divi-4-sll').slick({
  dots: true,
  speed: 200,
  prevArrow: true,  
  nextArrow: true,      
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        speed: 200,  
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
          
    
  /* slaid */
   $('.ul-slu-3').slick({
  dots: true,
  speed: 800,
adaptiveHeight: true,   
dots: false,
infinite: false,       
arrows: false,  
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1265,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,

          
      }
    },
    {
            breakpoint: 1000,
      settings: {
       dots: true,   
        slidesToShow: 3,
         speed: 700, 
        slidesToScroll: 3
      }
    }, 
    {   
      breakpoint: 780,
      settings: {
       dots: true,      
        slidesToShow: 2,
         speed: 700, 
         
        slidesToScroll: 1
      }
    }, 
    { 
      breakpoint: 550,
      settings: {
          dots: true,      
        slidesToShow: 1,
          speed: 200,  
        slidesToScroll: 1
      }
    }
  ]
});  
    
    


    
  
  /* KOMENTAREBI 4-1 */
   $('.svri-7').slick({
  dots: true,
  speed: 800,
       adaptiveHeight: true,   
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1120,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        
        dots: true
          
      }
    },   
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 2,
         speed: 700, 
         
        slidesToScroll: 1
      }
    }, 
    { 
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        speed: 200,    
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});    
    
  /* slaideri 3-3 */
   $('.van-slaider-13').slick({
  dots: true,
  speed: 1200,
       
  autoplay: true,
  autoplaySpeed: 4000,    
       
       
       adaptiveHeight: true,   
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1120,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,

        dots: true   
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 3,
         speed: 700, 
       
        slidesToScroll: 3
      }
    }, 
    {
           breakpoint: 780,
      settings: {
        slidesToShow: 2,
         speed: 700, 
       
        slidesToScroll: 2
      }
    }, 
    {   
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        speed: 200,  
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  
    
});