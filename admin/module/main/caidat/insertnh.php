<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['tenNhanHieu'])) {
    $tenNhanHieu = $_POST['tenNhanHieu'];
<<<<<<< HEAD
    
    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO nhanhieu (TenNhanHieu,hide) VALUES ('$tenNhanHieu',1)";
    if ($conn->query($sql) === TRUE) {
        // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
        $result = $conn->query("SELECT * FROM nhanhieu WHERE TenNhanHieu='$tenNhanHieu'");
=======

    // Kiểm tra xem giá trị đã tồn tại trong cơ sở dữ liệu chưa
    $sql = "SELECT * FROM nhanhieu WHERE TenNhanHieu = '$tenNhanHieu'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Giá trị đã tồn tại
>>>>>>> levy
        $row = $result->fetch_assoc();
        if ($row['hide'] == 0) {
            // Cập nhật giá trị hide thành 1
            $updateSql = "UPDATE nhanhieu SET hide = 1 WHERE TenNhanHieu = '$tenNhanHieu'";
            if ($conn->query($updateSql) === TRUE) {
                echo "updated";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            // Giá trị đã tồn tại và hide = 1
            echo "exists";
        }
    } else {
        // Thêm giá trị mới
        $insertSql = "INSERT INTO nhanhieu (TenNhanHieu, hide) VALUES ('$tenNhanHieu', 1)";
        if ($conn->query($insertSql) === TRUE) {
            // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
            $result = $conn->query("SELECT * FROM nhanhieu WHERE TenNhanHieu='$tenNhanHieu'");
            $row = $result->fetch_assoc();
            echo "<tr data-nh='" . $row["MaNhanHieu"] . "'>";
            echo "<td>" . $row["MaNhanHieu"] . "</td>";
            echo "<td>" . $row["TenNhanHieu"] . "</td>";
            echo "<td> <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'> Xóa </button> </td>";
            echo "</tr>";
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}