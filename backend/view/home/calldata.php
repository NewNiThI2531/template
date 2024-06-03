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
            if ($id == '') {
              $sql = "INSERT INTO `Database_setting` ( `set_image`, `Set_Page`, `Set_Type`) VALUES ('$path_update', '1','1')";
              // echo  $sql ;
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
  


  
  if($_REQUEST['method'] == 'save_banner'){
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
            if ($id == '') {
              $sql = "INSERT INTO `Database_setting` ( `set_image`, `Set_Page`, `Set_Type`) VALUES ('$path_update', '1','1')";
              // echo  $sql ;
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

  else if($_REQUEST['method'] == 'remove_article'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  
    $sql = "DELETE FROM `Database_setting` WHERE `set_id` = '$id' ";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
    }
    // echo json_encode($data);
  }

  else if($_REQUEST['method'] == 'get_article'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '1' and Set_Type = '1'  ";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $html = '
        <div class="" style="">
        <div class="card-body">
          <div class="row">
            <div class="col-6 card-detail">
              <div class="img-card" style="background: url(../'.$res["set_image"].')">
              </div>
            </div>
            <div class="col-1 card-detail"></div>
              <div class=" col-5  card-detail paddin1 text-center">
              <div class="form-check form-switch">
                  <input class="form-check-input cheak" type="checkbox" data-id=" '.$res["set_id"].'"
                  '.($res["Set_Status"] == "0" ? "checked" : "").' >
                
              </div>
            </div>
          </div>
        </div>
      </div>
        ';
        $res["data"] = $html;
        $res["manage"] = '<button class="btn btn-success btn-edit btn-pen" data-id="'.$res["set_id"].'">แก้ไข</button>
                          <button class="btn btn-danger btn-delete" data-id="'.$res["set_id"].'">ลบ</button>
                         ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
  }

  echo json_encode($data);