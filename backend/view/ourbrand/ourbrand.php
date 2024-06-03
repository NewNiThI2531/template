

<div class="box-content">
  <div class="row">
    <div class="col-12">
      <button type="button" name="button" class="btn-news">
        <i class="fas fa-book"></i>
        <span>บทความ</span>
      </button>
    </div>

    <div class="col-12">
      <table
            class="table table-bordered table-sm "
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
        <form class="save-aticle" action="" target="calldata" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">หัวข้อไทย</label>
                <input type="text" class="form-control" id="title" name="title" >
                <input type="hidden" class="form-control" id="aid" name="aid" >
              </div>
              <div class="mb-3">
                <label class="form-label">บทความไทย</label>
                <textarea name="content" id="content" class="form-control" rows="10" cols="100" ></textarea>
              </div>
              <label for="exampleInputEmail2" class="form-label">หัวข้ออังกฤษ</label>
                <input type="text" class="form-control" id="title_en" name="title_en" >
              </div>
              <div class="mb-3">
                <label class="form-label">บทความอังกฤษ</label>
                <textarea name="content_en" id="content_en" class="form-control" rows="10" cols="100" ></textarea>
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
