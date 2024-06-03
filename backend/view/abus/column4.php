<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_content` Where Content_Page = '17'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card box-content">
  <div class="row">

  
 <div class="text-center"> COLUMN 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '4'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title5_TH" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid5" value="<?= $value['con_id'] ?>">
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
        <input type="text" class="labl01" id="" name="title5_EN" value="<?= $value['conhead_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '5'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title51_TH" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid51" value="<?= $value['con_id'] ?>">
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
        <input type="text" class="labl01" id="" name="title51_EN" value="<?= $value['conhead_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '6'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title52_TH" value="<?= $value['conhead_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid52" value="<?= $value['con_id'] ?>">
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
        <input type="text" class="labl01" id="" name="title52_EN" value="<?= $value['conhead_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

              <?php endif; ?>
      <?php endforeach; ?>

              <?php endif; ?>
      <?php endforeach; ?>

              <?php endif; ?>
      <?php endforeach; ?>


<div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article " name="button" >บันทึกข้อมูล</button>
        </div>
</div>
        </form>