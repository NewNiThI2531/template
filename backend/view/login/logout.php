<?php


include '../../config/connect.php';
session_destroy();
header( "location: ../../index.php" );
exit();
?>