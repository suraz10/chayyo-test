
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