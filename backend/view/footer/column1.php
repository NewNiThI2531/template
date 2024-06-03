<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_footter` Where footer_Page = '99'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<form class="fron_IN2" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class=" card mb-4 box-content">
  <div class="row">

  
 <div class="text-center mt-4"> หัวข้อที่ 1</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '1'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อ[ไทย]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="title5_TH" value="<?= $value['footer_Headtext'] ?>">
        <input type="text" class="form-control labl01" id="" name="title5_TH" value="<?= $value['footter_URL'] ?>">
        <input type="hidden" class="form-control" id="" name="aid5" value="<?= $value['foot_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
        <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อ[อังกฤษ]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="title5_EN" value="<?= $value['footer_HeadtextEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <!-- <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div> -->
      </div>
              <?php endif; ?>
      <?php endforeach; ?>
 
   
      <div class="text-center"> หัวข้อที่ 2</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '2'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อ[ไทย]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="title6_TH" value="<?= $value['footer_Headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid6" value="<?= $value['foot_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
        <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อ[อังกฤษ]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="title6_EN" value="<?= $value['footer_HeadtextEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <!-- <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div> -->
      </div>
              <?php endif; ?>
      <?php endforeach; ?>

      <div class="text-center"> เนื้อหาที่ 4</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["footer_Type"] == '3'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>เนื้อหา[ไทย]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="footertext22_TH[]" value="<?= $value['foot_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid22[]" value="<?= $value['foot_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <div class="form-check form-switch">
        <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>เนื้อหา[อังกฤษ]</label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control labl01" id="" name="footertext22_EN[]" value="<?= $value['foot_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <!-- <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['foot_id'] ?>"
            <?=($value['footer_Status'] == "0" ? "checked" : "") ?>>
        </div> -->
      </div>
              <?php endif; ?>
      <?php endforeach; ?>

<div class="col-12 text-center mb-5 paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article " name="button" >บันทึกข้อมูล</button>
        </div>
</div>
        </form>