<?php
$servername = "localhost";
$username = "richfayyy";
$password = "Getu;jla+wd#";
$dbname = "rmubtzlv_richfayyy";

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    }catch(mysqli_sql_exception $error){
        echo "koneksi gagal:" . $error->getMessage();
    }

?>