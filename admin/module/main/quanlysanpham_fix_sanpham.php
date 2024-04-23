<?php
// Xử lý dữ liệu từ form
$maSP = $_POST['MaSP']; 
$tenSP = $_POST['tenSP'];
$moTa = $_POST['editorContent'];
$SoSaoDanhGia = $_POST['SoSaoDanhGia'];
$SoLuotDanhGia = $_POST['SoLuotDanhGia'];
$SoLuongDaBan = $_POST['SoLuongDaBan'];
$GiaCu = $_POST['giacu'];
$giaMoi = $_POST['giamoi'];
$tenNhanHieu = $_POST['tenNhanHieu'];
$tenLoai = $_POST['tenLoai'];
$SanPhamMoi = $_POST['SanPhamMoi'];
$SanPhamHot = $_POST['SanPhamHot'];

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
	        $tenhinh = $_FILES['hinhanh']["name"];
			$sph = $SanPhamHot == 'true' ? 1:0;
			$spm = $SanPhamMoi == 'true' ? 1:0;
		    $sql = "UPDATE sanpham SET TenSP = '$tenSP', SanPhamMoi = $spm, SanPhamHot = $sph, SoSaoDanhGia = $SoSaoDanhGia, SoLuotDanhGia = $SoLuotDanhGia, MoTa = '$moTa', 
		    SoLuongDaBan = $SoLuongDaBan,HinhAnh = '$tenhinh',GiaCu = $GiaCu, GiaMoi = $giaMoi, MaNhanHieu = $maNhanHieu, MaLoai = $maLoai WHERE MaSP = $maSP";
	    	if ($connect->query($sql) === TRUE){
	    		echo "Cập Nhật Thành Công!";
	    	} else {
	    		echo "Cập Nhật Không Thành Công!";
	    	}
	    } else {
	        echo "Xảy ra lỗi khi tải lên tệp. ";
	        $uploadOk = 0;
	    }
	}
} else {
	$spm = $SanPhamMoi == 'true' ? 1:0;
	$sph = $SanPhamHot == 'true' ? 1:0;
    $sql = "UPDATE sanpham SET TenSP = '$tenSP', SanPhamMoi = $spm, SanPhamHot = $sph, SoSaoDanhGia = $SoSaoDanhGia, SoLuotDanhGia = $SoLuotDanhGia, MoTa = '$moTa', 
    SoLuongDaBan = $SoLuongDaBan,GiaCu = $GiaCu, GiaMoi = $giaMoi, MaNhanHieu = $maNhanHieu, MaLoai = $maLoai WHERE MaSP = $maSP";
	if ($connect->query($sql) === TRUE){
		echo "Cập Nhật Thành Công!";
	} else {
		echo "Cập Nhật Không Thành Công!";
	}
}



?>