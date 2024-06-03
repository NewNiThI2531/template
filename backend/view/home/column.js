function loadingShow() {
  Swal.fire({
    title: 'Loadding...',
    html: 'กรุณารอสักครู่',
    timerProgressBar: true,
    allowOutsideClick: false,
    didOpen: () => {
      Swal.showLoading()
    }
  })
}


$('body').on('click', '.btn-edit', function () {
    var id = $(this).data('id');
    var data = new FormData();

    $('.save-banner')[0].reset();
    $('#banid').val(id);
    
    $("#previewImg").attr("src", $(this).data('path'));
    $('#modal-edit-article').modal('show')
    data.append('method','get_article_by_id');
    data.append('id', id);
    $.ajax({
      url: 'view/home/calldataB.php',
      method : "POST",
      data   : data,
      dataType: "json",
      contentType: false,
      cache: false,
      processData:false,
      success : function(data){
        // console.log(data);
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



  $("#photo").change(function () {
      const file = this.files[0];
      if (file) {
          let reader = new FileReader();
          reader.onload = function (event) {
              $("#previewImg")
                .attr("src", event.target.result);
          };
          reader.readAsDataURL(file);
      }
  });
  var save_book = document.getElementsByClassName('save-banner');
  var validation = Array.prototype.filter.call(save_book, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }else{
        var data = new FormData(this);
        loadingShow();
        data.append('method','save_banner2');
              $.ajax({
                  url: 'view/home/calldataB.php',
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
                location.reload();
                
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
  
  $('body').on('change', '.form-check-input', function () {
    var id = $(this).data('id');
    var chk = "1";
    if($(this).is(":checked")){
      chk = '0';
    }
    var data = new FormData();
    data.append('method','save_banner1');
    data.append('banid', id);
    data.append('chk', chk);
    $.ajax({
      url: 'view/home/calldataB.php',
      method : "POST",
      data   : data,
      dataType: "json",
      contentType: false,
      cache: false,
      processData:false,
      success :function(data){
        if(data.res_code=='00'){
          // location.reload();                
          $('#modal-edit-article').modal('hide')

        }else{
          Swal.fire('',data.res_text,'error');
        }
      }
    });
  })
  



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
          url: 'view/home/calldataB.php',
          method : "POST",
          data   : data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          success :function(data){
            if(data.res_code=='00'){
              Swal.fire('',data.res_text,'success');
              $('#table').bootstrapTable('refresh');
              location.reload();
            }else{
              Swal.fire('',data.res_text,'error');
            }
          }
        });
      }
    })
    })

    function ajaxRequest(params) {
      var url = 'view/home/calldataA.php'
      params.data.method = "get_article";
      console.log(params.data);
      $.get(url + '?' + $.param(params.data)).then(function (res) {
        params.success(JSON.parse(res))
      })
    }

    $('body').on('click', '.btn-add', function () {
      $('.save_item')[0].reset();
      $('#modal-edit-article').modal('show');
      // $('#previewImg').attr("src", '../../../'+data.res_data.content_image);
      $('#previewImg').attr("src",'');
      $('#aid').val('');
      $('#banid').val('');
    })