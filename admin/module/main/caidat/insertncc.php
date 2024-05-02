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

   $sql = "SELECT * FROM nhacungcap WHERE TenNCC = '$tenNCC'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       if ($row['hide'] == 0) {
           $updateSql = "UPDATE nhacungcap SET hide = 1 WHERE TenNCC = '$tenNCC'";
           $conn->query($updateSql);
       }
   } else {
       $insertSql = "INSERT INTO nhacungcap (TenNCC, DiaChiNCC, SdtNCC, EmailNCC, hide) VALUES ('$tenNCC', '$diaChiNCC', '$sdtNCC', '$emailNCC', 1)";
       if ($conn->query($insertSql) === TRUE) {
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
       }
   }
   $conn->close();
}
?>