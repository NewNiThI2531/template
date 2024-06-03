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
    <div class="row">
      <div class="col-12">
       
      </div>

    </div>
    
<div class="row">
     
<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["commer_type"] == '1'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-2 card-detail">
                  <div class="img-card" style='background: url("<?='../../'.$value['commer_image']?>")'> </div>
                    
                </div>
                <div class="col-6 card-detail">
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['commer_image']?>" data-id="<?=$value['commer_id']?>"><i class="fas fa-pen"></i></button>   
                </div>
            
          <div class=' col-2   paddin1'>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['commer_id'] ?>"
                <?=($value['commer_status'] == "0" ? "checked" : "") ?>>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>

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
