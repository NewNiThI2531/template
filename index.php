<?php
  include 'config/connect.php';
  include 'controller/controllerPage.php';
  $useragent = $_SERVER["HTTP_USER_AGENT"];
  $device = 'pc';
   if(stripos($useragent, "mobile")!== false){
     $device = "mobile";
   }

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <title>Product example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">

    <meta name="theme-color" content="#712cf9">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <link rel="stylesheet" href="asset/plugins/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link href="asset/lib/fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="view/menu/menu.css">
    <link href="view/menu/menu.css<?='?v='.$version?>" rel="stylesheet">
    <link href="view/footter/footter.css<?='?v='.$version?>" rel="stylesheet">
    <link href="<?=$css[$_GET['page']].'?v='.$version?>" rel="stylesheet">

    <link rel="stylesheet" href="asset/web/font.css">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!--  -->

    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex, nofollow">
    <title> My Tab Page </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900&subset=latin,latin-ext">
    <link rel="stylesheet" type="text/css" href="tabbable.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

    <!--  -->
    
</head>
<body>
    <iframe src="" width="" height="" name="calldata" id="calltact" style="display:none;"></iframe>
    <iframe src="" width="" height="" name="calldata" id="calldata" style="display:none;"></iframe>
    <?php include ('view/menu/menu.php') ?>
    <?php include $page[$_GET['page']]; ?>
    <div class="container container-custom">
    </div>
    <?php include ('view/footter/footter.php')?>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="asset/lib/s-pagination/dist/pagination.js"></script>
    <script src="asset/js/jquery-3.6.2.min.js"></script>

    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?=$js[$_GET['page']].'?v='.$version?>" charset="utf-8"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!--  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    
    </div>
</body>
</html>