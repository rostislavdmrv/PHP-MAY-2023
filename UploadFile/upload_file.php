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
        require('zad2.php');
        
        if(isset($_POST["submit"])) {
            $_FILES["fileToUpload"]["type"];
            $target_dir = "Upload/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
            
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            
            
        }
        ?>
    </body>
</html>
