<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_content` Where Content_Page = '20'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

$banner1 = [];
$sql = "SELECT * FROM `Database_setting`  Where Set_Page = '20' ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner1[] = $res;
}

?>

<div class="col-3"></div>
<div class="col-3 loader">
  <h1>OUR POLICY</h1>
</div>
<div class="col-6"></div>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="box-content sdsd">
    <div class="row gfg">


      <div class="col-lg-12 col-md-12  text-center ffas"> COLUMN 1</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '1'): ?>
          <div class="col-2 paddin1">
            <label class='paddinfont'>หัวข้อไทย </label>
          </div>
          <div class="col-8 paddin1">
            <input type="text" class="labl01" id="" name="title2_TH" value="<?= $value['conhead_text'] ?>">
            <textarea class="labl04" id="" name="content_TH" rows="5" cols="70"><?= $value['con_text'] ?></textarea>
            <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['con_id'] ?>">
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

            <input type="text" class="labl01" id="" name="title2_EN" value="<?= $value['conhead_textEN'] ?>">
            <textarea class="labl04" id="" name="content_EN" rows="5" cols="70"><?= $value['con_textEN'] ?></textarea>
          </div>

          <div class=' col-2   paddin1'>
            
            </div>
          
        <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner1 as $key => $value): ?>
        <?php if ($value["Set_Type"] == '1'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-2 card-detail">
            <div class="img-cardasd asdasd1" style='background: url("<?='../../' . $value['set_image'] ?>")'> </div>
          </div>
          <div class="col-6 card-detail">
            <button type="button" name="button" class="btn btn-pen" data-path="<?='../../' . $value['set_image'] ?>"
              data-id="<?= $value['set_id'] ?>"><i class="fas fa-pen"></i></button>
          </div>

          <div class=' col-2   paddin1'>
            <!-- <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['set_id'] ?>"
                <?=($value['Set_Status'] == "0" ? "checked" : "") ?>>
            </div> -->

          </div>
        <?php endif; ?>
      <?php endforeach; ?>


      <div class="text-center ffas" style="margin-top: 50px;"> COLUMN 2</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '2'): ?>
          <div class="col-2 paddin1">
            <label class='paddinfont'>หัวข้อไทย </label>
          </div>
          <div class="col-8 paddin1">
            <input type="text" class="labl01" id="" name="title4_TH" value="<?= $value['conhead_text'] ?>">
            <textarea class="labl04" id="" name="content41_TH" rows="5" cols="70"><?= $value['con_text'] ?></textarea>
            <input type="hidden" class="form-control" id="" name="aid4" value="<?= $value['con_id'] ?>">
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

            <input type="text" class="labl01" id="" name="title4_EN" value="<?= $value['conhead_textEN'] ?>">
            <textarea class="labl04" id="" name="content41_EN" rows="5" cols="70"><?= $value['con_textEN'] ?></textarea>
          </div>

          <div class=' col-2   paddin1'>
            
            </div>
          
        <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner1 as $key => $value): ?>
        <?php if ($value["Set_Type"] == '2'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-2 card-detail">
            <div class="img-cardasd asdasd1" style='background: url("<?='../../' . $value['set_image'] ?>")'> </div>
          </div>
          <div class="col-6 card-detail">
            <button type="button" name="button" class="btn btn-pen" data-path="<?='../../' . $value['set_image'] ?>"
              data-id="<?= $value['set_id'] ?>"><i class="fas fa-pen"></i></button>
          </div>

          <div class=' col-2   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['set_id'] ?>"
                <?=($value['Set_Status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>


      <div class="text-center ffas" style="margin-top: 50px;"> COLUMN 3</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '3'): ?>
          <div class="col-2 paddin1">
            <label class='paddinfont'>หัวข้อไทย </label>
          </div>
          <div class="col-8 paddin1">
            <input type="text" class="labl01" id="" name="title41_TH" value="<?= $value['conhead_text'] ?>">
            <textarea class="labl04" id="" name="content42_TH" rows="5" cols="70"><?= $value['con_text'] ?></textarea>
            <input type="hidden" class="form-control" id="" name="aid41" value="<?= $value['con_id'] ?>">
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

            <input type="text" class="labl01" id="" name="title41_EN" value="<?= $value['conhead_textEN'] ?>">
            <textarea class="labl04" id="" name="content42_EN" rows="5" cols="70"><?= $value['con_textEN'] ?></textarea>
          </div>


          <div class=' col-2   paddin1'>
            
          </div>
        <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner1 as $key => $value): ?>
        <?php if ($value["Set_Type"] == '3'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-2 card-detail">
            <div class="img-cardasd asdasd1" style='background: url("<?='../../' . $value['set_image'] ?>")'> </div>
          </div>
          <div class="col-6 card-detail">
            <button type="button" name="button" class="btn btn-pen" data-path="<?='../../' . $value['set_image'] ?>"
              data-id="<?= $value['set_id'] ?>"><i class="fas fa-pen"></i></button>
          </div>

          <div class=' col-2   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['set_id'] ?>"
                <?=($value['Set_Status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>


      <div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article " name="button">บันทึกข้อมูล</button>
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