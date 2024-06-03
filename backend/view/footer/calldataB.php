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

      $sql = "UPDATE `Database_footter` 

      SET `footer_Headtext`     = '$title1',
          `footer_HeadtextEN`  = '$title11'

      WHERE `foot_id` = '$aid1'";

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

    $sql = "UPDATE `Database_footter` 

    SET `footer_Headtext`     = '$title2',
        `footer_HeadtextEN`  = '$title22'
    WHERE `foot_id` = '$aid2'";

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

  $sql = "UPDATE `Database_footter` 

  SET `footer_Headtext`     = '$title3',
      `footer_HeadtextEN`  = '$title33'
  WHERE `foot_id` = '$aid3'";

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

  $sql = "UPDATE `Database_footter` 

  SET `footer_Headtext`     = '$title4',
      `footer_HeadtextEN`  = '$title44'
  WHERE `foot_id` = '$aid4'";

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

  $sql = "UPDATE `Database_footter` 

  SET `footer_Headtext`     = '$title3',
      `footer_HeadtextEN`  = '$title33'
  WHERE `foot_id` = '$aid5'";

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

  $sql = "UPDATE `Database_footter` 

  SET `footer_Headtext`     = '$title6',
      `footer_HeadtextEN`  = '$title66'
  WHERE `foot_id` = '$aid6'";

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

  $sql = "UPDATE `Database_footter` 

  SET `foot_text`     = '$title7',
      `foot_textEN`  = '$title77'
  WHERE `foot_id` = '$aid7'";

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

  $sql = "UPDATE `Database_footter` 

  SET `foot_text`     = '$title8',
      `foot_textEN`  = '$title88'
  WHERE `foot_id` = '$aid8'";

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

  $sql = "UPDATE `Database_footter` 

  SET `foot_text`     = '$title9',
      `foot_textEN`  = '$title99'
  WHERE `foot_id` = '$aid9'";

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

  $sql = "UPDATE `Database_footter` 

  SET `foot_text`     = '$title10',
      `foot_textEN`  = '$title101'
  WHERE `foot_id` = '$aid10'";

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

  $sql = "UPDATE `Database_footter` 

  SET `foot_text`     = '$title11',
      `foot_textEN`  = '$title111'
  WHERE `foot_id` = '$aid11'";

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
      $sql = "UPDATE `Database_footter` SET `footer_Status` = '$chk' WHERE `Database_footter`.`foot_id` = '$id6'";
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
        $sql = "UPDATE `Database_footter` SET `footer_Status` = '$chk' WHERE `Database_footter`.`foot_id` = '$id'";
    
        $query = $conn->query($sql);
        if($query){
          $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
        }
      }
    }

  echo json_encode($data);