<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i = 1;
        while ($i<10)
        {
            echo"abc ";
            $i++;
        }
        echo"<br>";
        $i = 1;
        do{
            echo"xyz ";
            $i++;
        }
        while($i<10);
        echo"<br>";
 
        for($i = 1; $i<10;$i++){
            echo $i." ";
        }
 
 
        echo"<ol>";
        for($i = "A";$i <="F";$i++){
            echo "<li>ITEM".$i."</li>";
 
        }
        echo "</ol>";
        ?>
    </body>
</html>
