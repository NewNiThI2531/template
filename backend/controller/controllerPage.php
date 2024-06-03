<?php
$version = time();
// $version = 1;
$pages = "";

if(!isset($_GET['page']) || $_GET['page'] == ""){
  if(isset($_SESSION['DATA_LOGIN']) && $_SESSION['DATA_LOGIN'] != ''){
    $_GET['page'] = "home-banner";
    $pages = "home-banner";
  }else{
    $_GET['page'] = "login";
    $pages = "login";
  }


}else {
  $_GET['page'] = $_GET['page'];
  $pages = $_GET['page'];
}

$page = array(
    'admin' => 'view/admin/admin.php',
    'login' => 'view/login/login.php',

    'aboutus-column1' => 'view/aboutus/column1.php',

    'abus-banner' => 'view/abus/banner.php',
    'abus-column1' => 'view/abus/column1.php',
    'abus-column2' => 'view/abus/column2.php',
    'abus-button' => 'view/abus/button.php',

    'blog' => 'view/blog/blog.php',
    'blog-create' => 'view/blog-create/blog-create.php',

    'chairman-column' => 'view/chairman/chairman.php',

    'board-column1' => 'view/board/column1.php',
    'boardB' => 'view/board/boardB.php',
    'board-create' => 'view/board-create/board-create.php',

    
    'commercial-banner' => 'view/commercial/banner.php',
    'commercial-column1' => 'view/commercial/column1.php',

    'contacform-banner' => 'view/contacform/banner.php',
    'contacform-column1' => 'view/contacform/contacform1.php',
    'contacform-column2' => 'view/contacform/contacform2.php',

    'complaintform-banner' => 'view/complaintform/banner.php',
    'complaintform-column1' => 'view/complaintform/column1.php',

    'contacus-header' => 'view/contacus/header.php',
    'contacus-column1' => 'view/contacus/column1.php',
    'contacus-column2' => 'view/contacus/column2.php',
    'contacus-contact' => 'view/contacus/contact.php',
    'contacus-button' => 'view/contacus/button.php',

    'corporate-banner' => 'view/corporate/banner.php',
    'corporate-column1' => 'view/corporate/column1.php',
    'corporate-column2' => 'view/corporate/column2.php',
    'corporate-column3' => 'view/corporate/column3.php',

    'news' => 'view/news/news.php',
    'news-create' => 'view/news-create/news-create.php',

    'project' => 'view/project/project.php',
    'project-create' => 'view/project-create/project-create.php',
   
    'faq-banner' => 'view/faq/banner.php',
    'faq-column1' => 'view/faq/column1.php',
    'faq-column2' => 'view/faq/column2.php',

    'footer-column1' => 'view/footer/footer1.php',
    'footer-column2' => 'view/footer/footer2.php',
    'footer-column3' => 'view/footer/footer3.php',
    'footer-column4' => 'view/footer/footer4.php',

    'governance-column1' => 'view/governance/column1.php',
    'governance-column2' => 'view/governance/column2.php',
    'governance-column3' => 'view/governance/column3.php',
    'governance-column4' => 'view/governance/column4.php',
    'governance-column5' => 'view/governance/column5.php',
    'governance-column6' => 'view/governance/column6.php',

    // 'home-content' => 'view/home/home.php',
    'home-Title' => 'view/home/Titlehome.php',
    'home-banner' => 'view/home/banner.php',
    'home-column21' => 'view/home/column21.php',
    'home-create' => 'view/home-create/home-create.php',
    'create-banner' => 'view/home-create/create-banner.php',

    'investor-banner' => 'view/investor/banner.php',
    'investor-column1' => 'view/investor/column1.php',
    'investor-column2' => 'view/investor/column2.php',
    'investor-column3' => 'view/investor/column3.php',
    'investor-column4' => 'view/investor/column4.php',
    'investor-column5' => 'view/investor/column5.php',

    'head-menu' => 'view/menu/headmenu.php',
    'menu-column1' => 'view/menu/column1.php',
    'menu-column2' => 'view/menu/column2.php',
    'menu-column3' => 'view/menu/column3.php',
    'menu-column4' => 'view/menu/column4.php',

    'ourbrand-banner' => 'view/ourbrand/banner.php',
    'ourbrand-column1' => 'view/ourbrand/column1.php',
    'ourbrand-column21' => 'view/ourbrand/column21.php',
    'ourbrand-column22' => 'view/ourbrand/column22.php',

    'vis-banner' => 'view/vis/banner.php',
    'vis-column1' => 'view/vis/column1.php',
    'vis-column2' => 'view/vis/column2.php',
    'vis-column3' => 'view/vis/column3.php',

  
    'ourbusiness-banner' => 'view/ourbusiness/banner.php',
    'ourbusiness-column1' => 'view/ourbusiness/column1.php',
    'ourbusiness-column2' => 'view/ourbusiness/column2.php',
    'ourbusiness-column3' => 'view/ourbusiness/column3.php',
    'ourbusiness-column4' => 'view/ourbusiness/column4.php',

    
    'ourstruc-banner' => 'view/ourstruc/banner.php',
    'ourstruc-column1' => 'view/ourstruc/column1.php',

    'sustain-banner' => 'view/sustain/banner.php',
    'sustain-column11' => 'view/sustain/column11.php',
    'sustain-column12' => 'view/sustain/column12.php',

    'sustainpolicy-column11' => 'view/sustainpolicy/column11.php',
    'sustainpolicy-column12' => 'view/sustainpolicy/column12.php',
    'sustainpolicy-column13' => 'view/sustainpolicy/column13.php',
    'sustainpolicy-column14' => 'view/sustainpolicy/column14.php',
    'sustain-policy' => 'view/sustainpolicy/Policy.php',

    'layout' => 'view/layout/layout.php',
);
/*echo $page [$_GET['page']];*/
$js = array(
    // 'home-content' => 'view/home/home.js',
    'home-Title' => 'view/home/column1.js',
    'home-banner' => 'view/home/banner.js',
    'home-column21' => 'view/home/column.js',
    'home-create' => 'view/home-create/home-create.js',
    'create-banner' => 'view/home-create/home-create.js',

    'aboutus-column1' => 'view/aboutus/column.js',

    'corporate-banner' => 'view/corporate/column.js',
    'corporate-column1' => 'view/corporate/column.js',
    'corporate-column2' => 'view/corporate/column.js',
    'corporate-column3' => 'view/corporate/column.js',

    'abus-banner' => 'view/abus/column.js',
    'abus-column1' => 'view/abus/column.js',
    'abus-column2' => 'view/abus/column.js',
    'abus-button' => 'view/abus/column.js',

   
    'vis-banner' => 'view/vis/banner.js',
    'vis-column1' => 'view/vis/column.js',
    'vis-column2' => 'view/vis/column.js',
    'vis-column3' => 'view/vis/column.js',

    'ourbrand-banner' => 'view/ourbrand/column.js',
    'ourbrand-column1' => 'view/ourbrand/column.js',
    'ourbrand-column21' => 'view/ourbrand/column21.js',
    'ourbrand-column22' => 'view/ourbrand/column.js',

    'blog' => 'view/blog/blog.js',
    'blog-create' => 'view/blog-create/blog-create.js',
    
    'chairman-column' => 'view/chairman/chairman.js',

    'news' => 'view/news/news.js',
    'news-create' => 'view/news-create/news-create.js',

    'project' => 'view/project/project.js',
    'project-create' => 'view/project-create/project-create.js',

    'board-column1' => 'view/board/column.js',
    'boardB' => 'view/board/boardB.js',
    'board-create' => 'view/board-create/board-create.js',
    
    'ourstruc-banner' => 'view/ourstruc/column.js',
    'ourstruc-column1' => 'view/ourstruc/column.js',

    'ourbusiness-banner' => 'view/ourbusiness/banner.js',
    'ourbusiness-column1' => 'view/ourbusiness/column.js',
    'ourbusiness-column2' => 'view/ourbusiness/column.js',
    'ourbusiness-column3' => 'view/ourbusiness/column.js',
    'ourbusiness-column4' => 'view/ourbusiness/column.js',

    'commercial-banner' => 'view/commercial/banner.js',
    'commercial-column1' => 'view/commercial/column.js',
    
    'faq-banner' => 'view/faq/column.js',
    'faq-column1' => 'view/faq/column.js',
    'faq-column2' => 'view/faq/column.js',

    'footer-column1' => 'view/footer/columnB.js',
    'footer-column2' => 'view/footer/columnB.js',
    'footer-column3' => 'view/footer/columnB.js',
    'footer-column4' => 'view/footer/columnB.js',
    
    'sustain-banner' => 'view/sustain/column.js',
    'sustain-column11' => 'view/sustain/columnA.js',
    'sustain-column12' => 'view/sustain/column.js',

    'investor-banner' => 'view/investor/banner.js',
    'investor-column1' => 'view/investor/column.js',
    'investor-column2' => 'view/investor/column.js',
    'investor-column3' => 'view/investor/column.js',
    'investor-column4' => 'view/investor/column.js',
    'investor-column5' => 'view/investor/column.js',

    'contacus-header' => 'view/contacus/column.js',
    'contacus-column1' => 'view/contacus/column.js',
    'contacus-column2' => 'view/contacus/column.js',
    'contacus-contact' => 'view/contacus/column.js',
    'contacus-button' => 'view/contacus/column.js',

    'contacform-banner' => 'view/contacform/banner.js',
    'contacform-column1' => 'view/contacform/contactform.js',
    'contacform-column2' => 'view/contacform/contactform.js',

    'complaintform-banner' => 'view/complaintform/banner.js',
    'complaintform-column1' => 'view/complaintform/column.js',

    'sustainpolicy-column11' => 'view/sustainpolicy/column.js',
    'sustainpolicy-column12' => 'view/sustainpolicy/column.js',
    'sustainpolicy-column13' => 'view/sustainpolicy/column.js',
    'sustainpolicy-column14' => 'view/sustainpolicy/column.js',
    'sustain-policy' => 'view/sustainpolicy/columnA.js',

    'governance-column1' => 'view/governance/column.js',
    'governance-column2' => 'view/governance/column.js',
    'governance-column3' => 'view/governance/download.js',
    'governance-column4' => 'view/governance/download.js',
    'governance-column5' => 'view/governance/download.js',
    'governance-column6' => 'view/governance/download.js',

    'head-menu' => 'view/menu/menu.js',
    'menu-column1' => 'view/menu/menu.js',
    'menu-column2' => 'view/menu/menu.js',
    'menu-column3' => 'view/menu/menu.js',
    'menu-column4' => 'view/menu/menu.js',
);

$css = array(
    'admin' => 'view/admin/admin.css',
    'login' => 'view/login/login.css',

    'aboutus-column1' => 'view/aboutus/column.css',

    'abus-banner' => 'view/abus/banner.css',
    'abus-column1' => 'view/abus/column.css',
    'abus-column2' => 'view/abus/column.css',
    'abus-button' => 'view/abus/column.css',

    'blog' => 'view/blog/blog.css',
    'blog-create' => 'view/blog-create/blog-create.css',
    
    'chairman-column' => 'view/chairman/chairman.css',
    
    'news' => 'view/news/news.css',
    'news-create' => 'view/news-create/news-create.css',

    'project' => 'view/project/project.css',
    'project-create' => 'view/project-create/project-create.css',
    
    'board-content' => 'view/borad/board.css',
    'boardB' => 'view/board/boardB.css',
    'board-create' => 'view/board-create/board-create.css',

    'commercial-banner' => 'view/commercial/banner.css',
    'commercial-column1' => 'view/commercial/column.css',
 
    'contacus-header' => 'view/contacus/column.css',
    'contacus-column1' => 'view/contacus/column.css',
    'contacus-column2' => 'view/contacus/column.css',
    'contacus-contact' => 'view/contacus/column.css',
    'contacus-button' => 'view/contacus/column.css',
    
    'contacform-banner' => 'view/contacform/banner.css',
    'contacform-column1' => 'view/contacform/contacform.css',
    'contacform-column2' => 'view/contacform/contacform.css',

    'complaintform-banner' => 'view/complaintform/banner.css',
    'complaintform-column1' => 'view/complaintform/column.css',

    'corporate-banner' => 'view/corporate/column.css',
    'corporate-column1' => 'view/corporate/column.css',
    'corporate-column2' => 'view/corporate/column.css',
    'corporate-column3' => 'view/corporate/column.css',

    
    'faq-banner' => 'view/faq/banner.css',
    'faq-column1' => 'view/faq/column.css',
    'faq-column2' => 'view/faq/column.css',

    'footer-column1' => 'view/footer/columnB.css',
    'footer-column2' => 'view/footer/columnB.css',
    'footer-column3' => 'view/footer/columnB.css',
    'footer-column4' => 'view/footer/columnB.css',

    'governance-column1' => 'view/governance/column.css',
    'governance-column2' => 'view/governance/column.css',
    'governance-column3' => 'view/governance/column.css',
    'governance-column4' => 'view/governance/column.css',
    'governance-column5' => 'view/governance/column.css',
    'governance-column6' => 'view/governance/column.css',

    // 'home-content' => 'view/home/home.css',
    'home-Title' => 'view/home/column.css',
    'home-banner' => 'view/home/banner.css',
    'home-column21' => 'view/home/column.css',
    'home-create' => 'view/home-create/home-create.css',
    'create-banner' => 'view/home-create/home-create.css',

    'investor-banner' => 'view/investor/column.css',
    'investor-column1' => 'view/investor/column.css',
    'investor-column2' => 'view/investor/column.css',
    'investor-column3' => 'view/investor/column.css',
    'investor-column4' => 'view/investor/column.css',
    'investor-column5' => 'view/investor/column.css',

    'head-menu' => 'view/menu/menu.css',
    'menu-column1' => 'view/menu/menu.css',
    'menu-column2' => 'view/menu/menu.css',
    'menu-column3' => 'view/menu/menu.css',
    'menu-column4' => 'view/menu/menu.css',
    
    'ourbrand-banner' => 'view/ourbrand/column.css',
    'ourbrand-column1' => 'view/ourbrand/column.css',
    'ourbrand-column21' => 'view/ourbrand/column.css',
    'ourbrand-column22' => 'view/ourbrand/column.css',

    'vis-banner' => 'view/vis/banner.css',
    'vis-column1' => 'view/vis/column.css',
    'vis-column2' => 'view/vis/column.css',
    'vis-column3' => 'view/vis/column.css',

    'board-column1' => 'view/board/column.css',
    'board-column2' => 'view/board/column.css',
    'board-column3' => 'view/board/column.css',

    'ourbusiness-banner' => 'view/ourbusiness/banner.css',
    'ourbusiness-column1' => 'view/ourbusiness/column.css',
    'ourbusiness-column2' => 'view/ourbusiness/column.css',
    'ourbusiness-column3' => 'view/ourbusiness/column.css',
    'ourbusiness-column4' => 'view/ourbusiness/column.css',

    'ourstruc-banner' => 'view/ourstruc/column.css',
    'ourstruc-column1' => 'view/ourstruc/column.css',
    
    'sustain-banner' => 'view/sustain/column.css',
    'sustain-column11' => 'view/sustain/column.css',
    'sustain-column12' => 'view/sustain/column.css',

    'sustainpolicy-column11' => 'view/sustainpolicy/column.css',
    'sustainpolicy-column12' => 'view/sustainpolicy/column.css',
    'sustainpolicy-column13' => 'view/sustainpolicy/column.css',
    'sustainpolicy-column14' => 'view/sustainpolicy/column.css',
    'sustain-policy' => 'view/sustainpolicy/column.css',

    'layout' => 'view/layout/layout.css',

);