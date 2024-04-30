<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['tenLoai'])) {
   $tenLoai = $_POST['tenLoai'];

   $sql = "SELECT * FROM loaisp WHERE TenLoai = '$tenLoai'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       if ($row['hide'] == 0) {
           $updateSql = "UPDATE loaisp SET hide = 1 WHERE TenLoai = '$tenLoai'";
           $conn->query($updateSql);
       }
   } else {
       $insertSql = "INSERT INTO loaisp (TenLoai, hide) VALUES ('$tenLoai', 1)";
       if ($conn->query($insertSql) === TRUE) {
           $result = $conn->query("SELECT * FROM loaisp WHERE TenLoai='$tenLoai'");
           $row = $result->fetch_assoc();
           echo "<tr data-loai='" . $row["MaLoai"] . "'>";
           echo "<td>" . $row["MaLoai"] . "</td>";
           echo "<td>" . $row["TenLoai"] . "</td>";
           echo "<td> <div class='dropdown'> <button class='btn btn-secondary dropdown-toggle btn-delete' type='button' data-bs-toggle='dropdown' aria-expanded='false'> Xóa </button> <ul class='dropdown-menu' style='z-index: 2;'> <li><a class='dropdown-item delete-option' href='#'>Xóa</a></li> </ul> </div> </td>";
           echo "</tr>";
       }
   }
   $conn->close();
}
?>