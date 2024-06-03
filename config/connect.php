<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// $username_db = 'arrakmit_estate1';
// $password_db = '$6c0wfP73';
// $db_host = 'localhost';
// $db_name = 'arrakmit_estate1';
// $conn = new mysqli($db_host,$username_db,$password_db,$db_name);
// $conn->set_charset('utf8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="arrakmit_estate1";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$conn->query("set names utf8");

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
$lang="";
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
};

$_SESSION['lang'] = (isset($_GET["lang"]) ? $_GET["lang"] : (($_SESSION['lang']) ? $_SESSION['lang'] : "TH"));

$lang = (isset($_SESSION['lang']) ? $_SESSION['lang'] : "TH");

$lang_txt = ($lang == 'EN' ? $lang_arr["EN"] : $lang_arr["TH"]);

?>
