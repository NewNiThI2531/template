$(window).on('load', function(){
  $('#loading').fadeOut('slow');
});
function loadingShow(){
  $('body').loadingModal('destroy');
  $('body').loadingModal({
    position: 'auto',
    text: 'Please wait',
    color: '#fff',
    opacity: '0.7',
    backgroundColor: 'rgb(0,0,0)',
    animation: 'fadingCircle'
  });
}

function loadingHide(){
  $('body').loadingModal('hide');
}

$(document).ready(function () {
  // loadingHide();
})
