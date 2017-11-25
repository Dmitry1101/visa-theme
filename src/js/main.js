$ = jQuery;
$(document).ready(function(){
	

	function addClassToSearchOnMobile(){
		var ww = $(window).width();
		if( ww < 1140 ){
			$('body').removeClass('is-desktop');
			$('body').addClass('is-mobile');
		}
		else{
			$('body').removeClass('is-mobile');
			$('body').addClass('is-desktop');
		}
	}


	$(window).on('resize', function(){
		addClassToSearchOnMobile();
	});

	addClassToSearchOnMobile();
	

	$('body').on('click', '.toggl-next>a', function(e){
		e.preventDefault();
		if ( $('body').hasClass('is-mobile') ) {
			$(this).siblings('.sub-menu').slideToggle( 300 );	
		}
	});

	$('body').on('click', '.topp__sel .icon', function(e){
		e.preventDefault();
		// console.log( $(this) );
		if ( $('body').hasClass('is-mobile') ) {
			$(this).siblings('.lang-menu').find('.sub-menu').slideToggle( 300 );	
		}
	});
	


	$('body').addClass('loaded');

	//trigger video
	$('body').on('click', '.play__trigger', function(e){
		e.preventDefault();
		var obj = {};
		obj.curr = $(this);
		obj.hreff = obj.curr.attr('data-hreff');
		obj.parr = obj.curr.parents('.vidd-cont');
		obj.parr.html( obj.hreff );
	}); 

	//set active tab
	(function () {
		var obj = {
			actiff: $('.deliv__butt.active'),
			init: function(){
				this.dataTo = this.actiff.attr('data-to');
				$(this.dataTo).css('display','block');
			} 	
		};
		obj.init();
	})();

	$('body').on('click', '.deliv__butt', function(e){
		e.preventDefault();
		var dataTo = $(this).attr('data-to');
		if( $(this).hasClass('active') ){
			return false;
		}
		else{
			$('.deliv__blck').css('display','none');
			$(dataTo).css('display','block');
			$('.deliv__butt').removeClass('active');
			$(this).addClass('active');
		}
	});

	
	$('.deliv__it').hover(function() {
		$('.deliv__it.actt').removeClass('actt');
	}, function() {});



	$(window).on('scroll', function() {
		if ( $('#easy').length ) {
			if($(this).scrollTop() >= $('#easy').position().top - 300){
	     	if( $('#easy').hasClass('active') ){
		  		return false;	
		  	}	
		  	else{
		  		$('#easy').addClass('active');
		  	}
	    
	    }
		}
	});

	$('body').on('click', '.hamburger', function(e){
		e.preventDefault();
		$(this).toggleClass('is-active');
		if( $('.topp__menu').css('display') == 'none' ){
			$('.topp__menu').css('display', 'block');
			$('body').addClass('ov-hidd');	
		}
		else{
			$('.topp__menu').css('display', 'none');	
			$('body').removeClass('ov-hidd');	
		}
	}); 


});




	//ACCORDEON
(function () {
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].onclick = function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  }
	}
})(); 





