<?php

$contents = [];
$contents_new = [];

$sql = "SELECT * FROM Database_content WHERE Content_Type IN (1,2,3,4,5,6,7,8,9,10,11) and Content_Page='14' and Content_Status='0'";
$query = $conn->query($sql);


while ($cma = $query->fetch_assoc()) {
    $contents_new[] = $cma;
    
    $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);
    $cma["conhead_text"] = ($lang == 'EN' ? $cma["conhead_textEN"] : $cma["conhead_text"]);
    
    $contents [] = $cma;
}

$sett = [];
$sett_tact = [];

$sql = "SELECT * FROM Database_setting WHERE Set_Type IN (1) and Set_Page='14' and Set_Status='0'";
$query = $conn->query($sql);


?>

<?php
        foreach ($contents as $key => $comtactform) {
        if ($comtactform['Content_Type'] == '11') { ?>
<div class="conformback" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo $comtactform['con_image']; ?>);">
<?php }
        }
    ?>

    <?php
        foreach ($contents as $key => $comtactform1) {
        if ($comtactform1['Content_Type'] == '1') { ?>
        <h4 class="conform1"><?php echo $comtactform1['conhead_text']; ?></h4>
        </p>
    <?php }
        }
    ?>

<!-- Form -->
<div class="">
<div class="row justify-content-center ">
    <div class="col-sm-10 conbg1">
      <div class="row justify-content-center conbgcolor">
      <form class="row form-contact login_form" action="#" method="POST" target="calltact" novalidate>
        
        <div class="col-12 col-sm-3">
            <?php
            foreach ($contents as $key => $comtactform1) {
            if ($comtactform1['Content_Type'] == '2') { ?>
            <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
        <?php }
            }
        ?>
        </div>
        <div class="col-12 col-sm-7">
            <input name="name" class="form-control formtext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 ">
            <?php
                foreach ($contents as $key => $comtactform1) {
                if ($comtactform1['Content_Type'] == '3') { ?>
                <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
            <?php }
                }
            ?>  
        </div>
        <div class="col-12 col-sm-7">
            <input name="agency" class="form-control formtext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 ">
            <?php
                foreach ($contents as $key => $comtactform1) {
                if ($comtactform1['Content_Type'] == '4') { ?>
                <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-7">
            <input name="company" class="form-control formtext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 ">
            <?php
                foreach ($contents as $key => $comtactform1) {
                if ($comtactform1['Content_Type'] == '5') { ?>
                <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-7">
            <input name="email" class="form-control formtext"  type="email"/>
        </div>

        <div class="col-12 col-sm-3 ">
            <?php
                foreach ($contents as $key => $comtactform1) {
                if ($comtactform1['Content_Type'] == '6') { ?>
                <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-7">
            <input name="subject" class="form-control formtext"  type="text"/>
        </div>

        <div class="col-12 col-sm-3 ">
            <?php
                foreach ($contents as $key => $comtactform1) {
                if ($comtactform1['Content_Type'] == '7') { ?>
                <h4 class="conform2"><?php echo $comtactform1['con_text']; ?></h4>
            <?php }
                }
            ?>
        </div>
        <div class="col-12 col-sm-7">
            <textarea name="detail" class="form-control formtext"  type="text" rows="3"></textarea>
        </div>


        <div class="col-3">
        
        </div>
        <div class="col-9">
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox" style="height: 15px;width: 15px;">
            <?php
                        foreach ($contents as $key => $comtactform10) {
                        if ($comtactform10['Content_Type'] == '10') { ?>
            <label class="form-check-label" for="exampleCheck1" style="font-size: 14px;padding-left: 3px;"><?php echo $comtactform10['con_text']; ?></label>
            <?php }
                    }
                    ?>
            </div>
        </div>

        <div class="text-center conformbut">
            <button class="conformbut1" type="">
                    <?php
                        foreach ($contents as $key => $comtactform2) {
                        if ($comtactform2['Content_Type'] == '8') { ?>
                        <?php echo $comtactform2['con_text']; ?>
                        <?php }
                    }
                    ?>
                    </button>

                    <button class="conformbut2" type="">
                    <?php
                        foreach ($contents as $key => $comtactform2) {
                        if ($comtactform2['Content_Type'] == '9') { ?>
                        <?php echo $comtactform2['con_text']; ?>
                        <?php }
                    }
                    ?>
                    </button>
            </div>
        
        </form>
      </div>
    </div>
  </div>
</div>
                </div>