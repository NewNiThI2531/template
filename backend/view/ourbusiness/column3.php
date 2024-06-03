<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_content` Where Content_Page = '10'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card box-content ">
  <div class="row">

  
 <div class="text-center mt-3"> COLUMN 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '3'): ?>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อรอง <br>[ไทย/อังกฤษ]</label>
      </div>
      <div class="col-4 paddin1">
        <input type="text" class="labl01 form-control" id="" name="content41_TH" value="<?= $value['con_text'] ?>">
      </div>
      <div class="col-4 paddin1">
        <input type="text" class="labl01 form-control" id="" name="content41_EN" value="<?= $value['con_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>


      
              <?php endif; ?>
      <?php endforeach; ?>

<div class="col-12 text-center paddin3 mb-3">
        <button type="submit" class="btn btn-confirm btn-save-article " name="button" >บันทึกข้อมูล</button>
        </div>
</div>
</div>
        </form>


        <form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card box-content mt-4 mb-5" style="background: #dfdfdf;">
  <div class="row">

  
 <div class="text-center"> COLUMN 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '8'): ?>
      <div class="col-3 paddin1 pb-0">
        <label class='paddinfont'>หัวข้อ<br>[ไทย/อังกฤษ]</label>
      </div>
      <div class="col-4 paddin1 pb-0">
        <input type="text" class="labl01 form-control" id="" name="title2_TH" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['con_id'] ?>">
      </div>
      <div class="col-4 paddin1 pb-0">
        <input type="text" class="labl01 form-control" id="" name="title2_EN" value="<?= $value['conhead_textEN'] ?>">
      </div>
      <div class="col-1"></div>
      

      <div class="col-3 paddin1">
        <label class='paddinfont'>เนิ้อหา<br>[ไทย/อังกฤษ]</label>
      </div>
      <div class="col-4 paddin1">
        <input type="text" class="labl01 form-control" id="" name="content_TH" value="<?= $value['con_text'] ?>">
      </div>
      <div class="col-4 paddin1">
        <input type="text" class="labl01 form-control" id="" name="content_EN" value="<?= $value['con_textEN'] ?>">
      </div>
      <div class="col-1"></div>
      


      <div class=' col-3   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-4 card-detail">
                  <div class="img-card" style='background: url("<?='../../'.$value['con_image']?>");width: 90px;'> </div>             
                </div>
                <div class="col-1 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['con_image']?>" data-id="<?=$value['set_id']?>"><i class="fas fa-pen"></i></button>   
                </div>
            
          <div class=' col-2   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['con_id'] ?>"
                <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>



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