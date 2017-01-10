<?php
    $dbname = "Homeg4";
    $host='localhost';
    $user='root';
    $pass='root';

    $bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $bdd->query("SET NAMES UTF8");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>