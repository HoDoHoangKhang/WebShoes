<?php
// Xử lý dữ liệu từ form
$tenSP = $_POST['tenSP'];
$giaMoi = $_POST['giaSP'];
$tenNhanHieu = $_POST['tenNhanHieu'];
$tenLoai = $_POST['maLoai'];
$moTa = $_POST['editorContent'];

$Dir_nm = __DIR__;
$targetDir = str_replace("admin\\module\\main", "config\\config.php", $Dir_nm);
require $targetDir;

$sql = "SELECT MaNhanHieu FROM nhanhieu WHERE TenNhanHieu = ?";
// Chuẩn bị và thực thi câu truy vấn sử dụng prepared statement
if ($stmt = $connect->prepare($sql)) {
    $stmt->bind_param("s", $tenNhanHieu); // "s" đại diện cho kiểu dữ liệu string
    $stmt->execute();
    $stmt->bind_result($maNhanHieu);
    $stmt->fetch();
    $stmt->close();
}
$sql = "SELECT MaLoai FROM loaisp WHERE TenLoai = ?";
// Chuẩn bị và thực thi câu truy vấn sử dụng prepared statement
if ($stmt = $connect->prepare($sql)) {
    $stmt->bind_param("s", $tenLoai); // "s" đại diện cho kiểu dữ liệu string
    $stmt->execute();
    $stmt->bind_result($maLoai);
    $stmt->fetch();
    $stmt->close();
}
// echo $tenSP . '\n' . $giaMoi . '\n' . $maNhanHieu . '\n' . $maLoai . '\n' . $moTa; 

$uploadOk = 0;
if ($_FILES['hinhanh']['size'] != 0) {
	$targetDir = str_replace("admin\\module\\main", "assets\\img\\", $Dir_nm);
	$target_file = $targetDir . basename($_FILES['hinhanh']["name"]);
	// echo $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Kiểm tra nếu tệp đã tồn tại
	if (file_exists($target_file)) {
	    echo "Xin lỗi, tên tệp đã tồn tại. ";
	    $uploadOk = 0;
	}

	// Kiểm tra kích thước của tệp
	if ($_FILES['hinhanh']["size"] > 500000) {
	    echo "Xin lỗi, tệp của bạn quá lớn. ";
	    $uploadOk = 0;
	}

	// Cho phép chỉ một số định dạng tệp ảnh
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Xin lỗi, chỉ cho phép tải lên các tệp JPG, JPEG, PNG & GIF. ";
	    $uploadOk = 0;
	}

	// Kiểm tra $uploadOk có bị lỗi nào không
	if ($uploadOk == 1) {
	    if (move_uploaded_file($_FILES['hinhanh']["tmp_name"], $target_file)) {
	        // echo "Tệp ". basename( $_FILES['hinhanh']["name"]). " đã được tải lên thành công. ";
	    } else {
	        echo "Xảy ra lỗi khi tải lên tệp. ";
	        $uploadOk = 0;
	    }
	}
}


if ($uploadOk == 1) {
	$tenhinh = $_FILES['hinhanh']["name"];
	$sql = "INSERT INTO sanpham (TenSP, SoSaoDanhGia, SoLuotDanhGia, MoTa, HinhAnh, SanPhamMoi, SanPhamHot, GiaCu, GiaMoi, SoLuongDaBan, MaNhanHieu, MaLoai, hide)
	VALUES ('$tenSP', 0, 0, '$moTa', '$tenhinh', 1, 0, 0, $giaMoi, 0, $maNhanHieu, $maLoai, 1)";

	// Thực thi câu truy vấn và kiểm tra kết quả
	if ($connect->query($sql) === TRUE) {
	    echo "Thêm dữ liệu thành công!!!";
	} else {
		echo "Thêm Không thành công!!!";
	}
}

// if ($uploadOk == 0) { // không có ảnh
// 	try {
// 		$tenhinh = $_FILES['hinhanh']["name"];
// 		$sql = "INSERT INTO sanpham (TenSP, SoSaoDanhGia, SoLuotDanhGia, MoTa, HinhAnh, SanPhamMoi, SanPhamHot, GiaCu, GiaMoi, SoLuongDaBan, MaNhanHieu, MaLoai)
// 		VALUES ('$tenSP', 0, 0, '$moTa', 'NULL', 1, 0, 0, $giaMoi, 0, $maNhanHieu, $maLoai)";

// 		// Thực thi câu truy vấn và kiểm tra kết quả
// 		if ($connect->query($sql) === TRUE) {
// 		    echo '<br><strong style="color: lightgreen;">Thêm thành công!!! </strong>';;
// 		}
// 	} catch (Exception $e) {
// 		echo '<br><strong style="color: red;">Thêm Không thành công!!! </strong>';
// 	}
	
// }
?>