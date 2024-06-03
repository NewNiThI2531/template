<?php 

  $investor= [];
  $contents_new = [];

  $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22) and Content_Page='22' and Content_Status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
      $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
      
      $investor[] = $cma;
 }

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2,3,4,5) and Set_Page='22' and Set_Status='0'";
$query = $conn->query($sql);

while ($inves = $query->fetch_assoc()) {
  $set[] = $inves;
}

  $download = [];
  $contents_new = [];

  $sql = "SELECT * FROM database_download WHERE dl_type IN (1,2,3) and dl_page='22' and dl_status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["dl_headtext"] = ($lang == 'EN' ? $cma["dl_headtextEN"] : $cma["dl_headtext"]);
     
      $download [] = $cma;
  }

?>





<div>

<?php
        foreach ($set as $key => $inves4) {
          if ($inves4['Set_Type'] == '4') { ?>
<div class="invesban">
<img src="<?php echo $inves4['set_image']; ?>"class="invesban">
<?php }
      }
    ?>
    </div>
    <div class="text-center investorban">
        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-6 invescolor1">                   
       
        <?php
        foreach ($investor as $key => $in1) {
          if ($in1['Content_Type'] == '1') { ?>
          <div class="col-sm-12 investext1">
            <?php echo $in1['con_text']; ?>
          </div>
           
           <div class="col-sm-12 investext2">
            <?php echo $in1['conhead_text']; ?>
        <?php }
              }
        ?>             
        </div>
        </div>

                <div class="col-sm-6 invescolor2">
                    <div class="row">
                        <div class="col-sm-6 investext3">
                        <?php
                         foreach ($investor as $key => $in2) {
                         if ($in2['Content_Type'] == '2') { ?>
                            <?php echo $in2['conhead_text']; ?>
                            <?php }
                                  }
                         ?>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 investext4">
                        <?php
                         foreach ($investor as $key => $in3) {
                         if ($in3['Content_Type'] == '3') { ?>    
                           <?php echo $in3['conhead_text']; ?><p class="investext04"><?php echo $in3['con_text']; ?></p>
                            <?php }
                                  }
                         ?>
                        </div>
                        <div class="col-sm-6 investext5">
                        <?php
                         foreach ($investor as $key => $in4) {
                         if ($in4['Content_Type'] == '4') { ?>   
                            <?php echo $in4['con_text']; ?></p>
                            <?php }
                                  }
                         ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                                  

  


<!-- OVERVIEW ------------------------------------------------------------ -->
<div class="text-center">
    <div class="row">
        <div class="col-sm-12 invesover">
            <div class="col-sm-12 invesovertext1">
     <?php
         foreach ($investor as $key => $in5) {
         if ($in5['Content_Type'] == '5') { ?> 
              <?php echo $in5['con_text']; ?></p>
            </div>
            <div class="col-sm-12 invesovertext2">
            <?php echo $in5['conhead_text']; ?>
     <?php }
           }
     ?>
            </div>
            <div class="investorline"></div>
        </div>
    </div>
  </div>

<div class="container">

  <div class="text-center">
    <div class="row">
        <div class="col-sm-12 invesover1">
          <div class="col-sm-12 invesovertext3">
            <?php
         foreach ($investor as $key => $in6) {
         if ($in6['Content_Type'] == '6') { ?> 
               <?php echo $in6['con_text']; ?>
           <?php }
                 }
            ?>
          </div>
        </div>
    </div>
  </div>
</div>


<div class="col-12 mt-5 mb-5">
  <div class="container">
    <div class="row">
      <?php
        foreach ($investor as $key => $in7) {
        if ($in7['Content_Type'] == '7') { ?>

          <div class="col-6 col-sm-6 col-md-3 col-lg-3 ps-4 pe-4 divcommer">

            <div class=" mb-4 borderawl2">
              <div class="col"> <img src="<?php echo $in7['con_image']; ?>" class="invesfem1">
                <p class="invesfemtext1 "><?php echo $in7['conhead_text']; ?></p>
                <p class="invesfemtext2"><?php echo $in7['con_text']; ?></p>
              </div>
            </div>

          </div>

      <?php }
        }
        ?>
    </div>
  </div>
</div>


<?php
        foreach ($set as $key => $inves) {
        if ($inves['Set_Type'] == '5') { ?>
<div class="financial" style="background-image: url(<?php echo $inves['set_image']; ?>);">
<?php }
        }
        ?>
       
<div class="row vfinan d-flex justify-content-center"><!-- text icon == banner-->
        <div class="col-sm-9">
         
        <p class="text-center vfinan1">FINANCIAL PERFORMANCE 2022</p>
        <p class="text-center vfinan01">Million Baht (%)</p>
                </div>

        <!-- CHART -------------------------------------------- -->
           <div class="container">
        <div class="text-center aaaa">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
    <!-- <script src="https://code.highcharts.com/modules/export-data.js"></script> -->
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
      <div>
      <div id="container"></div>
      </div>
    </figure>
  </div>
  </div> 
        <!-- CHART -------------------------------------------- -->
        
        <div class="col-sm-9" style="
    margin-top: -130px; margin-bottom: 70px;">
          <div class="row">
            <div class="col-sm-4 p-0 justify-content-center">
             
                <img class="iconfinan" src="/asset/images/iconfem1.png">
            
             
                <h3 class="vfinan2">COMMERCIAL</h3>
                <h3 class="vfinan3">32,000 sq.m.</h3>
                            </div>

            <div class="col-sm-4 p-0 justify-content-center">
             
                <img class="iconfinan" src="/asset/images/iconfem2.png">
                
              
                <h3 class="vfinan2">COMMERCIAL</h3>
                <h3 class="vfinan3">32,000 sq.m.</h3>
                          </div>

            <div class="col-sm-4 p-0 justify-content-center">
             
                <img class="iconfinan" src="/asset/images/iconfem3.png">
                                <div class="justify-content-center">
                 
                    <h3 class="vfinan2">COMMERCIAL</h3>
                    <h3 class="vfinan3">32,000 sq.m.</h3>
                                    </div>
            </div>
            
          </div>
        </div>
      </div>

            </div>
    
</div>

<div class="text-center">
    <div class="row">
        <div class="col-sm-12 invesover1">
            <div class="col-sm-12 invesovertext2">

            <?php
            foreach ($investor as $key => $in19) {
         if ($in19['Content_Type'] == '19') { ?> 
                <?php echo $in19['conhead_text']; ?>
         <?php }
               }
            ?>
            </div>
            <div class="investorline"></div>
        </div>
    </div>
  </div>


  <div class="container">
    <div class="insd">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 invesas">
      <div class="text-center">
        <svg class="bd-placeholder-img rounded-circle invescircle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      </div>
    <div class="card-body">
        <h5 class="card-title headcard">CORPORATE GOVERNANCE POLICY</h5>
      </div>
      <div class="card-footer btn invesasb">
        <lable class="text-muted dowinves">download</lable>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card h-100 invesas">
    <div class="text-center">
        <svg class="bd-placeholder-img rounded-circle invescircle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      </div>
      <div class="card-body">
        <h5 class="card-title headcard">BUSINESS CODE OF CONDUCT</h5>
      </div>
               
      <div class="card-footer btn invesasb">
        <lable class="text-muted dowinves">download</lable>
      </div>

    </div>
  </div>


  <div class="col">
    <div class="card h-100 invesas">
    <div class="text-center">
        <svg class="bd-placeholder-img rounded-circle invescircle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      </div>
      <div class="card-body">
        <h5 class="card-title headcard">FRAUD AND ANTI-CORRUPTION POLICY</h5>
      </div>
      
      <div class="card-footer btn invesasb">
        <lable class="text-muted dowinves">download</lable>
      </div>

    </div>
  </div>
</div>
</div>
</div>

</div>           
</div>