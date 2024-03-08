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
            
            <p>Продукти:
            <br>ID
            <input type="number"  name="id">
            <br>Име
            <input type="text"  name="ime">
            <br>Единична цена:
            <input type="text"  name="price">
            <br>Брой :
            <input type="number"  name="count"></p>
            <input type="submit"  name="submit"  value="Запис">
            
            
	</form>
        <?php
        include 'config.php';
        if(isset($_POST["submit"])){
            $id = $_POST["id"];
            $name = $_POST["ime"];
            $price = $_POST["price"];
            $count = $_POST["count"];
        }
        $sql = "SELECT * FROM products";
        $result = mysqli_query($dbConn, $sql);
               while($row= mysqli_fetch_assoc($result))
               {
                    echo "<option value= ".$row['ID'].">".$row["name"]."</option>";
                }
        
        ?>
    </body>
</html>
