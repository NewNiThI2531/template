<?php

$contents= [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5) and Content_Page='4' and Content_Status='0'";
$query = $conn->query($sql);

while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents[] = $cma;
}

?>
   <div class="col-md-8"></div>
        <?php
        foreach ($contents as $key => $vis1) {
          if ($vis1['Content_Type'] == '1') { ?>
<div class="col-md-4 vi1" stlye= "background-image: url"src=<?php echo $vis1['con_image']; ?>>
<div class="m-auto"><h5 class="textvi1"><?php echo $vis1['conhead_text']; ?></h5>
<p1 class="textvi2"><?php echo $vis1['con_text']; ?></p1>
<?php }
        }
       ?>

<?php
        foreach ($contents as $key => $vis2) {
          if ($vis2['Content_Type'] == '2') { ?>   
<h5 class="textvi3"><?php echo $vis2['conhead_text']; ?></h5><br>
<p1 class="textvi4"><?php echo $vis2['con_text']; ?></p1>
<?php }
        }
       ?>

<?php
        foreach ($contents as $key => $vis3) {
          if ($vis3['Content_Type'] == '3') { ?>      
<p1 class="textvi4"><?php echo $vis3['con_text']; ?></p1>
<?php }
        }
       ?>
 
 <?php
        foreach ($contents as $key => $vis4) {
          if ($vis4['Content_Type'] == '4') { ?>    
<p1 class="textvi4"><?php echo $vis4['con_text']; ?></p1>
<?php }
        }
       ?>

<?php
        foreach ($contents as $key => $vis5) {
          if ($vis5['Content_Type'] == '5') { ?>         
<p1 class="textvi4"><?php echo $vis5['con_text']; ?></p1>
<?php }
        }
       ?>
</div>
</div>


