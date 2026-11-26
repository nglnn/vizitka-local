<?php
$host = 'localhost';
$user = 'root';      
$password = '123';     
$dbname = 'vizitka_db';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
echo "<h1>Успех! База данных vizitka_db подключена.</h1>";
?>