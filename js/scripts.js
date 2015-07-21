
(function ($, root, undefined) {
	
	$(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#stickyheader').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        //fixing blog-navbar to top of page when scrolling down
                        $('#stickyheader').css({position: 'fixed', top: '0px', width:'100%'});
                        $('#body-main').css({'padding-top': '50px'});

                        //adding blog-navbar logo
                        $('#blognavbar-logo').removeClass('hidden');

                        //changing color of blog-navbar
                        $('#stickyheader').css({'transition': 'background-color 0.2s ease', 'background-color': '#F9F9F9'});
                        
                        //changing color of searchbar
                        $('#searchbar').removeClass('scrolled-up');
                        $('#searchbar').addClass('scrolled-down');

                        //adjusting the links on navbar
                        $('#navbar_blog').removeClass('blognav2');
                } else {
                        //making blog-navbar not fixed to top of page when scrolling up
                        $('#stickyheader').css({position: 'static', top: '0px'});
                        $('#body-main').css({'padding-top': '0px'});
                        
                        //removing blog-navbar logo
                        $('#blognavbar-logo').addClass('hidden');
                        
                        //changing color of blog-navbar
                        $('#stickyheader').css({'transition': 'background-color 0.2s ease', 'background-color': '#EDEDED'});
                        
                        //changing color of searchbar
                        $('#searchbar').removeClass('scrolled-down');
                        $('#searchbar').addClass('scrolled-up');

                        //adjusting links on navbar
                        $('#navbar_blog').addClass('blognav2');
                        
                }
        });
  });
	
})(jQuery, this);
