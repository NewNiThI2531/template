<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
if($_REQUEST['method'] == 'get_article'){
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `Database_content` WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11,12) and Content_Page='14' and Content_Status='0'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $html = '
        <div class="card" style="">
          <div class="card-body">
            <div class="row">
            
          <div class="col-6 card-detail">
            <div>
              <div class="">
              '.$res["con_text"].'
              </div>
       
            </div>
          </div>
                  </div>
                  <hr>
                  <div class="row">
            
          <div class="col-6 card-detail">
            <div>
              <div class="">
              '.$res["con_textEN"].'
              </div>
       
            </div>
          </div>
                  </div>
                </div>
              </div>

        ';
        $res["data"] = $html;
        $res["manage"] = '<button class="btn btn-success btn-edit" data-id="'.$res["con_id"].'">แก้ไข</button>
                          <button class="btn btn-danger btn-delete" data-id="'.$res["con_id"].'">ลบ</button>
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
    $sql = "SELECT * FROM `Database_content` WHERE `con_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }

  else if ($_REQUEST['method'] == 'save_article1') {
    $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $title_en = htmlspecialchars($_POST['title_en'], ENT_QUOTES);
    
    $sql = "UPDATE `Database_content` SET `conhead_textEN`='$title_en',`conhead_text`='$title' WHERE `con_id` = '$id'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
}
else if ($_REQUEST['method'] == 'save_article2') {
  $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
  $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
  $content_en = htmlspecialchars($_POST['content_en'], ENT_QUOTES);
  
  $sql = "UPDATE `Database_content` SET `con_textEN`='$content_en',`con_text`='$content' WHERE `con_id` = '$id'";

  $query = $conn->query($sql);
  if ($query) {
    $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
  }
}

   else if ($_REQUEST['method'] == 'save_article') {
  // $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
  // $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
  // $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
  // $title_en = htmlspecialchars($_POST['title_en'], ENT_QUOTES);
  // $content_en = htmlspecialchars($_POST['content_en'], ENT_QUOTES);
  $bid = htmlspecialchars($_POST['bid'], ENT_QUOTES);
  $content = htmlspecialchars($_POST['content1'], ENT_QUOTES);
  $content_en = htmlspecialchars($_POST['content_en1'], ENT_QUOTES);




  foreach ($_POST['aid'] as $key => $value) {
    $heading = $_POST['title'][$key];
    $heading2 = $_POST['title_en'][$key];
    $sql = "UPDATE `Database_content` SET `conhead_text` = '$heading', `conhead_textEN` = '$heading2' WHERE `con_id` = '$value'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
}
  if($bid !=''){
    
    $sql = "UPDATE `Database_content` SET `con_text` = '$content', `con_textEN` = '$content_en' WHERE `con_id` = '$bid'";
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  }
  
}
else if($_REQUEST['method'] == 'remove_article'){
  $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  $sql = "UPDATE `Database_content` SET `Content_Status` = '2' WHERE `Database_content`.`con_id` = '$id'";

  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
  }
}
else if($_REQUEST['method'] == 'save_banner1'){
  
  $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
  $chk = "";
  
  if(isset($_POST['chk'])){
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
  }
  if($chk != ''){
   $sql = "UPDATE `Database_content` SET `Content_Status` = '$chk' WHERE `Database_content`.`con_id` = '$id'";

    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }
  
}

else if($_REQUEST['method'] == 'save_banner'){
  $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
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
    $time = time();
    $allowTypes = array('jpg','png','jpeg');
    $path = '../../../assset/images/';
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $fileName = basename($_FILES["fileuplad"]["name"]);
    $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);

    if(in_array($fileType, $allowTypes)){
      $path_upload = $path.$time.'.'.$fileType;

        if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
          $path_update = "../assset/images/".$time.'.'.$fileType;
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