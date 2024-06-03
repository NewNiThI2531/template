<?php
$contents_new = [];
$contents = [];
$sql1 = "SELECT * FROM Database_news WHERE news_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15) and news_page='9' and news_status='0'";
$query1 = $conn->query($sql1);
while ($cma = $query1->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["news_headtext"] = ($lang == 'EN' ? $cma["news_headtextEN"] : $cma["news_headtext"]);
  $cma["news_text"] = ($lang == 'EN' ? $cma["news_textEN"] : $cma["news_text"]);
  $contents[] = $cma;
}

?>
<div class="row">
  <div class="col-lg-2 col-md-12">
    <div class="container headnews">
      <?php
      foreach ($contents as $key => $res1) {
        if ($res1['news_type'] == '1') { ?>
          <p class="homenews"><?php echo $res1['news_headtext']; ?></p>
          <p class="homenews1"><?php echo $res1['news_text']; ?></p>
        <?php }
      }
      ?>
    </div>
  </div>

    <div class="col-lg-10 col-md-12">
      <main>
      <div class="container newscontent">

          <div class="row">
            <ul style="display:contents;" id="paginated-list">
              <?php
              foreach ($contents as $key => $res4) {
                if ($res4['news_type'] == '2') { ?>
                  <li class="col-6 col-sm-6 col-md-4 col-lg-4 innews">
                        <a href="?page=news-detail&id=<?php echo $res4['news_id'] ?>">
                          <div class="homeournews" style="background-image: url(<?php echo $res4['news_image']; ?>);">
                            <p class="homeournewstext"><?php echo $res4['news_headtext']; ?>
                            <div class="line"></div>
                            </p>
                            <p class="homeournewstext1"><?php echo $res4['news_text']; ?></p>
                          </div>    
                        </a>
                  </li>
              <?php }
                }
              ?>
            </ul>
          </div>

      </div>
    </div>


      <nav class="pagination-container">
        <p class="m-0 text-center pagenews"></p>          
            <button class="pagination-button btn btn-primary btnnews" id="prev-button"  style="padding-right: 60px;">
              <<
            </button>

            <div id="pagination-numbers">
            </div>

            <button class="pagination-button btn btn-primary btnnews" id="next-button">
              >>
            </button>
      </nav>
    </main>
      

</div>

