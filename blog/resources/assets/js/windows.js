var scrollTopHeight = 0;
$(document).ready(function(){

  if($('*').is('.windows-all">')===false) {
    $('body').children().wrapAll('<div class="windows-all">')
  }

  if($('*').is('.windows')===false) {
    $('body').append('<div class="windows"></div>');
  }

  if($('*').is('.windows-overlay')===false) {
    $('body').append('<div class="windows-overlay"></div>');
  }

  $('.windows-overlay').click(function(){
    closeWindows();
  })
});

function openWindow(name){

  scrollTopHeight = $(window).scrollTop();

  $('.windows-all').css('margin-top','-'+windows+'px');

  $('.windows-all').addClass('windows-all_open');
  $('.windows-overlay').addClass('windows-overlay_open');
  $('.windows').addClass('windows_open');

  $('.windows__item').hide();
  $(name).show();

};

function closeWindows(){
  $('.windows__item').hide();
  $(window).scrollTop(windows);

  $('.windows-all').attr('style', '');

  $('.windows-all').removeClass('windows-all_open');
  $('.windows-overlay').removeClass('windows-overlay_open');
  $('.windows').removeClass('windows_open');

   $(window).scrollTop(scrollTopHeight);
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

export {openWindow,closeWindows};
