$(document).ready(function(){
	
	$('body').addClass('loaded');

	function setEqualHeight( objj ) {

	   var maxHeight = -1;

	   $(objj).each(function() {
	     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
	   });

	   $(objj).each(function() {
	     $(this).height(maxHeight);
	   });

	}


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
		// console.log( obj );
	})();

	$('body').on('click', '.deliv__butt', function(e){
			e.preventDefault();
			var dataTo = $(this).attr('data-to');
			if( $(this).hasClass('active') ){
				return false;
			}
			else{
				// $('.deliv__butt')	
				$('.deliv__blck').css('display','none');
				$(dataTo).css('display','block');
				$('.deliv__butt').removeClass('active');
				$(this).addClass('active');
				// console.log( dataTo );
			}
	});


	//Easy animation
	var waypoints = $('#easy').waypoint({
	  handler: function(direction) {
	  	if( $(this.element).hasClass('active') ){
	  		return false;	
	  	}	
	  	else{
	  		$(this.element).addClass('active');
	  	}
	  	
	  	// console.log( this.element.id + ' hit' );
	    
	    // notify(this.element.id + ' hit')
	  },
	  offset: '50%',

	})


	
	$(window).on('resize', function() {  

	  setEqualHeight('.testim__cont-1 .testim__txt');
		setEqualHeight('.testim__cont-2 .testim__txt');
	});

	$(window).on('load', function() {  

		setEqualHeight('.testim__cont-1 .testim__txt');
		setEqualHeight('.testim__cont-2 .testim__txt');

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
	

});



