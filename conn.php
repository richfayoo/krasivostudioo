<?php
$servername = "localhost";
$username = "fayyy";
$password = "Getu;jla+wd#";
$dbname = "rmubtzlv_krasivostudio";

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    }catch(mysqli_sql_exception $error){
        echo "koneksi gagal:" . $error->getMessage();
    }

?>