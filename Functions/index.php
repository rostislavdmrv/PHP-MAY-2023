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
        <form method="post" action="#">
            <h1>Лице на правоъгълник</h1>
            <p>Въведете дължината и широчината на правоъгълник .<br></p>
            <p>Дължина:
            <input type="text"  name="lenght">
	    Широчина:
            <input type="text"  name="widtch">
            </p>
            <br>
            <input type="submit"  name="submit"  value="Go">
                   		
	</form>
        <?php
         function recArea($l,$w){
                $area =  2*$l +2*$w;
                return  $area;
                }
        
        if (isset($_POST['submit'])){
            $a = $_POST["lenght"];
             $b = $_POST["widtch"];
             
            echo ''.recArea($a,$b);
           
            }
        
        
        ?>
    </body>
</html>
