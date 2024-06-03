var itemsCount = 0;
var itemsOnPage = 6;
var offset = 1;
var key = "";
var datapagenumber = 1;
var myPagination = new Pagination({
  container: $("#pagination-content")
  , pageClickCallback:function(){
    datapagenumber = $('.pagination-content .active a').attr('data-page-number');
    get_data();
    // get_data1();

  },
});
$('body').on('click','#10',function(){
  key = "";
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#11',function(){
  key = 1 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#12',function(){
  key = 2 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#13',function(){
  key = 3 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})
  $('body').on('click','#14',function(){
    key = 4;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })
  
  
  $('body').on('click','#15',function(){
    key = 5 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })
  
  
  $('body').on('click','#16',function(){
    key = 6 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })
  
  
  $('body').on('click','#17',function(){
    key = 7 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()

})



const btn = document.getElementById('10');
const btn2 = document.getElementById('11');
const btn3 = document.getElementById('12');
const btn4 = document.getElementById('13');
const btn5 = document.getElementById('14');
const btn6 = document.getElementById('15');
const btn7 = document.getElementById('16');
const btn8 = document.getElementById('17');

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = '#C5A254';
  btn.style.color = 'white';
  btn2.style.backgroundColor = 'white';
  btn2.style.color = 'black';
  btn3.style.backgroundColor = 'white';
  btn3.style.color = 'black';
  btn4.style.backgroundColor = 'white';
  btn4.style.color = 'black';
});

btn2.addEventListener('click', function onClick() {
  btn2.style.backgroundColor = '#C5A254';
  btn2.style.color = 'white';
  btn.style.backgroundColor = 'white';
  btn.style.color = 'black';
  btn3.style.backgroundColor = 'white';
  btn3.style.color = 'black';
  btn4.style.backgroundColor = 'white';
  btn4.style.color = 'black';
});

btn3.addEventListener('click', function onClick() {
  btn3.style.backgroundColor = '#C5A254';
  btn3.style.color = 'white';
  btn.style.backgroundColor = 'white';
  btn.style.color = 'black';
  btn2.style.backgroundColor = 'white';
  btn2.style.color = 'black';
  btn4.style.backgroundColor = 'white';
  btn4.style.color = 'black';
});

btn4.addEventListener('click', function onClick() {
  btn4.style.backgroundColor = '#C5A254';
  btn4.style.color = 'white';
  btn.style.backgroundColor = 'white';
  btn.style.color = 'black';
  btn3.style.backgroundColor = 'white';
  btn3.style.color = 'black';
  btn2.style.backgroundColor = 'white';
  btn2.style.color = 'black';
});

  btn5.addEventListener('click', function onClick() {
    btn.style.backgroundColor = '#C5A254';
    btn.style.color = 'white';
    btn2.style.backgroundColor = 'white';
    btn2.style.color = 'black';
    btn3.style.backgroundColor = 'white';
    btn3.style.color = 'black';
    btn4.style.backgroundColor = 'white';
    btn4.style.color = 'black';
  });
  
  btn6.addEventListener('click', function onClick() {
    btn2.style.backgroundColor = '#C5A254';
    btn2.style.color = 'white';
    btn.style.backgroundColor = 'white';
    btn.style.color = 'black';
    btn3.style.backgroundColor = 'white';
    btn3.style.color = 'black';
    btn4.style.backgroundColor = 'white';
    btn4.style.color = 'black';
  });
  
  btn7.addEventListener('click', function onClick() {
    btn3.style.backgroundColor = '#C5A254';
    btn3.style.color = 'white';
    btn.style.backgroundColor = 'white';
    btn.style.color = 'black';
    btn2.style.backgroundColor = 'white';
    btn2.style.color = 'black';
    btn4.style.backgroundColor = 'white';
    btn4.style.color = 'black';
  });
  
  btn8.addEventListener('click', function onClick() {
    btn4.style.backgroundColor = '#C5A254';
    btn4.style.color = 'white';
    btn.style.backgroundColor = 'white';
    btn.style.color = 'black';
    btn3.style.backgroundColor = 'white';
    btn3.style.color = 'black';
    btn2.style.backgroundColor = 'white';
    btn2.style.color = 'black';
});



$(document).ready(function() {
  get_num_row();
  get_data();
  btn.style.backgroundColor = '#C5A254';
  btn.style.color = 'white';
});

function get_data() {
  // console.log(datapagenumber);
  if(datapagenumber==1 || datapagenumber==undefined ){
    offset = 0;
    // console.log("HI");
  }else{
    offset  = Math.ceil(itemsOnPage*(datapagenumber-1))
    // console.log(offset);
  }
  
  $.ajax({
    url: 'view/board/method.php',
    method : "POST",
    data   : {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key },
    dataType: "json",
    success : function ($data) {
        var aaa = "";
        if($data.length>0){

        $.each( $data, function( key, value ) {
        // console.log(value.filename);
        
        aaa += 
        '<div class="col-4 item photo">\
        <div class="content">\
        <div class="title">\
          <a class="img-wrapper" href="?page=blog-detail&id='+value.bg_id+'">\
          <img class="boardim inner-img" src="'+value.bg_image+'">\
        </div>\
        <div class="desc">\
            <table id="myTable"><p class="boardheadtext">'+value.bg_text+'</p></table>\
            <p class="boardtitletext">'+value.bg_content+'</p>\
            <p class="boarddatetext">'+value.bg_time+'</p>\
        </div>\
        </div>\
    </div>'
        
        })
        $('#pagination-content').show();

            }else{
              $('#pagination-content').hide();

                aaa += '<div class="row">\
        <div class="col-12 text-center"> \
         <div>ไม่พบข้อมูล</div>\
         </div>\
         </div>';
            }


            $('.list-data .row').html(aaa);
        }
})
}


function get_num_row() {
  $.ajax({
    url: 'view/board/method.php',
    method : "POST",
    data   : {'method':'content-num','key':key},
    dataType: "json",
    success : function ($data) {
  console.log($data);
  $( ".pagination-container" ).remove();
  // $( "ul" ).removeClass( "pagination pagination-sm" )
    itemsCount = $data;
    // console.log(itemsCount);
    myPagination.make(itemsCount, itemsOnPage);
  }

  })
}
$('body').on('click','[data-href]',function(){
  var ids = $(this).attr('data-href');
  // window.location = ids;

});