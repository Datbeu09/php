<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sách</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: black;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
        .pagination a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Danh sách sách</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>

    <?php
    // Tổng số sách
    $totalBooks = 100;
    // Số sách hiển thị trên mỗi trang
    $booksPerPage = 10;

    // Tính tổng số trang
    $totalPages = ceil($totalBooks / $booksPerPage);

    // Xác định trang hiện tại từ URL, mặc định là trang 1
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tính chỉ số bắt đầu của sách trên trang hiện tại
    $startIndex = ($currentPage - 1) * $booksPerPage + 1;

    // Vòng lặp để hiển thị sách trên trang hiện tại
    for ($i = $startIndex; $i < $startIndex + $booksPerPage && $i <= $totalBooks; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>Tensach$i</td>";
        echo "<td>Noidung$i</td>";
        echo "</tr>";
    }
    ?>

</table>

<div class="pagination">
    <?php
    // Hiển thị các liên kết trang
    for ($page = 1; $page <= $totalPages; $page++) {
        if ($page == $currentPage) {
            echo "<a class='active' href='?page=$page'>$page</a>";
        } else {
            echo "<a href='?page=$page'>$page</a>";
        }
    }
    ?>
</div>

</body>
</html>
