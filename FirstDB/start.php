<?php

$host= 'localhost'; 
$dbUser= 'root'; 
$dbPass= ''; 

if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) {
 die('Не може да се осъществи връзка със сървъра.');
}
echo 'Връзката е успешна!';

