<?php

include '../../../config/connect.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_REQUEST["method"]) && $_REQUEST["method"]=="login"){
  $username = mysqli_real_escape_string($conn,$_POST["username"]);
  $password = pass_hash(mysqli_real_escape_string($conn,$_POST["password"]));
// $username = $_POST['username'];
// $password = $_POST['password'];
// echo $username;
// echo $password;
$sql = "SELECT * FROM `Login_Admin` WHERE `admin_username` = '$username'  AND admin_password = '$password' ";
// echo ($sql);
  $result = $conn->query($sql);
  $data_res = $result->fetch_assoc();
  if($username==$data_res['admin_username'] && $password==$data_res['admin_password']){
    unset($data_res['admin_password']);
    $_SESSION['DATA_LOGIN']       = $data_res;
    $_SESSION['DATA_LOGIN']['id'] = $data_res['admin_id'];

    $res = array('res_code' => '00' ,'res_text' => 'เข้าสู่ระบบสำเร็จ');

  }else{
    $res = array('res_code' => '01' ,'res_text' => 'เข้าสู่ระบบไม่สำเร็จ');
    
  }
  echo json_encode($res);

  exit();
}


function pass_hash($password='')
{
  $password = hash("sha256", $password);
  return $password;
}


?>
