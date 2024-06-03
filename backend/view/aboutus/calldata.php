<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
if($_REQUEST['method'] == 'get_article'){
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `Database_content` WHERE Content_Page = '2'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset).','.$limit;
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
          <div class="col-6 card-detail">
            <div>
              <div class="">
              '.$res["conhead_text"].'
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
          <div class="col-6 card-detail">
            <div>
              <div class="">
              '.$res["conhead_textEN"].'
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

   else if ($_REQUEST['method'] == 'save_article') {

  $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
  $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
  $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
  $title_en = htmlspecialchars($_POST['title_en'], ENT_QUOTES);
  $content_en = htmlspecialchars($_POST['content_en'], ENT_QUOTES);

  if ($id != '') {
    $sql = "UPDATE `Database_content` SET `conhead_text` = '$title', `con_text` = '$content' , `conhead_textEN` = '$title_en', `con_textEN` = '$content_en' WHERE `con_id` = '$id'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `Database_content` (`conhead_text`, `con_text`, `conhead_textEN`, `con_textEN`)
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
  $sql = "UPDATE `Database_content` SET `Content_Status` = '2' WHERE `Database_content`.`con_id` = '$id'";

  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
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


  if(!empty($_FILES["fileuplad"]["name"])) {
    $time = time();
    $allowTypes = array('jpg','png','jpeg');
    $path = '../../../data/';
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $fileName = basename($_FILES["fileuplad"]["name"]);
    $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);

    if(in_array($fileType, $allowTypes)){
      $path_upload = $path.$time.'.'.$fileType;

        if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
          $path_update = "../../../data/".$time.'.'.$fileType;
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