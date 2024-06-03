<?php 

$contents = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1) and Set_Page='2' and Set_Status='0'";
$query = $conn->query($sql);

while ($about = $query->fetch_assoc()) {
  $contents[] = $about;
}


  $cont= [];
  $contents_new = [];

  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1) and Content_Page='2' and Content_Status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
      
      
      $cont[] = $cma;
  }


?>


<div class="abim1">

<?php
        foreach ($contents as $key => $about1) {
          if ($about1['Set_Type'] == '1') { ?>
<?php
        foreach ($cont as $key => $con1) {
          if ($con1['Content_Type'] == '1') { ?>

    <!-- <video width="100%" height="700px" controls="" id="play01" src="/asset/images/test1.mp4" type="video/mp4" alt="Snow" style="width:100%">  </video>
    <button class="btn" href="play01"><?php echo $con1['con_text']; ?></button> -->
    <img src="<?php echo $about1['set_image']; ?>" alt="Snow" style="width:100%">
    <button class="btn"><?php echo $con1['con_text']; ?></button> 
  <?php }
       }
?>




      
            <?php }
      }
    ?>
    </div> 
 