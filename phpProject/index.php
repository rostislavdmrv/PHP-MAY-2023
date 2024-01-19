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
        Please enter a: <br />
        <input type="text" name="a" />
        <br/>
        <br/>
        Please enter b: <br />
        <input type="text" name="b" /> 
        <br/>
        <br/>
        Please enter c: <br />
        <input type="text" name="c" /> 
        <p />
        <br/>
        <input type="submit" name="submit" value="Go" />
        </form>
        <?php
        if (isset($_POST['submit']))
         {
             $a = $_POST["a"];
             $b = $_POST["b"];
             $c = $_POST["c"];
             $diskriminanta = pow($b,2)-4*$a*$c;
             
             if($diskriminanta > 0)
             {
                 $X1 = (-$b+ sqrt($diskriminanta) /(2*$a));
                 $X2 = (-$b -  sqrt($diskriminanta) /(2*$a)); 
                 
                 echo 'x1 ='.round($X1,2).'<br/>';
                 echo 'x2 ='.round($X2,2);
                 
             }
             elseif ($diskriminanta == 0) {
                 $x3 = (sqrt($diskriminanta) /(2*$a));
                 echo 'x1=x2'.round($x3,2);
                 
             }
             else
                 {
                  echo ('Nqma reshenie !');
                 }
        
         }
        ?>
    </body>
</html>
