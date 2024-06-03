<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_contact` Where ct_page = '13'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="box-content card">
  <div class="row">


  <div class="text-center mt-3 mb-3">BANNER</div>

  <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["ct_type"] == '1'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-8 card-detail">
                  <div class="img-cardcontant" style='background: url("<?='../../'.$value['ct_image']?>")'> </div>             
                </div>
                <div class="col-1 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['ct_image']?>" data-id="<?=$value['ct_id']?>"><i class="fas fa-pen"></i></button>   
                </div>
            
          <div class=' col-1   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['ct_id'] ?>"
                <?=($value['ct_status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>


 <div class="text-center mt-3"> COLUMN 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["ct_type"] == '2'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย</label><br>
        <label class='paddinfont mt-3'>เนื้อหา[ไทย]</label>
      </div>
      <div class="col-8 paddin1">
      <input type="text" class="labl01 form-control" id="" name="title2_TH" value="<?= $value['ct_headtext'] ?>">
      <textarea type="text" class="labl01 form-control mt-3" id="" name="content_TH" style="height: 100px;"><?= $value['ct_text'] ?></textarea>
        <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['ct_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
        <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['ct_id'] ?>"
            <?=($value['ct_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อ[อังกฤษ]</label><br>
        <label class='paddinfont mt-4'>เนื้อหา[อังกฤษ]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01 form-control" id="" name="title2_EN" value="<?= $value['ct_headtextEN'] ?>">
        <textarea type="text" class="labl01 form-control mt-3" id="" name="content_EN" style="height: 100px;"><?= $value['ct_textEN'] ?></textarea>
      </div>
      

      <div class=' col-2   paddin1'>
        <!-- <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['ct_id'] ?>"
            <?=($value['ct_status'] == "0" ? "checked" : "") ?>>
        </div> -->
      </div>
              <?php endif; ?>
      <?php endforeach; ?>

     


<div class="col-12 text-center paddin3 mt-5 mb-5">
        <button type="submit" class="btn btn-confirm btn-save-article " name="button" >บันทึกข้อมูล</button>
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