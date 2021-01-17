<?php
$host = 'localhost';
$db= 'to_do';
$user = 'pavel';
$password = '12345';
$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn,$user,$password);

?>