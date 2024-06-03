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
                    url: 'view/ourbusiness/calldata.php',
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
                    url: 'view/ourbusiness/calldata.php',
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