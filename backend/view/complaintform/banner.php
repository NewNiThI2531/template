<?php

  $banner = [];
  // $sql_banner = "SELECT * FROM database_Setting WHERE setting_type IN (1) and setting_page='17' and setting_status='0'";

   $sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '15'";
  $query = $conn->query($sql);
  while ($res = $query->fetch_assoc()) {
    $banner[] = $res;
  }

  $content = [];
  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2) and Content_Page='15' and Content_Status='0'";

  // $sql = "SELECT * FROM `database_content` WHERE `conten_page` = 5 AND `conten_type` IN (1,2) ORDER BY `conten_page` ASC  ";
 $query = $conn->query($sql);
 while ($res = $query->fetch_assoc()) {
   $content[] = $res;
 }

 ?>
 
<div class="box-content">
  <div class="row">
    <div class="col-12">
      <button type="button" name="button" class="btn-news">
        <i class="fas fa-image"></i>
        <span>แบนเนอร์</span>
      </button>
    </div>
    <div class="col-12">
      <br><br>
      <h6>แบนเนอร์หน้าแรก</h6>
      <style>
                
.img-card{
  width: 150px;
  
  padding-top: 90px;
  background-size: cover !important;
  background-position: center !important;
}


            </style>
      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Set_Type"] == '1'): ?>

          <div class="card" style="">
            <div class="card-body">
              <div class="row">
                <div class="col-3 card-detail">
                <div class="col-4 text-center">
                      รูปภาพ
                    </div>
                </div>
                <div class="col-9 card-detail">
                  <div class="row" style="width: 100%;">
                  <div class="img-card" style='background: url("<?='../../'.$value['set_image']?>")'>
                  </div>
       
                    <div class="col-4 text-center">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" data-type ="1" data-id="<?=$value['set_id']?>" <?=($value['Set_Status'] == "0" ? "checked" : "")?>>
                      </div>
                    </div>
                    <div class="col-4 text-center">
                      <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['set_image']?>" data-id="<?=$value['set_id']?>"><i class="fas fa-pen"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
        <?php endif; ?>
        <?php endforeach; ?>
        
        <form class="save" action="" target="calldata" method="post" enctype="multipart/form-data">


        <?php foreach ($content as $key => $value): ?>
        <?php if ($value["Content_Type"] == '1'): ?>
    <div class="row ">
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title[]" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid[]" value="<?= $value['con_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title_en[]" value="<?= $value['conhead_textEN'] ?>">

      </div>
      

      <div class=' col-2   paddin1'>

      </div>

      <?php endif; ?>
      <?php endforeach; ?>

        <?php foreach ($content as $key => $value): ?>
        <?php if ($value["Content_Type"] == '2'): ?>
    <div class="row ">
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title[]" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid[]" value="<?= $value['con_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title_en[]" value="<?= $value['conhead_textEN'] ?>">

      </div>
      
    </div>
    <div class="col-2 paddin1">  
    <label class='paddinfont'>ข้อความไทย </label></div>
    <div class="col-8 paddin1">  
 
    <textarea class="labl04" id="" name="content1" rows="4" cols="50"><?= $value['con_text'] ?></textarea>
    <input type="hidden" class="form-control" id="" name="bid" value="<?= $value['con_id'] ?>">
        </div>
        
    <div class=' col-2   paddin1'>
    <div class="form-check form-switch">
</div>

        </div>

        <div class="col-2 paddin1">  
    <label class='paddinfont'>ข้อความอังกฤษ </label></div>
    <div class="col-8 paddin1">  
    <textarea class="labl04" id="" name="content_en1" rows="4" cols="50"><?= $value['con_textEN'] ?></textarea>
    </div>
    <div class=' col-2   paddin1'>


        </div>

      <?php endif; ?>
      <?php endforeach; ?>
      <div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article" name="button" >บันทึกข้อมูล</button>
        </div>
        </form>
<div class="modal" tabindex="-1" id="modal-edit-article">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="save-banner" action="" target="calldata" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="col-12">
              <div class="">
                <img src="" id="previewImg" alt="" style="width: 100%;">
              </div>
              <input class="form-control" type="file" name="fileuplad" id="photo" accept="image/png, image/jpeg">
              <input type="hidden" name="banid" id="banid" value="">
              <br>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-confirm btn-save-article" name="button">ยืนยัน</button>
              &nbsp;&nbsp;&nbsp;
              <button type="button" class="btn btn-cancle" name="button" data-bs-dismiss="modal">ยกเลิก</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> 
