var navChain = [];
var mapContact;
var winw = jQuery(window).outerWidth();

jQuery(document).ready(function(){
    jQuery('#top').click(function(){
        jQuery('body, html').animate({
            scrollTop: 0
        }, 300);
    });

  
  var errors = jQuery('.errortext');
  if(errors.length>0){
    jQuery('body, html').animate({
      scrollTop: errors.offset().top-20
    }, 300);
  }

  if(winw<=767){
    var hh1 = jQuery('h1').outerHeight()+14;
    jQuery('.bx-sidebar-block .bx-filter').css('top', hh1+'px');
  }

  jQuery('.submit-mail').on('submit', function(){
    var data = jQuery(this).serializeArray();
    var form = jQuery(this);

    form.find('input, textarea').removeClass('error');
    jQuery.ajax({
      url: '/forms/ajax.php',
      data: data,
      dataType: 'json',
      method: "POST",
      success: function(msg){
        if(msg.success == 'Y'){
          var block = form.closest('.parent-form-block');
          var success = block.find('.form-success');

          if(success && success.length>0){
            block.find('.form-container').find('input[type="text"], input[type="email"], input[type="phone"], input[type="password"], input[type="tel"], textarea').val('');

            block.find('.form-container').hide();
            block.find('.form-success').show();
          }else{
            jQuery.fancybox.open({src: '#modal-success'});
          }
        }else{
          jQuery.each(msg, function(index, value){
            form.find('[name="'+value+'"]').addClass('error');
          });
        }
      }
    });
    return false;
  });

  jQuery('.header .login a').on('click', function(){
    var object = jQuery(this).closest('.login').find('.popup-login').toggle().toggleClass('hide');
  });

  jQuery('.catalog-slider').bxSlider({ pager: false, controls: true,
    autoReload: true, slideMargin: 15, adaptiveHeight: true,
    breaks: [{screen:0, slides:1, pager:false},{screen:640, slides:2},{screen:840, slides:3},{screen:1200, slides:4}]
  });

  jQuery('.view-filter-item').on('click', function(){
    jQuery(this).closest('.bx-filter-parameters-box-container').find('.hide-item-filter').toggleClass('view');
  });

  jQuery('.bx-filter-title').on('click', function(){
    jQuery(this).closest('.bx-filter').children('.bx-filter-section').toggleClass('view');
    jQuery(this).toggleClass('view');
    jQuery(this).closest('.bx-filter').toggleClass('view');
  });

  jQuery('.fancybox').fancybox({
    afterClose: function(current, event) {
        var block = jQuery('.parent-form-block');

        block.find('.form-container').find('input[type="text"], input[type="email"], input[type="phone"], input[type="password"], input[type="tel"], textarea').val('');

        block.find('.form-success').hide();
        block.find('.form-container').show();
      }
  });

  jQuery('.smodal-reverse').on('click', function(){
    var block = jQuery(this).closest('.parent-form-block');

    block.find('.form-container').find('input[type="text"], input[type="email"], input[type="phone"], input[type="password"], input[type="tel"], textarea').val('');

    block.find('.form-success').hide();
    block.find('.form-container').show();
    return false;
  });

  ymaps_contact();

  var timeMaps;
  jQuery(window).resize(function(){

      winw = jQuery(window).outerWidth();

      if(jQuery('.close-menu').hasClass('open') && jQuery(window).width()>740){
        var container = jQuery('.close-menu').closest('.top-nav-container');
        container.find('.toggle-menu').removeClass('open');
        container.find('.toggle-container').hide();
        jQuery('.close-menu').removeClass('open');
      }


      if(winw<=767){
        var hh1 = jQuery('h1').outerHeight()+14;
        jQuery('.bx-sidebar-block .bx-filter').css('top', hh1+'px');
      }

      if(winw>600){
        var mapsPageObject = jQuery('#page-ya-maps');
        var wLBlock = jQuery('.maps-container .contact-list').outerWidth();
        var fullW = jQuery(window).outerWidth();
        var containerW = jQuery('.maps-container').outerWidth();

        var mapsWidth = ((fullW-containerW)/2)+(containerW-wLBlock);

        mapsPageObject.width(mapsWidth);

        var height = jQuery('.contact-list').outerHeight();
        mapsPageObject.height(height);
      }
  });

  jQuery('.search-form').find('[type="submit"]').click(function(){
    var block = jQuery(this).closest('.search-form');
    var object = block.find('.input-search-field');
    var input = object.find('input[type="text"]');
    var val = input.val();

    if(!object.is(':visible')){
      block.addClass('close-search');
      object.fadeIn(500);
      object.addClass('fly-search');
      return false;
    }

    if(val.length<=0){
      object.css('display', '');
      object.removeClass('fly-search');
      block.removeClass('close-search');
      return false;
    }

  });

  jQuery('.toggle-menu').click(function(){
    var object = jQuery(this).closest('.top-nav-container').children('ul');
    jQuery(this).closest('.top-nav-container').find('dropdown').addClass('responsive');
    var container = jQuery(this).closest('.top-nav-container').find('.toggle-container');
    var close = jQuery(this).closest('.top-nav-container').find('.close-menu');
    var containerLi = container.children('ul');

    var containerLk = jQuery('.header .login .popup-login');

    var lk = '<li class="nav-item"><a href="#modal-consult" class="fancybox-consult">Заказать консультацию</a></li>';
    lk += '<li class="nav-item dropdown-small nav-dropdown"><a class="click-active" href="javascript:;">Личный кабинет</a>'+containerLk.html()+'</li>';

    navChain = [];
    navChain[navChain.length] = object.html()+lk;

    containerLi.html(object.html()+lk);

    jQuery('.fancybox-consult').fancybox({
      afterClose: function(current, event) {
          var block = jQuery('.parent-form-block');

          block.find('.form-container').find('input[type="text"], input[type="email"], input[type="phone"], input[type="password"], input[type="tel"], textarea').val('');

          block.find('.form-success').hide();
          block.find('.form-container').show();
        }
    });

    jQuery(this).addClass('open');
    close.addClass('open');
    containerLi.show();
    toggleEvent();
    container.fadeIn(100);
  });

  jQuery('.close-btn-small').click(function(){
    var block = jQuery(this).closest('.search-form');
    var object = block.find('.input-search-field');
    var input = object.find('input[type="text"]');

    object.css('display', '');
    object.removeClass('fly-search');
    block.removeClass('close-search');
    input.val('');
    return false;
  });

  jQuery('.phone-mask').focus(function(){
    var val = jQuery(this).val();
    if(val.length==0) jQuery(this).val("+7 ");
  }).focusout(function(){
    var val = jQuery(this).val();
    if(val == "+7 ") jQuery(this).val("");
  });
    

  var items = document.getElementsByClassName('phone-mask');

  Array.prototype.forEach.call(items, function(element) {
    var phoneMask = new IMask(element, {
      mask: '+7 000 000 00 00'
    });
  });
});

function toggleEvent(){

  jQuery('.toggle-container').off('click').on('click', 'li', function(){

    var object = jQuery(this).find('ul').first();
    if(object.length>0){
      var container = jQuery(this).closest('.toggle-container');
      var containerLi = container.children('ul');

      container.find('.back-top-nav-li').remove();

      navChain[navChain.length] = object.html();

      containerLi.html(object.html());

      if(navChain.length>1){
        container.find('ul').first().find('li').first().before('<li class="nav-item back-top-nav-li"><a href="javascript:;" class="back-top-nav">Назад</a></li>');
      }

      containerLi.show();
      container.fadeIn(100);
      toggleEvent();
      jQuery('body, html').animate({
        scrollTop: jQuery('.header .nav-green').offset().top
      }, 300);
    }
  }).on('click','a', function(e) { 
     if(!jQuery(this).hasClass('click-active')) e.stopPropagation();   
  });

  jQuery('.back-top-nav').off('click').on('click', function(){
    var container = jQuery(this).closest('.toggle-container');
    var containerLi = container.children('ul');

    containerLi.html(navChain[navChain.length-2]);
    jQuery('.fancybox-consult').fancybox({
      afterClose: function(current, event) {
          var block = jQuery('.parent-form-block');

          block.find('.form-container').find('input[type="text"], input[type="email"], input[type="phone"], input[type="password"], input[type="tel"], textarea').val('');

          block.find('.form-success').hide();
          block.find('.form-container').show();
        }
    });
    navChain.pop();
    containerLi.show();
    container.fadeIn(100);

    
    if(navChain.length>1){
      container.find('ul').first().find('li').first().before('<li class="nav-item back-top-nav-li"><a href="javascript:;" class="back-top-nav">Назад</a></li>');
    }

    toggleEvent();
    jQuery('body, html').animate({
      scrollTop: jQuery('.header .nav-green').offset().top
    }, 300);
  });

  jQuery('.close-menu').off('click').on('click', function(){
    var container = jQuery(this).closest('.top-nav-container');
    container.find('.toggle-menu').removeClass('open');
    container.find('.toggle-container').hide();
    jQuery(this).removeClass('open');
  });
}

function ymaps_contact(){
  var mapsPageObject = jQuery('#page-ya-maps');
  if(mapsPageObject.length>0){
    ymaps.ready(function () {
      var coords = mapsPageObject.data('coords');
      var address = mapsPageObject.data('address');
      var xy = coords.split(',');

      if(winw>600){
        var wLBlock = jQuery('.maps-container .contact-list').outerWidth();
        var fullW = jQuery(window).outerWidth();
        var containerW = jQuery('.maps-container').outerWidth();

        var mapsWidth = ((fullW-containerW)/2)+(containerW-wLBlock);

        mapsPageObject.width(mapsWidth)

        var height = jQuery('.contact-list').outerHeight();
        mapsPageObject.height(height);
      }

      mapContact = new ymaps.Map('page-ya-maps', {
              center: xy,
              zoom: 9
          }, {
              searchControlProvider: 'yandex#search'
          }),

          myPlacemark = new ymaps.Placemark(xy, {
              hintContent: address,
              balloonContent: address
          });

          mapContact.geoObjects
            .add(myPlacemark);
    });
  }
}


$(document).ready(function(){
  $(".quickOrder").click(function(){
    if($(".popup-fade_f").css("display") == "none"){
      $(".popup-fade_f").css({"display": "block"});
    }

    if($(".popup-fade1_f").css("display") == "none"){
      $(".popup-fade1_f").css({"display": "block"});
      $(".popup_f").css({"display": "block"});
    }
    //alert();
  });
  // alert( $(".popup-fade").css("display") );
   // Клик по ссылке "Закрыть".
    $('.fa-window-close.f').click(function() {
        $(".popup-fade1_f").css({"display": "none"});   
        $(".popup_f").css({"display": "none"}); 
        return false;
    });        

    // Закрытие по клавише Esc.
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade_f').fadeOut();
            $('.popup-fade1_f').fadeOut();
        }
    });
    
    // Клик по фону, но не по окну.
    $('.popup-fade1_f').click(function(e) {
        if ($(e.target).closest('.popup1').length == 0) {
            $(this).css({"display": "none"});   
            $(".popup_f").css({"display": "none"});                 
        }
    });

    $(".form-group button.quick_order_btn").click(function(e){
      e.preventDefault();
      var name = $("#missingName_f").val();
	var phone = $("#missingPhone_f").val();


      var file_data = $('#file').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data);
           
          // вызовем событие нажатия на элемент, что приведет к выполнению обработчика
          
      if(!name){
        $("#smallMissingName_f").text("Это поле обязательно для заполнения");
      }
      if(!phone){
        $("#smallMissingPhone_f").text("Это поле обязательно для заполнения");
        return;
      }
      $.ajax({
          type: "POST",
          url: "/bitrix/templates/shop_new/handler.php",
          cache: false,
          contentType: false,
          processData: false,
          data:form_data,
          success: function(data){
          console.log(data);


          // установим обработчик нажатия кнопки мыши на элементе foo
          $('.quick_order_btn_file').bind('click', function(e){
            e.preventDefault();
             var name = $("#missingName_f").val();
		      var phone = $("#missingPhone_f").val();
		      var logotype = $('input[type=file]').val();
		      var idTovara = $("#missingSpan_f").attr("dataId");
		      var url = $("#missingSpan_f").attr("dataURL");
		      var h1 = $("#missingSpan_f").attr("dataH1");
	      // $(".missing_item_f").html("<p class='missingSuccess_f'>Спасибо Ваше сообщение отправленно!</p>");
		     // $(".popup_f").css({"height": "70px"});
            $.ajax({
          type: "POST",
          url: "/bitrix/templates/shop_new/handler.php",
          data:{
            "name":name,
            "phone":phone,
            "id":data,
            "idTovara":idTovara,
            "url":url,
            "h1":h1
          },
          success: function(data){
          console.log(data);
        
      }
    });
          });
          $('.quick_order_btn_file').trigger('click');
          $(".missing_item_f").html("<p class='missingSuccess_f'>Спасибо Ваше сообщение отправленно!</p>");
          $(".popup_f").css({"height": "70px"});
        
      }
    });   
    });

$(".product-item-image-alternative").hover(function(){
	// $(".btn.btn-success.quickOrder").css({"min-width": "30px");
		$(".btn.btn-success.quickOrder").css({"display": "inline-block"});
})
$(".product-item-image-alternative").focusout(function(){
		$(".btn.btn-success.quickOrder").css({"display": "none"});
})

})

/////////////
jQuery(document).ready(function(){
  $.fn.customFile = function() {

    return this.each(function() {

      var $file = $(this).addClass('customfile'); // исходный файловый ввод

      // здесь код
      // Поддерживает ли браузер множество файлов HTML5?
      var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
       isIE = /msie/i.test( navigator.userAgent ); // просто, но не супербезопасно...
       
       var $wrap = $('<div class="search form-control">'),
       $input = $('<input type="text" class="customfile-filename" placeholder="Выберите логотип"/>'),
       $button = $('<input type="button" class="customfile-upload" value="Обзор">');
       $label = $('<label class="customfile-upload" for="'+ $file[0].id +'">Обзор</label>');

       $file.css({
        position: 'absolute',
        left: '-9999px'
      });

       $wrap.insertAfter( $file ).append( $file, $input, ( isIE ? $label : $button ) );

       $file.attr('tabIndex', -1);
      $button.attr('tabIndex', -1);

      $button.click(function () {
        $file.focus().click(); // Открыть диалог
      });

      $file.change(function() {
 
       var files = [], fileArr, filename;
       
       // Если есть поддержка multiple, то выделите 
       // все имена файлов из файлового массива
       if ( multipleSupport ) {
       fileArr = $file[0].files;
       for ( var i = 0, len = fileArr.length; i < len; i++ ) {
       files.push( fileArr[i].name );
       }
       filename = files.join(', ');
       
       // Если поддержка отсутствует, то возьмите значение
       // и удалите путь, чтобы показать только имя файла
       } else {
       filename = $file.val().split('\\').pop();
       }
       
       $input.val( filename ) // Установите значение
       .attr('title', filename) // Покажите имя файла в всплывающей подсказке заголовка
       .focus(); // Regain focus
       
      });

      $input.on({
        blur: function() { $file.trigger('blur'); },
        keydown: function( e ) {
       if ( e.which === 13 ) { // Enter
       if ( !isIE ) { $file.trigger('click'); }
       } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
       // В некоторых браузерах значение не модифицируется
       // с помощью приема, которым мы удаляем старый input и добавляем
       // чистый клон со всеми прикрепленными исходными событиями
       $file.replaceWith( $file = $file.clone( true ) );
       $file.trigger('change');
       $input.val('');
       } else if ( e.which === 9 ){ // TAB
       return;
       } else { // Все остальные ключи
       return false;
       }
        }
      });
    });

  };

}( jQuery ));

$(document).ready(function(){
  $(".form-check-input").click(function(){
    if($(this).prop("checked")){
      console.log($(".customfile-container").css("display"));
      // $(".customfile-container").css({"display": "flex"});
    }else{
      // $(".customfile-container").css({"display": "none"});
    }
  })



    $("#hiddenButtonFile").bind('click', function(e){
      e.preventDefault();
      var name = $('[name = FIRST_NAME]').val();
      var email = $('[name = EMAIL]').val();
      var phone = $('[name = PHONE]').val();
      

      var file_data = $('#file').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data);
           
          // вызовем событие нажатия на элемент, что приведет к выполнению обработчика
          
      if(!name){
        $("#smallMissingName_f").text("Это поле обязательно для заполнения");
        return;
      }
      if(!email){
        $("#smallMissingName_f").text("Это поле обязательно для заполнения");
        return;
      }
      if(!phone){
        $("#smallMissingPhone_f").text("Это поле обязательно для заполнения");
        return;
      }
console.log(name + email + phone);
      $.ajax({
          type: "POST",
          url: "/personal/cart/handler.php",
          cache: false,
          contentType: false,
          processData: false,
          data:form_data,
          success: function(data){
          console.log(data);

          // установим обработчик нажатия кнопки мыши на элементе foo
          $('#hiddenButtonFile_2').bind('click', function(e){
            e.preventDefault();
             var name = $('[name = FIRST_NAME]').val();
             var email = $('[name = EMAIL]').val();
             var phone = $('[name = PHONE]').val();
        // $(".missing_item_f").html("<p class='missingSuccess_f'>Спасибо Ваше сообщение отправленно!</p>");
         // $(".popup_f").css({"height": "70px"});
            $.ajax({
          type: "POST",
          url: "/personal/cart/handler.php",
          data:{
            "name":name,
            "phone":phone,
            "email":email,
            "id":data
          },
          success: function(data){
          console.log(data);
        
      }
    });
          });
          $('#hiddenButtonFile_2').trigger('click');
      }
    });
    });
$(".triggerFile").click(function(e){
  // e.preventDefault();
  $('#hiddenButtonFile').trigger('click');
})

$('#nanesenie_logotipa').submit(function (e) {
    var form = this;
    e.preventDefault();
    setTimeout(function () {
        form.submit();
    }, 1000); // in milliseconds
});

})