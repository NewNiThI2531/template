<?php 

$content = [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16) and Content_Page='21' and Content_Status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $content [] = $cma;
}

$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1,2) and Set_Page='21' and Set_Status='0'";
$query = $conn->query($sql);

while ($gove = $query->fetch_assoc()) {
  $set[] = $gove;
}

?>



<?php
    foreach ($set as $key => $gove) {
      if ($gove['Set_Type'] == '1') { ?>
      <div class="gov1" style="background: linear-gradient(0deg, rgba(11, 1, 53, 0.8), rgba(11, 1, 53, 0.8)), url(<?php echo $gove['set_image']; ?>);">
      <?php }
        }
  ?>
<div class="container">

<?php
        foreach ($content as $key => $gov1) {
          if ($gov1['Content_Type'] == '1') { ?>
 <p class="textgov1"><?php echo $gov1['conhead_text']; ?></p>
 <p class="textgov2"><?php echo $gov1['con_text']; ?></p>
   <?php }
         }
  ?>            

<?php
        foreach ($content as $key => $gov2) {
          if ($gov2['Content_Type'] == '2') { ?>
 <p class="textgov3"><?php echo $gov2['con_text']; ?></p>
                     <?php }
                          }
  ?>            


</div>
</div>


  <!-- Card Download -------------------------------------------------------- -->
  <?php
    foreach ($set as $key => $gove) {
      if ($gove['Set_Type'] == '2') { ?>
      <div class="backgovv" style="background: linear-gradient(0deg, rgba(11, 1, 53, 0.8), rgba(11, 1, 53, 0.8)), url(<?php echo $gove['set_image']; ?>);">
      <?php }
        }
  ?>

  <div class="container p-0 concardload">
  <div class="row row-cols-1 row-cols-md-3 g-4">
     <?php
        foreach ($content as $key => $gov5) {
          if ($gov5['Content_Type'] == '3') { ?>
  <div class="col-md-4">
    
    <div class="card caras">
      <div class="text-center dovimgicon">
        <svg class="bd-placeholder-img rounded-circle invescircle" width="80" height="80" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      </div>
    <div class="card-body">
       
        <h5 class="headcard"><?php echo $gov5['conhead_text']; ?></h5>
        </div>
        
        <div class="card-footer btn govbott">
        <a href= "<?php echo $gov5['content_link']; ?>"  class="loadcard" download><?php echo $gov5['con_text']; ?></a>
              
      
        <svg class="bi bi-arrow-down-circle govericon" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"></path>
            </svg>
      </div>
      </div>
    </div>
         
    <?php }
              } 
              ?>   
</div>
</div>
  



<?php
        foreach ($content as $key => $gov6) {
          if ($gov6['Content_Type'] == '6') { ?>
      <p class="textgov6"><?php echo $gov6['conhead_text']; ?></p>
      <?php }
              } 
  ?>          

 <div class="container content">
  <div class="row ">
  <?php
        foreach ($content as $key => $gov9) {
          if ($gov9['Content_Type'] == '9') { ?>
  <div class="col-md-12 textd">      
    <a  download href= "<?php echo $gov5['content_link']; ?>" class="col-7 textd"><?php echo $gov9['conhead_text']; ?>
    <div class="tetsd">
   <a download href= "<?php echo $gov5['content_link']; ?>" class="texttdd"><?php echo $gov9['con_text']; ?></a>
   <img src="<?php echo $gov9['con_image']; ?>" class="file">
   </div>
      <hr class="liad">
      <?php }
           } 
  ?>     
</div>
<?php
        foreach ($content as $key => $gov10) {
          if ($gov10['Content_Type'] == '10') { ?>
    <div class="col-md-12 textd">
      <a  download href= "#" class="col-7 textd"><?php echo $gov10['con_text']; ?>
      <div class="tetsd">
   <a download href= "#" class="texttdd">dowload</a>
   <img src="<?php echo $gov10['con_image']; ?>" class="file">
   </div>
      <hr class="liad">
      <?php }
           } 
  ?>     
    </div>
    <?php
        foreach ($content as $key => $gov11) {
          if ($gov11['Content_Type'] == '11') { ?>
    <div class="col-md-12 textd">
      <a download href= "#" class="col-7 textd"><?php echo $gov11['con_text']; ?>
      <div class="tetsd">
   <a download href= "#" class="texttdd">dowload</a>
   <img src="<?php echo $gov11['con_image']; ?>" class="file">
   </div>
      <hr class="liad">
      <?php }
           } 
  ?>     
    </a> </div>
    <?php
        foreach ($content as $key => $gov12) {
          if ($gov12['Content_Type'] == '12') { ?>
   <div class="col-md-12 textd">
    <a download href= "#" class="col-7 textd"><?php echo $gov12['con_text']; ?>
    <div class="tetsd">
   <a download href= "#" class="texttdd">dowload</a>
   <img src="<?php echo $gov12['con_image']; ?>" class="file">
   </div>
      <hr class="liad">
      <?php }
           } 
  ?>     
    </a> </div>
   
    <?php
        foreach ($content as $key => $gov7) {
          if ($gov7['Content_Type'] == '7') { ?>
    <p class="textgov6"><?php echo $gov7['conhead_text']; ?></p>
    <?php }
          } 
  ?>         

<div class="container content">
 <div class="row">
 <?php
        foreach ($content as $key => $gov13) {
          if ($gov13['Content_Type'] == '13') { ?>
  <div class="col-md-12 textd">
   <a download href= "#" class="col-7 textd "><?php echo $gov13['con_text']; ?>
   <div class="tetsd">
   <adownload href= "#"  class="texttdd">dowload</adownload>
   <img src="<?php echo $gov13['con_image']; ?>" class="file">
   </div>
     <hr class="liad">
     <?php }
          } 
  ?>   
   </a> </div>
   
   </a> </div>

   <?php
        foreach ($content as $key => $gov8) {
          if ($gov8['Content_Type'] == '8') { ?>
   <p class="textgov6"><?php echo $gov8['conhead_text']; ?></p>
   <?php }
        } 
  ?>      

<div class="container content">
 <div class="row">
 <?php
        foreach ($content as $key => $gov16) {
          if ($gov16['Content_Type'] == '14') { ?>
  <div class="col-md-12 textd">
   <a download href= "#" class="textd "><?php echo $gov16['con_text']; ?>
   <div class="tetsd">
   <a download href= "#" class="texttdd">dowload</a>
   <img src="<?php echo $gov16['con_image']; ?>" class="file">
   </div>
     <hr class="liad">
     <?php }
           } 
  ?>      
   </a> </div>
</div>
 </div>
   </div>
 </div>
</div>
            </div>
   
            </div>