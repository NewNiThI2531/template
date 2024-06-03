<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contents = [];

    $sql2 = "SELECT * FROM Database_BOARD WHERE BOARD_id=$id ";
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
$sql1 = "SELECT * FROM Database_BOARD WHERE board_typetwo='111' and BOARD_Page='6' and BOARD_Status='0'";
$query1 = $conn->query($sql1);
while ($cma = $query1->fetch_assoc()) {
    $contents_blog[] = $cma;

    $cma["BOARD_Headtext"] = ($lang == 'EN' ? $cma["BOARDHeadtext_EN"] : $cma["BOARD_Headtext"]);
    $cma["BOARD_Text"] = ($lang == 'EN' ? $cma["BOARDtext_EN"] : $cma["BOARD_Text"]);
    $contents[] = $cma;
}
?>

    <div class="container">
        <div class="col-lg-12 text-end spaceD">
            <button class="button button1 fontB1 align-item-center">
            <img src="asset\images\news-detail1.png">แชร์</button>
        </div>
    </div>

    <div class="container col-lg-12 text-strat fontB">
        <?php echo $id['BOARD_Headtext']; ?>
    </div>

    <div class="container">
        <div class="row col-lg-12">       

            <div class="col-lg-4 d-flex justify-content-start spaceA  ">
                <img src="<?php echo $id['BOARD_image']; ?>" class="pct ">
            </div>

            <div class="col-lg-8">
                <div class="font1">
                    <?php echo $id['BOARD_Headtext']; ?>
                </div>
                <div class="font2">
                    <?php echo $id['BOARD_Text']; ?>
                </div>
            </div>

        </div>
    </div>



        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="container col-lg-12 text-strat fontB">
                        <?php echo $id['BOARD_Headtext']; ?>
                    </div>

                    <div class="col d-flex justify-content-center spaceA  ">
                        <img src="<?php echo $id['BOARD_image']; ?>" class="pct ">
                    </div>
                </div>
            </div>

            <div class="text-center col-12">
                <div class="">



                    <div class="row">
                        <div class="font1">
                            <?php echo $id['BOARD_Headtext']; ?>
                        </div>
                        <div class="font2">
                            <?php echo $id['BOARD_Text']; ?>
                        </div>
                    </div>

                </div>
            </div> -->
            <!-- <div class="col-2"></div> -->




        </div>
    </div>
</div>