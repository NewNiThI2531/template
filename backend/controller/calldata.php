<?php
include('../config/connect.php');
include "../../controller/passhash.php";
// echo $pass = PassHash::hash('@P@ssW0rd@dmin');

$data = ['res_code' => '01' , 'res_text' => 'เกิดข้อผิดพลาด'];
if (isset($_REQUEST['method']) && $_REQUEST['method'] != '') {
  if($_REQUEST['method'] == 'login'){
    $user = htmlspecialchars($_POST['user'], ENT_QUOTES);
    $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
    $sql = "SELECT * FROM `admin_tb` WHERE `at_username` = '$user' AND `at_status` = '0'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        if(PassHash::check_password($res['at_password'], $pass)){
          unset($res['at_password']);
          unset($res['at_status']);
          unset($res['at_update']);
          unset($res['at_create']);
          $_SESSION['data_admin'] = $res;
          $data = ['res_code' => '00' , 'res_text' => 'เข้าสู่ระบบสำเร็จ'];
        }else{
          $data = ['res_code' => '01' , 'res_text' => 'username หรือ password ผิด'];
        }
      }
    }else{
      $data = ['res_code' => '01' , 'res_text' => 'username หรือ password ผิด'];
    }
  }else if($_REQUEST['method'] == 'save_news'){
    $now = date("Y-m-d H:i:s");
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $news = htmlspecialchars($_POST['news'], ENT_QUOTES);
    $sql = "INSERT INTO `news_tb` (`nt_news`, `nt_date`, `nt_create`) VALUES ('$news', '$date', '$now')";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข่าวสารเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'get_news'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `news_tb` WHERE `nt_status` != '2'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $chk = '';
        if($res["nt_status"] == '0'){
          $chk = 'checked';
        }
        $res["date"] = date('d/m/Y h:i:s',strtotime($res["nt_date"]));
        $res["news"] = $res["nt_news"];
        $res["manage"] = '<div class="form-check form-switch">
                            <input class="form-check-input" '.$chk.' type="checkbox" data-id="'.$res["nt_id"].'">
                          </div>
                          <button class="btn btn-edit" data-id="'.$res["nt_id"].'">แก้ไข</button>
                          <button class="btn btn-delete" data-id="'.$res["nt_id"].'">ลบ</button>
                          ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
  }else if($_REQUEST['method'] == 'remove_news'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "UPDATE `news_tb` SET `nt_status` = '2' WHERE `news_tb`.`nt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'ลบข่าวสารเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'show_news'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    $sql = "UPDATE `news_tb` SET `nt_status` = '$chk' WHERE `news_tb`.`nt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'get_news_by_id'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $output = [];
    $sql = "SELECT * FROM `news_tb` WHERE `nt_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }else if($_REQUEST['method'] == 'update_news'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $news = htmlspecialchars($_POST['news'], ENT_QUOTES);
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $sql = "UPDATE `news_tb` SET `nt_news` = '$news', `nt_date` = '$date' WHERE `nt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'get_member'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `member_tb`";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        unset($res['at_password']);
        unset($res['at_update']);
        unset($res['at_create']);
        $chk = '';
        if($res["mt_status"] == '0'){
          $chk = '<div class="box-status wait">Data</div>';
        }else if($res["mt_status"] == '1'){
          $chk = '<div class="box-status nomal">Active</div>';
        }else if($res["mt_status"] == '2'){
          $chk = '<div class="box-status lock">Lock</div>';
        }else if($res["mt_status"] == '3'){
          $chk = '<div class="box-status ban">Supend</div>';
        }
        $note = "";
        if($res["mt_note"] != ""){
          $note = '<div class="detail-note" data-bs-container="body" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="'.$res["mt_note"].'">'.$res["mt_note"].'</div>';
        }

        $res["number"] = $res["mt_id"];
        $res["user"] = $res["mt_user"];
        $res["name"] = $res["mt_fname"] . " " . $res["mt_lname"];
        $res["note"] = $note;
        $res["phone"] = $res["mt_phone"];
        $res["status"] = $chk;
        $res["manage"] = '<button class="btn btn-manage btn-credit" data-id="'.$res["mt_id"].'">เครดิต</button>
                          <button class="btn btn-manage btn-edit" data-id="'.$res["mt_id"].'">แก้ไข</button>
                          <button class="btn btn-manage btn-history" data-id="'.$res["mt_id"].'">ประวัติ</button>
                          <button class="btn btn-manage btn-play" data-id="'.$res["mt_id"].'">รายการเล่น</button>
                          ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
  }else if($_REQUEST['method'] == 'get_member_by_id'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "SELECT * FROM `member_tb` WHERE `mt_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        unset($res['mt_pass']);
        unset($res['mt_update']);
        unset($res['mt_create']);
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }else if($_REQUEST['method'] == 'member_edit'){
    $now = date("Y-m-d H:i:s");
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES);
    $lname = htmlspecialchars($_POST['lname'], ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $bank = htmlspecialchars($_POST['bank'], ENT_QUOTES);
    $account = htmlspecialchars($_POST['account'], ENT_QUOTES);
    $money = htmlspecialchars($_POST['money'], ENT_QUOTES);
    $point = htmlspecialchars($_POST['point'], ENT_QUOTES);
    $status = htmlspecialchars($_POST['status'], ENT_QUOTES);
    $note = htmlspecialchars($_POST['note'], ENT_QUOTES);
    $sql = "UPDATE `member_tb` SET
            `mt_fname` = '$fname',
            `mt_lname` = '$lname',
            `mt_phone` = '$phone',
            `mt_account` = '$account',
            `mt_bank` = '$bank',
            -- `mt_money` = '$money',
            `mt_point` = '$point',
            `mt_status` = '$status',
            `mt_note` = '$note',
            `mt_update` = '$now'
            WHERE `mt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'update_money_member'){
    $now = date("Y-m-d H:i:s");
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $money = htmlspecialchars($_POST['credit'], ENT_QUOTES);
    $sql = "UPDATE `member_tb` SET `mt_money` = mt_money+(".$money."), `mt_update` = '$now' WHERE `mt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'get_article'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `article_tb` WHERE at_status = '0'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $html = '
        <div class="card" style="">
          <div class="card-body">
            <div class="row">
              <div class="col-2 card-detail">
                <div class="img-card" style="background: url(../'.$res["at_img_title"].')">
                </div>
              </div>
              <div class="col-10 card-detail">
                <div>
                  <div class="">
                    '.$res["at_title"].'
                  </div>
                  <div class="text-content">
                    '.$res["at_content"].'
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ';
        $res["data"] = $html;
        $res["manage"] = '<button class="btn btn-success btn-edit" data-id="'.$res["at_id"].'">แก้ไข</button>
                          <button class="btn btn-danger btn-delete" data-id="'.$res["at_id"].'">ลบ</button>
                         ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
  }else if($_REQUEST['method'] == 'get_article_by_id'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "SELECT * FROM `article_tb` WHERE `at_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }else if($_REQUEST['method'] == 'save_article'){
    $now = date("Y-m-d H:i:s");
    $id = htmlspecialchars($_POST['aid'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
    if($id != ''){
      $sql = "UPDATE `article_tb` SET `at_title` = '$title', `at_content` = '$content' WHERE `at_id` = '$id'";
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }else{
      $sql = "INSERT INTO `article_tb` (`at_title`, `at_img_title`, `at_short_content`, `at_content`, `at_create`)
      VALUES ('$title', '', '', '$content','$now')";
      $query = $conn->query($sql);
      $id = $conn->insert_id;
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
    if(!empty($_FILES["fileuplad"]["name"])) {
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../data/article_img/'.$id.'/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);
      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;
          if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
            $path_update = "data/article_img/".$id.'/'.$time.'.'.$fileType;
            $sql = "UPDATE `article_tb` SET `at_img_title` = '$path_update' WHERE `at_id` = '$id'";
            $query = $conn->query($sql);
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }
  }else if($_REQUEST['method'] == 'remove_article'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "UPDATE `article_tb` SET `at_status` = '2' WHERE `article_tb`.`at_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'ลบบทความเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'save_book'){
    $now = date("Y-m-d H:i:s");
    $id = htmlspecialchars($_POST['bid'], ENT_QUOTES);
    $bank = htmlspecialchars($_POST['bank'], ENT_QUOTES);
    $account = htmlspecialchars($_POST['account'], ENT_QUOTES);
    $accname = htmlspecialchars($_POST['accname'], ENT_QUOTES);
    if($id != ''){
      $sql = "UPDATE `book_bank` SET `bb_account` = '$account', `bb_name` = '$accname' , `bb_bank` = '$bank', `bb_update` = '$now' WHERE `bb_id` = '$id'";
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }else{
      $sql = "INSERT INTO `book_bank` (`bb_account`, `bb_name`, `bb_bank`, `bb_crate`, `bb_update`)
      VALUES ('$account', '$accname', '$bank', '$now','$now')";
      $query = $conn->query($sql);
      $id = $conn->insert_id;
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }
  }else if($_REQUEST['method'] == 'get_book_bank'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $sql = "SELECT * FROM `book_bank` LEFT JOIN `bank` ON book_bank.bb_bank = bank.bank_id WHERE bb_status != '2'";
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.($offset*$limit).','.$limit;
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $html = '
        <div class="card" style="">
          <div class="card-body">
            <div class="row">
              <div class="col-1 card-detail">
                <div class="img-card" style="background: url(../data/bank/'.$res["bank_img"].')">
                </div>
              </div>
              <div class="col-11 card-detail">
                <div>
                  <div class="text-account">
                    '.$res["bb_account"].'
                  </div>
                  <div class="text-content">
                    '.$res["bank_name"].'
                  </div>
                  <div class="text-content">
                    '.$res["bb_name"].'
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ';
        $res["data"] = $html;
        $chk = '';
        if($res["bb_status"] == '0'){
          $chk = 'checked';
        }
        $res["manage"] = '<div class="form-check form-switch">
                            <input class="form-check-input" '.$chk.' type="checkbox" data-id="'.$res["bb_id"].'">
                          </div>
                          <button class="btn btn-success btn-edit" data-id="'.$res["bb_id"].'">แก้ไข</button>
                          <button class="btn btn-danger btn-delete" data-id="'.$res["bb_id"].'">ลบ</button>
                         ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
    $data = [
      "total" => 0,
      "totalNotFiltered" => 0,
      "rows" => $output
    ];
    echo json_encode($data);
    exit();
  }else if($_REQUEST['method'] == 'get_book_by_id'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $sql = "SELECT * FROM `book_bank` WHERE `bb_id` = '$id'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $output = $res;
      }
      $data = ['res_code' => '00' , 'res_text' => 'ดึงข้อมูลสำเร็จ', 'res_data' => $output];
    }
  }else if($_REQUEST['method'] == 'remove_book'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    $sql = "UPDATE `book_bank` SET `bb_status` = '$chk' WHERE `book_bank`.`bb_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }else if($_REQUEST['method'] == 'save_banner'){
    $id = htmlspecialchars($_POST['banid'], ENT_QUOTES);
    $chk = "";
    if(isset($_POST['chk'])){
      $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    }
    if($chk != ''){
      $sql = "UPDATE `banner_tb` SET `banner_status` = '$chk' WHERE `banner_tb`.`banner_id` = '$id'";
      $query = $conn->query($sql);
      if($query){
        $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
      }
    }


    if(!empty($_FILES["fileuplad"]["name"])) {
      $time = time();
      $allowTypes = array('jpg','png','jpeg');
      $path = '../../data/banner_img/';
      if (!file_exists($path)) {
          mkdir($path, 0777, true);
      }
      $fileName = basename($_FILES["fileuplad"]["name"]);
      $fileType = pathinfo($path.$fileName,PATHINFO_EXTENSION);

      if(in_array($fileType, $allowTypes)){
        $path_upload = $path.$time.'.'.$fileType;

          if(move_uploaded_file($_FILES["fileuplad"]["tmp_name"], $path_upload)){
            $path_update = "data/banner_img/".$time.'.'.$fileType;
            if ($id == '') {
              $sql = "INSERT INTO `banner_tb` (`banner_name`, `banner_path`, `banner_type`) VALUES ('โปรโมชัน', '$path_update', '1')";
            }else{
              $sql = "UPDATE `banner_tb` SET `banner_path` = '$path_update' WHERE `banner_id` = '$id'";
            }
            $query = $conn->query($sql);
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
          }
      }else{
          $data = ['res_code' => '01' , 'res_text' => 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.'];
      }
    }
  }else if($_REQUEST['method'] == 'change_pass'){
    $uid = htmlspecialchars($_POST['uid'], ENT_QUOTES);
    $pass_old = htmlspecialchars($_POST['pass_old'], ENT_QUOTES);
    $pass_new = htmlspecialchars($_POST['pass_new'], ENT_QUOTES);

    $sql = "SELECT * FROM `admin_tb` WHERE at_id = '$uid'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        if(PassHash::check_password($res['at_password'], $pass_old)){
          $sql = "UPDATE `admin_tb` SET `at_password` = '".PassHash::hash($pass_new)."' WHERE `admin_tb`.`at_id` = '$uid'";
          $querys = $conn->query($sql);
          if($querys){
            $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
          }
        }else{
          $data = ['res_code' => '01' , 'res_text' => 'รหัสผ่านเดิมไม่ถูกต้อง'];
        }
      }
    }else{
      $data = ['res_code' => '01' , 'res_text' => 'รหัสผ่านเดิมไม่ถูกต้อง'];
    }
  }else if($_REQUEST['method'] == 'get_list_game'){
    $output = [];
    $offset = $_GET['offset'];
    $limit = $_GET['limit'];
    $search = $_GET['search'];
    $sql = "SELECT * FROM `game_tb`";
    if($search != ''){
      $sql .= " WHERE gt_name LIKE '%$search%'";
    }
    $num_row = $conn->query($sql);
    $sql .= 'LIMIT '.$offset.','.$limit;
    $query = $conn->query($sql);



    if($query->num_rows > 0){
      while ($res = $query->fetch_assoc()) {
        $type = "";
        if($res["gt_type"] == 'Baccarat' || $res["gt_type"] == 'Baccarat New' || $res["gt_type"] == 'Blackjack' || $res["gt_type"] == 'Live games'){
          $type = "คาสิโน";
        }else if($res["gt_type"] == 'Classic Slots' || $res["gt_type"] == 'Video Slots' || $res["gt_type"] == 'Scratch card' || $res["gt_type"] == 'Roulette'){
          $type = "สล็อต";
        }else{
          $type = "เกมยิงปลา";
        }
        $chk = '';
        if($res["gt_status"] == '1'){
          $chk = 'checked';
        }
        $res["gt_img"] = str_replace("=>",":",$res["gt_img"]);
        $res["type"] = $type;
        $res["name"] = $res["gt_name"];
        $res["image"] = '<img src="'.$res["gt_img"].'" alt="">';
        $res["manage"] = '<div class="form-check form-switch">
                            <input class="form-check-input" '.$chk.' type="checkbox" data-id="'.$res["gt_id"].'">
                          </div>
                          ';
        $output[] = $res;
      }
      $data = [
        "total" => $num_row->num_rows,
        "totalNotFiltered" => $num_row->num_rows,
        "rows" => $output
      ];
      echo json_encode($data);
      exit();
    }
    $data = [
      "total" => 0,
      "totalNotFiltered" => 0,
      "rows" => $output
    ];
    echo json_encode($data);
    exit();
  }else if($_REQUEST['method'] == 'show_game'){
    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    $chk = htmlspecialchars($_POST['chk'], ENT_QUOTES);
    $sql = "UPDATE `game_tb` SET `gt_status` = '$chk' WHERE `game_tb`.`gt_id` = '$id'";
    $query = $conn->query($sql);
    if($query){
      $data = ['res_code' => '00' , 'res_text' => 'บันทึกข้อมูลเรียบร้อย'];
    }
  }

}

echo json_encode($data);
