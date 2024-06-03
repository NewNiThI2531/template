<?php
include 'connect.php';
$sql = "select * from items where itemname like '%{$_POST['database_blog']}%'";
$query = mysql_query($sql);
?>
<div class="col-md-12">
 <table class="table table-bordered">
 <thead>
 <tr>
 <th>ลำดับ</th>
 <th>ชื่อ</th>
 <th>เนื้อหา</th>
 <th>name</th>
 <th>content</th>
 </tr>
 </thead>
 <tbody>
 <?php $i=1; while ($result = mysql_fetch_assoc($query)) { ?>
 <tr>
 <td><?php echo $i;?></td>
 <td><?php echo $result['bg_text'];?></td>
 <td><?php echo $result['bg_content'];?></td>
 <td><?php echo $result['bgtext_EN'];?></td>
 <td><?php echo $result['bgcontent_EN'];?></td>
 </tr>
 <?php $i++; } ?>
 </tbody>
 </table>
</div>