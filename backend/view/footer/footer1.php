<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_footter` Where footer_Page = '99'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content pb-4">
    <div class="row">


      <div class="text-center mt-4 mb-4">HEAD&nbsp;&nbsp;&nbsp;FOOTE&nbsp;&nbsp;&nbsp;ROW 1</div>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '1'): ?>
          <div class="col-3 paddin1 m-0 p-2">
            <p class='paddinfont text-center m-0 pb-2 ps-0'>หัวข้อ 1 [ไทย/อังกฤษ]</p>
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control mb-1 labl01" id="" name="title1_TH"
              value="<?= $value['footer_Headtext'] ?>">
            <input type="hidden" class="form-control" id="" name="aid1" value="<?= $value['foot_id'] ?>">
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control labl01" id="" name="title11_EN"
              value="<?= $value['footer_HeadtextEN'] ?>">
          </div>

          <div class="col-1">
            <div class="form-check form-switch">
              <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
                <?= ($value['footer_Status'] == "0" ? "checked" : "") ?>>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '2'): ?>
          <div class="col-3 paddin1 m-0 p-2">
            <p class='paddinfont text-center m-0 pb-2 ps-0'>หัวข้อ 2 [ไทย/อังกฤษ]</p>
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control mb-1 labl01" id="" name="title2_TH"
              value="<?= $value['footer_Headtext'] ?>">
            <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['foot_id'] ?>">
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control labl01" id="" name="title22_EN"
              value="<?= $value['footer_HeadtextEN'] ?>">
          </div>

          <div class="col-1 pt-3">
            <div class="form-check form-switch">
              <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
                <?= ($value['footer_Status'] == "0" ? "checked" : "") ?>>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>

    </div>
  </div>

  <div class="card box-content">
    <div class="row">

      <div class="text-center mt-4 mb-4">SUB&nbsp;&nbsp;&nbsp;FOOTER&nbsp;&nbsp;&nbsp;ROW 1</div>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '3'): ?>
          <div class="col-3 paddin1 m-0 p-2">
            <p class='paddinfont text-center m-0 pb-2 ps-0'>หัวข้อ 1 [ไทย/อังกฤษ]</p>
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control mb-1 labl01" id="" name="title7_TH" value="<?= $value['foot_text'] ?>">
            <input type="hidden" class="form-control" id="" name="aid7" value="<?= $value['foot_id'] ?>">
          </div>
          <div class="col-4 paddin1 m-0 p-2">
            <input type="text" class="form-control labl01" id="" name="title77_EN" value="<?= $value['foot_textEN'] ?>">
          </div>

          <div class="col-1 pt-3">
            <div class="form-check form-switch">
              <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
                <?= ($value['footer_Status'] == "0" ? "checked" : "") ?>>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>



      <div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article mb-4" name="button">บันทึกข้อมูล</button>
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