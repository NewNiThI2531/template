<?php
$version = time();
// $version = 1;

if(!isset($_GET['page']) || $_GET['page'] == ""){
  $_GET['page'] = "home";
}else {
  $_GET['page'] = $_GET['page'];
}

$page = array(

    'home' => 'view/body/home.php',
    'about' => 'view/aboutus/about.php',
    'ourbrand' => 'view/ourbrand/ourban.php',
    'chairmanmessage' =>'view/chairman/cm.php',
    'vision' => 'view/vis/vision.php',

    'board' =>'view/board/board1.php',
    'boardA' =>'view/board/boardA.php',
    'board-detail' =>'view/board/board-detail.php',

    'ourstructure' =>'view/ourstruc/structure.php',
    'corporate' =>'view/corporate/corporate.php',
    'ourbusiness' =>'view/ourbusiness/ourbusiness.php',
    
    'blog' =>'view/blog/blog.php',
    'blog-detail' =>'view/blog-detail/blog-detail.php',

    'news' =>'view/news/new.php',
    'news-detail' =>'view/news-detail/news-detail.php',

    'project' =>'view/project/pro.php',
    'project-detail' =>'view/project-detail/project-detail.php',

    'commercial' =>'view/commercial/commer.php',
    'commer-detail' =>'view/commer-detail/commer-detail.php',

    'contacus' =>'view/contacus/contac.php',
    'contact' =>'view/contactForm/conForm.php',
    'complaint' =>'view/complaintForm/complaint.php',
    
    'abus' =>'view/abus/abu.php',
    'sustainability' =>'view/sustain/sustain.php',

    'sustainpolicy' =>'view/sutainpolicy/spolicy.php',
    'sustaintarget' =>'view/sutainpolicy/target.php',
    'sustainframework' =>'view/sutainpolicy/framework.php',
    'sustainsustainble' =>'view/sutainpolicy/sustainble.php',

    'governance'=>'view/governance/gover.php',
    'investor' =>'view/investor/investor.php',
    'faq' =>'view/faq/fa.php'
);
/*echo $page [$_GET['page']];*/
$js = array(
    'home' => 'view/body/home.js',
    'chairmanmessage' =>'view/chairman/cm.js',
    'investor' =>'view/investor/investor.js',
    'blog' =>'view/blog/blog.js',
    'complaint' =>'view/complaintForm/complaint.js',
    'contact' =>'view/contactForm/conForm.js',
    'corporate' =>'view/corporate/corporate.js',
    'commercial' =>'view/commercial/commer.js',
    'project' =>'view/project/pro.js',
    'news' =>'view/news/new.js',

    'boardA' =>'view/board/boardA.js',
);

$css = array(
    'home' => 'view/body/home.css',
    'about' => 'view/aboutus/about.css',
    'ourbrand' => 'view/ourbrand/ourban.css',
    'vision' => 'view/vis/viss.css',
    'chairmanmessage' =>'view/chairman/cm1.css',

    'board' =>'view/board/board1.css',
    'boardA' =>'view/board/boardA.css',
    'board-detail' =>'view/board/board-detail.css',

    'ourstructure' =>'view/ourstruc/structure.css',
    'corporate' =>'view/corporate/corporate.css',
    'ourbusiness' =>'view/ourbusiness/ourbusiness.css',

    'blog' =>'view/blog/blog.css',
    'blog-detail' =>'view/blog-detail/blog-detail.css',

    'news' =>'view/news/new.css',
    'news-detail' =>'view/news-detail/news-detail.css',

    'project' =>'view/project/pro.css',
    'project-detail' =>'view/project-detail/project-detail.css',

    'commercial' =>'view/commercial/commer.css',
    'commer-detail' =>'view/commer-detail/commer-detail.css',

    'contacus' =>'view/contacus/contac.css',
    'contact' =>'view/contactForm/conForm.css',
    'complaint' =>'view/complaintForm/complaint.css',
    
    'abus' =>'view/abus/abu.css',
    'sustainability' =>'view/sustain/sustain.css',

    'sustainpolicy' =>'view/sutainpolicy/spolicy.css',
    'sustaintarget' =>'view/sutainpolicy/spolicy.css',
    'sustainframework' =>'view/sutainpolicy/spolicy.css',
    'sustainsustainble' =>'view/sutainpolicy/spolicy.css',

    'governance'=>'view/governance/gover.css',
    'investor' =>'view/investor/investor.css',
    'faq' =>'view/faq/fa.css'
);