<?php
$message = '';
try {
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "handp";
    $dbport = 3306;
    $dsn = "mysql:dbname=$database;host=$servername;port=$dbport;charset=utf8"; 
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $message = $e->getMessage();
}