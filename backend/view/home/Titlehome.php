<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_content` Where Content_Page = '1'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}


?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card mt-5" style="width: auto;">
  <div class="row">

  
 <div class="text-center mt-5"> COLUMN 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '1'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title2_TH" value="<?= $value['conhead_text'] ?>">
        <input type="text" class="labl01" id="" name="content_TH" value="<?= $value['con_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['con_id'] ?>">
      </div>
      
      <div class="col-2"></div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title2_EN" value="<?= $value['conhead_textEN'] ?>">
        <input type="text" class="labl01" id="" name="content_EN" value="<?= $value['con_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
              <?php endif; ?>
      <?php endforeach; ?>






      <div class="text-center"> COLUMN 2</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '5'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title4_TH" value="<?= $value['conhead_text'] ?>">
        <input type="text" class="labl01" id="" name="content41_TH" value="<?= $value['con_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid4" value="<?= $value['con_id'] ?>">
      </div>
      
      <div class="col-2"></div>
      
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="labl01" id="" name="title4_EN" value="<?= $value['conhead_textEN'] ?>">
        <input type="text" class="labl01" id="" name="content41_EN" value="<?= $value['con_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['con_id'] ?>"
            <?=($value['Content_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
              <?php endif; ?>
      <?php endforeach; ?>



<div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm modal-edit-article" name="button" >บันทึกข้อมูล</button>
        </div>
</div>
</div>
        </form>