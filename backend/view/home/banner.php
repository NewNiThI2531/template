<div class="box-content">
  <div class="row">
    <div class="col-12 text-center">
      <span class='sizaw'>BANNER HOME</span>
</div>
  
<div class="col-12 card ">
    <div class="col-12 text-right paddin2">
      <button type="button" name="button" class="btn-add">
      <i></i>
        <span>ADD IMAGES</span>
      </button>
    </div>
      <table
            class="table table-bordered table-sm"
            id="table"
            data-toggle="table"
            data-ajax="ajaxRequest"
            data-side-pagination="server"
            data-pagination="true">
        <thead>
          <tr>
            <th data-field="data" class="table-date"></th>
            <th data-field="manage" class="table-manage text-center"></th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>




<div class="modal" tabindex="-1" id="modal-edit-article">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="save-banner" action="" target="calldata" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class=" text-center">
              <div for="exampleInputEmail1" class="form-label">รูปภาพ</div>
                <!-- <img src="" id="previewImg" alt="" style="width: 100%;"> -->
              </div>
              <input class="form-control" type="file" name="fileuplad" id="photo" accept="image/png, image/jpeg" require>
              <input type="hidden" name="banid" id="banid" value="">
              <br>
            </div>
            <div class="col-12">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="aid" name="aid" required>
              </div>
              <div class=" text-center">
              </div>
     
              <br>
            </div>
            <div class="col-12">
            <div class="mb-3">
                         </div>
              <div class=" text-center">
              </div>
     
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