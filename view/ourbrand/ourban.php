<?php
$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2) and Set_Page='3' and Set_Status='0'";
$query = $conn->query($sql);

while ($ourban = $query->fetch_assoc()) {
  $set[] = $ourban;
}

  $contents= [];
  $contents_new = [];

  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7) and Content_Page='3' and Content_Status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
      $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
      
      $contents[] = $cma;
 }

?>


<?php
foreach ($set as $key => $ourban1) {
  if ($ourban1['Set_Type'] == '1') { ?>
    <img src="<?php echo $ourban1['set_image']; ?>" width="100%">

  <?php }
}
?>

<div class="container">
  <div class="row">

    <div class="col-lg-6 padding1">
    <?php
      foreach ($contents as $key => $cont1) {
        if ($cont1['Content_Type'] == '1') { ?>
          <div class="frame" style= "background-image: url(<?php echo $cont1['con_image']; ?>)">
              <h1 class="textframe1"><?php echo $cont1['conhead_text']; ?></h1>
              <p class="textframe2"><?php echo $cont1['con_text']; ?></p>
      <?php }
        }
       ?>
       </div>
    </div>

    <div class="col-lg-6 padding1">
    <?php
      foreach ($set as $key => $ourban2) {
        if ($ourban2['Set_Type'] == '2') { ?>
          <img class="ourimg1" src="<?php echo $ourban2['set_image']; ?>" width="100%">

        <?php }
      }
      ?>
    </div>
    </div>
    </div>

    <div class="row "> <!-- kodfun -->
      <?php
        foreach ($contents as $key => $cont2) {
        if ($cont2['Content_Type'] == '3') { ?>

          <div class="col-6 col-sm-4 col-md-2 col-lg-2 p-0">

            <div class="borderawl2">
                <div class="ourimg" style="background-image: url(<?php echo $cont2['con_image']; ?>)">
                  <p class="textourban1 "><?php echo $cont2['conhead_text']; ?></p>
                  <p class="linebrand"></p>
                  <p class="textourban2 ps-3 pe-3"><?php echo $cont2['con_text']; ?></p>
                </div>
            </div>

          </div>

      <?php }
        }
        ?>
    </div>
