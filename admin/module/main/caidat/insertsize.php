<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['size'])) {
    $size = $_POST['size'];
    $sql = "SELECT * FROM sizesp WHERE SizeSP = '$size'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['hide'] == 0) {
            $updateSql = "UPDATE sizesp SET hide = 1 WHERE SizeSP = '$size'";
            $conn->query($updateSql);
        }
    } else {
        $insertSql = "INSERT INTO sizesp (SizeSP, hide) VALUES ('$size', 1)";
        if ($conn->query($insertSql) === TRUE) {
            echo "<tr data-size='" . $size . "'>"; 
            echo "<td>" . $size . "</td>";
            echo "<td> <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'> Xóa </button> </td>";
            echo "</tr>";
        }
    }
    $conn->close();
}
?>