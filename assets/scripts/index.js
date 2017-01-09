'use strict';

$(document).ready(function(){
  $('video').trigger('play');
  $('video').on('ended', function(){
    $('video').load();
  });

  $('#nav-icon4').click(function(){
		$(this).toggleClass('open');
    $('.main-container').toggleClass('shift');
    $('.nav-container').toggleClass('shift');
	});


  $('li.nav-link').on('click', function(e) {
    var newTemplateId = $(this).attr('id');
    var newTemplate = $(this);
    var currentTemplateId = $('li.nav-link').find('h5.active').parent().attr('id');
    var currentTemplate = $('li.nav-link').find('h5.active');

    currentTemplate.removeClass('active');
    newTemplate.children('h5').addClass('active');
    $('.main-container').toggleClass('shift');
    $('.nav-container').toggleClass('shift');
    $('#nav-icon4').toggleClass('open');
    $('#'+currentTemplateId+'-template').addClass('hide-template');
    setTimeout(function(){
        $('#'+currentTemplateId+'-template').addClass('hide');
        $('#'+newTemplateId+'-template').removeClass('hide');
        $('#'+newTemplateId+'-template').removeClass('hide-template');
    }, 500);
    if (newTemplateId !== 'home') {
      $('video').trigger('pause');
    }
  });
});
