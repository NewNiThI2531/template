<?php
// $blog = [];
// $sql = "SELECT * FROM database_blog WHERE bg_type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18) and bg_page='12' and bg_status='0'";
// $query = $conn->query($sql);

// while ($bg = $query->fetch_assoc()) {
//   $blog[] = $bg;
  
  $blog = [];
  $contents_new = [];

  $sql = "SELECT * FROM database_blog WHERE bg_type IN (1,2,18) and bg_page='12' and bg_status='0'";
  $query = $conn->query($sql);

  while ($cma = $query->fetch_assoc()) {
      $contents_new[] = $cma;
      
      $cma["bg_content"] = ($lang == 'EN' ? $cma["bgcontent_EN"] : $cma["bg_content"]);
      $cma["bg_text"] = ($lang == 'EN' ? $cma["bgtext_EN"] : $cma["bg_text"]);
      
      $blog[] = $cma;
  }


?>


<div class="row container">
    <div class="col-sm-3 col-md-12 col-lg-4 col-xl-3  blogcol1">
    <!-- <div class="grid">   -->
      <?php
          foreach ($blog as $key => $bg1) {
          if ($bg1['bg_type'] == '1') { ?>
          <h4 class="headtext"><?php echo $bg1['bg_text']; ?></h4>
          </p>
      <?php }
        }
      ?>
    <input class="form-control blogsearch" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <?php
          foreach ($blog as $key => $bg18) {
          if ($bg18['bg_type'] == '18'){ ?>
          <button class="button1 buttonblog " id="<?php echo $bg18['bg_id']; ?>"><?php echo $bg18['bg_text']; ?></button>
          </p>
      <?php }
        }
      ?>
  </div>



    
    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 mt-4 mb-4 ps-2 pe-2">
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



