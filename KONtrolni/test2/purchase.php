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
            <label for="id"> Номер на продукт</label><br>
            <input type ="number" name="id" id="id" required/><br><br>
            <label for="name"> Име на продукта </label><br>
            <input type ="text" name="name" id="name" required/><br><br>
            <!--<label for="count"> Желани броики</label><br>
            <input type ="number" name="count" id="count" required/><br><br>-->
            
            <input type="submit" name="submit" value="Submit" id="submit"/><br><br>        
        
        </form>
        <?php
        include_once "config.php";

if (isset($_POST["submit"])) {
    $found = false;
    $sql = "SELECT * FROM articles";
    $result = mysqli_query($dBConn, $sql);

    echo '<table border="1" style="text-align: center;">
            <tr>
                <th>Име на продукта</th>
                <th>Цена</th>
                
            </tr>';


    while ($row = mysqli_fetch_array($result)) {
        if ($row["ID"] == $_POST["id"]) {
            echo '<tr>
                    <td>' . $row["name"] . '</td>
                    <td>' . $row["price"] . '</td>
                   
                </tr>';

            $found = true;
            if ($row["count"] > 0) {
                $count = (int)$row["count"];
                $count = $count - 1;
                $sql = "UPDATE articles SET count=$count WHERE ID={$row["ID"]}";

                if (mysqli_query($dBConn, $sql)) {
                    echo "Product bought, new quantity: $count";
                }
            } else {
                echo "Item is out of stock";
            }
        }
    }

echo '</table>';

            }
        ?>
    </body>
</html>
