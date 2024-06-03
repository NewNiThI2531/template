<?php

$contents = [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11,12) and Content_Page='15' and Content_Status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents [] = $cma;
}


?>

<?php
$set = [];
$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1) and Set_Page='15' and Set_Status='0'";
$query = $conn->query($sql);

while ($plaintimg = $query->fetch_assoc()) {
  $set[] = $plaintimg;
}

?>

<!-- Form -->
<div class="combackground">
    <?php
        foreach ($set as $key => $plaintimg1) {
        if ($plaintimg1['Set_Type'] == '1') { ?>
        <img class="complaintim" src="<?php echo $plaintimg1['set_image']; ?>">
    <?php }
    }
    ?>

    <?php
        foreach ($contents as $key => $plaint1) {
        if ($plaint1['Content_Type'] == '1') { ?>
        <h4 class="complaint"><?php echo $plaint1['conhead_text']; ?></h4>
        </p>
    <?php }
        }
    ?>

<div class="row justify-content-center">
    <div class="col-sm-12 complaint1">
      <div class="row justify-content-center complaintcolor">
        <form class="row form-complaint login_form" action="#" method="POST" target="calldata" novalidate>

        <?php
            foreach ($contents as $key => $plaint2) {
            if ($plaint2['Content_Type'] == '2') { ?>
            <label class="formtexthead1"><?php echo $plaint2['conhead_text']; ?></label>
            <label class="formtexthead2"><?php echo $plaint2['con_text']; ?></label>
            </p>
        <?php }
            }
        ?>

        <div class="col-12 col-sm-3 complaintform p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '3') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 complaintform p-0">
            <input name="name" class="form-control cplainttext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3  p-0">
        <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '4') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
            <input name="agency" class="form-control cplainttext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '5') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
            <input name="company" class="form-control cplainttext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '6') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
            <input name="email" class="form-control cplainttext"  type="email"/>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '7') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
            <input name="phone" class="form-control cplainttext"  type="phone"/>
        </div>

        <div class="col-sm-12 d-flex justify-content-center">
            <div class="comline"></div>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '8') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
        <input name="subject" class="form-control cplainttext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <?php
                foreach ($contents as $key => $plaint3) {
                if ($plaint3['Content_Type'] == '9') { ?>
                <label class="cplaintlabel"><?php echo $plaint3['con_text']; ?></label>
                </p>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-9 p-0">
            <textarea name="detail" class="form-control cplainttext" type="text"></textarea>
        </div>

        <div class="col-3">
        
        </div>
        
        <div class="col-9">
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox"> ไม่ประสงค์ที่จะเปิดเผยข้อมูล
            <?php
                    foreach ($contents as $key => $plaint12) {
                    if ($plaint12['Content_Type'] == '12') { ?>
            <label class="form-check-label nocoment" for="exampleCheck1"><?php echo $plaint12['con_text']; ?></label>
            <?php }
                }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="text-center conformbut">
                <button class="conformbut1" type="">
                <?php
                    foreach ($contents as $key => $plaint4) {
                    if ($plaint4['Content_Type'] == '11') { ?>
                    <?php echo $plaint4['con_text']; ?>
                    <?php }
                }
                ?>
                </button>

                <button class="conformbut2" type="submit" name="button">
                <?php
                    foreach ($contents as $key => $plaint4) {
                    if ($plaint4['Content_Type'] == '10') { ?>
                    <?php echo $plaint4['con_text']; ?>
                    <?php }
                }
                ?>
            </div>
        </div>
        
            </form>
      </div>
    </div>
  </div>
  </div>