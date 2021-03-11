jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000,
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();
		var form_status = $('<div class="form_status"></div>');
		$.ajax({
			url: $(this).attr('action'),

			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
			}
		}).done(function(data){
			form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
		});
	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	

	$(function(){
	
		var toggle = $('.color-switcher .toggle');
		var colorTile = $('.color-switcher a'); 
		toggle.click(function(){
			$(this).parent().toggleClass('open');
		});
		
	});
	
	$(function(){ 
		$(window).scroll(function(){ 
			if ($(this).scrollTop() > 100) {
				$("#top-bar").fadeOut();
				$("#logo-top-bar").fadeOut();
				$('#scroll').fadeIn(); 
				
			} else { 
				$("#top-bar").fadeIn();
				$("#logo-top-bar").fadeIn();
				$('#scroll').fadeOut(); 
			} 
		}); 
		$('#scroll').click(function(){ 
			$("html, body").animate({ scrollTop: 0 }, 600); 
			return false; 
		}); 
	});
        
        $(function(){
            $('input[type="text"]').change(function(){
                this.value = $.trim(this.value);
            });
		});
		
		$('#nota2').on('click', function(){
			$('#nota').val(2);
			$('#FormSatisfacao').show(); 
			$('.radio-satisfacao').removeAttr('style');
			$("#nota2").css({"color": "rgb(249,66,51)"});
		});
		$('#nota4').on('click', function(){
			$('#nota').val(4);
			$('#FormSatisfacao').show(); 
			$('.radio-satisfacao').removeAttr('style');
			$("#nota4").css({"color": "rgb(238,137,62)"});
		});
		$('#nota6').on('click', function(){
			$('#nota').val(6);
			$('#FormSatisfacao').show(); 
			$('.radio-satisfacao').removeAttr('style');
			$("#nota6").css({"color": "rgb(142,90,13)"});
		});
		$('#nota8').on('click', function(){
			$('#nota').val(8);
			$('#FormSatisfacao').show(); 
			$('.radio-satisfacao').removeAttr('style');
			$("#nota8").css({"color": "rgb(0,191,101)"});
		});
		$('#nota10').on('click', function(){
			$('#nota').val(10);
			$('#FormSatisfacao').show(); 
			$('.radio-satisfacao').removeAttr('style');
			$("#nota10").css({"color": "rgb(0,155,83)"});
		});


		
		$('#CancelSatisfacao').on('click', function(){
			$('.radio-satisfacao').removeAttr('style');
			$('#FormSatisfacao').hide(); 
		});


		$('#FormSatisfacao').submit(function (e) {

			e.preventDefault();

			$.ajax({
				type: $('#FormSatisfacao').attr('method'),
				url: $('#FormSatisfacao').attr('action'),
				data: $('#FormSatisfacao').serialize(),
				beforeSend: function () {
					$('.load').show();
					$('#btnSend').hide();
				},
				success: function (data) {
					$("#Return").html(data);
				},
				error: function () {
					alert('erro FormSatisfacao.submit');
				},
				complete: function () {
					$('.load').hide();
					$('#FormSatisfacao').empty();
				}
			});
		});

	

		

	
});

