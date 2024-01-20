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
        echo "<ul>";
      for($i = 1; $i < 10;$i++)
 
      {
          //echo "<ul>.$i</ul>";
          echo" <li>x=".$i;
          echo "<ul><li> x ^3 = ". pow($i, 3)."</li></ul></li>";
      }
 
        echo "</ul>";
        ?>
    </body>
</html>
