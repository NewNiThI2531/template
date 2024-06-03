<?php

  $banner = [];
   $sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '2'";

  $query = $conn->query($sql);
  while ($res = $query->fetch_assoc()) {
    $banner[] = $res;
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
      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Set_Page"] == '2'): ?>
            <?php 
            /* echo "<pre>";
            print_r($value);
            
            echo "</pre>";
*/
            ?> 
          <div class="card" style="">
            <div class="card-body">
              <div class="row">
                <div class="col-3 card-detail">
                  <div class="img-card" style='background: url("<?='../../'.$value['set_image']?>")'>
                  </div>
                </div>
                <div class="col-9 card-detail">
                  <div class="row" style="width: 100%;">
                    <div class="col-4 text-center">
                      แบนเนอร์
                    </div>
       
                    <div class="col-4 text-center">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" data-id="<?=$value['set_id']?>" <?=($value['Set_Status'] == "0" ? "checked" : "")?>>
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
