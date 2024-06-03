var owl = $('.owl-carousel').owlCarousel({
    loop:true,
    items:1,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    lazyLoad: true,
    margin:0,
    smartSpeed: 1000,
    navSpeed: 1000,
    dragEndSpeed: 1000,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1000
})

owl.on('changed.owl.carousel', function(event) {
  console.log(1234);
})

var navDotCnt = $('.owl-dot').length - 1;
var percentAdd = 100/(navDotCnt);

$('.owl-dot').each(function(i, el) {
    var leftAdd = percentAdd*i;
    if (i == navDotCnt) {
        leftAdd = 100;
    }
    $(el).css("left", leftAdd+"%");

    const str = i+1;

    $(this).find('span').html(pad(str, 2));

});
function pad (str, max) {
  str = str.toString();
  return str.length < max ? pad("0" + str, max) : str;
}








