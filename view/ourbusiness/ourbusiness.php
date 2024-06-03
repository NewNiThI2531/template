<?php

$contents= [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10) and Content_Page='10' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents[] = $cma;
}


$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2,3,4,5,7,8,9,10) and Set_Page='10' and Set_Status='0'";
$query = $conn->query($sql);

while ($imbussiness = $query->fetch_assoc()) {
  $set[] = $imbussiness;
}

?>


<?php
foreach ($set as $key => $imbussiness1) {
  if ($imbussiness1['Set_Type'] == '1') { ?>
    <img src="<?php echo $imbussiness1['set_image']; ?>" class="ourbusbg">
  <?php }
}
?>

<div class="text-center container">
    <?php
        foreach ($contents as $key => $ourbus1) {
        if ($ourbus1['Content_Type'] == '1') { ?>
                <h1 class="bus1"> <?php echo $ourbus1['con_text']; ?></p></h1>
        </p>
    <?php }
        }
       ?>
    
 <div style="text-align: center; color:#1A2F4D ">
    <?php
        foreach ($contents as $key => $ourbus1) {
        if ($ourbus1['Content_Type'] == '1') { ?>
                <h1 class="bus2"> <?php echo $ourbus1['conhead_text']; ?></h1>
        </p>
    <?php }
        }
       ?>

    <div class="verticallinebus"></div>

 </div>
    <?php
        foreach ($contents as $key => $ourbus2) {
        if ($ourbus2['Content_Type'] == '2') { ?>
        <p class="buss"> <?php echo $ourbus2['con_text']; ?></p>
        <?php }
            }
        ?>
</div>

<!--  -->

<div class="col-12 mt-5 mb-5">
  <div class="container p-3">
    <div class="row">
      <?php
        foreach ($contents as $key => $ourbus3) {
        if ($ourbus3['Content_Type'] == '4') { ?>

          <div class="col-6 col-sm-6 col-md-3 col-lg-3 ps-3 pe-3 ">

            <div class=" mb-4 borderawl2">
              <div class=""><img src="<?php echo $ourbus3['con_image']; ?>" class="busfem1">
                <p class="textfem1"><?php echo $ourbus3['conhead_text']; ?></p>
                <p class="textfem2"><?php echo $ourbus3['con_text']; ?></p>
              </div>
            </div>

          </div>

      <?php }
        }
        ?>
    </div>
  </div>
</div>

<!--  -->

<!-- images banner-->

<?php
        foreach ($set as $key => $ourbus7) {
        if ($ourbus7['Set_Type'] == '10') { ?>
<div class="viewfem" style="background-image: url(<?php echo $ourbus7['set_image']; ?>);">
        <?php }
            }
        ?>

    <div class="vfem">
        <?php
        foreach ($contents as $key => $ourbus7) {
        if ($ourbus7['Content_Type'] == '3') { ?>
        <p class="text-center vfem2"><?php echo $ourbus7['con_text']; ?></p>
        <?php }
            }
        ?>
    </div> 
        
    <div class="col-12 mt-5 mb-5">
    <div class="container p-3">
        <div class="row">
      <?php
        foreach ($contents as $key => $ourbus3) {
        if ($ourbus3['Content_Type'] == '8') { ?>

          <div class="col-12 col-sm-4 col-md-4 col-lg-4 ps-3 pe-3 text-center">

            <div class=" mb-4 borderawl2">
                <img src="<?php echo $ourbus3['con_image']; ?>" class="iconfem">
                <p class="vfem3"><?php echo $ourbus3['conhead_text']; ?></p>
                <p class="vfem4"><?php echo $ourbus3['con_text']; ?></p>
            </div>

          </div>

      <?php }
        }
        ?>
    </div>
  </div>
</div>

<!-- ---------------------------------- -->

</div>
