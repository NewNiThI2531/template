<?php

$commer = [];
$contents_new = [];

$sql = "SELECT * FROM Database_COMMERCIAL WHERE commer_type IN (1,2,3,4,5,6,7,8,9) and commer_page='11' and commer_status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;

      $cma["commer_text"] = ($lang == 'EN' ? $cma["commer_textEN"] : $cma["commer_text"]);
      $cma["commer_headtext"] = ($lang == 'EN' ? $cma["commer_headtextEN"] : $cma["commer_headtext"]);

      $commer[] = $cma;
}

$pro = [];
$contents_new = [];

$sql = "SELECT * FROM Database_Project WHERE pro_type IN (1,2,3,4,5,6,7,8) and pro_page='16' and pro_status='0' LIMIT 6";
$query = $conn->query($sql);



while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;

      $cma["pro_text"] = ($lang == 'EN' ? $cma["pro_textEN"] : $cma["pro_text"]);
      $cma["pro_headtext"] = ($lang == 'EN' ? $cma["pro_headtextEN"] : $cma["pro_headtext"]);

      $pro[] = $cma;
}


?>


<?php
foreach ($commer as $key => $com1) {
      if ($com1['commer_type'] == '1') { ?>
            <img class="commer" src="<?php echo $com1['commer_image']; ?>">
      <?php }
}
?>

<div class="text-center">
      <?php
      foreach ($commer as $key => $com2) {
            if ($com2['commer_type'] == '2') { ?>
                  <h1 class="com1">
                        <?php echo $com2['commer_headtext']; ?>
                  </h1>
                  <h3 class="com2">
                        <?php echo $com2['commer_text']; ?>
                  </h3>
                  <div style="border-left: 4px solid #C5A254;
                height: 40px;
                width: 1px;
                display: inline-block;">
                  <?php }
      }
      ?>
      </div>

      <div class="box-button textbutton1">
            <?php
            foreach ($commer as $key => $com3) {
                  if ($com3['commer_type'] == '3') { ?>
                        <p><a class="btn-lg btn-box textbutton01" href="?page=project">
                                    <?php echo $com3['commer_headtext']; ?>
                              </a></p>
                  <?php }
            }
            ?>
      </div>
</div>

<div class="container">
      <?php
      foreach ($commer as $key => $com4) {
            if ($com4['commer_type'] == '4') { ?>
                  <p class="p1">
                        <?php echo $com4['commer_text']; ?>
                  </p>
            <?php }
      }
      ?>
</div>


<div class="container row mt-5">
      <?php
      foreach ($commer as $key => $com5) {
            if ($com5['commer_type'] == '5') { ?>

                  <div class="col-6 col-sm-4 col-mb-3 col-lg-3 p-2">
                        <div class="ps-2 pe-2 sdfsd">
                              <a class="" href="?page=commer-detail&id=<?php echo $com5['commer_id'] ?>">
                                    <img class="comproimg" src="<?php echo $com5['commer_image']; ?>">
                                    </a>
                                    <div class="comprotext1">
                                          <?php echo $com5['commer_text']; ?>
                                    </div>
                              
                        </div>
                  </div>
            <?php }
      }
      ?>
</div>


<!-- SELECT SHOW PROJECT PAGE -->

<!-- <div class="container row mt-5">
      <?php
      foreach ($pro as $key => $proj) {
            if ($proj['pro_type'] == '2') { ?>

                  <div class="col-6 col-sm-4 col-mb-4 col-lg-4 p-1">
                        <div class="ps-2 pe-2 sdfsd">
                              <a class="" href="?page=project-detail&id=<?php echo $proj['pro_id'] ?>">
                                    <img class="comproimg" src="<?php echo $proj['pro_img']; ?>">
                                    <div class="comprotext1"><?php echo $proj['pro_headtext']; ?></div>
                              </a>
                        </div>
                  </div>
            <?php }
      }
      ?>
</div> -->

<!-- ------------------------------- -->


<div class="row justify-content-md-center p-0 fon5  ">

      <div class="col-12 p-0 ">
            <div id="googleMap" class="mapcommer"></div>

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