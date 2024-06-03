<?php
$sql_a1 = "SELECT * FROM Database_footter WHERE footer_Type='1' and footer_Page='99' and footer_Status='0'";
$querya1= $conn->query($sql_a1);

?>



<link rel="stylesheet" href="footer.css">

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <ul>
    <?php
        if($querya1->num_rows > 0){
          while ($a1 = $querya1->fetch_assoc()) { ?>
                   <h4 class=""<?php echo $a1['footer_Headtext']; ?>></h4>
    <?php }
          }
                 ?>
                </ul>
                    <ul><h4 class="">ABOUT US</h4>
                </ul>
                    <ul class="nav flex-column">
                        <li><a href="#" class="btn btn-primary">COMPANY PROFILE</a></li>
                        <li><a href="#" class="btn btn-primary">OUR BRAND</a></li>
                        <li><a href="#" class="btn btn-primary">VISION & CORPORATE DIRECTION</a></li>
                        <li><a href="#" class="btn btn-primary">CHAIRMAN MESSAGE</a></li>
                        <li><a href="#" class="btn btn-primary">BOARD & COMMITTEE</a></li>
                        <li><a href="#" class="btn btn-primary">OUR STRUCTURE</a></li>
                        <li><a href="#" class="btn btn-primary">CORPORATE TIMELINE</a></li>
                    </ul>
                    <ul><h4>ABOUT US</h4>
                </ul>
                    <ul>
                        <li><a href="#" class="btn btn-primary">COMPANY PROFILE</a></li>
                        <li><a href="#" class="btn btn-primary">OUR BRAND</a></li>
                        <li><a href="#" class="btn btn-primary">VISION & CORPORATE DIRECTION</a></li>
                        <li><a href="#" class="btn btn-primary">CHAIRMAN MESSAGE</a></li>
                        <li><a href="#" class="btn btn-primary">BOARD & COMMITTEE</a></li>
                        <li><a href="#" class="btn btn-primary">OUR STRUCTURE</a></li>
                        <li><a href="#" class="btn btn-primary">CORPORATE TIMELINE</a></li>
                    </ul>
                        <h4>NEW ROOM</h4>
                        <h4>BLOG</h4>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>OUR BUSSINESS</h4>
                    <ul>
                        <li><a href="#" class="btn btn-primary">COMMERCIAL</a></li>
                        <li><a href="#" class="btn btn-primary">RESIDENTIAL</a></li>
                        <li><a href="#" class="btn btn-primary">HOSPITALITY</a></li>
                        <li><a href="#" class="btn btn-primary">INFRASTRUCTURE</a></li>
                    <ul>
                        <h4>SUSTAINABILITY</h4>
                    </ul>
                     <li><a href="#" class="btn btn-primary">INTRODUCTION</a></li>
                     <li><a href="#" class="btn btn-primary">FRAMEWORK</a></li>
                     <li><a href="#" class="btn btn-primary">JOURNEY</a></li>
                     <li><a href="#" class="btn btn-primary">INITIATIVES</a></li>
                     <li><a href="#" class="btn btn-primary">SEAYOUTOMORROW</a></li>
                    </ul>
                    <ul>
                    <h4>PRIVACY NOTICE</h4> 
                    </ul>
                    
        </div>
    </div>

</footer>