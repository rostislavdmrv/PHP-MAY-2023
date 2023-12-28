<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            form {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
 
 
        </style>
    </head>
    <body>
 
        <?php
        echo "</br>ZAD 1</br>";
        $x = 8;
        echo "Add 2. x=".($x+=2)."</br>";
        echo "Subtract 4. x=".($x-=4)."</br>";
        echo "Multiply by 5. x=".($x*=5)."</br>";
        echo "Divide by 3. x=".($x/=3)."</br>";
        echo "Increment value by one. x=".(++$x)."</br>";
        echo "Decrement value by one. x=".(--$x)."</br>";
        ?>
 
        <?php
        echo "</br>ZAD 2</br>";
        $x = 10;
        $y = 7;
        if($x > $y) {
            echo "x > y </br>";
        } else if ($x < $y) {
            echo "x < y </br>";
        } else {
            echo "x = y </br>";
        }
        ?>
 
        <?php
        echo "</br>ZAD 3</br>";
        $name = "Harry";
        $age = 28;
        echo var_dump($name)."</br>$name ";
        echo var_dump($age);
 
        ?>
        <form method="POST" action="<?php echo
$_SERVER['PHP_SELF']; ?>">
            <label>Name: <input type="text" name="ime"/></label> 
            <label>Age: <input type="text" name="age"/></label>
            <input type="submit" name="submit" value="go" id="submit"/>
        </form>
 
        <pre>
        <?php
        if(isset($_POST["submit"])) {
            $a = $_POST["ime"];
            echo "$a";
        }
        ?>
        </pre>
    </body>
</html>
