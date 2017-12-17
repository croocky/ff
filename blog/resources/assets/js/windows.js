var scrollTopHeight = 0;
$(document).ready(function(){

  //$('body').children().wrapAll('<div class="windows-all">')
  $('body').append('<div class="windows"></div>');
  $('body').append('<div class="windows-overlay"></div>');


  $('.windows-overlay').click(function(){
    closeWindows();
  })
});

function openWindow(name){
  if($('.windows-all').hasClass('hide')){
    return false;
  }


  windows = $(window).scrollTop();

  $('.windows-all').css('margin-top','-'+windows+'px');

  $('.windows-all').addClass('windows-all_open');
  $('.windows-overlay').addClass('windows-overlay_open');
  $('.windows').addClass('windows_open');

  $(name).show();

};

function closeWindows(){
  $('windows-item').hide();
  $(window).scrollTop(windows);

  $('.windows-all').attr('style', '');

  $('.windows-all').removeClass('windows-all_open');
  $('.windows-overlay').removeClass('windows-overlay_open');
  $('.windows').removeClass('windows_open');

  windows = $(window).scrollTop(windows);
};

/* REG*/

$(document).ready(function(){
  $('.windows').append('<div class="windows__item wi-reg">\
    <div class="windows__item-heading">Registration</div>\
    <div class="windows__item-body">\
    <form method="POST" action="cgi/auth.php" class="form" action="">\
    <div class="form-group">\
    <input name="auth_name" class="form-control">\
    </div>\
    <div class="form-group">\
    <input name="auth_pass" class="form-control">\
    </div>\
    <div class="form-group">\
    <input type="submit" value="Log in">\
    </div>\
    </form>\
    </div>\
  </div>');

});

export {openWindow,closeWindows,scrollTopHeight};
