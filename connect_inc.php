<?php
session_start(); 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=astoria;charset=utf8','root','');
}catch(\Throwable $th){}
 
?>