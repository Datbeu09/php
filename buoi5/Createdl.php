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

// Thêm dữ liệu
$sql_insert = "INSERT INTO MyGuests (firstname, lastname, email) 
                VALUES  ('John', 'Doe', 'john@example.com'),
                        ('Jane', 'Smith', 'jane@example.com'),
                        ('James', 'Johnson', 'james@example.com'),
                        ('Emily', 'Brown', 'emily@example.com'),
                        ('Michael', 'Davis', 'michael@example.com')";

if (mysqli_query($conn, $sql_insert)) {
    echo "Thêm mới thành công.<br>";
} else {
    echo "Lỗi thêm mới: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
