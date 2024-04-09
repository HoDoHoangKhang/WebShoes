<?php
// Kết nối CSDL
$dir =  __DIR__;
$targetDir = str_replace("admin\\module\\main", "config\\config.php", $dir);
require $targetDir;

// Lấy giá trị của id sản phẩm từ POST request
$idSanPham = $_POST['idSanPham'];

try {
	// Thực hiện câu lệnh SQL DELETE
	$sql = "UPDATE sanpham SET hide = 0 WHERE MaSP = ?";
	$stmt = $connect->prepare($sql);
	$stmt->bind_param("i", $idSanPham);
	$stmt->execute();
	// Đóng kết nối CSDL
	$stmt->close();
    echo '<strong style="color = green;">Xóa sản phẩm thành công!</strong>';

} catch (Exception $ex) {
	echo '<strong style="color = red;">Xóa KHÔNG thành công!</strong>';
}


$connect->close();
?>
