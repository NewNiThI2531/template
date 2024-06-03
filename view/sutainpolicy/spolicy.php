<?php

$contents= [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8) and Content_Page='20' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents[] = $cma;
}

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (11) and Set_Page='20' and Set_Status='0'";
$query = $conn->query($sql);

while ($spol = $query->fetch_assoc()) {
  $set[] = $spol;
}


?>






<div class="policyban">
    

    <div class="col-md-12 polibantext">
      <div class="sdtexthead">
      <?php
        foreach ($contents as $key => $spo7) {
          if ($spo7['Content_Type'] == '7') { ?>
      <p class="polibantext1"><?php echo $spo7['conhead_text']; ?></p>
      <p class="polibantext2"><?php echo $spo7['con_text']; ?></p>
      <?php }
              }
        ?>
    </div>
    </div>

    <div class="polibantext">
    <?php
        foreach ($contents as $key => $spo8) {
          if ($spo8['Content_Type'] == '8') { ?>
      <p class="polibantext3"><?php echo $spo8['conhead_text']; ?></p>
      <?php }
              }
        ?>
    </div>

</div>


<div class="container p-0">
    <div class="insd">
  <div class="row row-cols-1 row-cols-md-3 g-4">

<!--  -->

<?php   
    foreach ($set as $key => $spol5) {
      if ($spol5['Set_Type'] == '11') { ?>
        <div class="card cardback">
          <div class="bannercard">
            <div class="d-flex justify-content-center"><img class="spolicyim" src="<?php echo $spol5['set_image']; ?>"></div>
            <p class="card-title polliheadcard"><?php echo $spol5['set_text']; ?></p> 
          </div>

            <p class="card-text ffas"><?php echo $spol5['set_content']; ?></p> 
          </div>
    <?php }
    }
?>


</div>
</div>
</div>
</div>
 