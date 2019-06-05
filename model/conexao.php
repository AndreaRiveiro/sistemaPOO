<?php
$host = "mysql:host=Localhost;dbname=sistemaPoo;charsert=utf8mb4;port=3306";
$dbUser = "root";
$dbPass = "";

try{

$con = new PDO($host, $dbUser, $dbPass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);


}catch(PDOException $e){
    echo "estamos em  manutenção, volte novamente mais tarde";
    echo $e->getMessage();
}