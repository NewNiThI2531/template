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

  
 <div class="text-center mt-4 mb-4">HEAD&nbsp;&nbsp;&nbsp;&nbsp;BUTTON&nbsp;&nbsp;&nbsp;&nbsp;MENU</div>


 <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '4'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 1 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
    <input type="text" class="form-control mb-2 labl01" id="" name="title1_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid1" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title11_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>

      
      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '10'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 2 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title2_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid2" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title22_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>

      
      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '13'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 3 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title3_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid3" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title33_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '23'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 4 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title4_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid4" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title44_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '33'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 5 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title5_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid5" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title55_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '34'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 6 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title6_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid6" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title66_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>


      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '35'): ?>
    <div class="col-3 paddin1 pt-0">
        <label class='paddinfont'>หัวข้อ 7 [ไทย/อังกฤษ] </label>
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control mb-2 labl01" id="" name="title7_TH" value="<?= $value['menu_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid7" value="<?= $value['menu_id'] ?>">
    </div>
    <div class="col-4 paddin1 pt-0">
        <input type="text" class="form-control labl01" id="" name="title77_EN" value="<?= $value['menu_headtextEN'] ?>">
    </div>
      
      <div class="col-1 text-center pt-0">
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['menu_id'] ?>"
          <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
     
              <?php endif; ?>
      <?php endforeach; ?>


<div class="col-12 text-center paddin3">
        <button type="submit" class="btn btn-confirm btn-save-article mb-4" name="button" >บันทึกข้อมูล</button>
        </div>
</div>
</div>
        </form>


        <form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content">
    <div class="row">

    <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["menu_type"] == '1'): ?>
          <div class=' col-2  paddin1'>
            <p class='paddinfont '>โลโก้ MENU</p>
          </div>
          <!-- <div class=' col-2   paddin1'></div> -->
          <div class="col-2 card-detail pt-3 pb-3">
                  <div class="logomenu" style='background: url("<?='../../'.$value['menu_image']?>")'> </div>             
                </div>
                <div class="col-1 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['menu_image']?>" data-id="<?=$value['menu_id ']?>"><i class="fas fa-pen"></i></button>   
                </div>
            
          <div class=' col-7   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['menu_id'] ?>"
                <?=($value['menu_status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>

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