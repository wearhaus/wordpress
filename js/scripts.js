
(function ($, root, undefined) {
	
	$(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#stickyheader').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#stickyheader').css({position: 'fixed', top: '0px', width:'100%'});
                        $('#body-main').css({'padding-top': '50px'});
                        //$('#stickyalias').css('display', 'block');
                } else {
                        $('#stickyheader').css({position: 'static', top: '0px'});
                        $('#body-main').css({'padding-top': '0px'});
                        //$('#stickyalias').css('display', 'none');
                }
        });
  });
	
})(jQuery, this);
