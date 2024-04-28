<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['tenNCC']) && isset($_POST['diaChiNCC']) && isset($_POST['sdtNCC']) && isset($_POST['emailNCC'])) {
    $tenNCC = $_POST['tenNCC'];
    $diaChiNCC = $_POST['diaChiNCC'];
    $sdtNCC = $_POST['sdtNCC'];
    $emailNCC = $_POST['emailNCC'];
<<<<<<< HEAD
    
    // Chuẩn bị câu truy vấn SQL để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO nhacungcap (TenNCC, DiaChiNCC, SdtNCC, EmailNCC,hide) VALUES ('$tenNCC', '$diaChiNCC', '$sdtNCC', '$emailNCC',1)";
    
    // Thực thi truy vấn
    if ($conn->query($sql) === TRUE) {
        // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
        $result = $conn->query("SELECT * FROM nhacungcap WHERE TenNCC='$tenNCC'");
=======

    // Kiểm tra xem nhà cung cấp đã tồn tại trong cơ sở dữ liệu chưa
    $sql = "SELECT * FROM nhacungcap WHERE TenNCC = '$tenNCC'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Nhà cung cấp đã tồn tại
>>>>>>> levy
        $row = $result->fetch_assoc();
        if ($row['hide'] == 0) {
            // Cập nhật giá trị hide thành 1
            $updateSql = "UPDATE nhacungcap SET hide = 1 WHERE TenNCC = '$tenNCC'";
            if ($conn->query($updateSql) === TRUE) {
                echo "updated";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            // Nhà cung cấp đã tồn tại và hide = 1
            echo "exists";
        }
    } else {
        // Thêm nhà cung cấp mới
        $insertSql = "INSERT INTO nhacungcap (TenNCC, DiaChiNCC, SdtNCC, EmailNCC, hide) VALUES ('$tenNCC', '$diaChiNCC', '$sdtNCC', '$emailNCC', 1)";
        if ($conn->query($insertSql) === TRUE) {
            // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
            $result = $conn->query("SELECT * FROM nhacungcap WHERE TenNCC='$tenNCC'");
            $row = $result->fetch_assoc();
            echo "<tr data-ncc='" . $row["MaNCC"] . "'>";
            echo "<td>" . $row["MaNCC"] . "</td>";
            echo "<td>" . $row["TenNCC"] . "</td>";
            echo "<td>" . $row["DiaChiNCC"] . "</td>";
            echo "<td>" . $row["SdtNCC"] . "</td>";
            echo "<td>" . $row["EmailNCC"] . "</td>";
            echo "<td> <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'> Xóa </button> </td>";
            echo "</tr>";
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>