<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "krasivostudio";

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    }catch(mysqli_sql_exception $error){
        echo "koneksi gagal:" . $error->getMessage();
    }

?>