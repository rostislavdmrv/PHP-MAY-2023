<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="welcome.php"> Welcome, next page</a>
        <?php
        setcookie("user","Alex Porter",time()+60);
        // put your code here
        ?>
    </body>
</html>
