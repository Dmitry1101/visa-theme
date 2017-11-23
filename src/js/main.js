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
	
	// $('body').on('click', '.morre', function(){
		
	// 	var httml = '<div class="blog__item" style="background: url(\'http://vr.s3.devpreviewr.com/wp-content/themes/visa_reservation/dist/img/blog-8.jpg\') center no-repeat; -webkit-background-size: cover; background-size: cover;">' +
	// 						'<div class="blog__img">' +
	// 							'<img src="http://vr.s3.devpreviewr.com/wp-content/themes/visa_reservation/dist/img/blog-8.jpg" alt="">' +
	// 						'</div>'	+					
	// 						'<div class="blog__content">' +
	// 							'<div class="blog__date">Oct 14, 2017 | 0 comments</div>' +
	// 							'<div class="blog__content-title">' +
	// 								'Key Information On Monaco Visa Requirements – Visa Reservation' +
	// 							'</div>' +
	// 							'<div class="blog__content-txt">' +
	// 								'<p>One of the smallest countries in the world, Monaco is an entire nation squeezed into a few hectares of land. But, make no mistake; this micronation, just outside France, is an ultimate t…</p>' +
	// 							'</div>' +
	// 							'<p class="blog__content-read">' +
	// 								'<a href="#">Read More ></a>' +
	// 							'</p>' +
	// 						'</div>' +
	// 					'</div>' +

	// 					'<div class="blog__item" style="background: url(\'http://vr.s3.devpreviewr.com/wp-content/themes/visa_reservation/dist/img/blog-5.jpg\') center no-repeat; -webkit-background-size: cover; background-size: cover;">' +
	// 						'<div class="blog__img">' +
	// 							'<img src="http://vr.s3.devpreviewr.com/wp-content/themes/visa_reservation/dist/img/blog-5.jpg" alt="">' +
	// 						'</div>'	+					
	// 						'<div class="blog__content">' +
	// 							'<div class="blog__date">Oct 14, 2017 | 0 comments</div>' +
	// 							'<div class="blog__content-title">' +
	// 								'Key Information On Monaco Visa Requirements – Visa Reservation' +
	// 							'</div>' +
	// 							'<div class="blog__content-txt">' +
	// 								'<p>One of the smallest countries in the world, Monaco is an entire nation squeezed into a few hectares of land. But, make no mistake; this micronation, just outside France, is an ultimate t…</p>' +
	// 							'</div>' +
	// 							'<p class="blog__content-read">' +
	// 								'<a href="#">Read More ></a>' +
	// 							'</p>' +
	// 						'</div>' +
	// 					'</div>';

	// 	$('.blog__list').append(httml);
	// });


});



