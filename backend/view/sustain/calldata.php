<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
  // print_r($_REQUEST) ;
if ($_REQUEST['method'] == 'save_selection1') {

  // print_r($_REQUEST) ;
  // // print_r($_POST['aid']);
  
  // // exit();

  // // foreach ($_POST['aid'] as $key => $value) {

  //   // $title1 = htmlspecialchars($_POST['title'][$key], ENT_QUOTES);
  //   // $title2 = htmlspecialchars($_POST['title'][$key], ENT_QUOTES);

  //   // $title1 = '';
  //   // $title2 = '';
  //   $title3 = '';
  //   $title4 = '';

  //   $title5 = '';
  //   $title6 = '';
  //   $title7 = '';
  //   $title8 = '';

if(isset($_POST['aid1'])){
      $title1 = htmlspecialchars($_POST['title1_TH'], ENT_QUOTES);
      $title2 = htmlspecialchars($_POST['title1_EN'], ENT_QUOTES);
      $aid1 = htmlspecialchars($_POST['aid1'], ENT_QUOTES);

      $sql = "UPDATE `Database_content` 

      SET `conhead_text`     = '$title1',
          `conhead_textEN`  = '$title2'  
      WHERE `con_id` = '$aid1'";

      // echo $sql;
      $query = $conn->query($sql);
      if ($query) {
     $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}
if(isset($_POST['aid12'])){
  $title11 = htmlspecialchars($_POST['title12_TH'], ENT_QUOTES);
  $title12 = htmlspecialchars($_POST['title12_EN'], ENT_QUOTES);
  $aid12 = htmlspecialchars($_POST['aid12'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 

  SET `conhead_text`     = '$title11',
      `conhead_textEN`  = '$title12'  
  WHERE `con_id` = '$aid12'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}
if(isset($_POST['aid13'])){
  $title13 = htmlspecialchars($_POST['title13_TH'], ENT_QUOTES);
  $title14 = htmlspecialchars($_POST['title13_EN'], ENT_QUOTES);
  $aid13 = htmlspecialchars($_POST['aid13'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 

  SET `conhead_text`     = '$title13',
      `conhead_textEN`  = '$title14'  
  WHERE `con_id` = '$aid13'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}
if(isset($_POST['aid14'])){
  $title15 = htmlspecialchars($_POST['title14_TH'], ENT_QUOTES);
  $title16 = htmlspecialchars($_POST['title14_EN'], ENT_QUOTES);
  $aid14 = htmlspecialchars($_POST['aid14'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 

  SET `conhead_text`     = '$title15',
      `conhead_textEN`  = '$title16'  
  WHERE `con_id` = '$aid14'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

// ----------------------------------------------------------------------------- //

if(isset($_POST['aid2'])){
  $title3 = htmlspecialchars($_POST['title2_TH'], ENT_QUOTES);
  $title4 = htmlspecialchars($_POST['title2_EN'], ENT_QUOTES);
  $title5 = htmlspecialchars($_POST['content_TH'], ENT_QUOTES);
  $title6 = htmlspecialchars($_POST['content_EN'], ENT_QUOTES);
  $aid2 = htmlspecialchars($_POST['aid2'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 
  SET `conhead_text`     = '$title3',
      `conhead_textEN`  = '$title4',  
      `con_text`     = '$title5',
      `con_textEN`  = '$title6'    
       WHERE `con_id` = '$aid2'";

  //  echo $sql;

$query = $conn->query($sql);

if ($query) {
$data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
} 

if(isset($_POST['aid4'])){
  $title41 = htmlspecialchars($_POST['title4_TH'], ENT_QUOTES);
  $title42 = htmlspecialchars($_POST['title4_EN'], ENT_QUOTES);
  $title43 = htmlspecialchars($_POST['content41_TH'], ENT_QUOTES);
  $title44 = htmlspecialchars($_POST['content41_EN'], ENT_QUOTES);
  $aid4 = htmlspecialchars($_POST['aid4'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 
  SET `conhead_text`     = '$title41',
      `conhead_textEN`  = '$title42',  
      `con_text`     = '$title43',
      `con_textEN`  = '$title44'    
       WHERE `con_id` = '$aid4'";

  //  echo $sql;

$query = $conn->query($sql);

if ($query) {
  $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
  }
  } 
  
  if(isset($_POST['aid41'])){
    $title45 = htmlspecialchars($_POST['title41_TH'], ENT_QUOTES);
    $title46 = htmlspecialchars($_POST['title41_EN'], ENT_QUOTES);
    $title47 = htmlspecialchars($_POST['content42_TH'], ENT_QUOTES);
    $title48 = htmlspecialchars($_POST['content42_EN'], ENT_QUOTES);
    $aid41 = htmlspecialchars($_POST['aid41'], ENT_QUOTES);
  
    $sql = "UPDATE `Database_content` 
    SET `conhead_text`     = '$title45',
        `conhead_textEN`  = '$title46',  
        `con_text`     = '$title47',
        `con_textEN`  = '$title48'    
         WHERE `con_id` = '$aid41'";
  
    //  echo $sql;
  
  $query = $conn->query($sql);

if ($query) {
$data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
} 

// ------------------------------------------------------------------- //

if(isset($_POST['aid3'])){
  $title7 = htmlspecialchars($_POST['content2_TH'], ENT_QUOTES);
  $title8 = htmlspecialchars($_POST['content2_EN'], ENT_QUOTES);
  $aid3 = htmlspecialchars($_POST['aid3'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 
  SET 
      `con_text`     = '$title7',
      `con_textEN`  = '$title8'    
       WHERE `con_id` = '$aid3'";

  //  echo $sql;
$query = $conn->query($sql);
if ($query) {
$data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
} 
if(isset($_POST['aid5'])){
  $title11 = htmlspecialchars($_POST['title5_TH'], ENT_QUOTES);
  $title12 = htmlspecialchars($_POST['title5_EN'], ENT_QUOTES);
  $aid5 = htmlspecialchars($_POST['aid5'], ENT_QUOTES);

  $sql2 = "UPDATE `Database_content` 

  SET `conhead_text`     = '$title11',
      `conhead_textEN`  = '$title12'  
  WHERE `con_id` = '$aid5'";

  // echo $sql;
  $query = $conn->query($sql2);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}
echo json_encode($data);


 exit();


}

else if($_REQUEST['method'] == 'save_banner2'){
      //  print_r($_REQUEST) ;
    $id6 = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk6 = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    
    }
    if($chk != ''){
      $sql = "UPDATE `Database_content` SET `Content_Status` = '$chk' WHERE `Database_content`.`con_id` = '$id6'";
  // echo $sql  ;
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }}

 if($_REQUEST['method'] == 'save_banner'){
  //  print_r($_REQUEST) ;
    
if(isset($_POST['banid'])){

    $id5 = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);  
    }
    if($chk != ''){
      $sql = "UPDATE `Database_setting` SET `Set_Status` = '$chk' WHERE `Database_setting`.`set_id` = '$id5'";
  
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  }
  // print_r ($_FILES);
    if(!empty($_FILES["fileuplad"]["name"])) {
      $id5 = htmlspecialchars($_POST['banid'], ENT_QUOTES);
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
            
              $sql = "UPDATE `Database_setting` SET `set_image` = '$path_update' WHERE `set_id` = '$id5'";
        
           
      $query = $conn->query($sql);
      if($query){
       
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];}
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }
  }


//-------------------------------------------------------------------


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
if($_REQUEST['method'] == 'get_article'){
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '18' AND Set_Type='3'";
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
                          <button class="btn btn-danger btn-delete" data-path="../../'.$res["set_image"].'" data-id="'.$res["set_id"].'">ลบ</button>
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