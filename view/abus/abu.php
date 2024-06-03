<?php

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2,3) and Set_Page='17' and Set_Status='0'";
$query = $conn->query($sql);

while ($abuimg = $query->fetch_assoc()) {
  $set[] = $abuimg;
}

  $contents= [];
  $contents_new = [];

  $contents = [];
  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6) and Content_Page='17' and Content_Status='0'";
  $query = $conn->query($sql);
  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
      $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
      
      $contents[] = $cma;
  }

?>


<?php
  foreach ($set as $key => $abuimg1) {
  if ($abuimg1['Set_Type'] == '1') { ?>
  <img class="alltower" src="<?php echo $abuimg1['set_image']; ?>" class="col-xs col-md col-lg col-xxl">
  <?php }
  }
?>

<div class="row">
        <div class="col-sm-12" >
          <div class="row ps-2 pe-2">
            <div class="col-md-4 abu1">
              <?php
                foreach ($set as $key => $abuimg1) {
                if ($abuimg1['Set_Type'] == '2') { ?>
                <img class="abulogo" src="<?php echo $abuimg1['set_image']; ?>"class="col-xs col-md col-lg col-xxl">
                <?php }
                }
              ?>
            </div>
            <div class="col-md-8 abu2 ">
              <?php
                foreach ($contents as $key => $abu1) {
                if ($abu1['Content_Type'] == '3') { ?>
                <h4 class="abtext1"><?php echo $abu1['conhead_text']; ?></h4>
                <p class="abtext2"><?php echo $abu1['con_text']; ?></p>
              <?php }
                  }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="bgcolor">
      <div class="row">
        <div class="col-sm-12" style="padding:0px">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-4 abu3">
              <?php
                foreach ($contents as $key => $abu2) {
                if ($abu2['Content_Type'] == '1') { ?>
                <h4 class="abtext3"><?php echo $abu2['conhead_text']; ?></h4>
                <h4 class="abtext4"><?php echo $abu2['con_text']; ?></h4>
              <?php }
                  }
              ?>
              <?php
                foreach ($contents as $key => $abu3) {
                if ($abu3['Content_Type'] == '2') { ?>
                <h4 class="abtext5"><?php echo $abu3['conhead_text']; ?></h4>
                <!-- <h4 class="abtext5"><?php echo $abu3['con_text']; ?></h4> -->
              <?php }
                  }
              ?>
              <div class="col-12">
            <div class="abtext06 ">
              <?php
                foreach ($contents as $key => $abu4) {
                if ($abu4['Content_Type'] == '4') { ?>
                <p href="#" class="text-decoration-none abtext6"><?php echo $abu4['conhead_text']; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
              </p>
              <?php }
                  }
              ?>
            </div>
            <!-- <div class="abtext06 ">
              <?php
                foreach ($contents as $key => $abu5) {
                if ($abu5['Content_Type'] == '5') { ?>
                <p href="#" class="text-decoration-none abtext6"><?php echo $abu4['conhead_text']; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
              </p>
              <?php }
                  }
              ?>
            </div>
            <div class="abtext06 ">
              <?php
                foreach ($contents as $key => $abu6) {
                if ($abu6['Content_Type'] == '6') { ?>
                <p href="#" class="text-decoration-none abtext6"><?php echo $abu4['conhead_text']; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
              </p>
              <?php }
                  }
              ?>
            </div> -->
            </div>

                  

            </div>
            <div class="col-sm-12 col-md-12 col-lg-8" style="padding:0px">
              <?php
                foreach ($set as $key => $abuimg3) {
                if ($abuimg3['Set_Type'] == '3') { ?>
                <img class="home01" src="<?php echo $abuimg3['set_image']; ?>"class="col-xs col-md col-lg col-xxl">
                <?php }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      </div>
    
