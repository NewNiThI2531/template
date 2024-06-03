<?php

include '../../config/connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $data = ['res_code' => '01', 'res_text' => 'เกิดข้อผิดพลาด'];




if (isset($_REQUEST['method']) && $_REQUEST['method']=="get_data") {
  $limit        = $conn->real_escape_string($_POST['limit']);
  $offset       = $conn->real_escape_string($_POST['offset']);
  $key       = $conn->real_escape_string($_POST['key']);
if($key==""){
  $sql = " SELECT * FROM `Database_BOARD` WHERE `BOARD_Page` = 6 AND `BOARD_Status`=0 AND `BOARD_Type` = 2  LIMIT $limit OFFSET  $offset";  
}else{
  $sql = " SELECT * FROM `Database_BOARD` WHERE `BOARD_Page` = 6 AND `BOARD_Status`=0 AND `BOARD_Type` = 2 AND board_typetwo =$key LIMIT $limit OFFSET  $offset";  

}
$stmt = $conn->prepare($sql);
// $stmt->bind_param('s', $id);
$stmt ->execute();
$result = $stmt->get_result();
$data = [];
// $lang = $_POST['lang'] ;
// echo ($_SESSION['lang']);
// print_r($_SESSION['lang']);
while($row = $result->fetch_assoc())
{
  $set = [];
  if ($lang == 'EN'){
  $set['BOARD_id'] =   $row['BOARD_id'];
  $set['BOARD_image'] =   $row['BOARD_image'];
  $set['BOARD_Headtext']   =    $row['BOARDHeadtext_EN'];
  $set['BOARD_Text']   =    $row['BOARDtext_EN'];
  $set['BOARD_Time']   =    $row['BOARD_Time'];
  }else{
  $set['BOARD_id'] =   $row['BOARD_id'];
  $set['BOARD_image'] =   $row['BOARD_image'];
  $set['BOARD_Headtext']   = $row['BOARDHeadtext_EN'];
  $set['BOARD_Text']   =    $row['BOARDtext_EN'];
  $set['BOARD_Time']   =    $row['BOARD_Time'];
  }

  array_push($data,$set);
}
echo json_encode($data);

}
if (isset($_REQUEST['method']) && $_REQUEST['method']=="content-num") {
  $key = $conn->real_escape_string($_POST['key']);
  if($key == ""){
    $sql = " SELECT * FROM `Database_BOARD` WHERE `BOARD_Page` = 6 AND `BOARD_Status`=0 AND `BOARD_Type` = 2  ";  

  }else{
    $sql = " SELECT * FROM `Database_BOARD` WHERE `BOARD_Page` = 6 AND `BOARD_Status`=0 AND `BOARD_Type` = 2 AND board_typetwo =$key ";  

  }
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $stmt->store_result();
  echo json_encode($stmt->num_rows);

}

?>