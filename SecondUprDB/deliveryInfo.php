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
            
            <p>Добавки:<br>доставна цена
            <input type="number"  name="price">
            <br>Брой :
            <input type="number"  name="count">
            <br>Доставчик:
            <input type="text"  name="ime">
            </p>
            <input type="submit"  name="submit"  value="Запис">
            
            
	</form>
        <?php
        include_once 'config.php'; 
        if(isset($_POST["submit"])){
            $price = $_POST["price"];
            $count = $_POST["count"];
            $delivery = $_POST["ime"];
            
        }
        $sql = "SELECT * FROM adds";
        $result = mysqli_query($dbConn, $sql)
               /* while($row= mysqli_fetch_assoc($result)){
                    echo "<option value= ".$row['ID_adds']."></option>";
                }*/
        ?>
    </body>
</html>
