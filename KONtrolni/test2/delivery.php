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
        <?php
        include_once  "config.php";
if(isset($_POST["submit"])){
    $sql = "SELECT * FROM articles";
    $found = false;
    $name = $_POST["name"];
    $result = mysqli_query($dBConn, $sql);

    while($row = mysqli_fetch_array($result)){
        if($row["name"] == $_POST["name"]){
            $found = true;
            $count = $row["count"] + 1;
            $sql = "UPDATE articles SET count=$count WHERE id={$row["id"]}";

            if(mysqli_query($dBConn, $sql)){
                echo "Product added<br>";
            }

            echo "Name: {$row["name"]} Price: {$row["price"]} count: $count ";
        }
    }

    if(!$found){
        echo "No such product";
    }
}
        ?>
    </body>
</html>
