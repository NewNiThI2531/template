<?php

$banner = [];
$sql = "SELECT * FROM `Database_corporate`  Where cor_page = '8' ";
$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}

?>

<div class="row">
      <div class="col-12">
        <button type="button" name="button" class="btn-news">
          <i class="fas fa-book"></i>
          <span>บทความ</span>
        </button>
      </div>

    </div>

<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content">
    
    
<div class="row">
     
<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["cor_type"] == '13'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-8 card-detail">
            <div class="img-cardas" style="background-image: url(<?='../../'.$value['cor_image']; ?>);"></div>        
          </div>
            
          <div class=' col-2 text-start paddin1'>
            
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['cor_id'] ?>"
                <?=($value['cor_status'] == "0" ? "checked" : "") ?>>
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['cor_image']?>" data-id="<?=$value['cor_id']?>"><i class="fas fa-pen"></i></button>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      
      </div>
      </div>
      
      <div class="col-12 text-center paddin3"></div>
</form>



<form class="fron_IN" action="" target="calldata" method="POST" enctype="multipart/form-data">
  <div class="card box-content mt-0">
    
<div class="row">
     
<?php foreach ($banner as $key => $value): ?>
        <?php if ($value["cor_type"] == '14'): ?>
          <div class=' col-2   paddin1'>
            <p class='paddinfont '>รูปภาพ</p>
          </div>
          <div class="col-8 card-detail">
            <div class="img-cardas" style="background-image: url(<?='../../'.$value['cor_image']; ?>);"></div>               
          </div>
            
          <div class=' col-2 text-start paddin1'>
            
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" data-id="<?= $value['cor_id'] ?>"
                <?=($value['cor_status'] == "0" ? "checked" : "") ?>>
                <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['cor_image']?>" data-id="<?=$value['cor_id']?>"><i class="fas fa-pen"></i></button>
            </div>

          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      
      </div>
      </div>


      <div class="col-12 text-center paddin3">
</form>
</div>

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
