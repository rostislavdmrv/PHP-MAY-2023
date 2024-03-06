<?php
include 'start.php';

$conn = new mysqli($servername, $username, $password);

$sql = 'CREATE Database info_books';
 if ($queryResource=mysqli_query($dbConn,$sql))
 {
 echo "Базата данни е създадена. <br>";
 }
 else
 {
 echo "Грешка при създаване на базата данни: ";
 } 
 mysqli_select_db($dbConn,"info_books");
 
 $sql1 = "CREATE TABLE books(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    author VARCHAR(30) NOT NULL,
    publisher VARCHAR(30) NOT NULL,
    year INT(4) NOT NULL 
     )";
 mysqli_query($dbConn,$sql1);
 
 
 
 

