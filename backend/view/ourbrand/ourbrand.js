//ดึงข้อมูล จาก DB
function ajaxRequest(params) {
    var url = 'view/ourbrand/calldata.php'
    params.data.method = "get_article";
   // console.log(params.data);
    $.get(url + '?' + $.param(params.data)).then(function (res) {
      params.success(JSON.parse(res))
    })
  }
  $('body').on('click', '.btn-edit', function () {
    
    $('.save-aticle')[0].reset()
    var id = $(this).data('id');
    var data = new FormData();
    data.append('method','get_article_by_id');
    data.append('id', id);
    $.ajax({
      url: 'views/ourbrand/calldata.php',
      method : "POST",
      data   : data,
      dataType: "json",
      contentType: false,
      cache: false,
      processData:false,
      success : function(data){
        
        if(data.res_code=='00'){
          $('#aid').val(data.res_data.con_id);
          $('#title').val(data.res_data.conhead_text);
          $('#content').val(data.res_data.con_text);
          $('#title_en').val(data.res_data.conhead_textEN);
          $('#content_en').val(data.res_data.con_textEN);
          $('#modal-edit-article').modal('show')
      
        }else{
          Swal.fire('',data.res_text,'error');
        }
      },error: function(jqXHR, textStatus, errorThrown) {
        console.log(jqXHR, textStatus, errorThrown);
    }
    })
  })
  
  $('body').on('click', '.btn-add', function () {
  $('.save-aticle')[0].reset();
  $('#modal-edit-article').modal('show');
  })
  
  var save_aticle = document.getElementsByClassName('save-aticle');
  var validation = Array.prototype.filter.call(save_aticle, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{
      var data = new FormData(this);
      data.append('method','save_article');
      $.ajax({
        url: 'view/ourbrand/calldata.php',
        method : "POST",
        data   : data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        success :function(data){
          // showLoading(false);
          if(data.res_code=='00'){
            Swal.fire('',data.res_text,'success').then(()=>{
              $('#modal-edit-article').modal('hide')
              $('#table').bootstrapTable('refresh');
            });
          }else{
            Swal.fire('',data.res_text,'error');
          }
        }
      });
    }
    form.classList.add('was-validated');
  }, false);
  });
  
  $('body').on('click', '.btn-delete', function () {
  var id = $(this).data('id')
  Swal.fire({
    title: 'ยืนยันการทำรายการ ?',
    text: "ต้องการลบข่าวสารนี้ใช่ไหม",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then((result) => {
    if (result.isConfirmed) {
      var data = new FormData();
      data.append('method','remove_article');
      data.append('id', id);
      $.ajax({
        url: 'view/aboutus/calldata.php',
        method : "POST",
        data   : data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        success :function(data){
          if(data.res_code=='00'){
            Swal.fire('',data.res_text,'success').then(()=>{
            $('#table').bootstrapTable('refresh');
          });
          }else{
            Swal.fire('',data.res_text,'error');
          }
        }
      });
    }
  })
  })