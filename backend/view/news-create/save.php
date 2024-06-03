
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
    
    $news_headtext = $_POST['news_headtext'];
    $news_headtextEN = $_POST['news_headtextEN'];
    $news_text = $_POST['news_text'];
    $news_textEN = $_POST['news_textEN'];
    $news_image = $_FILES['news_image']["tmp_name"];
    $news_page = 9 ;
    $news_type = 2 ;
    $news_status = 0 ;
    $news_time = date('Y-m-d');

   $ins = "INSERT INTO `Database_news`(`news_headtext`,`news_headtextEN`,`news_text`,`news_textEN`,`news_page`,`news_type`,`news_status`,`news_time`)
    VALUES('$news_headtext','$news_headtextEN','$news_text','$news_textEN','$news_page','$news_type','$news_status','$news_time')";
    $q_ins = $conn->query($ins);
    if($q_ins){
        $last_id = $conn->insert_id;
        $_SESSION['regis_phone'] = $last_id;
        
      if(!is_dir("../../../data")){
          mkdir("../../../data", 0777, true);
      }
      if(!is_dir("../../../data/news")){
          mkdir("../../../data/news", 0777, true);
      }
      // if(!is_dir("../../../data/news/$last_id")){ 
      //   mkdir("../../../data/news/$last_id", 0777, true);
      // }
      
      $extension = pathinfo($_FILES['news_image'] ['name'], PATHINFO_EXTENSION);
        
        $img = uniqid().'.'.$extension;
        
        // $valuez = explode('/',$value);
        // $tmp_name =  '../../../../'.$value;
        $pathB =  '../../../data/news/'."/".$img;
        $path = '/data/news/'.$img;
        // echo $path;
        if(copy($news_image,$pathB)){
          $sql = "UPDATE Database_news SET news_image = '$path' WHERE news_id = $last_id ";
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
