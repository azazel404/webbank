

var  mn = $(".main-nav");
    mns = "main-nav-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {3
        $(".navbar").addClass("shadow");
    }
    else {
        $(".navbar").removeClass("shadow");
    }
});
