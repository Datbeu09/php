<!-- result.php -->
<?php
// Kiểm tra nếu không có dữ liệu POST thì chuyển hướng về trang index.php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 100px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .result {
            margin-top: 50px;
            padding: 30px;
            border: 2px solid #008CBA;
            display: inline-block;
            border-radius: 10px;
            background-color: #f1f1f1;
        }
        a {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #fff;
            background-color: #008CBA;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #005f6a;
        }
    </style>
</head>
<body>
    <h1>KẾT QUẢ</h1>
    <div class="result">
        <?php
        // Gọi tệp xử lý logic
        require 'bai3.php';
        ?>
    </div>
    <a href="index.php">Thực hiện phép tính khác</a>
</body>
</html>
