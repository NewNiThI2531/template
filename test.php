<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cm1{
            width: 49%
        }
        .cm2{
            width: 49%;
            position: relative;
            top: 100px
            
        }
    </style>
</head>
<body>
<div style="width: 700px">
    <img class="cm1" src="data\ree1.png">
    <img class="cm2" src="data\dee.png">
</div>
</body>
</html>

<?php
        $i=1;
        $i=2;
        foreach ($set as $key => $cmb2) {
                if ($cmb2['Set_Type'] == '2') { ?>
<img class="cm<?$i++?>" src=<?php echo $cmb2['set_image']; ?>>
<?php }
        }
       ?>