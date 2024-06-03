<?php 
include 'config/connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'controller/controllerPage.php'; 

if($_SESSION['DATA_LOGIN']['id']==''){
   header( "Location:view/login/login.php" );
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title></title> 
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <!-- <link rel="stylesheet" href="../asset/bootstrap5.2.3-alpha1-dist/css/bootstrap.min.css<?='?v='.$version?>"> -->
  <link rel="stylesheet" href="view/layout/layout.css<?='?v='.$version?>">
  <link href="<?=$css[$_GET['page']].'?v='.$version?>" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=La Belle Aurore"> -->
  <!-- <link href="asset/web/font.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">
  <link href="asset/lib/fontawesome/css/all.min.css" rel="stylesheet">

  <link href="asset/web/font.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../asset/css/style.css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body >
<iframe src="" width="" height="" name="calldata" id="calldata" style="display:none;"></iframe>
<!-- <div id="loading">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div> -->
    <iframe src="" width="" height="" name="calldata" id="calldata" style="display:none;"></iframe>
    <div class="container-fluid" >
      <div class="row">
        <?php if ($pages == '' || $pages == 'login'): ?>
          <div class="col-md-12 ms-sm-auto col-lg-12 px-md-4" style="min-height: 100vh;">
            <?php include $page[$_GET['page']]; ?>
          </div>
        <?php else: ?>
          <nav id="sidebarMenu" class="p-0 col-md-3 col-lg-2 d-md-block sidebar collapse menu-main">
            <?php include 'view/layout/layout.php'; ?>
          </nav>
          <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh;background: #f5d6a796;">
            <?php include $page[$_GET['page']]; ?>
            </div>        
             <?php endif; ?>
            </div> 
            </div>

    <script src="../asset/js/jquery-3.6.2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="../asset/js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?=$js[$_GET['page']].'?v='.$version?>" charset="utf-8"></script>
    </div>
    

    

    </body>
</html>