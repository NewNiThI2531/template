<?php

$banner = [];
$sql = "SELECT * FROM `Database_setting` WHERE Set_Page = '18'";

$query = $conn->query($sql);
while ($res = $query->fetch_assoc()) {
  $banner[] = $res;
}


?>

<div class="box-content">
  <div class="row">
    <div class="col-9">

    </div>
    
    <div class="col-12">
      <br><br>


      <table class="table table-bordered table-sm" id="table" data-toggle="table" data-ajax="ajaxRequest"
        data-side-pagination="server" data-pagination="true">
        <thead>
          <tr>
            <th data-field="data" class="table-date"></th>
            <th data-field="manage" class="table-manage text-center"></th>
          </tr>
        </thead>
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
                      <input class="form-control" type="text" name="title" id="title" value="">
                    </div>
                    <input type="hidden" class="form-control" id="aid" name="aid">

                    <div>
                      <span>หัวข้ออังกฤษ</span>
                      <input class="form-control" type="text" name="title_en" id="title_en" value="">
                    </div>

                    <div>
                      <span>เนื้อหาไทย</span>
                      <input class="form-control" type="text" name="content" id="content" value="">
                    </div>

                    <div>
                      <span>เนื้อหาอังกฤษ</span>
                      <input class="form-control" type="text" name="content_en" id="content_en" value="">
                    </div>
  
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