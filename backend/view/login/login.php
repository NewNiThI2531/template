<!-- <div class="box-login">
  <form class="form-login" action="" method="post" target="calldata" novalidate>
    <div class="row">
      <div class="col-12">
       <label class="headtext">Admin Login</label>
      </div>
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
        <label for="basic-url" class="form-label">Username</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" id="basic-url" placeholder="Username" required>
        </div>
      </div>
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
        <label for="basic-url" class="form-label">Password</label>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" id="basic-url" placeholder="Password" required>
        </div>
      </div>
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-2"></div>
      <div class="col-12 col-sm-8">
        <br>
        <button type="submit" class="btn btn-login form-control"  name="button">LOGIN</button>
      </div>
      <div class="col-12 col-sm-2"></div>
    </div>
  </form>
</div> -->

<?php

  session_start();


  if($_SESSION['DATA_LOGIN']['id']!=''){
  header( "Location: ../../index.php" );
  }

?>

<link rel="stylesheet" href="login.css?v=<?php echo time() ?>">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">


<div class="login-box">
<p class="headlogin">login</p>
<iframe src="" frameborder="0" name="calldata" id="calldata" class="d-none"></iframe>
<form class="login_form needs-validation" action="" method="POST" target="calldata" novalidate>
  <div class="row">

  <div class="user-box">
    <div class="inputhead"><label>Username</label></div>
    <input class="form-control inputuser" type="text" id="username" name="username" placeholder="" required>
  </div>

    <div class="user-box">
      <div class="inputhead"><label>Password</label></div>
      <input class="form-control inputuser" type="password" id="password" name="password" placeholder="" required>
    </div>

    <div class="input-group">
      <button type="submit" name="" class="btn btnsubm">Login</button>
    </div>

    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>

<script type="text/javascript">
  var forms = document.querySelectorAll('.login_form')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
 console.log(112345);
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }else{
            console.log(4568777);

      var data = new FormData(this);
      data.append('method','login');
      // showLoading(true);
              $.ajax({
                url: 'logindb.php',
                method : "POST",
                data   : data,
                dataType: "json",
                contentType: false,
                cache: false,
                processData:false,
                success :function(data){
 console.log(data);
                  
                  if(data.res_code =='00'){
                    Swal.fire('',data.res_text,'success').then(()=>{
              window.location.href = "../../index.php";
            });
                  }else{
                      Swal.fire('','ล็อกอินไม่สำเร็จ','error');
                  }
                },complete: function(response) {

                }
              });
          }
          form.classList.add('was-validated')
        }, false)
      });


    </script>