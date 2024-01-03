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
        <?php
        $file = fopen("data.txt", "a");
        $text = "\nСтудентите редовно си пишат домашните.";
        fwrite($file, $text);
        fclose($file);
        
        $file = fopen("data.txt", "r");
        $content = fread($file, filesize("data.txt"));
        fclose($file);
        echo $content . "<br>";
        echo "Размер на файла: " . filesize("data.txt") . " байта.";
        ?>
    </body>
</html>
