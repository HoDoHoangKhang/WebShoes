<?php
$productId = $_POST['productId'];

// Thực hiện truy vấn để lấy danh sách các size và số lượng tương ứng của sản phẩm
$connect=mysqli_connect('localhost','root','','shoestore');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
else{
    echo "Kết nối thất bại";
}

$html = '';
$sql = "SELECT SizeSP,SoLuong FROM `ctsizesp` WHERE MaSP =" . $productId;
$result = $connect->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$size = $row['SizeSP'];
	    $number = $row['SoLuong'];
	    $html .= '<tr><td>' . $size . '</td><td>' . $number . '</td></tr>';
	}
}


echo $html;
?>