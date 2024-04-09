<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<?php
if(isset($_POST['tenNCC']) && isset($_POST['diaChiNCC']) && isset($_POST['sdtNCC']) && isset($_POST['emailNCC'])) {
    // Lấy dữ liệu từ form
    $tenNCC = $_POST['tenNCC'];
    $diaChiNCC = $_POST['diaChiNCC'];
    $sdtNCC = $_POST['sdtNCC'];
    $emailNCC = $_POST['emailNCC'];
    
    // Chuẩn bị câu truy vấn SQL để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO nhacungcap (TenNCC, DiaChiNCC, SdtNCC, EmailNCC,hide) VALUES ('$tenNCC', '$diaChiNCC', '$sdtNCC', '$emailNCC',1)";
    
    // Thực thi truy vấn
    if ($conn->query($sql) === TRUE) {
        // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
        $result = $conn->query("SELECT * FROM nhacungcap WHERE TenNCC='$tenNCC'");
        $row = $result->fetch_assoc();
        echo "<tr data-ncc='" . $row["MaNCC"] . "'>";
        echo "<td>" . $row["MaNCC"] . "</td>";
        echo "<td>" . $row["TenNCC"] . "</td>";
        echo "<td>" . $row["DiaChiNCC"] . "</td>";
        echo "<td>" . $row["SdtNCC"] . "</td>";
        echo "<td>" . $row["EmailNCC"] . "</td>";
        echo "<td>
              <div class='dropdown'>
              <button class='btn btn-secondary dropdown-toggle btn-delete' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Xóa
              </button>
              <ul class='dropdown-menu' style='z-index: 2;'> 
              <li><a class='dropdown-item delete-option' href='#'>Xóa</a></li>
              </ul>
              </div>
              </td>";
        echo "</tr>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Đóng kết nối đến cơ sở dữ liệu
    $conn->close();
}   
?>
