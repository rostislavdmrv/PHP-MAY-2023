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
    <form method="post" action="#">
    <br> Enter number of month: <br />
    <input type="text" name="month" />
    <br>
    <br>
    <input type="submit" name="submit" value="go" />
    </form>
        <?php
        if(isset ($_POST['submit'])){
            $month =$_POST['month'];
            switch($month)  {
             case 12:
             case 1:
             case 2:echo "winter";break;
             case 3:
             case 4:
             case 5:echo "Spring"; break;
             case 6:
             case 7:
             case 8:echo " Summer";break;
             case 9:
             case 10:
             case 11; echo "AUTEM"; break;
             }
        }
        ?>
    </body>
</html>
