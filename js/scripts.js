
(function ($, root, undefined) {
	
	$(function(){
        // Check the initial Poistion of the Sticky Header
        
        $(window).resize(function(){
           console.log('resize called-1');
           var width = $(window).width();
           if(width <= 768){
               $('#blog-navbar').removeClass('stickyheader');
           }
           else{
               $('#blog-navbar').addClass('stickyheader');
           }
        })
        .resize();
        var stickyHeaderTop = $('.stickyheader').offset().top - 16;
        console.log(stickyHeaderTop);
        $(window).scroll(function(){

                if( $(window).scrollTop() > stickyHeaderTop ) {
                        //fixing blog-navbar to top of page when scrolling down
                        $('.stickyheader').css({position: 'fixed', top: '0px', width:'100%'});
                        $('#body-main').css({'padding-top': '50px'});

                        //adding blog-navbar logo
                        $('#blognavbar-logo').removeClass('logo-hidden');

                        //changing color of blog-navbar
                        $('.stickyheader').css({'background-color': '#F9F9F9'});
                        
                        //changing color of searchbar
                        $('#search').css({'background-color': '#EDEDED'});

                        //adjusting the links on navbar
                        $('#navbar_blog').removeClass('blognav2');
                } else {
                        //making blog-navbar not fixed to top of page when scrolling up
                        $('.stickyheader').css({position: 'static', top: '0px'});
                        $('#body-main').css({'padding-top': '0px'});
                        
                        //removing blog-navbar logo
                        $('#blognavbar-logo').addClass('logo-hidden');
                        
                        //changing color of blog-navbar
                        $('.stickyheader').css({'background-color': '#EDEDED'});
                        
                        //changing color of searchbar
                        $('#search').css({'background-color': '#F9F9F9'});

                        //adjusting links on navbar
                        $('#navbar_blog').addClass('blognav2');
                        
                }
        });
$(window).resize(function(){
       console.log('resize called');
       var width = $(window).width();
       if(width <= 768){
           $('#gennav').addClass('navbar-fixed-top');
       }
       else{
           $('#gennav').removeClass('navbar-fixed-top');
       }
    })
    .resize();
        
  });

    
	
})(jQuery, this);
