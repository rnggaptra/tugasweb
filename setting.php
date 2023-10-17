<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'lalu_rendi';

$link = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo 'MySQL Error :' . mysqli_connect_error();
    
    exit();
}
?>