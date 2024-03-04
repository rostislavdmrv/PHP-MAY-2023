<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="#" class="form">
            <label for="name"> Име на стоката</label><br>
            <input type ="text" name="name" id="name" required/><br><br>
            <label for="price"> Цена</label><br>
            <input type ="number" name="price" id="price" required/><br><br>
            <label for="count"> Бройки</label><br>
            <input type ="number" name="count" id="count" required/><br><br>
            
            <input type="submit" name="submit" value="Submit" id="submit"/><br><br>        
        
        </form>
        <?php
        include_once "config.php";
        if(isset($_POST["submit"])) {
            $name= $_POST["name"];
            $price = $_POST["price"];
            $count = $_POST["count"];
   
            
            $query = "INSERT INTO articles (name, price, count) values('$name', $price,$count)";
            mysqli_query($dBConn, $query);
            
        }
         $table = "<table border = 1 style='text-align:center;'><tr><td>ID</td><td>name</td><td>price</td><td>count</td></tr>";
        $sql = "SELECT * FROM articles";
        //$result = mysqli_query($dBConn, $sql);
        try {
            $result = mysqli_query($dBConn, $sql);
            
        }
        catch (Exception $e) {
            echo ("<br>Грешка при промяна на данните в таблицата: " . $e->getMessage());
            echo "<br/>";
            
        }
        if ($result) {
            echo "Таблицата е създадена!<br><br>";
            
        }
        while($row = mysqli_fetch_assoc($result)){
            $table .="<tr><td>".$row['ID']."</td><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['count']."</td></tr>";
        }
        $table.="</table>";
        echo $table;
        ?>
        <a href="index.php"> Назад </a><br>
    </body>
</html>
