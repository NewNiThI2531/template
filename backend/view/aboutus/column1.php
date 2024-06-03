<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_content` Where Content_Page = '2'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

$banner1 = [];
$sql = "SELECT * FROM `Database_setting`  Where Set_Page = '2' ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner1[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">

<div class="text-center mt-4 abouta">About</div>

<div class="card box-content">
  <div class="row">

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '1'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-4 paddin1">
        <input class="form-control form-control-lg labl01" type="text" id="" name="content2_TH" value="<?= $value['con_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid3" value="<?= $value['con_id'] ?>">
      </div>
      <div class="col-4"></div>
      

      <div class=' col-2   paddin1'>
        
      </div>

      <div class="col-2 paddin1  pt-0">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-4 paddin1  pt-0">
        <input type="text" class="form-control form-control-lg labl01" id="" name="content2_EN" value="<?= $value['con_textEN'] ?>">
      </div>

      <div class=' col-2   paddin1  pt-0'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
          <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-4"></div>

              <?php endif; ?>
      <?php endforeach; ?>

     
<?php foreach ($banner1 as $key => $value): ?>
        <?php if ($value["Set_Type"] == '1'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-4 card-detail">
                  <div class="img-cardabout" style='background: url("<?='../../'.$value['set_image']?>")'> </div>             
                </div>
                <div class="col-2 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['set_image']?>" data-id="<?=$value['set_id']?>"><i class="fas fa-pen"></i></button>   
                
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['set_id'] ?>"
                <?=($value['Set_Status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>



<div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article mb-4" name="button" >บันทึกข้อมูล</button>
        </div>
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
              <div class=" text-center">
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