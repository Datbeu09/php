<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Tạo kết nối
$conn = mysqli_connect("sql110.infinityfree.com", "if0_37112283", "Dotiendat1604", "if0_37112283_b5_mydb");


// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công.<br>";
}

// Tạo bảng
$sql_create_table = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_create_table)) {
    echo "Tạo bảng MyGuests thành công.<br>";
} else {
    echo "Lỗi tạo bảng: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
