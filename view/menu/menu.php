  <?php 

  $menu = [];
  $contents_new = [];

  $sql = "SELECT * FROM Database_menu WHERE menu_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38) and menu_page='99' and menu_status='0'";
  $query = $conn->query($sql);



  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["menu_text"] = ($lang == 'EN' ? $cma["menu_textEN"] : $cma["menu_text"]);
      $cma["menu_headtext"] = ($lang == 'EN' ? $cma["menu_headtextEN"] : $cma["menu_headtext"]);
      
      $menu [] = $cma;
  }

  ?>
      
  <header class="navbar navbar-fixed-top navbar-inverse fixnav linearnav" style="display: inherit;">
    <div class="text-center">
      <div class="mt-1 row">

      <div class="col-12 col-sm-2 col-lg-2">
        <?php
          foreach ($menu as $key => $me1) {
          if ($me1['menu_type'] == '1') { ?>
          <a class="nav-link text-center" href="?page=home"><img class="iconlogo ps-5" src="<?php echo $me1['menu_image']; ?>"></a>
        <?php }
          }
        ?>
      </div>

      <div class="col-12 col-sm-10 col-lg-10">
        <div class="row">

          <div class="col-12 col-sm-12 barflag">
            <?php
              foreach ($menu as $key => $me2) {
              if ($me2['menu_type'] == '2') { ?>   
                <a class="pe-1" href="<?=(isset($parameter['query']) ? $actual_link."lang=TH" : '/?lang=TH')?>"><img class="flag1" src="<?php echo $me2['menu_image']; ?>"></a>
              <?php }
                }
              ?>  
            <?php
              foreach ($menu as $key => $me3) {
              if ($me3['menu_type'] == '3') { ?>   
              <a class="ps-1" href="<?=(isset($parameter['query']) ? $actual_link."lang=EN" : '/?lang=EN')?>"><img class="flag2" src="<?php echo $me3['menu_image']; ?>"></a>
            <?php }
              }
            ?>  
          </div>

          <nav class="navbar navbar-expand-sm p-0">
        <div class="container-fluid ">

        <button class="navbar-toggler  " data-bs-toggle="collapse" data-bs-target="#navbarToggle">
          <span class="navbar-toggler-icon"></span>
        </button>
  <div class="collapse navbar-collapse " id="navbarToggle">
    <div class="col-12 ">
      <div class="cscs navbar navbar-nav nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" style="align-items: baseline;margin-right: 50px;">



      <div class="subnav">   
        <?php
          foreach ($menu as $key => $me23) {
          if ($me23['menu_type'] == '4') { ?> 
          <a href="?page=about"><button class="subnavbtn"><?php echo $me23['menu_headtext']; ?></button></a>
          <?php }
            }
        ?> 
          <div class="container submenu">
          <div class="subnav-content">
          <div class="row">
          <!-- <div class="col6 "> -->
          <div class="col-lg-5 text-center ">
          <ul class="ddfsd">
      <?php
        foreach ($menu as $key => $me24) {
        if ($me24['menu_type'] == '5') { ?> 
        <li><a href="?page=ourbrand"><?php echo $me24['menu_text']; ?></a></li>
        <?php }
          }
        ?>                                                       
          <?php
          foreach ($menu as $key => $me25) {
          if ($me25['menu_type'] == '6') { ?> 
          <li><a href="?page=vision"><?php echo $me25['menu_text']; ?></a></li>
        <?php }
          }
        ?>        
        <?php
          foreach ($menu as $key => $me26) {
          if ($me26['menu_type'] == '7') { ?> 
          <li><a href="?page=chairmanmessage"><?php echo $me26['menu_text']; ?></a></li>
        <?php }
          }
        ?> 

        <?php
          foreach ($menu as $key => $me26) {
          if ($me26['menu_type'] == '36') { ?> 
            <li><a href="?page=boardA"><?php echo $me26['menu_text']; ?></a></li>
            <?php }                                                          
          }
        ?> 

        <?php
          foreach ($menu as $key => $me26) {
          if ($me26['menu_type'] == '37') { ?> 
            <li><a href="?page=ourstructure"><?php echo $me26['menu_text']; ?></a></li>
            <?php }                                                
          }
        ?> 
        <?php
          foreach ($menu as $key => $me26) {
          if ($me26['menu_type'] == '38') { ?> 
            <li><a href="?page=corporate"><?php echo $me26['menu_text']; ?></a></li>
            <?php }                                                
          }
        ?> 
                            
        </ul>
      </div>

      <div class="col-lg-7 text-start aaa">
      <?php
        foreach ($menu as $key => $me27) {
        if ($me27['menu_type'] == '27') { ?> 
        <img class="pic1" src="<?php echo $me27['menu_image']; ?>">
        <?php }
          }
        ?> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="subnav">
      <?php
        foreach ($menu as $key => $me10) {
        if ($me10['menu_type'] == '10') { ?> 
        <a href="?page=ourbusiness"><button class="subnavbtn"><?php echo $me10['menu_headtext']; ?></button></a>
        <?php }
          }
      ?>                                        
      
      <div class="container submenu">

        <div class="subnav-content">
          <div class="row">
            <div class="col-lg-5 text-center ">
              <ul class="ddfsd">
                <?php
                  foreach ($menu as $key => $me11) {
                  if ($me11['menu_type'] == '11') { ?> 
                  <li><a href="?page=commercial"><?php echo $me11['menu_text']; ?></a></li>
              </ul>
                  <?php }
                    }
                ?>                                       
            </div>

            <div class="col-lg-7 text-start aaa">
              <?php
                foreach ($menu as $key => $me12) {
                if ($me12['menu_type'] == '12') { ?> 
                <img class="pic1" src="<?php echo $me12['menu_image']; ?>">
                <?php }
                  }
              ?>                                       
            </div>

            </div>
          </div>
        </div>
      </div>

      <div class="subnav">
        <?php
          foreach ($menu as $key => $me13) {
          if ($me13['menu_type'] == '13') { ?> 
          <a href="?page=sustainability"><button class="subnavbtn"><?php echo $me13['menu_headtext']; ?></button></a>
          <?php }
            }
        ?>                                       
          
        <div class="container submenu">
          <div class="subnav-content">
            <div class="row" style="inline-size: 100%;">
              <!-- <div class="col6 "> -->
                <div class="col-lg-5">
                  <ul class="ddfsd">                   
                    <?php
                    foreach ($menu as $key => $me14) {
                    if ($me14['menu_type'] == '14') { ?> 
                    <li><a href="?page=governance"><?php echo $me14['menu_text']; ?></a></li>
                    <?php }
                      }                                                   
                    ?>  

                    <?php
                      foreach ($menu as $key => $me14) {
                      if ($me14['menu_type'] == '15') { ?> 
                      <li><a href="?page=faq"><?php echo $me14['menu_text']; ?></a></li>
                      <?php }
                      }                                                   
                    ?>
                    </div>
                    <div class="col-lg-7 text-start aaa">
                      <?php
                        foreach ($menu as $key => $me12) {
                        if ($me12['menu_type'] == '12') { ?> 
                        <img class="pic1" src="<?php echo $me12['menu_image']; ?>">
                        <?php }
                        }
                      ?>                                       
                    </div>

                  </ul>
                

              </div>
            </div>
          </div>
        </div>
               
        
        <div class="subnav">
          <?php
            foreach ($menu as $key => $me28) {
            if ($me28['menu_type'] == '23') { ?> 
            <a href="?page=investor"><button class="subnavbtn"><?php echo $me28['menu_headtext']; ?></button></a>
            <?php }
              }
            ?>                    
        </div>

          <div class="subnav">
            <?php
              foreach ($menu as $key => $me28) {
              if ($me28['menu_type'] == '33') { ?> 
              <a href="?page=news"><button class="subnavbtn"><?php echo $me28['menu_headtext']; ?></button></a>
              <?php }
                }
              ?>                    
          </div>

          <div class="subnav">
            <?php
              foreach ($menu as $key => $me28) {
              if ($me28['menu_type'] == '34') { ?> 
              <a href="?page=blog"><button class="subnavbtn"><?php echo $me28['menu_headtext']; ?></button></a>
              <?php }
                }
            ?>                    
          </div>    

          <div class="subnav">   
            <?php
              foreach ($menu as $key => $me23) {
              if ($me23['menu_type'] == '35') { ?> 
              <a href="?page=contacus"><button class="subnavbtn"><?php echo $me23['menu_headtext']; ?></button></a>
              <?php }
                }
            ?>
            
            
          <div class="container submenu">
            <div class="subnav-content">
              <div class="row">
                <!-- <div class="col6 "> -->

                  <div class="col-lg-5 text-center ">
                    <ul class="ddfsd">
                      <?php
                        foreach ($menu as $key => $me24) {
                        if ($me24['menu_type'] == '24') { ?> 
                        <li><a href="?page=abus"><?php echo $me24['menu_text']; ?></a></li>
                        <?php }
                          }
                      ?>                                                       
                      
                      <?php
                        foreach ($menu as $key => $me25) {
                        if ($me25['menu_type'] == '25') { ?> 
                        <li><a href="?page=contact"><?php echo $me25['menu_text']; ?></a></li>
                        <?php }
                          }
                      ?>        
                      
                      <?php
                        foreach ($menu as $key => $me26) {
                        if ($me26['menu_type'] == '26') { ?> 
                        <li><a href="?page=complaint"><?php echo $me26['menu_text']; ?></a></li>
                        <?php }
                          }
                      ?> 
                            
                    </ul>
                  </div>

                  <div class="col-lg-7 text-start aaa">
                    <?php
                      foreach ($menu as $key => $me27) {
                      if ($me27['menu_type'] == '27') { ?> 
                      <img class="pic1" src="<?php echo $me27['menu_image']; ?>">
                      <?php }
                        }
                      ?> 
                  </div>

                </div>
              </div>
            </div>
          </div>


          <!-- <div class="col-lg-1 subnav">
                             
        </div> -->


          <!-- <div class="subnav">
          <?php
            foreach ($menu as $key => $me28) {
            if ($me28['menu_type'] == '38') { ?> 
            <a href="?page=investor"><button class="subnavbtn"><?php echo $me28['menu_text']; ?></button></a>
            <a class="menudrop1">///</a>
            <?php }
              }
            ?>                    
        </div>

        <div class="subnav">
  
  <div id="trigger">   
    <span></span>
    <span></span>
    <span></span>  
  </div>

 

  <div class="navigation">      
    <ul class="menu">
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
    </ul>
    
    <ul class="menu">
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
      <li class="list"><a href="#">MENU</a></li>
    </ul>
  </div> -->
    
</div>

        </div>
      </div>
    </div>
  </div>
</nav>

        
      </div>
    </div>
  </div>
</div>

</header> 

<script>
  $(document).ready(function(){
	$('#trigger').click(function(){
		$(this).toggleClass('open');
    $(".navigation").slideToggle(600);
	});
});
</script>