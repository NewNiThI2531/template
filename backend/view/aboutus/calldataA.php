<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');



if ($_REQUEST['method'] == 'save_selection1') {

    $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title01'], ENT_QUOTES);
    $title2 = htmlspecialchars($_POST['title02'], ENT_QUOTES);

  
    if ($id != '') {
      $sql = "UPDATE `Database_content` SET `conhead_text` = '$title',`conhead_textEN` = '$title2'  WHERE `con_id` = '$id'";

      $query = $conn->query($sql);
      if ($query) {
        $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
      }
    } else {
      $sql = "INSERT INTO `Database_content` (`conhead_text`)
        VALUES ('$title')";
     
      $query = $conn->query($sql);
      $id = $conn->insert_id;
      if ($query) {
        $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย2'];
      }
    }
  }
  if ($_REQUEST['method'] == 'save_selection1') {

  $id = htmlspecialchars($_POST['aid2'], ENT_QUOTES);
  $title = htmlspecialchars($_POST['title03'], ENT_QUOTES);
  $title2 = htmlspecialchars($_POST['title04'], ENT_QUOTES);
  $title3 = htmlspecialchars($_POST['title05'], ENT_QUOTES);
  $title4 = htmlspecialchars($_POST['title06'], ENT_QUOTES);


  if ($id != '') {
    $sql = "UPDATE `Database_content` SET `conhead_text` = '$title',`conhead_textEN` = '$title2',`con_text` = '$title3',`con_textEN` = '$title4'  WHERE `con_id` = '$id'";

    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `Database_content` (`conhead_text`)
      VALUES ('$title')";
   
    $query = $conn->query($sql);
    $id = $conn->insert_id;
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย2'];
    }
  }
}



  else if($_REQUEST['method'] == 'save_banner2'){
    $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    
    }
    if($chk != ''){
      $sql = "UPDATE `Database_content` SET `Content_Status` = '$chk' WHERE `Database_content`.`con_id` = '$id'";
  echo $sql  ;
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }}

  else if($_REQUEST['method'] == 'save_banner'){
    $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    
    }
    if($chk != ''){
      $sql = "UPDATE `Database_setting` SET `Set_Status` = '$chk' WHERE `Database_setting`.`set_id` = '$id'";
  
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  

    
  print_r ($_FILES);
    if(!empty($_FILES["fileuplad"]["name"])) {
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../../data/about/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);
  
      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;
  
          if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
            $path_update = "../../../data/about/".$time.'.'.$fileType;
            if ($id == '') {
              $sql = "INSERT INTO `Database_setting` ( `set_image`, `Set_Type`) VALUES ('โปรโมชัน', '$path_update', '1')";
      
            }else{
              $sql = "UPDATE `Database_setting` SET `set_image` = '$path_update' WHERE `set_id` = '$id'";
            }
            $query = $conn->query($sql);
       
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }
  }
  

  echo json_encode($data);