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
var itemsOnPage = 15;
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
$('body').on('click','#18',function(){
  key = "";
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#19',function(){
  key = 1 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#20',function(){
  key = 2 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})


$('body').on('click','#21',function(){
  key = 3 ;
  offset = 0;
  datapagenumber = 1;
  var datax1 = {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key};
  get_data(datax1);
  get_num_row()

})



const btn = document.getElementById('18');
const btn2 = document.getElementById('19');
const btn3 = document.getElementById('20');
const btn4 = document.getElementById('21');

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
    url: 'view/blog/method.php',
    method : "POST",
    data   : {'method':'get_data','limit':itemsOnPage,'offset':offset,'key':key },
    dataType: "json",
    success : function ($data) {
        var aaa = "";
        if($data.length>0){

        $.each( $data, function( key, value ) {
        // console.log(value.filename);
        
        aaa += 
        '<div class="item blog">\
        <div class="content">\
        <div class="title p-1">\
          <a href="?page=blog-detail&id='+value.bg_id+'">\
          <img class="blogim" src="'+value.bg_image+'">\
        </div>\
        <div class="desc pt-1">\
            <table id="myTable"><p class="bolgheadtext">'+value.bg_text+'</p></table>\
            <p class="bolgtitletext">'+value.bg_content+'</p>\
            <p class="bolgdatetext">'+value.bg_time+'</p>\
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
    url: 'view/blog/method.php',
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