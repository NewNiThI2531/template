<form class="row needs-validation complaint-form" id="complaint-form" novalidate action="#" target="calldata"
  enctype="multipart/form-data">


<div class="card mt-4 mb-4">
  <div class="row spaceQQ pt-5">
    <div class="col-4 ">
      Typeข่าว </div>
    <div class="col-8 ">
      <select class="form-select select-y dd btn dropdown-toggle  rounded-5  border-4" name="sl" style="width:300px"
        name="select1">

        <option value="1">ENRICHING LIFE</option>
        <option value="2">SUSTAINABILITY</option>
        <option value="3">INVESTMENT</option>

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
      <textarea class="form-control" id="bg_content" name="bg_content" rows="4" cols="68" style="width: 90%;"></textarea>
      <br>
    </div>
  </div>

  <div class="row spaceQQ">
    <div class="col-4 spaceM text-start fontC spaceF spaceK spaceL">
      รายละเอียดอังกฤษ
    </div>
    <div class="col-8  ">
      <!-- <input type="email" class="form-control btn2 btn1 spaceE btn4" name="email" required> -->
      <textarea class="form-control" id="bg_content" name="bgcontent_EN" rows="4" cols="68" style="width: 90%;"></textarea>
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