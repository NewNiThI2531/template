
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
    $BOARD_Headtext = $_POST['BOARD_Headtext'];
    $BOARDHeadtext_EN = $_POST['BOARDHeadtext_EN'];
    $BOARD_Text = $_POST['BOARD_Text'];
    $BOARDtext_EN = $_POST['BOARDtext_EN'];
    $BOARD_image = $_FILES['BOARD_image']["tmp_name"];
    $BOARD_Time = 0 ;
    $BOARD_Page = 6 ;
    $board_typetwo = 3 ;
    $BOARD_Status = 0 ;

   $ins = "INSERT INTO `Database_BOARD`(`BOARD_Headtext`,`BOARDHeadtext_EN`,`BOARD_Text`,`BOARDtext_EN`,`BOARD_Page`,`board_typetwo`,`BOARD_Status`,`BOARD_Type`,`BOARD_Time`)
    VALUES('$BOARD_Headtext','$BOARDHeadtext_EN','$BOARD_Text','$BOARDtext_EN','$BOARD_Page','$board_typetwo','$BOARD_Status','$sl','$BOARD_Time')";
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
      
      $extension = pathinfo($_FILES['BOARD_image'] ['name'], PATHINFO_EXTENSION);
        
        $img = uniqid().'.'.$extension;
        
        // $valuez = explode('/',$value);
        // $tmp_name =  '../../../../'.$value;
        $pathB =  '../../../asset/images/'."/".$img;
        $path = '/asset/images/'.$img;
        // echo $path;
        if(copy($BOARD_image,$pathB)){
          $sql = "UPDATE Database_BOARD SET BOARD_image = '$path' WHERE BOARD_id = $last_id ";
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
