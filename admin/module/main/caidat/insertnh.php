<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['tenNhanHieu'])) {
   $tenNhanHieu = $_POST['tenNhanHieu'];
   $sql = "SELECT * FROM nhanhieu WHERE TenNhanHieu = '$tenNhanHieu'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       if ($row['hide'] == 0) {
           $updateSql = "UPDATE nhanhieu SET hide = 1 WHERE TenNhanHieu = '$tenNhanHieu'";
           $conn->query($updateSql);
       }
   } else {
       $insertSql = "INSERT INTO nhanhieu (TenNhanHieu, hide) VALUES ('$tenNhanHieu', 1)";
       if ($conn->query($insertSql) === TRUE) {
           $result = $conn->query("SELECT * FROM nhanhieu WHERE TenNhanHieu='$tenNhanHieu'");
           $row = $result->fetch_assoc();
           echo "<tr data-nh='" . $row["MaNhanHieu"] . "'>";
           echo "<td>" . $row["MaNhanHieu"] . "</td>";
           echo "<td>" . $row["TenNhanHieu"] . "</td>";
           echo "<td> <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'> Xóa </button> </td>";
           echo "</tr>";
       }
   }
   $conn->close();
}