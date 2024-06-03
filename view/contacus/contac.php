<?php

$contac = [];
$contents_new = [];

$sql = "SELECT * FROM Database_contact WHERE ct_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17) and ct_page='13' and ct_status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["ct_text"] = ($lang == 'EN' ? $cma["ct_textEN"] : $cma["ct_text"]);
  $cma["ct_headtext"] = ($lang == 'EN' ? $cma["ct_headtextEN"] : $cma["ct_headtext"]);

  $contac[] = $cma;
}



?>



<?php
foreach ($contac as $key => $ct1) {
  if ($ct1['ct_type'] == '1') { ?>
    <img class="conus" src="<?php echo $ct1['ct_image']; ?>">
  <?php }
}
?>

<div class="container conaa">

<div class="col-12 col-lg-12">
<div class="text-center">
  <?php
  foreach ($contac as $key => $ct2) {
    if ($ct2['ct_type'] == '2') { ?>
      <h1 class="cu1">
        <?php echo $ct2['ct_headtext']; ?>
      </h1>
      <h3 class="cu2">
        <?php echo $ct2['ct_text']; ?>
      </h3>
    <?php }
  }
  ?>

</div>
</div>

</div>

<div class="col-3"></div>

<!--  -->
<div class="con1">

  <div class="container p-0">
    <div class="row">
    <!-- <div class="texttitlecon"> -->

    <?php
    foreach ($contac as $key => $ct3) {
      if ($ct3['ct_type'] == '4') { ?>
        <div class="col-12 col-lg-6 col-xl-4 rowcon01">
          <img src="<?php echo $ct3['ct_image']; ?>"class="picture">
        </div>
        
        <div class="mt-4 col-12 col-lg-6 col-xl-8 context00"> 
          <h5 class="context1"><?php echo $ct3['ct_headtext']; ?></h5>
          <p class="context2"><?php echo $ct3['ct_text']; ?></p>
        </div>
      <?php }
    }
    ?> 
    </div>
  </div>

</div>
<!-- </div>    -->

<div class="text-center p-0 contectcol2 container">
  <div class="row">
    <div class="col-lg-6">

      <?php
      foreach ($contac as $key => $ct9) {
        if ($ct9['ct_type'] == '9') { ?>
          <img class="contactim4" src="<?php echo $ct9['ct_image']; ?>">
        <?php }
      }
      ?>

    </div>
    <div class="col-lg-6 ">

      <div class="row">
        <div class="col-sm-3">

          <?php
          foreach ($contac as $key => $ct10) {
            if ($ct10['ct_type'] == '10') { ?>
              <img class="justify-content-start contactlogo" src="<?php echo $ct10['ct_image']; ?>">
            <?php }
          }
          ?>

        </div>
        <div class="col-sm-9 concol011">
          <?php
          foreach ($contac as $key => $ct11) {
            if ($ct11['ct_type'] == '11') { ?>
              <h5 class="concol11">
                <?php echo $ct11['ct_headtext']; ?>
              </h5>
              <p class="concol12">
                <?php echo $ct11['ct_text']; ?>
              </p>
            <?php }
          }
          ?>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          <?php
          foreach ($contac as $key => $ct12) {
            if ($ct12['ct_type'] == '12') { ?>
              <p class="concol13">
                <?php echo $ct12['ct_text']; ?>
              </p>
            <?php }
          }
          ?>

        </div>
        <div class="col-sm-4" <?php
        foreach ($contac as $key => $ct13) {
          if ($ct13['ct_type'] == '13') { ?>>
              <h5 class="concol14">
                <?php echo $ct13['ct_headtext']; ?>
              </h5>
              <p class="concol15">
                <?php echo $ct13['ct_text']; ?>
              </p>
            <?php }
        }
        ?>

        </div>
        <div class="col-sm-4">

          <?php
          foreach ($contac as $key => $ct14) {
            if ($ct14['ct_type'] == '14') { ?>
              <h5 class="concol14">
                <?php echo $ct14['ct_headtext']; ?>
              </h5>
              <p class="concol15">
                <?php echo $ct14['ct_text']; ?>
              </p>
            <?php }
          }
          ?>

        </div>
        <div class="col-sm-4">
          <?php
          foreach ($contac as $key => $ct15) {
            if ($ct15['ct_type'] == '15') { ?>
              <h5 class="concol14">
                <?php echo $ct15['ct_headtext']; ?>
              </h5>
              <p class="concol15">
                <?php echo $ct15['ct_text']; ?>
              </p>
            <?php }
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="contactbut">
    <div class="row justify-content-center">
      <div class="col-6 col-md-6 butform text-center">
        <?php
        foreach ($contac as $key => $ct16) {
          if ($ct16['ct_type'] == '16') { ?>
            <a class="contactbut1" href="?page=complaint">
              <?php echo $ct16['ct_text']; ?>
            </a>
          <?php }
        }
        ?>
      </div>
      <div class="col-6 col-md-6 butform text-center">
        <?php
        foreach ($contac as $key => $ct17) {
          if ($ct17['ct_type'] == '17') { ?>
            <a class="contactbut2" href="?page=contact">
              <?php echo $ct17['ct_text']; ?>
            </a>
          <?php }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="row justify-content-md-center pad4 fon5  ">

  <div class="p-0 col-12">
    <div id="googleMap" style="width:100%;height: 500px;"></div>

    <script>
      function myMap() {
        var mapOptions = {
          center: { lat: 13.81236, lng: 100.50131 },
          zoom: 15,
          disableDefaultUI: true,

        }

        var maps = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(13.81236, 100.50131),
          map: maps,
          title: 'บริษัท อารักษ์มิตร จำกัด'
        });
      }
    </script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWqm2LxYHAkLWLccMgdWjneRe1SyI9S1Y&callback=myMap"></script>
  </div>
</div>

<!-- <div class="grid container text-center">
      <div class="row">
        <div class="col-sm-4">
          <img src="/asset/images/contact1.png">
        </div>
        <div class="col-sm-8">
          <h5 class="context1">ทางเดิน Lorem Ipsum มาตรฐานที่ใช้มาตั้งแต่ปี 1500</h5>
          <p class="context2">"ความจริงก็คือความเจ็บปวดนั้นสำคัญ รองลงมาคือการศึกษา แต่มันเกิดขึ้นในช่วงเวลาที่มีงานใหญ่และความเจ็บปวด เพราะฉันจะมาถึงจุดต่ำสุดของมัน ไม่มีใครควรทำงานประเภทใด เว้นไว้แต่จะได้อานิสงส์ประโยชน์บ้าง ขอเป็นขน หลีกหนีภัย อย่าให้ผู้ใดคลอดบุตร</p>
        </div>
        </div>
      </div> -->