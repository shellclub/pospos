<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_pospos';

$conn = new mysqli($hostname, $username, $password, $dbname);

if (!$conn) {
  echo "ผิดพลาดติดต่อฐานข้อมูล" . mysqli_connect_error();
}
