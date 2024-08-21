<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính và Kiểm tra số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #008CBA;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #005f6a;
        }
    </style>
</head>
<body>
    <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
    <form method="post" action="result.php">
        <label>Chọn phép tính:</label><br>
        <input type="radio" id="addition" name="operation" value="addition" required>
        <label for="addition">Cộng</label><br>
        
        <input type="radio" id="subtraction" name="operation" value="subtraction">
        <label for="subtraction">Trừ</label><br>
        
        <input type="radio" id="multiplication" name="operation" value="multiplication">
        <label for="multiplication">Nhân</label><br>
        
        <input type="radio" id="division" name="operation" value="division">
        <label for="division">Chia</label><br><br>
        
        <label for="number1">Số thứ nhất:</label><br>
        <input type="number" id="number1" name="number1" required><br>
        
        <label for="number2">Số thứ hai:</label><br>
        <input type="number" id="number2" name="number2" required><br>
        
        <input type="submit" value="Tính">
    </form>

    <h1>KIỂM TRA SỐ</h1>
    <form method="post" action="result.php">
        <label>Chọn loại kiểm tra:</label><br>
        <input type="radio" id="even_odd" name="check_type" value="even_odd" required>
        <label for="even_odd">Chẵn/Lẻ</label><br>
        
        <input type="radio" id="prime" name="check_type" value="prime">
        <label for="prime">Nguyên tố</label><br><br>
        
        <label for="number">Nhập số cần kiểm tra:</label><br>
        <input type="number" id="number" name="number" required><br>
        
        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
