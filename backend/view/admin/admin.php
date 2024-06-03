<?php

    // session_start();

    // require_once "../config/connect.php"

    // if(isset($_POST['submit'])) {
        
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
    //     $result = mysqli_query($conn, $user_check);
    //     $user = mysqli_fetch_assoc($result);

    //     if ($user['username'] === $username) {
    //         echo "<script>alert('Username already exists');</script>";
    //     } else {
    //         $passwordenc = md5($password);

    //         $query = "INSERT INTO Login_Admin (admin_username, admin_password)
    //                     VALUE ('$username', '$password')";
    //         $result = mysqli_query($conn, $query);

    //         if ($result) {
    //             $_SESSION['success'] = "Insert user successfully";
    //             header("Location: login.php");
    //         } else {
    //             $_SESSION['error'] = "Something went wrong";
    //             header("Location: login.php");
    //         }
    //     }

    // }

?>


<title>Ad Admin</title>

<link rel="stylesheet" href="admin.css?v=<?php echo time() ?>">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<div class="login-box">
<p class="headlogin">Add Admin</p>
<iframe src="" frameborder="0" name="calldata" id="calldata" class="d-none"></iframe>

<form class="admin_form needs-validation" action="" method="POST" target="calldata" novalidate>

    <div class="user-box">
        <div class="inputhead"><label>Username</label></div>
        <input class="form-control inputuser" type="text" id="username" name="username" placeholder="" required>
    </div>

    <div class="user-box">
      <div class="inputhead"><label>Password</label></div>
      <input class="form-control inputuser" type="password" id="password" name="password" placeholder="" required>
    </div>

    <div class="input-group">
      <button type="submit" name="" class="btn btnsubmadmin">Save</button>
    </div>

</form>
</div>

<script type="text/javascript">
  var forms = document.querySelectorAll('.admin_form')
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
              window.location.href = "../../login.php";
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