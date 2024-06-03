function resizeGridItem(item){
    grid = document.getElementsByClassName("grid")[0];
    rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
    rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      item.style.gridRowEnd = "span "+rowSpan;
  }
  
  function resizeAllGridItems(){
    allItems = document.getElementsByClassName("item");
    for(x=0;x<allItems.length;x++){
      resizeGridItem(allItems[x]);
    }
  }
  
  function resizeInstance(instance){
    item = instance.elements[0];
    resizeGridItem(item);
  }
  

  
  

var itemsCount = 0;
var itemsOnPage = 100;
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
$('body').on('click','#2',function(){
  key = "";
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#3',function(){
  key = 1 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#4',function(){
  key = 2 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#5',function(){
  key = 3 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})

$('body').on('click','#6',function(){
    key = 4 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })

  $('body').on('click','#7',function(){
    key = 5 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })

  $('body').on('click','#8',function(){
    key = 6 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })

  $('body').on('click','#9',function(){
    key = 7 ;
    offset = 0;
    datapagenumber = 1;
    var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
    get_data(datax1);
    get_num_row()
  
  })



const btn = document.getElementById('2');
const btn2 = document.getElementById('3');
const btn3 = document.getElementById('4');
const btn4 = document.getElementById('5');
const btn5 = document.getElementById('6');
const btn6 = document.getElementById('7');
const btn7 = document.getElementById('8');
const btn8 = document.getElementById('9');




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
    url: 'view/board/methodA.php',
    method : "POST",
    data   : {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key },
    dataType: "json",
    success : function ($data) {
        var aaa = "";
        if($data.length>0){

        $.each( $data, function( key, value ) {
        // console.log(value.filename);
        
        aaa += 
        '<div class="col-lg-12 item photo">\
        <a class="content row" href="?page=board-detail&id='+value.BOARD_id+'">\
        <div class="col-12 col-sm-6 col-lg-6 pe-1 title">\
          <img class="blogim" src="'+value.BOARD_image+'">\
        </div>\
        <div class="col-12 col-sm-6 col-lg-6 pe-0 desc">\
            <table id="myTable"><p class="bolgheadtext">'+value.BOARD_Headtext+'</p></table>\
            <p class="bolgtitletext">'+value.BOARD_Text+'</p>\
        </div>\
        </a>\
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

            $('.list-data .grid').html(aaa);
            setTimeout(() => {
              window.onload = resizeAllGridItems();
              window.addEventListener("resize", resizeAllGridItems);
              // allItems = document.getElementsByClassName("item");
              // console.log(allItems);
              // for(x=0;x<allItems.length;x++){
              //   imagesLoaded( allItems[x], resizeInstance);
              // }
            }, 100);
        }
})
}


function get_num_row() {
  $.ajax({
    url: 'view/board/methodA.php',
    method : "POST",
    data   : {'method':'content-num','key':key},
    dataType: "json",
    success : function ($data) {
  console.log($data);
  $( "." ).remove();
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

// Show HTML element
Fancybox.show([{ src: "#dialog-content", type: "inline" }]);

// Show a copy of the element
Fancybox.show([{ src: "#dialog-content", type: "clone" }]);

