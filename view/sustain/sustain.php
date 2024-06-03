<?php

$set = [];
$contents_new = [];

$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2,3,4,5,6,7,8) and Set_Page='18' and Set_Status	='0'";
$query = $conn->query($sql);
while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["set_text"] = ($lang == 'EN' ? $cma["set_textEN"] : $cma["set_text"]);
  $cma["set_content"] = ($lang == 'EN' ? $cma["set_contentEN"] : $cma["set_content"]);

  $set[] = $cma;
}


$contents = [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9) and Content_Page='18' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
  $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);

  $contents[] = $cma;
}



?>


<?php
foreach ($set as $key => $sustainimg1) {
  if ($sustainimg1['Set_Type'] == '1') { ?>
    <img class="sustainim" src="<?php echo $sustainimg1['set_image']; ?>">
  <?php }
}
?>

<div class="sustaininlinehead">
  <?php
  foreach ($contents as $key => $sustain1) {
    if ($sustain1['Content_Type'] == '1') { ?>
      <p class="text-center sustainbantext1">
        <?php echo $sustain1['conhead_text']; ?>
      </p>
      <p class="text-center sustainbantext2">
        <?php echo $sustain1['con_text']; ?>
      </p>
    <?php }
  }
  ?>
</div>


<div class="col-12 mt-3">
  <div class="container">


    <div class="row" style="display: flex;">

    <?php
        foreach ($set as $key => $sustainimg3) {
          if ($sustainimg3['Set_Type'] == '5') { ?>

      <a href="<?php echo $sustainimg3['set_URL']; ?>" class="col-6 col-md-3 col-lg-3 p-0 img-wrapper">
  
            <div class="inner-img" style="background-image: url(<?php echo $sustainimg3['set_image']; ?>);">
              <p class="sustaintext1">
                <?php echo $sustainimg3['set_text']; ?>
              </p>
            </div>
      </a>

      <?php }
        }
        ?>

    </div>
  </div>
</div>

<!-- BANNER 1 -->

<?php
foreach ($contents as $key => $sustain3) {
  if ($sustain3['Set_Type'] == '4') { ?>
  <?php }
}
?>

<div class="bgsustainend" style="background-image: url(/asset/images/sustainback1.png);">
  <div class="container row">

    <div class="polinayoby">
      <?php
      foreach ($contents as $key => $sustain3) {
        if ($sustain3['Content_Type'] == '6') { ?>
          <p class="text-center mb-0 polinayoby1">
            <?php echo $sustain3['conhead_text']; ?>
          </p>
          <p class="text-center mb-0 polinayoby2">
            <?php echo $sustain3['con_text']; ?>
          </p>
        <?php }
      }
      ?>
    </div>

    <div class="col-12">
      <div class="">
        <div class="row">
          <?php
          foreach ($set as $key => $sustainimg3) {
            if ($sustainimg3['Set_Type'] == '3') { ?>

              <div class="col-12 col-md-4 col-lg-4 p-0">

                <div class="colorsustain">
                  <div class="sustaincard2"
                    style="background: linear-gradient(0deg, rgba(11, 1, 53, 0.8), rgba(11, 1, 53, 0.8)), url(<?php echo $sustainimg3['set_image']; ?>);">
                    <div class="container ps-4 pe-4">
                      <p class="sustaincard3 ">
                        <?php echo $sustainimg3['set_text']; ?>
                      </p>
                      <p class="sustaincard4">
                        <?php echo $sustainimg3['set_content']; ?>
                      </p>
                    </div>
                  </div>
                </div>

              </div>

            <?php }
          }
          ?>
        </div>
      </div>
    </div>


  </div>
</div>