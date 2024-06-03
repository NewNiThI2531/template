<?php

$banner = [];
$banner = [];
$sql = "SELECT * FROM `Database_corporate` Where cor_page = '8'  ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

// $banner1 = [];
// $sql = "SELECT * FROM `Database_corporate`  Where cor_page = '8' ";
// $query = $conn->query($sql);
// while ($res = $query->fetch_assoc()) {
//   $banner1[] = $res;
// }

?>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
<div class="card box-content">
  <div class="row">

  
 <div class="text-center mt-4 ">CENTER COLUMN</div>

<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["cor_type"] == '2'): ?>
      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้อไทย </label>
      </div>
      <div class="col-8 paddin1">
        <textarea type="text" class="form-control labl01" id="" name="content2_TH" style="height: 200px"><?= $value['cor_text'] ?></textarea>
        <input type="hidden" class="form-control" id="" name="aid3" value="<?= $value['cor_id'] ?>">
      </div>
      

      <div class=' col-2   paddin1'>
        
      </div>

      <div class="col-2 paddin1">
        <label class='paddinfont'>หัวข้ออังกฤษ </label>
      </div>
      <div class="col-8 paddin1">
        <textarea type="text" class="form-control labl01" id="" name="content2_EN" style="height: 200px"><?= $value['cor_textEN'] ?></textarea>
      </div>
      

      <div class=' col-2   paddin1'>
        
      </div>
              <?php endif; ?>
      <?php endforeach; ?>

      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["cor_type"] == '2'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-4 card-detail">
                  <div class="img-card" style='background: url("<?='../../'.$value['cor_image']?>")'> </div>             
                </div>
                <div class="col-4 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['cor_image']?>" data-id="<?=$value['cor_id']?>"><i class="fas fa-pen"></i></button>   
                </div>
            
          <div class=' col-2   paddin1'>
            

          </div>
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