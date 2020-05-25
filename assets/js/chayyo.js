$(document).ready(function(){
	var isExists = localStorage.getItem("pageloadcount");
	if (isExists != 'undefined') { $(".site_cookies").hide();
	} 
	localStorage.setItem("pageloadcount", "1");
	
	$('.ch_testi-list').owlCarousel({
	    items:1,
	    loop:true,
	    nav: true,
	    dots: false,
	    autoplay: true,
	    navText: ['<i class="flaticon-back"></i>','<i class="flaticon-back"></i>'],
	    animateIn: 'slideInRight',
	    animateOut: 'slideOutLeft',
	    responsive:{
	        0:{
	            items:1,
	            nav:false,
	            dots: true
	        },
	        576:{
	            nav:true
	        }
	    }
	});
	$('.site_cookies a.cookie_close').click(function(){
		$(this).parents('.site_cookies').css({'opacity':'0','transition':'.5s ease-out'}).hide();
	});

	// Scroll Top
	window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
	    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
	        document.getElementById("scBtn").style.opacity = "1";
	    } else {
	        document.getElementById("scBtn").style.opacity = "0";
	    }
	}
	if($(window).width() < 992 ){
		$('.main_head').find('.nav_menu').addClass('sidenav');
		$('.mobile_bar, .nav_close, .logo_mobile').show();
	}
	if($(window).width() < 768 ){
		$('.t_header').find('.col-12').addClass('order-last');
	}
	if($(window).width() < 576 ){
		$('.user_head').parent().addClass('order-last');
	}
	if($(window).width() < 426 ){
		$('.user_prof').find('span').text('').html('<i class="fa fa-chevron-down"></i>');
	}
	// Hide Show User Details
	$('.user_details li').find('a').click(function(){
		// $(this).parent().find('.user_dropdown').slideToggle();
	});

	$('.select_search a.drp_search').click(function(){
		$(this).parent().find('.dropdown_switcher').slideToggle();
	});

	// Search Dropdown Change
	$('.dropdown-menu a.dropdown-item').click(function(){
		$(this).addClass('active');
		var searchSelect = $('.dropdown-item.active').attr('value');
		var html = searchSelect;
		$('.user_head input[type=text]').attr('placeholder','Search for '+html);
		$('.dropdown-item').removeClass('active');
	});

	// User Menu Responsive Mobile
	$('.btn_navtog').click(function(){
		$(this).parent().find('#respMenu').slideToggle();
	});
	$('.ace-responsive-menu li').click(function(){
		$(this).find('ul.sub-menu').slideToggle();
	});

	$('.notif_select #noti_slct').click(function () {    
	     $('.notif_cont input:checkbox').prop('checked', this.checked);    
	 });

});

if($(window).width() < 576 ) {
	$(document).on('click','.filter_list h4 a', function(){
		$(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
		$(this).addClass('drp_hide');
		$(this).removeClass('drp_show');
		$(this).parents('.filter_list').find('.filter__show').slideDown();
	});
	$(document).on('click','.drp_hide', function(){
		$(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
		$(this).removeClass('drp_show');
		$(this).addClass('drp_hide');
		$(this).parents('.filter_list').find('.filter__show').slideUp();
	});
}
else {
	$('.drp_show').find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
	$(document).on('click','.filter_list h4 .drp_show', function(){
		$(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
		$(this).removeClass('drp_show');
		$(this).addClass('drp_hide');
		$(this).parents('.filter_list').find('.filter__show').slideUp();
	});
	$(document).on('click','.drp_hide', function(){
		$(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
		$(this).removeClass('drp_hide');
		$(this).addClass('drp_show');
		$(this).parents('.filter_list').find('.filter__show').slideDown();
	});	
}

// FAQ OPEN CLOSE
$(document).on('click','h4.faq_title.hide', function(){
	$(this).removeClass('hide').addClass('show');
	$(this).find('i').removeClass('fa-plus').addClass('fa-minus');
	$(this).parent().find('p.faq_desc').slideDown();
});
$(document).on('click','h4.faq_title.show', function(){
	$(this).removeClass('show').addClass('hide');
	$(this).find('i').removeClass('fa-minus').addClass('fa-plus');
	$(this).parent().find('p.faq_desc').slideUp();
});