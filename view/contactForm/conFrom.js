var form_phone = document.getElementsByClassName('form-contact');
var validation = Array.prototype.filter.call(form_phone, function(form) {
  form.addEventListener('submit', function(event) {
    console.log('test')
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{

      var data = new FormData(this);
      data.append('method','regis_phone');
       if($('#checkbox:checkbox:checked').length >0){
        data.append('checkbox', 1);
      }else{
        data.append('checkbox', 0);
      }
      // showLoading(true);
   $.ajax({
    url: 'view/contactForm/consetForm.php',
    method : "POST",
    data   : data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData:false,
    success :function(data){
      console.log(data);
          // showLoading(false);
     if(data.res_code=='00'){
            Swal.fire('',data.res_text,'success').then(()=>{
              window.location.href = "/?page=conForm";
            //  console.log($('.login_form'))
           // $('.login_form')[0].windol()
            // $('#set').reset()
            });
     }else if(data.res_code=='01'){
            Swal.fire('',data.res_text,'warning').then(()=>{
              //window.location.href = "?page=detail";
              $('.form-contact')[0].reset()
             // $('#set').reset()
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


