<?php

$pro = [];
$contents_new = [];

$sql = "SELECT * FROM stock WHERE pro_type IN (1,2,3,4,5,6,7,8) and pro_page='16' and pro_status='0'";
$query = $conn->query($sql);



while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["pro_text"] = ($lang == 'EN' ? $cma["pro_textEN"] : $cma["pro_text"]);
  $cma["pro_headtext"] = ($lang == 'EN' ? $cma["pro_headtextEN"] : $cma["pro_headtext"]);

  $pro[] = $cma;
}

?>


<div class="container">
  <div class="row ss">
    <div class="col-md-6">
      <?php
      foreach ($pro as $key => $proj1) {
        if ($proj1['pro_type'] == '1') { ?>
          <h2 class="texth1">
            <?php echo $proj1['pro_headtext']; ?>
          </h2>
        <?php }
      }
      ?>
    </div>
    <div class="col-md-6 search">
      <input type="search" class="form-control pjsearch " placeholder="Search..." aria-label="Search">
    </div>
  </div>
</div>

<!-- <div>
  <div class="container">
    <div class="row rowpj1">
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj2) {
        if ($proj2['pro_type'] == '2') { ?>
          <img class="picj1" src="<?php echo $proj2['pro_img']; ?>">
          <h3 class="textp1"><?php echo $proj2['pro_headtext']; ?></h3>
          <p class="pjdate1"><?php echo $proj2['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj3) {
        if ($proj3['pro_type'] == '3') { ?>
          <img class="picj1" src="<?php echo $proj3['pro_img']; ?>">
          <h3 class="textp1"><?php echo $proj3['pro_headtext']; ?></h3>
          <p class="pjdate1"><?php echo $proj3['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj4) {
        if ($proj4['pro_type'] == '4') { ?>
          <img class="picj1" src="<?php echo $proj4['pro_img']; ?>">
          <h3 class="textp1"><?php echo $proj4['pro_headtext']; ?></h3>
          <p class="pjdate1"><?php echo $proj4['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
     
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj5) {
        if ($proj5['pro_type'] == '5') { ?>
          <img class="picj2" src="<?php echo $proj5['pro_img']; ?>">
          <h3 class="textp2"><?php echo $proj5['pro_headtext']; ?></h3>
          <p class="pjdate2"><?php echo $proj5['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj6) {
        if ($proj6['pro_type'] == '6') { ?>
          <img class="picj2" src="<?php echo $proj6['pro_img']; ?>">
          <h3 class="textp2"><?php echo $proj6['pro_headtext']; ?></h3>
          <p class="pjdate2"><?php echo $proj6['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj7) {
        if ($proj7['pro_type'] == '7') { ?>
          <img class="picj2" src="<?php echo $proj7['pro_img']; ?>">
          <h3 class="textp2"><?php echo $proj7['pro_headtext']; ?></h3>
          <p class="pjdate2"><?php echo $proj7['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
     
      <div class="col-12 col-sm-6 col-lg-4 text-center">
      <?php
      foreach ($pro as $key => $proj8) {
        if ($proj8['pro_type'] == '8') { ?>
          <img class="picj3" src="<?php echo $proj8['pro_img']; ?>">
          <h3 class="textp3"><?php echo $proj8['pro_headtext']; ?></h3>
          <p class="pjdate3"><?php echo $proj8['pro_text']; ?></p>
        <?php }
      }
      ?>
      </div>
      
 </div>
</div> -->



<div class="row ssdff">

  <div class="col-lg-12 col-md-12">

    <div class="container">

        <div class="row  ">
          <ul style="display:contents;" id="paginated-list">
            <?php
            foreach ($pro as $key => $res4) {
              if ($res4['pro_type'] == '2') { ?>

                <li class="col-6 col-sm-6 col-md-4">
                  <div>
                    <div class=" mb-4 borderawl2">
                      <a href="?page=project-detail&id=<?php echo $res4['pro_id'] ?>" class="awwwwd">
                        <div class="col"> <img src="<?php echo $res4['pro_img']; ?>" class="imgaaw">

                          <p class="nav-link textp3">
                            <?php echo $res4['pro_headtext']; ?>
                          </p>
                          <p class="nav-link pjdate3">
                            <?php echo $res4['pro_text']; ?>
                          </p>

                        </div>
                      </a>
                    </div>
                  </div>

                </li>
              <?php }
            }
            ?>
          </ul>
        </div>

    </div>
    
  </div>
</div>