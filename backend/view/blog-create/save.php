
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
    // $datax = $_POST['datax'];
    $sl = $_POST['sl'];
    $bg_text = $_POST['bg_text'];
    $bgtext_EN = $_POST['bgtext_EN'];
    $bg_content = $_POST['bg_content'];
    $bgcontent_EN = $_POST['bgcontent_EN'];
    $bg_image = $_FILES['bg_image']["tmp_name"];
    $bg_time = 0 ;
    $bg_page = 12 ;
    $bg_type = 2 ;
    $bg_status = 0 ;

   $ins = "INSERT INTO `database_blog`(`bg_text`,`bgtext_EN`,`bg_content`,`bgcontent_EN`,`bg_page`,`bg_type`,`bg_status`,`blog_blType`,`bg_time`)
    VALUES('$bg_text','$bgtext_EN','$bg_content','$bgcontent_EN','$bg_page','$bg_type','$bg_status','$sl','$bg_time')";
    $q_ins = $conn->query($ins);
    if($q_ins){
        $last_id = $conn->insert_id;
        $_SESSION['regis_phone'] = $last_id;
        
      if(!is_dir("../../../data")){
          mkdir("../../../data", 0777, true);
      }
      if(!is_dir("../../../asset/images")){
          mkdir("../../../asset/images", 0777, true);
      }
      // if(!is_dir("../../../data/news/$last_id")){ 
      //   mkdir("../../../data/news/$last_id", 0777, true);
      // }
      
      $extension = pathinfo($_FILES['bg_image'] ['name'], PATHINFO_EXTENSION);
        
        $img = uniqid().'.'.$extension;
        
        // $valuez = explode('/',$value);
        // $tmp_name =  '../../../../'.$value;
        $pathB =  '../../../asset/images/'."/".$img;
        $path = '/asset/images/'.$img;
        // echo $path;
        if(copy($bg_image,$pathB)){
          $sql = "UPDATE database_blog SET bg_image = '$path' WHERE bg_id = $last_id ";
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
