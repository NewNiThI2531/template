<?php

$contents= [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1) and Content_Page='5' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents[] = $cma;
}

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2,3) and Set_Page='5' and Set_Status='0'";
$query = $conn->query($sql);

while ($cmb = $query->fetch_assoc()) {
  $set[] = $cmb;
}

?>


    <?php
      foreach ($set as $key => $cmb1) {
      if ($cmb1['Set_Type'] == '1') { ?>
<div class="cm0 col-xs col-md"style= "background-image: url"src=<?php echo $cmb1['set_image']; ?>>
<?php }
        }
       ?>
<div class="container cm00">
<div class="row">

<div class="col-md-6">
<div class="cmimtt">
<?php
        
        foreach ($set as $key => $cmb2) {
                if ($cmb2['Set_Type'] == '2') { ?>
<img class="cm1" src=<?php echo $cmb2['set_image']; ?>>
<?php }
        }
       ?>
       <?php
        
        foreach ($set as $key => $cmb2) {
                if ($cmb2['Set_Type'] == '3') { ?>
<img class="cm2" src=<?php echo $cmb2['set_image']; ?>>
<?php }
        }
       ?>
       </div>
</div>

<div class="col-md-6 ">
  <?php
        foreach ($contents as $key => $cma1) {
                if ($cma1['Content_Type'] == '1') { ?>
        <h1 class="textbms1"><?php echo $cma1['conhead_text']; ?> <br></h1>
        <p class="textbms2"><?php echo $cma1['con_text']; ?>
</p><br>
<?php }
        }
       ?>
       </div>
    </div>
</div>

</div>
