<?php

$banner = [];
$sql = "SELECT * FROM `database_blog` WHERE bg_page = '12'";

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
      <a href="https://estate1.arrakmit.com/backend/index.php?page=blog-create">
        <button type="button" class="btn btn-primary w-100 add-category" name="button">เพิ่มข้อมูล</button>
      </a>
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
                    <div class="row spaceQQ pt-5">
                      <div class="col-4 ">
                        Blog Type : </div>
                      <div class="col-8 ">
                        <select class="form-select select-y dd btn dropdown-toggle  rounded-5  border-4" name="sl"
                          id="sl" style="width:300px">

                          <option value="1">ENRICHING LIFE</option>
                          <option value="2">SUSTAINABILITY</option>
                          <option value="3">INVESTMENT</option>

                        </select>
                      </div>
                    </div>
                    <br>


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
                      <span class="pe-5">เนื้อหาไทย</span>
                      <textarea class="form-control" cols="40" rows="5" name="content" id="content" value=""></textarea>
                    </div>
                    <div>
                      <span class="pe-4">เนื้อหาอังกฤษ</span>
                      <textarea class="form-control" cols="40" rows="5" name="content_en" id="content_en"value=""></textarea>
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