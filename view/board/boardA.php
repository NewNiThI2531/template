<?php
// $blog = [];
// $sql = "SELECT * FROM database_blog WHERE bg_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18) and bg_page='12' and bg_status='0'";
// $query = $conn->query($sql);

// while ($bg = $query->fetch_assoc()) {
//   $blog[] = $bg;

$board = [];
$contents_new = [];

$sql = "SELECT * FROM Database_BOARD WHERE board_typetwo IN (1,2,3) and BOARD_Page='6' and BOARD_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
  $contents_new[] = $cma;

  $cma["BOARD_Text"] = ($lang == 'EN' ? $cma["BOARDtext_EN"] : $cma["BOARD_Text"]);
  $cma["BOARD_Headtext"] = ($lang == 'EN' ? $cma["BOARDHeadtext_EN"] : $cma["BOARD_Headtext"]);

  $board[] = $cma;
}


?>


<div class="row colboard ps-0 pe-0">
  <div class="col-md-12 col-lg-5 ps-4 pe-0 blogcol1">
    <!-- <div class="grid">   -->
    <?php
    foreach ($board as $key => $cma) {
      if ($cma['board_typetwo'] == '1') { ?>
        <h4 class="headtext">
          <?php echo $cma['BOARD_Headtext']; ?>
        </h4>
        </p>
      <?php }
    }
    ?>

    <?php
    foreach ($board as $key => $cma) {
      if ($cma['board_typetwo'] == '2') { ?>
      <div class="buttboard1"><a class="buttboard" id="<?php echo $cma['BOARD_id']; ?>"><?php echo $cma['BOARD_Text']; ?></a></div>
      <?php }
    }
    ?>
  </div>




  <div class="col-md-12 col-lg-7 mt-4 ps-0 pe-0 blogcol2">

    <div class="list-data">
      <div class="grid">
      </div>
    </div>
    <div class="text-end pagination-content">
      <div id="pagination-content" class="mt-4">
      </div>
    </div>
  </div>
</div>




<!-- <div data-fancybox data-src="#dialog-content" style="display:none;max-width:500px;">

  <img class="blogim" src="<?php echo $cma['BOARD_image']; ?>">
  <div class="col-lg-6 desc">
    <table id="myTable">
      <p class="bolgheadtext"><?php echo $cma['BOARD_Headtext']; ?></p>
    </table>
    <p class="bolgtitletext"><?php echo $cma['BOARD_Text']; ?></p>
  </div>
</div> -->