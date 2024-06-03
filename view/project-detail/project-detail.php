<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contents = [];

    $sql2 = "SELECT * FROM Database_Project WHERE pro_id=$id ";
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
$contents_new = [];
$contents = [];
$sql1 = "SELECT * FROM Database_Project WHERE pro_type='111' and pro_page='16' and pro_status='0'";
$query1 = $conn->query($sql1);
while ($cma = $query1->fetch_assoc()) {
    $contents_new[] = $cma;

    $cma["pro_headtext"] = ($lang == 'EN' ? $cma["pro_headtextEN"] : $cma["pro_headtext"]);
    $cma["pro_text"] = ($lang == 'EN' ? $cma["pro_textEN"] : $cma["pro_text"]);
    $contents[] = $cma;
}
?>

<?php
foreach ($contents as $key => $res1) {
    if ($res1['pro_type'] == '111') { ?>
        <div class="coloee">
            <div class="container  ">

                <div class="row">

                    <div class="col-6 text-strat fontA spaceD">
                        <?php echo $res1['pro_headtext']; ?>
                    </div>
            <?php }
    }
            ?>
            <div class="col-6 text-end spaceD ">
                <button class="button button1 fontB align-item-center"><img src="asset\images\news-detail1.png"> แชร์</button>

            </div>
                </div>


            <div class="row">
                <div class="col-5">
                <div class="row">
                    <div class="col text-start spaceA  ">

                        <img src="<?php echo $id['pro_img']; ?>" class="pct ">

                    </div>
                </div>
            </div>

            <div class="col-7">
                <div class="">


                    <div class="col text-strat fontB"><?php echo $id['pro_headtextEN']; ?></div>

                    <div class="row">
                    <div class="font1"><?php echo $id['pro_headtextEN']; ?></div>
                    <div class="font2"><?php echo $id['pro_textEN']; ?></div>
                    </div>

            </div>
            </div>




            </div>
</div>
</div>
</div>