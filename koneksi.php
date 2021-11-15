<?php
//deklarasi
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'bengkel');

//parameter
$koneksi = mysqli_connect(HOST, USER, PASS, DB);
//if ($connection) {
//    echo ("Connection has been successfully");
//} else {
//    die('Unable Connection');
//}
header('Content-Type: application/json');