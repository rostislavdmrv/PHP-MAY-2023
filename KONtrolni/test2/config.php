<?php

$host  = "localhost";
    $user = "root";
    $pass = "";
    $dBConn = mysqli_connect($host, $user, $pass);
    
    
    if (!$dBConn) {
    die('Не може да се осъществи връзка със сървъра.'); }
    
    mysqli_select_db($dBConn, "Store");

