<?php

$contents = [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11,12,13) and Content_Page='1' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
  $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);

  $contents[] = $cma;
}

//  -------------------------  INSERT NEWS  -----------------------------------------

$news = [];
$news_news = [];

$sql = "SELECT * FROM Database_news WHERE news_type IN (2) and news_page='9' and news_status='0' LIMIT 6 ";
$query = $conn->query($sql);

while ($newss = $query->fetch_assoc()) {
  $news_news[] = $newss;

  $newss["news_text"] = ($lang == 'EN' ? $newss["news_textEN"] : $newss["news_text"]);
  $newss["news_headtext"] = ($lang == 'EN' ? $newss["news_headtextEN"] : $newss["news_headtext"]);

  $news[] = $newss;
}

// ----------------------------------------------------------------------------------

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,7) and Set_Page='1' and Set_Status='0'";
$query = $conn->query($sql);

while ($ho = $query->fetch_assoc()) {
  $set[] = $ho;
}


?>

<div class="bghome">

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <?php
      $i = 0;
      $active = "active";
      foreach ($set as $key => $ho) {
        if ($ho['Set_Type'] == '1') { ?>
          <div class="carousel-item <?= $active ?>">
            <img src="<?php echo $ho['set_image']; ?>" class="d-block slideimhom" alt="...">
          </div>
          <?php $active = '';
        } else {

        }
      }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




  <div class="container text-center mt-5">
    <div class="row texta">


      <?php
      foreach ($contents as $key => $value) {
        if ($value['Content_Type'] == '5') { ?>
          <div class="col-sm-6 col-md-5 col-lg-5">
            <h4 class="homeour mb-0">
              <?php echo $value['conhead_text']; ?>
            </h4>
            <p class="homeour1 text-center">
              <?php echo $value['con_text']; ?>
            </p>
          </div>
        <?php }
      }
      ?>


      <div class="col-xs-6 col-sm-7 ol-lg-7">
        <div class="owl-carousel owl-theme">

          <?php
          foreach ($contents as $key => $value2) {
            if ($value2['Content_Type'] == '2') { ?>
              <a href="?page=commercial" class="item"><img src="<?php echo $value2['con_image']; ?>">
                <p class="texthome1">
                  <?php echo $value2['conhead_text']; ?>
                </p>
                <p class="texthome">
                  <?php echo $value2['con_text']; ?>
                </p>
              <?php }
          }
          ?>
          </a>

        </div>
      </div>

    </div>
  </div>

  <!-- ------------------------------------------------------------------------ -->

  <div class="img1">
    <?php
    foreach ($set as $key => $ho7) {
      if ($ho7['Set_Type'] == '7') { ?>
        <img class="bannerimg1" src=<?php echo $ho7['set_image']; ?>>
      <?php }
    }
    ?>
  </div>

  <!-- -------------------------------------- OUR BUSSINESS --------------------------------- -->

  <div class="container text-center p-0 contaihomenews">
    <div class="row ">
      <div class="col-lg-2 col-md-12">
        <?php
        foreach ($contents as $key => $value5) {
          if ($value5['Content_Type'] == '1') { ?>
            <div class="homenews text-start">
              <div>
                <?php echo $value5['conhead_text']; ?>
              </div>
              <p class="homenews1 text-start">
                <?php echo $value5['con_text']; ?>
            </div>
          <?php }
        }
        ?>
      </div>




      <div class="col-lg-10 col-md-12 concha">

        <div class="container p-0">

          <div class="row speaL2 ">
            <!-- <ul style="display:contents;" id="paginated-list" class="ccc"> -->

            <?php
            foreach ($news as $key => $newss) {
              if ($newss['news_type'] == '2') { ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 ">
                  <div>
                    <div class=" mb-4 wall3 ">
                      <a href="?page=news-detail&id=<?php echo $newss['news_id'] ?>">
                        <div class="homeournews" style="background-image: url(<?php echo $newss['news_image']; ?>);">

                          <p class="homeournewstext">
                            <?php echo $newss['news_headtext']; ?>
                          <div class="line"></div>
                          </p>
                          <p class="homeournewstext1 p-1">
                            <?php echo $newss['news_text']; ?>
                          </p>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            <?php }
            }
            ?>

          <!-- </ul> -->
        </div>


      </div>

    </div>
  </div>
</div>




<div class="row">
  <div class="col-md-8 text-end"></div>
  <div class="col-md-2 text-end mb-5">
    <?php
    foreach ($contents as $key => $value6) {
      if ($value6['Content_Type'] == '13') { ?>
        <a class="fah" href="?page=news">
          <?php echo $value6['conhead_text']; ?>
        </a>
      <?php }
    }
    ?>
  </div>
  <div class="col-md-2 text-end"></div>
</div>

</div>