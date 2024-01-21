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
        <form method="post"action="#">
        Please enter the number: <br />
        <input type="text" name="number" />
        <br/>
        <p />
        <input type="submit" name="submit" value="Go" />
        </form>
        <?php
        if (isset($_POST['submit'])){ 
            $num = $_POST["number"];
            $flag=1;
        if ($num == 1) $flag= 1;
        for ($i = 1; $i <= $num/2; $i++){
            if ($num % $i == 0)
                $flag= 1;
            else 
            { $flag= 0;} 
            
         }
 
        if ($flag) 
            echo 'Number '.$num." is prime";
        else
            echo 'Number '.$num." is  not prime";
}
        ?>
    </body>
</html>
