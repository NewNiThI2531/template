var form_phone = document.getElementsByClassName('complaint-form');
var validation = Array.prototype.filter.call(form_phone, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{
      var data = new FormData(this);
      data.append('method','regis_phone');
      
   $.ajax({
    url: 'view/project-create/save.php',
    method : "POST",
    data   : data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData:false,
    success :function(data){
        // console.log(data);

          // showLoading(false);
     if(data.res_code=='00'){
            Swal.fire('',data.res_text,'success').then(()=>{
            window.location.href = "https://estate1.arrakmit.com/backend/index.php?page=project";
            // console.log(url);
            });
     }else if(data.res_code=='01'){
            Swal.fire('',data.res_text,'warning').then(()=>{
              window.location.href = "https://estate1.arrakmit.com/backend/index.php?page=project";
            })
          }else{
      Swal.fire('',data.res_text,'error');
     }
    }

   });
  }
    form.classList.add('was-validated');
  }, false);
});







