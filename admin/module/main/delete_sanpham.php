<?php
// Kết nối CSDL
$dir =  __DIR__;
$targetDir = str_replace("admin\\module\\main", "config\\config.php", $dir);

require $targetDir;

// Lấy giá trị của id sản phẩm từ POST request
$idSanPham = $_POST['idSanPham'];

$tongSL = 0;
// Câu truy vấn SQL
$sql = "SELECT *, SUM(SoLuong) AS TongSoLuong FROM ctsizesp WHERE MaSP = " . $idSanPham;
// Thực thi truy vấn
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    $rowd = $result->fetch_assoc();
    $tongSL = $rowd["TongSoLuong"];
}

if ($tongSL > 0){
	echo '<strong style="color: red;">Không thể xóa!<br>Sản phẩm còn trong kho với số lượng: '.$tongSL .'</strong>';
} else {
	try {
		// Thực hiện câu lệnh SQL DELETE
		$sql = "DELETE FROM sanpham WHERE MaSP = ?";
		$stmt = $connect->prepare($sql);
		$stmt->bind_param("i", $idSanPham);
		$stmt->execute();
	    echo '<strong style="color = green;">Xóa sản phẩm thành công!</strong>';

	} catch (Exception $ex) {
		
	}

	// Đóng kết nối CSDL
	$stmt->close();
}


$connect->close();
?>
