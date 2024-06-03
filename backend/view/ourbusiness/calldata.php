<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


  if($_REQUEST['method'] == 'save_banner'){
    $id5 = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    
    }
    if($chk != ''){
      $sql = "UPDATE `database_Setting` SET `setting_status` = '$chk' WHERE `database_Setting`.`set_id` = '$id5'";
  
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  

    

    if(!empty($_FILES["fileuplad"]["name"])) {
      $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../../asset/images/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);
  
      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;
  
          if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
            $path_update = "../asset/images/".$time.'.'.$fileType;
            if ($id != '') {
              // $sql = "INSERT INTO `Database_setting` ( `set_image`, `Set_Type`) VALUES ('โปรโมชัน', '$path_update', '1')";
               $sql = "UPDATE `Database_setting` SET `set_image` = '$path_update' WHERE `set_id` = '$id'";

            }
            // else
            // {
            // }
            $query = $conn->query($sql);
       
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }

}
  

  echo json_encode($data);