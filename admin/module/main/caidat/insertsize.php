<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['size'])) {
    $size = $_POST['size'];
    // Kiểm tra xem size đã tồn tại trong cơ sở dữ liệu chưa
    $sql = "SELECT * FROM sizesp WHERE SizeSP = '$size'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Size đã tồn tại
        $row = $result->fetch_assoc();
        if ($row['hide'] == 0) {
            // Cập nhật giá trị hide thành 1
            $updateSql = "UPDATE sizesp SET hide = 1 WHERE SizeSP = '$size'";
            if ($conn->query($updateSql) === TRUE) {
                echo "updated";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            // Size đã tồn tại và hide = 1
            echo "exists";
        }
    } else {
        // Thêm size mới
        $insertSql = "INSERT INTO sizesp (SizeSP, hide) VALUES ('$size', 1)";
        if ($conn->query($insertSql) === TRUE) {
            echo "<tr data-size='" . $size . "'>";
            echo "<td>" . $size . "</td>";
            echo "<td> <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'> Xóa </button> </td>";
            echo "</tr>";
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>