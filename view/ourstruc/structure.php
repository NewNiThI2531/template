<?php
$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1) and Set_Page='7' and Set_Status='0'";
$query = $conn->query($sql);

while ($stuc = $query->fetch_assoc()) {
  $set[] = $stuc;
}

  $contents= [];
  $contents_new = [];

  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2) and Content_Page='7' and Content_Status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
      $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
      
      $contents[] = $cma;
 }


?>

  <div class="container text-center">
  <div class="row">
    <div class="col-lg-3">

    <?php
      foreach ($contents as $key => $stu1) {
      if ($stu1['Content_Type'] == '1') { ?>
        <h4 class="st1"><?php echo $stu1['conhead_text']; ?>
        <p class="st2"><?php echo $stu1['con_text']; ?></p>
        <?php }
              }
     ?>
     
    </div>
    <div class="col-lg-9">
    <?php
foreach ($set as $key => $stuc1) {
  if ($stuc1['Set_Type'] == '1') { ?>
      <a href="<?php echo $stuc1['set_image']; ?>" data-fancybox data-caption="Single image">
        <img class="st3" src=<?php echo $stuc1['set_image']; ?>>
      </a>
        <?php }
             }
     ?>

    </div>
  </div>
  
</div>

