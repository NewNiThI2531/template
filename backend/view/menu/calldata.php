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
      $title11 = htmlspecialchars($_POST['title11_EN'], ENT_QUOTES);
      $aid1 = htmlspecialchars($_POST['aid1'], ENT_QUOTES);

      $sql = "UPDATE `Database_menu` 

      SET `menu_headtext`     = '$title1',
          `menu_headtextEN`  = '$title11'  
      WHERE `menu_id` = '$aid1'";

      // echo $sql;
      $query = $conn->query($sql);
      if ($query) {
     $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid2'])){
    $title2 = htmlspecialchars($_POST['title2_TH'], ENT_QUOTES);
    $title22 = htmlspecialchars($_POST['title22_EN'], ENT_QUOTES);
    $aid2 = htmlspecialchars($_POST['aid2'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title2',
        `menu_headtextEN`  = '$title22'  
    WHERE `menu_id` = '$aid2'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid3'])){
    $title3 = htmlspecialchars($_POST['title3_TH'], ENT_QUOTES);
    $title33 = htmlspecialchars($_POST['title33_EN'], ENT_QUOTES);
    $aid3 = htmlspecialchars($_POST['aid3'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title3',
        `menu_headtextEN`  = '$title33'  
    WHERE `menu_id` = '$aid3'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid4'])){
    $title4 = htmlspecialchars($_POST['title4_TH'], ENT_QUOTES);
    $title44 = htmlspecialchars($_POST['title44_EN'], ENT_QUOTES);
    $aid4 = htmlspecialchars($_POST['aid4'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title4',
        `menu_headtextEN`  = '$title44'  
    WHERE `menu_id` = '$aid4'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid5'])){
    $title5 = htmlspecialchars($_POST['title5_TH'], ENT_QUOTES);
    $title55 = htmlspecialchars($_POST['title55_EN'], ENT_QUOTES);
    $aid5 = htmlspecialchars($_POST['aid5'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title5',
        `menu_headtextEN`  = '$title55'  
    WHERE `menu_id` = '$aid5'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid6'])){
    $title6 = htmlspecialchars($_POST['title6_TH'], ENT_QUOTES);
    $title66 = htmlspecialchars($_POST['title66_EN'], ENT_QUOTES);
    $aid6 = htmlspecialchars($_POST['aid6'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title6',
        `menu_headtextEN`  = '$title66'  
    WHERE `menu_id` = '$aid6'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}

if(isset($_POST['aid7'])){
    $title7 = htmlspecialchars($_POST['title7_TH'], ENT_QUOTES);
    $title77 = htmlspecialchars($_POST['title77_EN'], ENT_QUOTES);
    $aid7 = htmlspecialchars($_POST['aid7'], ENT_QUOTES);

    $sql = "UPDATE `Database_menu` 

    SET `menu_headtext`     = '$title7',
        `menu_headtextEN`  = '$title77'  
    WHERE `menu_id` = '$aid7'";

    // echo $sql;
    $query = $conn->query($sql);
    if ($query) {
   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}



if(isset($_POST['aid8'])){
  $title8 = htmlspecialchars($_POST['title8_TH'], ENT_QUOTES);
  $title88 = htmlspecialchars($_POST['title88_EN'], ENT_QUOTES);
  $aid8 = htmlspecialchars($_POST['aid8'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title8',
      `menu_textEN`  = '$title88'  
  WHERE `menu_id` = '$aid8'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}


if(isset($_POST['aid9'])){
  $title9 = htmlspecialchars($_POST['title9_TH'], ENT_QUOTES);
  $title99 = htmlspecialchars($_POST['title99_EN'], ENT_QUOTES);
  $aid9 = htmlspecialchars($_POST['aid9'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title9',
      `menu_textEN`  = '$title99'  
  WHERE `menu_id` = '$aid9'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}


if(isset($_POST['aid10'])){
  $title10 = htmlspecialchars($_POST['title10_TH'], ENT_QUOTES);
  $title101 = htmlspecialchars($_POST['title101_EN'], ENT_QUOTES);
  $aid10 = htmlspecialchars($_POST['aid10'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title10',
      `menu_textEN`  = '$title101'  
  WHERE `menu_id` = '$aid10'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}


if(isset($_POST['aid11'])){
  $title11 = htmlspecialchars($_POST['title11_TH'], ENT_QUOTES);
  $title111 = htmlspecialchars($_POST['title111_EN'], ENT_QUOTES);
  $aid11 = htmlspecialchars($_POST['aid11'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title11',
      `menu_textEN`  = '$title111'  
  WHERE `menu_id` = '$aid11'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}



if(isset($_POST['aid12'])){
  $title12 = htmlspecialchars($_POST['title12_TH'], ENT_QUOTES);
  $title122 = htmlspecialchars($_POST['title122_EN'], ENT_QUOTES);
  $aid12 = htmlspecialchars($_POST['aid12'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title12',
      `menu_textEN`  = '$title122'  
  WHERE `menu_id` = '$aid12'";

  // echo $sql;
  $query = $conn->query($sql);
  if ($query) {
 $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
}
}


if(isset($_POST['aid13'])){
  $title13 = htmlspecialchars($_POST['title13_TH'], ENT_QUOTES);
  $title133 = htmlspecialchars($_POST['title133_EN'], ENT_QUOTES);
  $aid13 = htmlspecialchars($_POST['aid13'], ENT_QUOTES);

  $sql = "UPDATE `Database_menu` 

  SET `menu_text`     = '$title13',
      `menu_textEN`  = '$title133'  
  WHERE `menu_id` = '$aid13'";

  // echo $sql;
  $query = $conn->query($sql);
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
      $sql = "UPDATE `Database_menu` SET `menu_status` = '$chk' WHERE `Database_menu`.`menu_id` = '$id6'";
  // echo $sql  ;
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }}

    if($_REQUEST['method'] == 'save_banner'){
      $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
      $chk = "";
      if(isset($_POST['chk'])){
        $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
      }
      if($chk != ''){
        $sql = "UPDATE `Database_menu` SET `menu_status` = '$chk' WHERE `Database_menu`.`menu_id` = '$id'";
    
        $query = $conn->query($sql);
        if($query){
          $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
        }
      }

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
               $sql = "UPDATE `Database_menu` SET `menu_image` = '$path_update' WHERE `menu_id` = '$id'";

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