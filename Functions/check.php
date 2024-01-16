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
        <iframe src="zad2.php" width="500" height="500"></iframe>
        <?php
        
        require('functions.php');
        
        if (isset($_POST['submit'])){
            $a = $_POST["side_a"];
		$b = $_POST["side_b"];
		$c = $_POST["side_c"];

		echo "<p>Side a: " . $a . "</p>";
		echo "<p>Side b: " . $b . "</p>";
		echo "<p>Side c: " . $c . "</p>";

		echo "<p>" . check_triangle($a, $b, $c) . "</p>";
            }
        ?>
    </body>
</html>
