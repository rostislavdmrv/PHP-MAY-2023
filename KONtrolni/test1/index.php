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
            
            <p>Магазин :<br>
            <input type="radio" id =" ma" name="magazin" value="Верига магазини А">
            <label for="ma">Верига магазини А</label><br>
            <input type="radio" id ="mb" name="magazin" value="Верига магазини B">
            <label for="mb">Верига магазини B</label><br>
            <input type="radio" id ="mc" name="magazin" value="Верига магазини C">
            <label for="mc">Верига магазини C</label></p>
            
            <p>Адреси :<br>
            <input type="checkbox" id="adress1" name="adress[]" value="Варна" >
            <label for="adress1">Варна</label><br>
            <input type="checkbox" id="adress2" name="adress[]" value="София" >
            <label for="adress2">София</label><br>
            <input type="checkbox" id="adress3" name="adress[]" value="Пловдив" >
            <label for="adress3">Пловдив</label>
            <br></p>
	    
            <p>Купувач:<br>
            Име:
            <input type="text"  name="ime">
            <br>Фамилия:
            <input type="text"  name="fam">
            <br>Булстат:
            <input type="text"  name="num"></p>
           
            <p>Въведете брой за избраните артикули:<br> 
            <input type="number"  name="a1">
            Артикули от 1 лев:<br>
            <input type="number"  name="a2">
            Артикули от 2 лев:<br>
            <input type="number"  name="a3">
            Артикули от 3 лев:<br>
            <input type="number"  name="a4">
            Артикули от 4 лев:<br>
            <br><br>
            <input type="submit"  name="submit"  value="Запис">
            <input type="reset" name="reset"  value="Отказ">
            
	</form>
        <?php
        if(isset($_POST["submit"])){
            $name = $_POST["ime"];
            $lastName = $_POST["fam"];
            $number = $_POST["num"];
            $shop = $_POST["magazin"];
            $adress = isset($_POST['adress']) ;
                      
            $a1 = $_POST["a1"];
            $a2 = $_POST["a2"];
            $a3=$_POST["a3"];
            $a4 = $_POST["a4"];
            $br = ($a1+$a2+$a3+$a4);
            $price = ($a1 + 2*$a2 + 3*$a3 + 4*$a4);
            
            $customur = "Клиентът ".$name." ".$lastName . " с булстат ".$number." е поръчал от ".$shop." находящи се в градове:".implode(", ", $_POST['adress']). " ".$br." броя артикули на обща цена ".$price." лева";
            file_put_contents("file.txt", $customur, FILE_APPEND);
        }
        ?>
    </body>
</html>
