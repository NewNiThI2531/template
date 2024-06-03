<?php

  $banner = [];
   $sql = "SELECT * FROM `Database_content` WHERE Content_Page = '1'";

  $query = $conn->query($sql);
  while ($res = $query->fetch_assoc()) {
    $banner[] = $res;
  }


 ?>
 
<div class="box-content">
  <div class="row">
    <div class="col-9">
      
    </div>
    <div class="col-2"> 
    <a href="https://estate1.arrakmit.com/backend/index.php?page=home-create">
      <button type="button" class="btn btn-primary w-100 add-category" name="button" >เพิ่มข้อมูล</button>
    </a>
    </div>
    <div class="col-12">
      <br><br>
      <!-- <h6>แบนเนอร์หน้าแรก</h6> -->
      <table style="width:100%" class="tb">
              <tr>
                <td class="text-center"><h5 class="f">หัวข้อ[ไทย]</h5></td>
                <td class="text-center"><h5 class="f">หัวข้อ[อังกฤษ]</h5></td>
                <td class="text-center"><h5 class="f">รูป</h5></td>
                <td class="text-center"><h5 class="f">สถานะ</h5></td>
                <td class="text-center"><h5 class="f"></h5></td>
              </tr>
      <?php foreach ($banner as $key => $value): ?>
        <?php if ($value["Content_Type"] == '2'): ?>
            <?php 
            /* echo "<pre>";
            print_r($value);
            
            echo "</pre>";
*/
            ?> 
           
              <tr>
                <td style="width: 30%;">
                <div class="col-12 " style="padding:10px;">
                <?=$value['conhead_text']?>
                </div>
                </td>
                <td style="width: 30%;">
                <div class="col-12 "style="padding:10px;">
                <?=$value['conhead_textEN']?>
                </div>
                </td>
                <td >
                  <div class="img-card" style='background: url("<?='../../'.$value['con_image']?>"); margin:20px'>
                  </div>
                </td>
                <td style="width: 20%; text-align:center;">
                      <div class="form-check form-switch text-center">
                        <input class="form-check-input " type="checkbox" data-id="<?=$value['con_id']?>" <?=($value['Content_Status'] == "0" ? "checked" : "")?>>
                      </div>
                </td>
                <td style="width: 20%; text-align:center;">
                    <div class="text-center">
                      <button type="button" name="button" class="btn btn-pen" data-path="<?='../../'.$value['con_image']?>" data-id="<?=$value['con_id']?>"><i class="fas fa-pen"></i></button>
                      <button type="button" name="button" class="btn btn-delete" data-path="<?='../../'.$value['con_image']?>" data-id="<?=$value['con_id']?>"><i class="fas fa-trash-alt"></i></button>

                    </div>
                </td>
              </tr>
        
        <?php endif; ?>
        <?php endforeach; ?>


        </table>



        

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
              
              <div class="">
                <img src="" id="previewImg" alt="" style="width: 100%;">
              </div>
              <input class="form-control" type="file" name="fileuplad" id="photo" accept="image/png, image/jpeg">
              <input type="hidden" name="banid" id="banid" value="">
              

              <div>
              <span>หัวข้อไทย</span>
              <input class="form-control" type="text" name="title" id="title" value="" ></div>
              <input type="hidden" class="form-control" id="aid" name="aid" >

              <div>
              <span>หัวข้ออังกฤษ</span>
              <input class="form-control" type="text" name="title_en" id="title_en" value="" ></div>
              <div>
              <span class="pe-5">เนื้อหาไทย</span>
              <textarea class="form-control" cols="40" rows="5" name="content" id="content" value=""></textarea></div>
              <div>
              <span class="pe-4">เนื้อหาอังกฤษ</span>
              <textarea class="form-control" cols="40" rows="5" name="content_en" id="content_en" value=""></textarea></div>
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
