<!-- process.php -->
<?php
// Xử lý phép tính trên hai số
if (isset($_POST["operation"])) {
    $operation = $_POST["operation"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $result = "";

    switch ($operation) {
        case "addition":
            $result = $number1 + $number2;
            $operation_symbol = "+";
            break;
        case "subtraction":
            $result = $number1 - $number2;
            $operation_symbol = "-";
            break;
        case "multiplication":
            $result = $number1 * $number2;
            $operation_symbol = "×";
            break;
        case "division":
            if ($number2 == 0) {
                $result = "Không thể chia cho 0";
                $operation_symbol = "÷";
                break;
            } else {
                $result = $number1 / $number2;
                $operation_symbol = "÷";
                break;
            }
        default:
            $result = "Phép tính không hợp lệ";
            $operation_symbol = "";
            break;
    }

    if (is_numeric($result)) {
        echo "<h2>Phép tính: $number1 $operation_symbol $number2 = $result</h2>";
    } else {
        echo "<h2>Kết quả: $result</h2>";
    }
}

// Xử lý kiểm tra số
if (isset($_POST["check_type"])) {
    $check_type = $_POST["check_type"];
    $number = $_POST["number"];
    $result = "";

    switch ($check_type) {
        case "even_odd":
            if ($number % 2 == 0) {
                $result = "Số $number là số chẵn.";
            } else {
                $result = "Số $number là số lẻ.";
            }
            break;
        case "prime":
            if ($number < 2) {
                $result = "Số $number không phải là số nguyên tố.";
            } else {
                $is_prime = true;
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $is_prime = false;
                        break;
                    }
                }
                if ($is_prime) {
                    $result = "Số $number là số nguyên tố.";
                } else {
                    $result = "Số $number không phải là số nguyên tố.";
                }
            }
            break;
        default:
            $result = "Loại kiểm tra không hợp lệ.";
            break;
    }

    echo "<h2>Kết quả kiểm tra: $result</h2>";
}
?>
