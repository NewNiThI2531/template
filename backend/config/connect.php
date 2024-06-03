<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $username_db = 'arrakmit_estate1';
// $password_db = '$6c0wfP73';
// $db_host = 'localhost';
// $db_name = 'arrakmit_estate1';

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="arrakmit_estate1";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$conn->query("set names utf8");

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
