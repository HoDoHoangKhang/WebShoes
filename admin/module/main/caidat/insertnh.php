<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<?php
if(isset($_POST['tenNhanHieu'])) {
    $tenNhanHieu = $_POST['tenNhanHieu'];
    
    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO nhanhieu (TenNhanHieu) VALUES ('$tenNhanHieu')";
    if ($conn->query($sql) === TRUE) {
        // Truy vấn dữ liệu vừa thêm vào để hiển thị lên giao diện
        $result = $conn->query("SELECT * FROM nhanhieu WHERE TenNhanHieu='$tenNhanHieu'");
        $row = $result->fetch_assoc();
        echo "<tr data-nh='" . $row["MaNhanHieu"] . "'>";
        echo "<td>" . $row["MaNhanHieu"] . "</td>";
        echo "<td>" . $row["TenNhanHieu"] . "</td>";
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
    $conn->close();
}
?>
