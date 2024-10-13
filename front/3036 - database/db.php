<?php
// kết nối database 
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "db_3036";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
