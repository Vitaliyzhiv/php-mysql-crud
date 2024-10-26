<?php
session_start();

$host = 'localhost';
$db = 'php_mysql_crud';
$user = 'root';
$pass = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}