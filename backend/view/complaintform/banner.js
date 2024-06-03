function ajaxRequest(params) {
    var url = 'views/complaint/calldata.php'
    params.data.method = "get_article";
   // console.log(params.data);
    $.get(url + '?' + $.param(params.data)).then(function (res) {
      params.success(JSON.parse(res))
    })
  }
  $('body').on('click', '.btn-pen1', function () {
    var id = $(this).data('id');
    var data = new FormData();
  
    $('.save1')[0].reset();
    $('#banid').val(id);
    
    $("#previewImg").attr("src", $(this).data('path'));
    $('#modal-edit-article').modal('show')
    data.append('method','get_article_by_id');
    data.append('id', id);
    $.ajax({
      url: 'view/complaintform/calldata.php',
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
  
  
  $('body').on('click', '.btn-pen', function () {
      var id = $(this).data('id');
      $('.save-banner')[0].reset();
      $('#banid').val(id);
    
      $("#previewImg").attr("src", $(this).data('path'));
      $('#modal-edit-article').modal('show')
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
  
    var save_aticle = document.getElementsByClassName('save');
  var validation = Array.prototype.filter.call(save_aticle, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }else{
        var data = new FormData(this);
        data.append('method','save_article');
              $.ajax({
                  url: 'view/complaintform/calldata.php',
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
  var save_aticle1 = document.getElementsByClassName('save1');
  var validation = Array.prototype.filter.call(save_aticle1, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }else{
        var data = new FormData(this);
        data.append('method','save_article1');
              $.ajax({
                  url: 'view/complaintform/calldata.php',
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
                $('#table').bootstrapTable('refresh');
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
  
  
  
    var save_book = document.getElementsByClassName('save-banner');
    var validation = Array.prototype.filter.call(save_book, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
          var data = new FormData(this);
          data.append('method','save_banner');
                $.ajax({
                    url: 'view/complaintform/calldata.php',
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
      var check = $(this).attr('data-type');
  
      if($(this).is(":checked")){
        chk = '0';
      }
      var data = new FormData();
      // data.append('method','save_banner1');
      data.append('aid', id);  
      if(check==1){
        data.append('method','save_banner');
  
      }else{
        data.append('method','save_banner1');
  
      }
  
      data.append('chk', chk);
      $.ajax({
        url: 'view/complaintform/calldata.php',
        method : "POST",
        data   : data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData:false,
        success :function(data){
          if(data.res_code=='00'){
            // location.reload();
          }else{
            Swal.fire('',data.res_text,'error');
          }
        }
      });
    })
    