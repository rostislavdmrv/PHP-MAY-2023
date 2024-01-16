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
        
        function check_triangle($a, $b, $c) {
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        return "Invalid input. Side lengths must be positive numbers.";
    }

    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Not a triangle.";
    }

    $p = ($a + $b + $c) / 2;
    $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

    if ($a == $b && $b == $c) {
        return "Equilateral triangle. Area: " . $area;
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Isosceles triangle. Area: " . $area;
    } else {
        return "Scalene triangle. Area: " . $area;
    }
}
        ?>
    </body>
</html>
