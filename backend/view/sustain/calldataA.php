<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
if($_REQUEST['method'] == 'get_article'){
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '18' AND Set_Type='5'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $html = '
        <div class="card" style="">
        <div class="card-body">
          <div class="row align-items-center justify-content-center ">
          <div class="col-3 p-0" >
                  <div class="img-card" style="background: url(../../'.$res["set_image"].');  height:160px;">
                  </div>
                </div>
                <div class="col-3 text-center" style="padding:10px;">
                '.$res["set_textEN"].'
               
                </div>
                <div class="col-3 text-center" style="padding:10px;">
                '.$res["set_text"].'
               
                </div>
                
                </div>
                
              </div>
              </div>
              </div>

        ';
        $res["data"] = $html; 
        $res["manage"] = '<button class="btn btn-success btn-pen" data-path="../../'.$res["set_image"].'" data-id="'.$res["set_id"].'">แก้ไข</button>
                  
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

  else if($_REQUEST['method'] == 'get_article_by_id'){

    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "SELECT * FROM `Database_setting` WHERE `set_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }

   else if ($_REQUEST['method'] == 'save_article') {

  $id = $conn->real_escape_string($_POST['aid']);
  $title = $conn->real_escape_string($_POST['title']);
  $content = $conn->real_escape_string($_POST['content']);
  $title_en = $conn->real_escape_string($_POST['title_en']);
  $content_en = $conn->real_escape_string($_POST['content_en']);

  if ($id != '') {
    $sql = "UPDATE `Database_setting` SET `set_text` = '$title', `set_content` = '$content' , `set_textEN` = '$title_en', `set_contentEN` = '$content_en' WHERE `set_id` = '$id'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `Database_setting` (`set_text`, `set_content`, `set_textEN`, `set_contentEN`)
      VALUES ('$title', '$content', '$title_en', '$content_en')";
   
    $query = $conn->query($sql);
    $id = $conn->insert_id;
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย2'];
    }
  }
}
else if($_REQUEST['method'] == 'remove_article'){
  $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  $sql = "UPDATE `Database_setting` SET `Set_Status` = '2' WHERE `Database_setting`.`set_id` = '$id'";

  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
  }
}
else if($_REQUEST['method'] == 'delete_by_id'){
  $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  

  $image = "SELECT set_image FROM Database_setting WHERE set_id = '$id'";
  $query1 = $conn->query($image);
  $after = mysqli_fetch_assoc($query1);


  $sql = "DELETE FROM Database_setting WHERE `Database_setting`.`set_id` = '$id'";
  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
    unlink("../../../".$after['set_image']);

  }
  
   
}
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

  $title = $conn->real_escape_string($_POST['title']);
  $content = $conn->real_escape_string($_POST['content']);
  $title_en = $conn->real_escape_string($_POST['title_en']);
  $content_en = $conn->real_escape_string($_POST['content_en']);
  if ($id != '') {
     $sql = "UPDATE `Database_setting` SET `set_text` = '$title', `set_content` = '$content' , `set_textEN` = '$title_en', `set_contentEN` = '$content_en' WHERE `set_id` = '$id'";

    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `Database_setting` (`set_text`, `set_content`, `set_textEN`, `set_contentEN`)
      VALUES ('$title', '$content', '$title_en', '$content_en')";
   
    $query = $conn->query($sql);
    $id = $conn->insert_id;
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย2'];
    }
  }
  
  if(!empty($_FILES["fileuplad"]["name"])) {
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
          $path_update = "asset/images/".$time.'.'.$fileType;
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
  echo json_encode($data);
  exit();
}

else if($_REQUEST['method'] == 'save_banner1'){
  
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
  
}
echo json_encode($data);
