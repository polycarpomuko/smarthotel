<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="hotel";

$_conn=new mysql($host,$user,$pass,$db);
if ($conn->connect_error){
    die("connection failed:" .$_conn->connect_error);
}
?>