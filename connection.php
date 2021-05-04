<?php
$host="localhost" ;
$dbname="id16738121_gsmguide" ;
$dbuser="id16738121_admin" ;
$pass="@q@y3QSMO}Ws7@Et" ;
try {

    $db= new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$pass) ;
    echo "connected Successfully" ;
}catch (\Throwable $exception) {
    echo "error".$exception->getMessage();
}