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
                  url: 'view/about/calldataA.php',
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






    var save_book = document.getElementsByClassName('fron_IN');
    var validation = Array.prototype.filter.call(save_book, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }else{
          var data = new FormData(this);
          data.append('method','save_banner');
                $.ajax({
                    url: 'view/about/calldataA.php',
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
        url: 'view/about/calldataA.php',
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
        url: 'views/home/calldataA.php',
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
    




































