<form class="row needs-validation complaint-form" id="complaint-form" novalidate action="#" target="calldata"
  enctype="multipart/form-data">


  <div class="card mt-4 mb-4">
    <div class="row spaceQQ pt-5">
      <div class="col-4 ">
        Typeข่าว </div>
      <div class="col-8">
        <select class="form-select select-y dd btn dropdown-toggle  rounded-5  border-4 " name="BOARD_Type" style="width:300px"
          name="select1" placeholder="adadd">

          <option class="text-start" value="1">Audit Commmitee</option>
          <option class="text-start" value="2">Risk Management Committee</option>
          <option class="text-start" value="3">Nomination and Remuneration Committee</option>
          <option class="text-start" value="4">Executive Committee</option>
          <option class="text-start" value="5">Corporate Governance and Sustainable Development</option>
          <option class="text-start" value="6">Committee</option>
          <option class="text-start" value="7">Management Team</option>

        </select>
      </div>
    </div>




    <div class="row spaceQQ pt-5">
      <div class="col-4 ">
        หัวข้อไทย </div>
      <div class="col-8 ">
        <input type="text" class="form-control" name="bg_text" style="width: 90%;" required>
      </div>
    </div>

    <div class="row spaceQQ">
      <div class="col-4 s">
        หัวข้ออังกฤษ
      </div>
      <div class="col-8">
        <input type="text" class="form-control" name="bgtext_EN" style="width: 90%;" required>
      </div>
    </div>



    <div class="row spaceQQ">
      <div class="col-4 ">
        รายละเอียดไทย
      </div>
      <div class="col-8  ">
        <!-- <input type="email" class="form-control btn2 btn1 spaceE btn4" name="email" required> -->
        <textarea class="form-control" id="bg_content" name="bg_content" rows="4" cols="68"
          style="width: 90%;"></textarea>
        <br>
      </div>
    </div>

    <div class="row spaceQQ">
      <div class="col-4 spaceM text-start fontC spaceF spaceK spaceL">
        รายละเอียดอังกฤษ
      </div>
      <div class="col-8  ">
        <!-- <input type="email" class="form-control btn2 btn1 spaceE btn4" name="email" required> -->
        <textarea class="form-control" id="bg_content" name="bgcontent_EN" rows="4" cols="68"
          style="width: 90%;"></textarea>
        <br>
      </div>
    </div>


    <div class="row spaceQQ">
      <div class="col-4 spaceM text-start fontC spaceF spaceK spaceL">
        รูปภาพ
      </div>
      <div class="col-8  ">
        <!-- <input type="email" class="form-control btn2 btn1 spaceE btn4" name="email" required> -->
        <input type="file" id="bg_image" name="bg_image">
        <br>
      </div>
    </div>

    <div class="col mb-4">
      <button type="submit" class="btn btn-outline-secondary">
        เพิ่มข้อมูล
      </button>
    </div>
  </div>
</form>