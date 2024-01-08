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
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
		Изберете файл:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
		<input type="submit" value="Качи" name="submit">
	</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
