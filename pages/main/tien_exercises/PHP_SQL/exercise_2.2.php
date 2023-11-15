<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(even) {
            background-color: lightgreen;
        }

        th {
            text-align: center;
            color: orange;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanly_ban_sua";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } else {
    }

    $sql = "SELECT `Ma_khach_hang`, `Ten_khach_hang`, `Phai`, `Dia_chi`, `Dien_thoai` FROM `khach_hang`";
    $result = mysqli_query($conn, $sql);

    echo "<p align = 'center'><b 'color = green'>THÔNG TIN KHÁCH HÀNG</b></p>";
    echo "<table align = 'center' border='1'>";
    echo "<tr>
            <th>Mã KH</th>
            <th>Tên khách hàng </th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
        </tr>";

    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$rows[0]</td>";
            echo "<td>$rows[1]</td>";
            echo "<td style = 'text-align: center;'>$rows[2]</td>";
            echo "<td>$rows[3]</td>";
            echo "<td>$rows[4]</td>";
            echo "</tr>";
        }
    }

    echo "</table>"
        ?>
</body>

</html>