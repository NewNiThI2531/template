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
      $aid = htmlspecialchars($_POST['aid1'], ENT_QUOTES);

      $sql = "UPDATE `Database_corporate` 

      SET `corhead_text`     = '$title1',
          `corhead_textEN`  = '$title2'  
      WHERE `cor_id` = '$aid'";

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

  $sql = "UPDATE `Database_corporate` 
  SET `corhead_text`     = '$title3',
      `corhead_textEN`  = '$title4',  
      `cor_text`     = '$title5',
      `cor_textEN`  = '$title6'    
       WHERE `cor_id` = '$aid2'";

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



if(isset($_POST['aid3'])){
  $title7 = htmlspecialchars($_POST['content2_TH'], ENT_QUOTES);
  $title8 = htmlspecialchars($_POST['content2_EN'], ENT_QUOTES);
  $aid3 = htmlspecialchars($_POST['aid3'], ENT_QUOTES);

  $sql = "UPDATE `Database_content` 
  SET 
      `con_text`     = '$title7',
      `content_content_EN`  = '$title8'    
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




//     if(isset($_POST['title8'][$key])){
//       $title1 = htmlspecialchars($_POST['title4'][$key], ENT_QUOTES);
//       $title2 = htmlspecialchars($_POST['title6'][$key], ENT_QUOTES);
//       $title3 = htmlspecialchars($_POST['title7'][$key], ENT_QUOTES);
//       $title4 = htmlspecialchars($_POST['title8'][$key], ENT_QUOTES);

//       $sql = "UPDATE `database_content` 
//       SET `content_heading`     = '$title1',
//           `content_heading_EN`  = '$title2'  
//           `content_content`     = '$title3'
//           `content_content_EN`  = '$title4'    
// //       WHERE `content_ID` = '$value'";
//  $query = $conn->query($sql);
//  if ($query) {
//    $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย3'];
//  }
 
// }

//  else {
//  $sql = "INSERT INTO `database_content` (`content_heading`, `content_content`, `content_heading_EN`, `content_content_EN`)
//    VALUES ('$title1', '$title2', '$title3', '$title4')";

//  $query = $conn->query($sql);
//  $id = $conn->insert_id;
//  if ($query) {
//    $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย55'];
//   }
//  }
// }
// }


    // $sql = "UPDATE `database_content` 
    // SET `content_heading`     = '$title1',
    //     `content_heading_EN`  = '$title2'  
    //     `content_content`     = '$title3'
    //     `content_content_EN`  = '$title4'    
    // WHERE `content_ID` = '$value'";
    # code...
  // }

  // exit();

    // $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
    // $title = htmlspecialchars($_POST['title01'], ENT_QUOTES);
    // $title2 = htmlspecialchars($_POST['title02'], ENT_QUOTES);

    // $id = htmlspecialchars($_POST['aid2'], ENT_QUOTES);
    // $title = htmlspecialchars($_POST['title03'], ENT_QUOTES);
    // $title2 = htmlspecialchars($_POST['title04'], ENT_QUOTES);
    // $title3 = htmlspecialchars($_POST['title05'], ENT_QUOTES);
    // $title4 = htmlspecialchars($_POST['title06'], ENT_QUOTES);

    // $id = htmlspecialchars($_POST['aid3'], ENT_QUOTES);
    // $title = htmlspecialchars($_POST['title07'], ENT_QUOTES);
    // // $title2 = htmlspecialchars($_POST['title08'], ENT_QUOTES);
    // $id1 = htmlspecialchars($_POST['aid'], ENT_QUOTES);
    // $id2 = htmlspecialchars($_POST['aid2'], ENT_QUOTES);
    // $id3 = htmlspecialchars($_POST['aid3'], ENT_QUOTES);
    // $title = htmlspecialchars($_POST['title01'], ENT_QUOTES);
    // $title2 = htmlspecialchars($_POST['title02'], ENT_QUOTES);
    // $title = htmlspecialchars($_POST['title03'], ENT_QUOTES);
    // $title2 = htmlspecialchars($_POST['title04'], ENT_QUOTES);

    // if ($id != '') {
    //   $sql = "UPDATE `database_content` SET `content_heading` = '$title',`content_heading_EN` = '$title2'  WHERE `content_ID` = '$id'";

      // $query = $conn->query($sql);
      // if ($query) {
      //   $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย1'];
      
//      else {
//       $sql = "INSERT INTO `database_content` (`content_heading`)
//         VALUES ('$title1','$title2','$title3','$title4')";
     
//       $query = $conn->query($sql);
//       $id = $conn->insert_id;
//       if ($query) {
//         $data = ['res_code' => '00', 'res_text' => 'บันทึกข้อมูลเรียบร้อย2'];
//       }
//     }
//   }
// }  






else if($_REQUEST['method'] == 'save_banner2'){
      //  print_r($_REQUEST) ;
    $id6 = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk6 = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    
    }
    if($chk != ''){
      $sql = "UPDATE `Database_corporate` SET `cor_status` = '$chk' WHERE `Database_corporate`.`cor_id` = '$id6'";
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
      $sql = "UPDATE `Database_corporate` SET `cor_status` = '$chk' WHERE `Database_corporate`.`cor_id` = '$id5'";
  
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  }
  print_r ($_FILES);
    if(!empty($_FILES["fileuplad"]["name"])) {
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../../data/sustainable_life/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);
  
      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;
  
          if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
            $path_update = "../../../data/sustainable_life/".$time.'.'.$fileType;
            if ($id5 == '') {
              $sql = "INSERT INTO `Database_corporate` ( `cor_image`, `cor_type`) VALUES ('โปรโมชัน', '$path_update', '1')";
      
            }else{
              $sql = "UPDATE `Database_corporate` SET `cor_image` = '$path_update' WHERE `cor_id` = '$id5'";
            }
            $query = $conn->query($sql);
       
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }
  }


 if($_REQUEST['method'] == 'save_banner'){
    // print_r($_REQUEST) ;
     
  if(isset($_POST['banid2'])){

    $id6 = htmlspecialchars($_POST['banid2'], ENT_QUOTES);
    $chk2 = "";
    if(isset($_POST['chk'])){
      $chk2 = htmlspecialchars($_POST['chk'], ENT_QUOTES);  
    }
    if($chk2 != ''){
      $sql2 = "UPDATE `Database_corporate` SET `cor_status` = '$chk2' WHERE `Database_corporate`.`cor_id` = '$id6'";
  
      $query = $conn->query($sql2);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  }
    

  

    



    print_r ($_FILES);
    if(!empty($_FILES["fileuplad2"]["name"])) {
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../../data/sustainable_life/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad2"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);
  
      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;
  
          if(move_uploaded_file($_FILES["fileuplad2"]["tmp_name"], $path_upload)){
            $path_update = "../../../data/sustainable_life/".$time.'.'.$fileType;
            if ($id6 == '') {
              $sql = "INSERT INTO `Database_corporate` ( `cor_image`, `cor_type`) VALUES ('โปรโมชัน', '$path_update', '1')";
      
            }else{
              $sql = "UPDATE `Database_corporate` SET `cor_image` = '$path_update' WHERE `cor_id` = '$id6'";
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