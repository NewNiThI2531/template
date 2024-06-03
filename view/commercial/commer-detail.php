<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contents = [];

    $sql2 = "SELECT * FROM Database_COMMERCIAL WHERE commer_id=$id ";
    $query2 = $conn->query($sql2);
    // $id = mysqli_fetch_array($query2);
    if ($id) {
        $id = $query2->fetch_assoc();
    ?>
    <?php
    } else {
        echo "Not Found";
    }
}

?>

<?php
$contents_blog = [];
$contents = [];
// $sql1 = "SELECT * FROM Database_COMMERCIAL WHERE bg_type='111' and bg_page='12' and bg_status='0'";
$query1 = $conn->query($sql1);
while ($cma = $query1->fetch_assoc()) {
    $contents_blog[] = $cma;

    $cma["commer_headtext"] = ($lang == 'EN' ? $cma["commer_headtextEN"] : $cma["commer_headtext"]);
    $cma["commer_text"] = ($lang == 'EN' ? $cma["commer_textEN"] : $cma["commer_text"]);
    $contents[] = $cma;
}
?>


<?php
foreach ($contents as $key => $res1) {
    if ($res1['bg_type'] == '111') { ?>
        <div class="coloee">
            <div class="container  ">

                <div class="row">

                    <div class="col-6 text-strat fontA spaceD">
                        <?php echo $res1['commer_headtext']; ?>
                    </div>
                <?php }
}
?>
            <div class="col-2 text-start spaceD">
                <button class="button button1 fontB1 align-item-center"><img src="asset\images\news-detail1.png">
                    แชร์</button>

            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col d-flex justify-content-center spaceA  ">

                        <img src="<?php echo $id['commer_image']; ?>" class="pct ">

                    </div>
                </div>
            </div>

            <div class="text-center col-12">
                <div class="">


                    <div class="col text-strat fontB">
                        <?php echo $id['commer_headtext']; ?>
                    </div>

                    <div class="row">
                        <div class="font1">
                            <?php echo $id['commer_headtext']; ?>
                        </div>
                        <div class="font2">
                            <?php echo $id['commer_text']; ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="col-2"></div> -->




        </div>
    </div>
</div>
</div>