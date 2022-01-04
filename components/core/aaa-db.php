<?php
//Offline
 $dsn = "mysql:host=localhost;dbname=usarmedmilitaryforces";
 $user = "root";
 $passwd = "";

//Online
//$dsn = "mysql:host=localhost;dbname=u115662082_usaarmy";
//$user = "u115662082_usaarmy";
//$passwd = "]NdzHLBdj[T5";

$pdo = new PDO($dsn, $user, $passwd);   
