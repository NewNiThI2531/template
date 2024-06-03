<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


if($_REQUEST['method'] == 'get_article'){
  $output = [];
  $offset = $_GET['offset'];
  $limit = $_GET['limit'];
  $sql = "SELECT * FROM `Database_news` WHERE news_type = '2'";
  $num_row = $conn->query($sql);
  $sql .= 'LIMIT '.($offset).','.$limit;
  $query = $conn->query($sql);
  if($query->num_rows > 0){
    while ($res = $query->fetch_assoc()) {
      $html = '
      <div class="card" style="">
        <div class="card-body">
          <div class="row">
            <div class="col-2 card-detail">
              <div class="img-card" style="background: url(../'.$res["news_image"].')">
              </div>
            </div>
            <div class="col-8 card-detail">
              <div>
                <div class="">
                  '.$res["news_headtext"].'
                </div>
                <div class="text-content">
                  '.$res["news_text"].'
                </div>
              </div>
            </div>
            <div class="col-2" style="text-align:center;align-self: center;">
                      <div class="form-check form-switch text-center">
                      <input class="form-check-input cheak" type="checkbox" style="width: 50px;" data-id=" ' . $res["news_id"] . '"
                      ' . ($res["news_status"] == "0" ? "checked" : "") . ' >                      </div>
                </div>
          </div>
        </div>
      </div>
      ';
      $res["data"] = $html;
      $res["manage"] = '<button class="btn btn-success btn-pen" data-id="'.$res["news_id"].'">แก้ไข</button>
                        <button class="btn btn-danger btn-delete" data-id="'.$res["news_id"].'">ลบ</button>
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
    $sql = "SELECT * FROM `Database_news` WHERE `news_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }

   else if ($_REQUEST['method'] == 'save_article') {

  $id = real_escape_string($_POST['aid']);
  $title = real_escape_string($_POST['title']);
  $content = real_escape_string($_POST['content']);
  $title_en = real_escape_string($_POST['title_en']);
  $content_en = real_escape_string($_POST['content_en']);

  if ($id != '') {
    $sql = "UPDATE `Database_news` SET `news_headtext` = '$title', `news_text` = '$content' , `news_headtextEN` = '$title_en', `news_textEN` = '$content_en' WHERE `news_id` = '$id'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `` (`news_headtext`, `news_text`, `news_headtextEN`, `news_textEN`)
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
  $sql = "UPDATE `Database_news` SET `news_status` = '2' WHERE `Database_news`.`news_id` = '$id'";

  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
  }
}
else if($_REQUEST['method'] == 'delete_by_id'){
  $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
  

  $image = "SELECT news_image FROM Database_news WHERE news_id = '$id'";
  $query1 = $conn->query($image);
  $after = mysqli_fetch_assoc($query1);


  $sql = "DELETE FROM Database_news WHERE `Database_news`.`news_id` = '$id'";
  $query = $conn->query($sql);
  if($query){
    $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
    unlink("../../../".$after['news_image']);

  }
}


else if($_REQUEST['method'] == 'save_banner'){
  
  $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
  $chk = "";
  
  if(isset($_POST['chk'])){
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
  }
  if($chk != ''){
    $sql = "UPDATE `Database_news` SET `news_status` = '$chk' WHERE `Database_news`.`news_id` = '$id'";

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
    $sql = "UPDATE `Database_news` SET `news_headtext` = '$title', `news_text` = '$content' , `news_headtextEN` = '$title_en', `news_textEN` = '$content_en' WHERE `news_id` = '$id'";
 
    $query = $conn->query($sql);
    if ($query) {
      $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
    }
  } else {
    $sql = "INSERT INTO `Database_news` (`news_headtext`, `news_text`, `news_headtextEN`, `news_textEN`)
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
          $path_update = "../asset/images/".$time.'.'.$fileType;
          if ($id == '') {
            $sql = "INSERT INTO `Database_news` ( `news_image`, `news_type`) VALUES ('โปรโมชัน', '$path_update', '1')";
          }else{
            $sql = "UPDATE `Database_news` SET `news_image` = '$path_update' WHERE `news_id` = '$id'";
          }
          $query = $conn->query($sql);
          $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
        }
    }else{
        $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
    }
  }
}
else if($_REQUEST['method'] == 'save_banner1'){
  
  $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
  $chk = "";
  
  if(isset($_POST['chk'])){
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
  }
  if($chk != ''){
    echo $sql = "UPDATE `Database_news` SET `news_status` = '$chk' WHERE `Database_news`.`news_id` = '$id'";

    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }
  
}
echo json_encode($data);