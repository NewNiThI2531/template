<?php

$footer = [];
$contents_new = [];

$sql = "SELECT * FROM Database_footter WHERE footer_Type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21) and footer_Page='99' and footer_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["foot_text"] = ($lang == 'EN' ? $cma["foot_textEN"] : $cma["foot_text"]);
  $cma["footer_Headtext"] = ($lang == 'EN' ? $cma["footer_HeadtextEN"] : $cma["footer_Headtext"]);

  $footer[] = $cma;
}

?>

<footer class="footer" class="col-lg col-xxl">
  <div class="footertop">
    

<div class="container">
  <div class="row">

<!-- column 1 -->

    <div class="col-6 col-md-3 col-lg-3 text-start">
      <?php
      foreach ($footer as $key => $foot1) {
        if ($foot1['footer_Type'] == '1') { ?>
          <a class="foothead" href="?page=home">
            <?php echo $foot1['footer_Headtext']; ?>
          </a><br>
        <?php }
      }
      ?>

    <div class="footconA">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '2') { ?>
          <a class="foothead" href="?page=about">
            <?php echo $foot2['footer_Headtext']; ?>
          </a><br>
        <?php }
      }
      ?>
    </div>
<!-- --------------- -->
    <div class="text-start mt-4 mb-3 text-start">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '3') { ?>
          <a class="footA m-0" href="<?php echo $foot2['footter_URL']; ?>">
            <?php echo $foot2['foot_text']; ?>
          </a><br>
        <?php }
      }
      ?>
     
    </div>

    </div>

<!-- column 2 -->

    <div class="col-6 col-md-3 col-lg-3 mb-0 text-start">
      <div class="footdiv">

        <?php
        foreach ($footer as $key => $foot1) {
          if ($foot1['footer_Type'] == '8') { ?>
            <a class="footB" href="<?php echo $foot1['footter_URL']; ?>">
              <?php echo $foot1['footer_Headtext']; ?>
            </a><br>
          <?php }
        }
        ?>

      </div>
    </div>

<!-- column 3 -->

    <div class="col-6 col-md-3 col-lg-3 text-start">

      <?php
      foreach ($footer as $key => $foot1) {
        if ($foot1['footer_Type'] == '14') { ?>
          <a class="foothead" href="?page=home">
            <?php echo $foot1['footer_Headtext']; ?>
          </a>
        <?php }
      }
      ?>

    <div class="mt-2">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '15') { ?>
          <a class="footA m-0" href="#">
            <?php echo $foot2['foot_text']; ?>
          </a><br>
        <?php }
      }
      ?>
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '16') { ?>
          <a class="footA m-0" href="#">
            <?php echo $foot2['foot_text']; ?>
          </a><br>
        <?php }
      }
      ?>
    </div>

    <div class="mt-3">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '17') { ?>
          <a class="foothead" href="#"><?php echo $foot2['footer_Headtext']; ?></a>
        <?php }
      }
      ?>
    </div>

    </div>

<!-- column 4 -->

    <div class="col-6 col-md-3 col-lg-3 p-0 text-start">
      <?php
      foreach ($footer as $key => $foot1) {
        if ($foot1['footer_Type'] == '18') { ?>
          <p class="footheadEnd"><?php echo $foot1['footer_Headtext']; ?></p>
        <?php }
      }
      ?>

    <div class="m-0">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '19') { ?>
          <p class="footAEnd m-0"><?php echo $foot2['foot_text']; ?></p>
        <?php }
      }
      ?>
    </div>

    <div class="mt-4">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '20') { ?>
          <p class="footheadEnd"><?php echo $foot2['footer_Headtext']; ?></p>
        <?php }
      }
      ?>
    </div>

    <div class="mt-2 mb-0">
      <?php
      foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '21') { ?>
          <p class="footAEnd mb-0"><?php echo $foot2['footer_Headtext']; ?></p>
          <p class="footAEnd mb-0"><?php echo $foot2['foot_text']; ?></p>
        <?php }
      }
      ?>
    </div>
    </div>

    <!-- ---------------- ICON --------------- -->

    <div class="col-12 col-md-4 col-lg-12 iconfootbar"> 
      <?php
        foreach ($footer as $key => $foot2) {
        if ($foot2['footer_Type'] == '11') { ?> 
          <a class="bgicon" href=""><i class="fa-brands fa-line       footicon"></i></a>   
          <a class="bgicon" href="<?php echo $foot2['footter_URL']; ?>"><i class="fa-brands fa-facebook   footicon"></i></a>  
          <a class="bgicon" href="<?php echo $foot2['footter_URL']; ?>"><i class="fa-brands fa-tiktok     footicon"></i></a>  
          <a class="bgicon" href="<?php echo $foot2['footter_URL']; ?>"><i class="fa-brands fa-youtube    footicon"></i></a>  
          <a class="bgicon" href="<?php echo $foot2['footter_URL']; ?>"><i class="fa-brands fa-instagram  footicon"></i></a>  
        <?php }
      }
      ?>
    </div>


  </div>
</div>

  </div>
</footer>


