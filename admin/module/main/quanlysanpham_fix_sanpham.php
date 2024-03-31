<?php
// Xử lý dữ liệu từ form
$maSP = $_POST['MaSP']; 
$tenSP = $_POST['TenSP'];
$moTa = $_POST['MoTa'];
$SoSaoDanhGia = $_POST['saoDG'];
$SoLuotDanhGia = $_POST['luotDG'];
$SoLuongDaBan = $_POST['SoLuongDaBan'];
// $SanPhamMoi = $_POST['SanPhamMoi'];
// $SanPhamHot = $_POST['SanPhamHot'];
$giaMoi = $_POST['GiaMoi'];
$maNhanHieu = $_POST['MaNhanHieu'];
$maLoai = $_POST['MaLoai'];
$GiaCu = $_POST['GiaCu'];
$GiaMoi = $_POST['GiaMoi'];

$uploadOk = 0;
if ($_FILES['hinhanh2']['size'] != 0) {
	$Dir_nm = __DIR__;
	$targetDir = str_replace("admin\\module\\main", "assets\\img\\", $Dir_nm);
	$target_file = $targetDir . basename($_FILES['hinhanh2']["name"]);
	echo $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Kiểm tra nếu tệp đã tồn tại
	if (file_exists($target_file)) {
	    echo "Xin lỗi, tệp đã tồn tại.";
	    $uploadOk = 0;
	}

	// Kiểm tra kích thước của tệp
	if ($_FILES['hinhanh2']["size"] > 500000) {
	    echo "Xin lỗi, tệp của bạn quá lớn.";
	    $uploadOk = 0;
	}

	// Cho phép chỉ một số định dạng tệp ảnh
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Xin lỗi, chỉ cho phép tải lên các tệp JPG, JPEG, PNG & GIF.";
	    $uploadOk = 0;
	}

	// Kiểm tra $uploadOk có bị lỗi nào không
	if ($uploadOk == 0) {
	    echo "Xin lỗi, tệp của bạn không được tải lên.";
	// Nếu mọi thứ đều ổn, thử tải tệp lên
	} else {
	    if (move_uploaded_file($_FILES['hinhanh2']["tmp_name"], $target_file)) {
	        echo "Tệp ". basename( $_FILES['hinhanh2']["name"]). " đã được tải lên thành công. ";
	    } else {
	        echo "Xảy ra lỗi khi tải lên tệp.";
	        $uploadOk = 0;
	    }
	}
} else 
	echo "Không có ảnh!";

$connect=mysqli_connect('localhost','root','','shoestore');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
else{
    echo "Kết nối thất bại";
}
$sql = " ";
if ($uploadOk == 1) {
    $tenhinh = $_FILES['hinhanh2']["name"];
    $sql = "UPDATE sanpham SET TenSP = '$tenSP', SoSaoDanhGia = $SoSaoDanhGia, SoLuotDanhGia = $SoLuotDanhGia, MoTa = '$moTa', 
    SoLuongDaBan = $SoLuongDaBan,HinhAnh = '$tenhinh', GiaMoi = $giaMoi, MaNhanHieu = $maNhanHieu, MaLoai = $maLoai WHERE MaSP = $maSP";
} else {
	$sql = "UPDATE sanpham SET TenSP = '$tenSP', SoSaoDanhGia = $SoSaoDanhGia, SoLuotDanhGia = $SoLuotDanhGia, MoTa = '$moTa', 
    SoLuongDaBan = $SoLuongDaBan, GiaCu = $GiaCu, GiaMoi = $giaMoi, MaNhanHieu = $maNhanHieu, MaLoai = $maLoai WHERE MaSP = $maSP";
}

// Thực thi câu truy vấn và kiểm tra kết quả
if ($connect->query($sql) === TRUE) {
    echo "Cập nhật dữ liệu thành công!!!";
} else {
    echo "Sửa Không thành công!";
}
?>