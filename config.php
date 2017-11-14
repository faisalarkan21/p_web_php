 <!-- 2. Agung -->
<?php

$databaseHost = 'localhost';
$databaseName = 'p_web';
$databaseUsername = 'root';
$databasePassword = 'arkan14811';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}