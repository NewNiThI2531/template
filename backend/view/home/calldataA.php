<?php
include('../../config/connect.php');
// include "../../controller/passhash.php";
//echo $pass = PassHash::hash('@P@ssW0rd@dmin');


$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
  // print_r($_REQUEST) ;
if ($_REQUEST['method'] == 'save_selection1') {

  // print_r($_REQUEST) ;
  // // print_r($_POST['aid']);as
  
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
      $aid = htmlspecialchars($_POST['aid1'], ENT_QUOTES);

      $sql = "UPDATE `Database_content` 

      SET `conhead_text`     = '$title1',
          `conhead_textEN`  = '$title2'  
      WHERE `con_id` = '$aid'";

      // echo $sql;
      $query = $conn->query($sql);
      if ($query) {
     $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

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

    $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);  
    }
    if($chk != ''){
      $sql = "UPDATE `Database_content` SET `Content_Status` = '$chk' WHERE `Database_content`.`con_id` = '$id'";
      //  print_r($sql ) ;
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }  }

//  print_r ($_FILES);
 

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
               $sql = "UPDATE `Database_content` SET `con_image` = '$path_update' WHERE `con_id` = '$id'";

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


else if($_REQUEST['method'] == 'get_article'){
  $output = [];
  $offset = $_GET['offset'];
  $limit = $_GET['limit'];
  $sql = "SELECT * FROM `Database_content` WHERE Content_Page = '1' and Content_Type = '2'  ";
  $num_row = $conn->query($sql);
  $sql .= 'LIMIT '.($offset*$limit).','.$limit;
  $query = $conn->query($sql);
  if($query->num_rows > 0){
    while ($res = $query->fetch_assoc()) {
      $html = '
      <div class="" style="">
      <div class="card-body">
        <div class="row">
          <div class="col-4 card-detail">
            <div class="img-card" style="background: url(../'.$res["con_image"].')">
            </div>
          </div>
          <div class="col-3 card-detail">
          <div class="">
                  '.$res["conhead_textEN"].'
                </div>
            <div>
              <div class="">
              </div>
              </div>
            </div>
            <div class=" col-5  card-detail paddin1 text-center">
            <div class="form-check form-switch">
                <input class="form-check-input cheak" type="checkbox" data-id=" '.$res["con_id"].'"
                '.($res["Content_Status"] == "0" ? "checked" : "").' >
              
            </div>
          </div>
        </div>
      </div>
    </div>
      ';
      $res["data"] = $html;
      $res["manage"] = '<button class="btn btn-success btn-edit btn-pen" data-id="'.$res["con_id"].'">แก้ไข</button>
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


else if($_REQUEST['method'] == 'save_item'){
  $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
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


  echo json_encode($data);