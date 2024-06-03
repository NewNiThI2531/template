
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
    
    $pro_headtext = $_POST['pro_headtext'];
    $pro_headtextEN = $_POST['pro_headtextEN'];
    $pro_text = $_POST['pro_text'];
    $pro_textEN = $_POST['pro_textEN'];
    $pro_img = $_FILES['pro_img']["tmp_name"];
    $pro_page = 16 ;
    $pro_type = 2 ;
    $pro_status = 0 ;
    $pro_time = date('Y-m-d');

   $ins = "INSERT INTO `Database_Project`(`pro_headtext`,`pro_headtextEN`,`pro_text`,`pro_textEN`,`pro_page`,`pro_type`,`pro_status`,`pro_time`)
    VALUES('$pro_headtext','$pro_headtextEN','$pro_text','$pro_textEN','$pro_page','$pro_type','$pro_status','$pro_time')";
    $q_ins = $conn->query($ins);
    if($q_ins){
        $last_id = $conn->insert_id;
        $_SESSION['regis_phone'] = $last_id;
        
      if(!is_dir("../../../data")){
          mkdir("../../../data", 0777, true);
      }
      if(!is_dir("../../../data/project")){
          mkdir("../../../data/project", 0777, true);
      }
      // if(!is_dir("../../../data/news/$last_id")){ 
      //   mkdir("../../../data/news/$last_id", 0777, true);
      // }
      
      $extension = pathinfo($_FILES['pro_img'] ['name'], PATHINFO_EXTENSION);
        
        $img = uniqid().'.'.$extension;
        
        // $valuez = explode('/',$value);
        // $tmp_name =  '../../../../'.$value;
        $pathB =  '../../../data/project/'."/".$img;
        $path = '/data/project/'.$img;
        // echo $path;
        if(copy($pro_img,$pathB)){
          $sql = "UPDATE Database_Project SET pro_img = '$path' WHERE pro_id = $last_id ";
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
