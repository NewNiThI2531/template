<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_COMMERCIAL` Where commer_page = '11'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>


<?php

$banner = [];
$sql = "SELECT * FROM `Database_COMMERCIAL`  Where commer_page = '11' ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}


?>


<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content">
  <div class="text-center mt-3 mb-3">BANNER</div>
    <div class="row">
      <div class="col-12">
       
      </div>

    </div>
    
<div class="row">
     
<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["commer_type"] == '1'): ?>
          <div class=' col-3   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-6 mb-4 card-detail">
                  <div class="img-card" style='background: url("<?='../../'.$value['commer_image']?>")'> </div>
                    
                </div>
                <div class="col-3 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['commer_image']?>" data-id="<?=$value['commer_id']?>"><i class="fas fa-pen"></i></button>   
                <div class="form-check form-switch">
                <input class="form-check-input sad" type="checkbox" data-id="<?= $value['commer_id'] ?>"
                <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
                </div>
              </div>
            
          <!-- <div class=' col-0   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['commer_id'] ?>"
                <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
            </div>
          </div> -->

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
              <input class="form-control mt-3" type="file" name="fileuplad" id="photo" accept="image/png, image/jpeg">
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


<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card box-content">
  <div class="row">

  
 <div class="text-center mt-4">HEADER</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["commer_type"] == '2'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 pb-0 paddin1">
      <input type="text" class="form-control mb-2 labl01" id="" name="title4_TH" value="<?= $value['commer_headtext'] ?>">
        <input type="text" class="form-control labl01" id="" name="content41_TH" value="<?= $value['commer_text'] ?>">
        <input type="hidden" class="form-control" id="" name="aid4" value="<?= $value['commer_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <input type="text" class="form-control mb-2 labl01" id="" name="title4_EN" value="<?= $value['commer_headtextEN'] ?>">
        <input type="text" class="form-control labl01" id="" name="content41_EN" value="<?= $value['commer_textEN'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        <!-- <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['commer_id'] ?>"
            <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
        </div> -->
      </div>

         
      <div class="text-center mt-4">BUTTON</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["commer_type"] == '3'): ?>
      <div class="col-2 pb-0 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 pb-0 paddin1">
        <input type="text" class="form-control labl01" id="" name="title5_TH" value="<?= $value['commer_headtext'] ?>">
        <input type="hidden" class="form-control" id="" name="aid5" value="<?= $value['commer_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 pt-0 paddin1">
        <input type="text" class="form-control labl01 mt-2" id="" name="title5_EN" value="<?= $value['commer_headtextEN'] ?>">
      </div>
      

      <div class=' col-2 pt-0 paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['commer_id'] ?>"
            <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>


      <div class="text-center mt-4">SUB HEADER</div>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["commer_type"] == '4'): ?>
      <div class="col-2 pb-0 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 pb-0 paddin1">
        <textarea type="text" class="form-control labl01 mb-2" id="" name="content2_TH" style="height: 100px"><?= $value['commer_text'] ?></textarea>
        <input type="hidden" class="form-control" id="" name="aid3" value="<?= $value['commer_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        
      </div>

      <div class="col-2 pt-0 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 pt-0 paddin1">
        <textarea type="text" class="form-control labl01" id="" name="content2_EN" style="height: 100px"><?= $value['commer_textEN'] ?></textarea>
      </div>
      

      <div class=' col-2 pt-0 paddin1'>
        <div class="form-check form-switch">
          <input class="form-check-input cheak" type="checkbox" data-id="<?= $value['commer_id'] ?>"
            <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
        </div>
      </div>
              <?php endif; ?>
      <?php endforeach; ?>

               <?php endif; ?>
      <?php endforeach; ?>

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