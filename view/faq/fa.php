<?php 

$faq = [];
$contents_new = [];

$sql = "SELECT * FROM Database_FAQ WHERE faq_type IN (1,2,3,4,5,6,7,8,9) and faq_page='23' and faq_status='0'";
$query = $conn->query($sql);



while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["faq_text"] = ($lang == 'EN' ? $cma["faq_textEN"] : $cma["faq_text"]);
    $cma["faq_headtext"] = ($lang == 'EN' ? $cma["faq_headtextEN"] : $cma["faq_headtext"]);
    
    $faq [] = $cma;
}



?>

<?php
        foreach ($faq as $key => $fa1) {
          if ($fa1['faq_type'] == '1') { ?>
<img class="tower123"src="<?php echo $fa1['faq_image']; ?>">
<?php }
      }
?>

<div class="container">
<div class="text-center">
    <div class="row">
        <div class="col-sm-12 invesover">

        <?php
        foreach ($faq as $key => $fa2) {
          if ($fa2['faq_type'] == '2') { ?>
            <div class="col-sm-12 invesovertext1">
               <?php echo $fa2['faq_headtext']; ?>
                <?php }
                    }
         ?>
            </div>
            <div class="col-sm-12">
            <div style="border-left: 4px solid #C5A254;
                height: 20px;
                width: 1px;
                display: inline-block;">
    </div>
            </div>
        </div>
    </div>
  </div>

  

<div class="text-center">
      <div class="row">
        <div class="col-md-4 text-center faqbut1">
       
        <?php
        foreach ($faq as $key => $fa3) {
          if ($fa3['faq_type'] == '3') { ?>
        <a href="" class="asda"><?php echo $fa3['faq_headtext']; ?></a>
        <?php }
              }
         ?>
        </div>
       
        <div class="col-md-4 text-center faqbut1">

        <?php
        foreach ($faq as $key => $fa4) {
          if ($fa4['faq_type'] == '4') { ?>
        <a href="" class="asda"><?php echo $fa4['faq_headtext']; ?></a>
        <?php }
              }
         ?>

        </div>
        <div class="col-md-4 text-center faqbut1">
        <?php
        foreach ($faq as $key => $fa5) {
          if ($fa5['faq_type'] == '5') { ?>
        <a href="" class="asda"><?php echo $fa5['faq_headtext']; ?></a>
        <?php }
              }
         ?>

        </div>
      </div>
    </div>

<div class="container fa">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
    <?php
        foreach ($faq as $key => $fa6) {
          if ($fa6['faq_type'] == '6') { ?>
      <button class="accordion-button asafd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <?php echo $fa6['faq_headtext']; ?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body bbfaq1">
      <?php echo $fa6['faq_text']; ?>
      <?php }
           }
         ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
    <?php
        foreach ($faq as $key => $fa7) {
          if ($fa7['faq_type'] == '7') { ?>
      <button class="accordion-button collapsed asafd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <?php echo $fa7['faq_headtext']; ?>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body bbfaq1">
      <?php echo $fa7['faq_text']; ?>
      <?php }
           }
         ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
    <?php
        foreach ($faq as $key => $fa8) {
          if ($fa8['faq_type'] == '8') { ?>
      <button class="accordion-button collapsed asafd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <?php echo $fa8['faq_headtext']; ?>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body bbfaq1">
      <?php echo $fa8['faq_text']; ?>
      <?php }
           }
         ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
    <?php
        foreach ($faq as $key => $fa9) {
          if ($fa9['faq_type'] == '9') { ?>
      <button class="accordion-button collapsed asafd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      <?php echo $fa9['faq_headtext']; ?>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body bbfaq1">
      <?php echo $fa9['faq_text']; ?>
      <?php }
           }
         ?>
    </div>
    </div>
  </div>
</div>  
</div>
</div>
  

