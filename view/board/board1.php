<?php

$Board= [];
$contents_new = [];

$sql = "SELECT * FROM Database_BOARD WHERE BOARD_Type IN (10,11,12,13,14,15,16) and BOARD_Page='6' and BOARD_Status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["BOARD_Text"] = ($lang == 'EN' ? $cma["BOARDtext_EN"] : $cma["BOARD_Text"]);
    $cma["BOARD_Headtext"] = ($lang == 'EN' ? $cma["BOARDHeadtext_EN"] : $cma["BOARD_Headtext"]);
    
    $Board[] = $cma;
}



?>



<div class="container text-center"> 

        

        
    

        <div class="row">
        <div class="col-12 col-lg-4 aa">
        <?php
           foreach ($Board as $key => $bd1) {
           if ($bd1['BOARD_Type'] == '1') { ?>
          <div class="bobcol"><h2 class="bobcol"><?php echo $bd1['BOARD_Headtext']; ?><h3>
          <?php }
                }
                ?>

          <?php
           foreach ($Board as $key => $bd2) {
           if ($bd2['BOARD_Type'] == '2') { ?>
            <p class=""><a href="#" class="nav-link p-0 text-muted bob1"><?php echo $bd2['BOARD_Text']; ?></a></p>
            <?php }
                }
                ?>
        </div>
        </div>
        <div class="col-12 col-lg-8 bb">
        <div class="row">
        <?php
           foreach ($Board as $key => $bd10) {
           if ($bd10['BOARD_Type'] == '10') { ?>
               
        <div class="col-12 col-3 col-md-6 col-sm-12 col-lg-3">
        <img class="imga" src=<?php echo $bd10['BOARD_image']; ?>>
        </div>
        <div class="col-12 col-3 col-md-6 col-sm-12 col-lg-3">
        <h4 class="btext"><?php echo $bd10['BOARD_Headtext']; ?></h4>
              <p class="boa3"><?php echo $bd10['BOARD_Text']; ?></p>
        </div>
       
        <?php }
                }
                ?>
                 </div>
        




        </div>

        </div>


        </div>
        
        <div class="col-xl-9 mt-4 mb-4 ps-2 pe-2">
      <div class="list-data">
        <div class="row">
        </div>
      </div>
      <div class="text-end pagination-content">
        <div id="pagination-content" class="mt-4">
        </div>
      </div>
    </div>
  </div>
