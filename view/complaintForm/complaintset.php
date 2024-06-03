<?php
include('../../config/connect.php');  //ไฟล์เชื่อมต่อกับ database 

function generateRandomString($length = 5) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$data = ['res_code' => '02', 'res_text' => 'เกิดข้อผิดพลาด'];

if(isset($_REQUEST['method']) && $_REQUEST['method'] != ''){

if($_REQUEST['method'] == 'regis_phone'){

   

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $agency = htmlspecialchars($_POST['agency'], ENT_QUOTES);
    $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
    $checkbox = htmlspecialchars($_POST['checkbox'], ENT_QUOTES);
	


	//เพิ่มเข้าไปในฐานข้อมูล




$ins = "INSERT INTO `Database_Form` (`form_name`, `form_agency`, `form_company`, `form_mail`, `form_phone`, `form_subject`, `form_detail`, `form_check`) 
 VALUES ('$name','$agency','$company','$email','$phone','$subject','$detail','$checkbox')";

      $q_ins = $conn->query($ins);
      if($q_ins){
        $last_id = $conn->insert_id;
        $_SESSION['regis_phone'] = $last_id;
        $data = ['res_code' => '00', 'res_text' => 'ส่งข้อมูล'.' เรียบร้อย'];
      

    } else {
      
      $data = ['res_code' => '01', 'res_text' => 'ไม่สำเร็จ'];
     
    }
    
    echo json_encode($data);
   
}  }

        ?>