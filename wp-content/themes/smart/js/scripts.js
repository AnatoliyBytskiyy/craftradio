jQuery(document).ready(function(){
	var $ = jQuery;

	$('.card-tabs-nav').on('click', '.card-tabs-link:not(.active)', function(){
		$(this).addClass('active').siblings().removeClass('active')
			.closest('div.card-tabs').find('div.card-tab-content').removeClass('active').eq($(this).index()).addClass('active');
	});

	$('.card-image-thumb').on('click', '.js-thumb-link', function(e){
		e.preventDefault();
		var img = $(this).attr('href');
		$(this).closest('.card-image-block').find('.card-image-big img').attr('src', img);
		console.log(img);
	});

	$('.popup').magnificPopup({
	    type: 'inline',
	    preloader: false,
	    focus: '#name',
	    removalDelay: 160,
	    fixedContentPos: true
	    /*
	    modal: true,
	    closeOnBgClick: true,
	    closeOnContentClick: true*/
	});

    $('.modal-form.order-form .order-product-name').each(function(){
    	$(this).val($(this).closest('.modal-form-content').attr('data-product-name'));
	});

    $('.modal-form-phone').mask('+7 (999) 999-99-99');
    $(".modal-form-input[name=client]").keydown(function(event) {
        // Разрешаем: backspace, delete, tab и escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
            // Разрешаем: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
            // Разрешаем: home, end, влево, вправо
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // Ничего не делаем
            return;
        }
        else {
            // Обеждаемся, что это цифра, и останавливаем событие keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                return;
            }
            else{
                event.preventDefault();
			}
        }
    });

/*
	$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
		$(this).addClass('active').siblings().removeClass('active')
			.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	})
*/
});