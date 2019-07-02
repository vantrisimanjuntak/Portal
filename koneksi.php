<?php 
$servername = "localhost";
$username = "root";
$password = "";
$name_db = "kampus";

$con = mysqli_connect($servername, $username, $password, $name_db) or die('Unable to Connect');
if(mysqli_connect_errno()) {
    echo "Gagal Terhubung ke MySQL: ".mysqli_connect_errno();
}
?>