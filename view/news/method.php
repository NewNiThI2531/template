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

$sql = " SELECT * FROM `database_blog` WHERE `bg_page` = 12 AND `bg_status`=0 AND `bg_type` = 2 AND `blog_blType` = $key LIMIT $limit OFFSET  $offset";  
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
  $set['bg_id'] =   $row['bg_id'];
  $set['bg_image'] =   $row['bg_image'];
  $set['bg_text']   =    $row['bgtext_EN'];
  $set['bg_content']   =    $row['bgcontent_EN'];
  }else{
  $set['bg_id'] =   $row['bg_id'];
  $set['bg_image'] =   $row['bg_image'];
  $set['bg_text']   =    $row['bg_text'];
  $set['bg_content']   =    $row['bg_content'];
  }

  array_push($data,$set);
}
echo json_encode($data);

}

if (isset($_REQUEST['method']) && $_REQUEST['method']=="get_data1") {
  $limit        = $conn->real_escape_string($_POST['limit']);
  $offset       = $conn->real_escape_string($_POST['offset']);

    $sql = " SELECT * FROM `database_blog` WHERE `bg_page` = 12 AND `bg_status`=0 AND `bg_type` = 2 AND `blog_blType` = 2 LIMIT $limit OFFSET  $offset";  
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
      $set['bg_id'] =   $row['bg_id'];
      $set['bg_image'] =   $row['bg_image'];
      $set['bg_text']   =    $row['bgtext_EN'];
      $set['bg_content']   =    $row['bgcontent_EN'];
      }else{
      $set['bg_id'] =   $row['bg_id'];
      $set['bg_image'] =   $row['bg_image'];
      $set['bg_text']   =    $row['bg_text'];
      $set['bg_content']   =    $row['bg_content'];
      }
    
      array_push($data,$set);
    }
    echo json_encode($data);
    
    }
    
    if (isset($_REQUEST['method']) && $_REQUEST['method']=="content-num") {
      $key       = $conn->real_escape_string($_POST['key']);

      $sql = " SELECT * FROM `database_blog` WHERE `bg_page` = 12 AND `bg_status`=0 AND `bg_type` = 2 AND `blog_blType` = $key ";  
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $stmt->store_result();
      echo json_encode($stmt->num_rows);

    }


?>
