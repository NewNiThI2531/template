<?php
$corporate = [];
$corporate_cor = [];

$sql = "SELECT * FROM Database_corporate WHERE cor_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15) and cor_page='8' and cor_status='0'";
$query = $conn->query($sql);

while ($corpo = $query->fetch_assoc()) {
  $corporate_cor[] = $corpo;

  $corpo["cor_text"] = ($lang == 'EN' ? $corpo["cor_textEN"] : $corpo["cor_text"]);
  $corpo["corhead_text"] = ($lang == 'EN' ? $corpo["corhead_textEN"] : $corpo["corhead_text"]);
      
  $corporate[] = $corpo;
}

?>


<?php
    foreach ($corporate as $key => $corpo) {
    if ($corpo['cor_type'] == '13') { ?>
    <div class="corbanner" style="background-image: url(<?php echo $corpo['cor_image']; ?>);">
  
    <?php }
    }
  ?>

    <div class="container row corconinban1"> 

      <div class="col-12 col-lg-6 p-0">
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '1') { ?>
        <img class="corinimg" src="<?php echo $corpo['cor_image']; ?>">
        <?php }
        }
      ?> 
      </div>

      <div class="col-12 col-lg-6 ps-4">
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '1') { ?>
        <p class="corintext1"><?php echo $corpo['corhead_text']; ?></p>
        <p class="corintext2"><?php echo $corpo['cor_text']; ?></p>
        <?php }
        }
      ?> 
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '15') { ?>
        <div class="linescroll1">
        <p class="corinscroll1"><?php echo $corpo['corhead_text']; ?></p></div>
        <?php }
        }
      ?> 
      </div>

    </div>

</div>



<div class="container row corconinban2"> 

      <div class="col-12 col-lg-6 ps-4 ">
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '2') { ?>
        <p class="corintext3"><?php echo $corpo['cor_text']; ?></p>
        <?php }
        }
      ?> 
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '15') { ?>
        <div class="linescroll2">
        <p class="corinscroll2"><?php echo $corpo['corhead_text']; ?></p></div>
        <?php }
        }
      ?> 
      </div>

      <div class="col-12 col-lg-6 p-0">
      <?php
        foreach ($corporate as $key => $corpo) {
        if ($corpo['cor_type'] == '2') { ?>
        <img src="<?php echo $corpo['cor_image']; ?>" class="corinimg">
        <?php }
        }
      ?> 
      </div>

    </div>


    <?php
    foreach ($corporate as $key => $corpo) {
    if ($corpo['cor_type'] == '14') { ?>
    <div class="corbanner2" style="background-image: url(<?php echo $corpo['cor_image']; ?>);">
  
    <?php }
    }
  ?>

    <div class="container row corconinban3"> 

      <div class="col-lg-6 d-flex justify-content-center">
          <?php
            foreach ($corporate as $key => $corpo5) {
            if ($corpo5['cor_type'] == '5') { ?>
            <p class="corintextbot1"><?php echo $corpo5['corhead_text']; ?></p>
            <?php }
            }
          ?>
      </div>

      <div class="col-lg-6 text-center">

      <div class="col-lg-12 cordateban">
          <?php
            foreach ($corporate as $key => $corpo6) {
            if ($corpo6['cor_type'] == '6') { ?>
            <h3 class="corintextbot2 pt-1"><?php echo $corpo6['cor_text']; ?></h3>
            <?php }
            }
          ?>
      </div>

      <div class="col-lg-12">
        <p class="c">asdasdasda</p>
      </div>

      </div>

    </div>

</div> 



    

