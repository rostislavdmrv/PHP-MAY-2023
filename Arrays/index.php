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
        <?php
        $arr = array("Иван Иванов " => 4, "Драган Драганов" => 5.45, "Димо Петков" => 5.67);
        foreach ($a as $key => $val)
        {
            echo "<li>"."$key -> $val"."</li>";
        }
        ?>
    </body>
</html>
