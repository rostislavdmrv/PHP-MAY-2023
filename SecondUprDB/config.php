<?php
$host= 'localhost'; 
$dbUser= 'root'; 
$dbPass= ''; 

if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) {
 die('Не може да се осъществи връзка със сървъра.');
}

$dBConn = mysqli_connect("localhost","root","");
mysqli_select_bd($bdConn,"shop");


