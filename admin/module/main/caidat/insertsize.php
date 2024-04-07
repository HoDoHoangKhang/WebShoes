<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<?php
if(isset($_POST['size'])) {
    // Lấy dữ liệu từ form
    $size = $_POST['size'];
    
    // Chuẩn bị câu truy vấn SQL để thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO sizesp (SizeSP) VALUES ('$size')";
    
    // Thực thi truy vấn
    if ($conn->query($sql) === TRUE) {
        $result = $conn->query("SELECT * FROM sizesp WHERE SizeSP ='$size'");
        $row = $result->fetch_assoc();
        echo "<tr data-size='" . $size . "'>";
        echo "<td>" . $size . "</td>";
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