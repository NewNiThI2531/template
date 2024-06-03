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
  
  
  var save_aticle = document.getElementsByClassName('fron_IN');
    var validation = Array.prototype.filter.call(save_aticle, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
            $('#aid').val();
          var data = new FormData(this);
          data.append('method','save_selection1');
        loadingShow();
                $.ajax({
                    url: 'view/sustain/calldata.php',
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
  
  
  
  
    $('body').on('click', '.btn-pen2', function () {
      var id = $(this).data('id');
      $('.save-aticle')[0].reset();
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
    var save_book = document.getElementsByClassName('save-banner');
    var validation = Array.prototype.filter.call(save_book, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
          var data = new FormData(this);
          data.append('method','save_banner');
          loadingShow();
                $.ajax({
                    url: 'view/sustain/calldata.php',
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
        data.append('method','save_banner');
        data.append('banid', id);
        data.append('chk', chk);
        $.ajax({
          url: 'view/sustain/calldata.php',
          method : "POST",
          data   : data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          success :function(data){
            if(data.res_code=='00'){
               location.reload();
            }else{
              Swal.fire('',data.res_text,'error');
            }
          }
        });
      })
      
       
      $('body').on('change', '.cheak', function () {
        var id = $(this).data('id');
        var chk = "1";
        if($(this).is(":checked")){
          chk = '0';
        }
        var data = new FormData();
        data.append('method','save_banner2');
        data.append('banid', id);
        data.append('chk', chk);
        $.ajax({
          url: 'view/sustain/calldata.php',
          method : "POST",
          data   : data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          success :function(data){
            if(data.res_code=='00'){
               location.reload();
            }else{
              Swal.fire('',data.res_text,'error');
            }
          }
        });
      })
  
      $('body').on('click', '.btn-edit', function () {
        $('.save-aticle')[0].reset()
        var id = $(this).data('id');
        var data = new FormData();
        data.append('method','get_article_by_id');
        data.append('id', id);
        loadingShow();
        $.ajax({
          url: 'view/sustain/calldata.php',
          method : "POST",
          data   : data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          success :function(data){
            if(data.res_code=='00'){
              $('#aid').val(data.res_data.con_id);
              $('#title1_TH').val(data.res_data.conhead_text);
              $('#title1_EN').val(data.res_data.conhead_textEN);
              $('#title12_TH').val(data.res_data.conhead_text);
              $('#title12_EN').val(data.res_data.conhead_textEN);
              $('#title13_TH').val(data.res_data.conhead_text);
              $('#title13_EN').val(data.res_data.conhead_textEN);
              $('#title14_TH').val(data.res_data.conhead_text);
              $('#title14_EN').val(data.res_data.conhead_textEN);

              $('#title2_TH').val(data.res_data.conhead_text);
              $('#title2_EN').val(data.res_data.conhead_textEN);
              $('#title5_TH').val(data.res_data.conhead_text);
              $('#title5_EN').val(data.res_data.conhead_textEN);
              $('#title4_TH').val(data.res_data.conhead_text);
              $('#title4_EN').val(data.res_data.conhead_textEN);
              $('#title41_TH').val(data.res_data.conhead_text);
              $('#title41_EN').val(data.res_data.conhead_textEN);
  
              $('#content42_TH').val(data.res_data.con_text);
              $('#content42_EN').val(data.res_data.con_textEN);
              $('#content41_TH').val(data.res_data.con_text);
              $('#content41_EN').val(data.res_data.con_textEN);
              $('#content_TH').val(data.res_data.con_text);
              $('#content_EN').val(data.res_data.con_textEN);
              $('#previewImg').attr("src", '../'+data.res_data.set_image);
              $('#modal-edit-article').modal('show')
       
            }else{
              Swal.fire('',data.res_text,'error');
            }
          }
        })
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
            loadingShow();
            $.ajax({
              url: 'view/sustain/calldata.php',
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


      // ------------------------------------------


      function ajaxRequest(params) {
        var url = 'view/sustain/calldata.php'
        params.data.method = "get_article";
       // console.log(params.data);
        $.get(url + '?' + $.param(params.data)).then(function (res) {
          params.success(JSON.parse(res))
        })
      }
      
      
      $('body').on('click', '.btn-pen', function () {
          var id = $(this).data('id');
          var data = new FormData();
      
          $('.save-banner')[0].reset();
          $('#banid').val(id);
          
          $("#previewImg").attr("src", $(this).data('path'));
          $('#modal-edit-article').modal('show')
          data.append('method','get_article_by_id');
          data.append('id', id);
          $.ajax({
            url: 'view/sustain/calldata.php',
            method : "POST",
            data   : data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,
            success : function(data){
              // console.log(data);
              if(data.res_code=='00'){
                $('#aid').val(data.res_data.set_id);
                $('#title').val(data.res_data.set_text);
                $('#content').val(data.res_data.set_content);
                $('#title_en').val(data.res_data.set_textEN);
                $('#content_en').val(data.res_data.set_contentEN);
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
              data.append('method','save_banner');
                    $.ajax({
                        url: 'view/sustain/calldata.php',
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
            url: 'view/sustain/calldata.php',
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
          var id = $(this).data('id');
          Swal.fire({
            title: 'ยืนยันการทำรายการ ?',
            text: "ต้องการลบBlogนี้ใช่ไหม",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
          }).then((result) => {
            if (result.isConfirmed) {
      
            var data = new FormData();
            loadingShow();
      
          data.append('method','delete_by_id');
          data.append('id', id);
          $.ajax({
            url: 'view/sustain/calldata.php',
            method : "POST",
            data   : data,
            dataType: "json",
            contentType: false,
            cache: false,
            processData:false,      
            success : function(data){
              // console.log(data);
              if(data.res_code=='00'){
                Swal.fire('',data.res_text,'success').then(()=>{
                  
                // // location.reload();
                })
            
              }else{
                Swal.fire('',data.res_text,'error');
              }
            },error: function(jqXHR, textStatus, errorThrown) {
              console.log(jqXHR, textStatus, errorThrown);
          }
          })
        }
        })
        
        })