<?php
// Kết nối CSDL
$connect=mysqli_connect('localhost','root','','shoestore');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
else{
    echo "Kết nối thất bại";
}


// Lấy giá trị của id sản phẩm từ POST request
$idSanPham = $_POST['idSanPham'];

try {
	// Thực hiện câu lệnh SQL DELETE
	$sql = "DELETE FROM sanpham WHERE MaSP = ?";
	$stmt = $connect->prepare($sql);
	$stmt->bind_param("i", $idSanPham);
	$stmt->execute();
    echo "Xóa sản phẩm thành công!";
} catch (Exception $ex) {
    echo "Xóa sản phẩm KHÔNG thành công!";
}

// Đóng kết nối CSDL
$stmt->close();
$connect->close();
?>
