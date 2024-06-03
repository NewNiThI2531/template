
<?php
function type_name($value='')
{
 
}


include '../../config/connect.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$data = ['res_code' => '01', 'res_text' => 'เกิดข้อผิดพลาด'];

if(isset($_REQUEST['method']) && $_REQUEST['method'] != ''){
  if($_REQUEST['method'] == 'regis_phone'){
    
    $conhead_text = $_POST['conhead_text'];
    $conhead_textEN = $_POST['conhead_textEN'];
    $con_text = $_POST['con_text'];
    $con_textEN = $_POST['con_textEN'];
    $con_image = $_FILES['con_image']["tmp_name"];
    $Content_Page = 1 ;
    $Content_Type = 2 ;
    $Content_Status = 0 ;
    $con_time = date('Y-m-d');

   $ins = "INSERT INTO `Database_content`(`conhead_text`,`conhead_textEN`,`con_text`,`con_textEN`,`Content_Page`,`Content_Type`,`Content_Status`,`con_time`)
    VALUES('$conhead_text','$conhead_textEN','$con_text','$con_textEN','$Content_Page','$Content_Type','$Content_Status','$con_time')";
    $q_ins = $conn->query($ins);
    if($q_ins){
        $last_id = $conn->insert_id;
        $_SESSION['regis_phone'] = $last_id;
        
      if(!is_dir("../../../data")){
          mkdir("../../../data", 0777, true);
      }
      if(!is_dir("../../../data/home")){
          mkdir("../../../data/home", 0777, true);
      }
      // if(!is_dir("../../../data/news/$last_id")){ 
      //   mkdir("../../../data/news/$last_id", 0777, true);
      // }
      
      $extension = pathinfo($_FILES['con_image'] ['name'], PATHINFO_EXTENSION);
        
        $img = uniqid().'.'.$extension;
        
        // $valuez = explode('/',$value);
        // $tmp_name =  '../../../../'.$value;
        $pathB =  '../../../data/home/'."/".$img;
        $path = '/data/home/'.$img;
        // echo $path;
        if(copy($con_image,$pathB)){
          $sql = "UPDATE Database_content SET con_image = '$path' WHERE con_id = $last_id ";
          $sqll = $conn->query($sql);

        }else{
          echo "cccc";
        }
      
        $data = ['res_code' => '00', 'res_text' => 'ส่งข้อมูล'.' เรียบร้อย'];
      
    }else {
      $data = ['res_code' => '01', 'res_text' => 'ไม่สำเร็จ'];
    }
    
    
    echo json_encode($data);
   

    }
  }
?>