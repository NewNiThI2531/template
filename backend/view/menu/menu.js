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
                    url: 'view/menu/calldata.php',
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
                    url: 'view/menu/calldata.php',
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
        url: 'view/menu/calldata.php',
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
          url: 'view/menu/calldata.php',
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
          url: 'view/menu/calldata.php',
          method : "POST",
          data   : data,
          dataType: "json",
          contentType: false,
          cache: false,
          processData:false,
          success :function(data){
            if(data.res_code=='00'){
              $('#aid').val(data.res_data.foot_id);
              $('#title1_TH').val(data.res_data.footer_Headtext);
              $('#title11_EN').val(data.res_data.footer_HeadtextEN);
              $('#title2_TH').val(data.res_data.footer_Headtext);
              $('#title22_EN').val(data.res_data.footer_HeadtextEN);
              $('#title3_TH').val(data.res_data.footer_Headtext);
              $('#title33_EN').val(data.res_data.footer_HeadtextEN);
              $('#title4_TH').val(data.res_data.footer_Headtext);
              $('#title44_EN').val(data.res_data.footer_HeadtextEN);
              $('#title5_TH').val(data.res_data.footer_Headtext);
              $('#title55_EN').val(data.res_data.footer_HeadtextEN);
              $('#title6_TH').val(data.res_data.footer_Headtext);
              $('#title66_EN').val(data.res_data.footer_HeadtextEN);
              $('#title7_TH').val(data.res_data.footer_Headtext);
              $('#title77_EN').val(data.res_data.footer_HeadtextEN);

              $('#title8_TH').val(data.res_data.foot_text);
              $('#title88_EN').val(data.res_data.foot_textEN);
              $('#title9_TH').val(data.res_data.foot_text);
              $('#title99_EN').val(data.res_data.foot_textEN);
              $('#title10_TH').val(data.res_data.foot_text);
              $('#title101_EN').val(data.res_data.foot_textEN);
              $('#title11_TH').val(data.res_data.foot_text);
              $('#title111_EN').val(data.res_data.foot_textEN);
              $('#title12_TH').val(data.res_data.foot_text);
              $('#title122_EN').val(data.res_data.foot_textEN);
              $('#title13_TH').val(data.res_data.foot_text);
              $('#title133_EN').val(data.res_data.foot_textEN);

              $('#previewImg').attr("src", '../'+data.res_data.menu_image);

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
              url: 'view/abus/calldataA.php',
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