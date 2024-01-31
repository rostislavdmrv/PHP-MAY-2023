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
        <form method="post" >
	    
            Фирма:
            <input type="text"  name="ime">
            <br>Булстат:
            <input type="text"  name="bulstat">
            <br>Населено място:
            <select  name="townid">
            
            <?php
            echo '<option > gggg</option>';
            include 'config.php';
            $result = mysqli_query($dbConn, "SELECT * FROM city");
            echo '<option > gggg</option>';
            while ($row = mysqli_fetch_array($result))
            {
                echo '<option value = '.$row['ID_city'].'>'.$row['name'].'</option>';
            }
            ?></select>
            <br>
            
            Telephone:
            <input type="text"  name="telephone">
            <br>година на регистрация  :
            <input type="text"  name="year">
            <br>лице за контакт :
            <input type="text"  name="contact"><br>
            
           
            
            <br><br>
            <input type="submit"  name="submit"  value="Запис">
            <input type="reset" name="reset"  value="Отказ">
            
	</form>
        <?php
        
        
        ?>
    </body>
</html>
