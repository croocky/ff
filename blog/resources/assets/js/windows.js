var windows = 0;
$(document).ready(function(){

  $('body').children().wrapAll('<div class="windows-all">')
  $('body').append('<div class="windows"></div>');
  $('body').append('<div class="windows-overlay"></div>');

  $('.windows-overlay').css('position','fixed');
  $('.windows-overlay').css('top','0');
  $('.windows-overlay').css('width','100%');
  $('.windows-overlay').css('height','100%');
  $('.windows-overlay').css('background','rgba(51, 51, 51, 0.51)');
  $('.windows-overlay').css('display','none');
  $('.windows-overlay').css('z-index','1');
  $('.windows-all').css('z-index','1');
  $('.windows').css('z-index','2');
  $('.windows-all').css('width','100%');
  $('.windows').css('position','relative');
  $('.windows').css('display','none');

  $('.windows-overlay').click(function(){
    closeWindows();
  })
});

function openWindows(name){
  if($('.windows-all').hasClass('hide')){
    return false;
  }


  windows = $(window).scrollTop();

  $('.windows-all').css('margin-top','-'+(windows+50)+'px');
  $('.windows-all').css('position','fixed');
  $('.windows-overlay').css('display','block');
  $('.windows').css('display','block');

  $(name).show();

};

function closeWindows(){
  $(name).hide();
  $(window).scrollTop(windows);

  $('.windows-all').css('margin-top','0');
  $('.windows-all').css('overflow-y','hidden');
  $('.windows-all').css('position','static');
  $('.windows-overlay').css('display','none');
  $('.windows').css('display','none');

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
