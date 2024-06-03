<?php
    include 'config/connect.php';

    $lang_arr = [
        "TH" => [
            "title" => "หัวข้อไทย"
        ],
        "EN" => [
            "title" => "Title english"
        ]
    ];

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    $parameter = parse_url($_SERVER['REQUEST_URI']);
    if(isset($_GET)){
        $url_m = "";
        foreach ($_GET as $key => $value) {
            if($key != 'lang'){
                $url_m .= $key."=".$value."&";
            }
        }
        $actual_link = $actual_link."/?".$url_m;
    }
    
    $_SESSION['lang'] = (isset($_GET["lang"]) ? $_GET["lang"] : (($_SESSION['lang']) ? $_SESSION['lang'] : "TH"));

    $lang = (isset($_SESSION['lang']) ? $_SESSION['lang'] : "TH");

    $lang_txt = ($lang == 'EN' ? $lang_arr["EN"] : $lang_arr["TH"]);

    // $lang_txt = $lang_arr[$lang];


    $contents = [];
    $contents_new = [];

    $sql = "SELECT * FROM Database_content WHERE Content_Type IN (1) and Content_Page='5' and Content_Status='0' LIMIT 1";
    $query = $conn->query($sql);

    while ($cma = $query->fetch_assoc()) {
        $contents_new[] = $cma;
        
        $cma["con_text"] = ($lang == 'EN' ? $cma["con_textEN"] : $cma["con_text"]);

        $contents[] = $cma;
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

    <title>Bootstrap Example</title>

    <link rel="stylesheet" href="asset/plugins/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <link rel="stylesheet" href="view/menu/menu.css">
    <link href="view/menu/menu.css<?='?v='.$version?>" rel="stylesheet">
    <link href="view/footter/footter.css<?='?v='.$version?>" rel="stylesheet">
    <link href="<?=$css[$_GET['page']].'?v='.$version?>" rel="stylesheet">
    
</head>
<body>
    <div>

        <a href="<?=(isset($parameter['query']) ? $actual_link."lang=TH" : '/?lang=TH')?>">TH</a> 
        / <a href="<?=(isset($parameter['query']) ? $actual_link."lang=EN" : '/?lang=EN')?>">EN</a>

    </div>

    <div style=""><?=$lang?></div>
    <div style="margin-bottom: 50px;"><?=$lang_txt["title"]?></div>

    <?php foreach ($contents as $key => $val) : ?>
        <div>
            <?=$val["con_text"]?>
        </div>
    <?php endforeach ?>
    

    <?php foreach ($contents_new as $key => $val) : ?>
        <div style="margin-top: 50px;">
            <?=($lang == 'EN' ? $val["con_textEN"] : $val["con_text"]."th")?>
        </div>
    <?php endforeach ?>


</body>
</html>