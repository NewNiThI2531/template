<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_menu` Where menu_page = '99'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content">
    <div class="row">


      <div class="text-center mt-4 mb-4">SUB&nbsp;&nbsp;MENU&nbsp;&nbsp;BAR&nbsp;&nbsp;ROW 3</div>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '14'): ?>
          <div class="col-3 paddin1 pt-0">
            <label class='paddinfont'>หัวข้อ 1 [ไทย/อังกฤษ] </label>
          </div>
          <div class="col-4 paddin1 pt-0">
            <input type="text" class="form-control mb-2 labl01" id="" name="title8_TH" value="<?= $value['menu_text'] ?>">
            <input type="hidden" class="form-control" id="" name="aid8" value="<?= $value['menu_id'] ?>">
          </div>
          <div class="col-4 paddin1 pt-0">
            <input type="text" class="form-control labl01" id="" name="title88_EN" value="<?= $value['menu_textEN'] ?>">
          </div>

          <div class="col-1 text-center pt-0">
            <div class="form-check form-switch">
              <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
                <?= ($value['menu_status'] == "0" ? "checked" : "") ?>>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '15'): ?>
          <div class="col-3 paddin1 pt-0">
            <label class='paddinfont'>หัวข้อ 2 [ไทย/อังกฤษ] </label>
          </div>
          <div class="col-4 paddin1 pt-0">
            <input type="text" class="form-control mb-2 labl01" id="" name="title9_TH" value="<?= $value['menu_text'] ?>">
            <input type="hidden" class="form-control" id="" name="aid9" value="<?= $value['menu_id'] ?>">
          </div>
          <div class="col-4 paddin1 pt-0">
            <input type="text" class="form-control labl01" id="" name="title99_EN" value="<?= $value['menu_textEN'] ?>">
          </div>

          <div class="col-1 text-center pt-0">
            <div class="form-check form-switch">
              <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
                <?= ($value['menu_status'] == "0" ? "checked" : "") ?>>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>


      <div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article mb-4" name="button">บันทึกข้อมูล</button>
      </div>
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