<?php

function getTenLoai($maLoai) {
    // Thực hiện truy vấn để lấy tên loại từ mã loại
    // Ví dụ: SELECT ten_loai FROM loai_san_pham WHERE ma_loai = $maLoai

    // Giả sử kết quả truy vấn trả về là một mảng chứa thông tin loại sản phẩm
    $loaiSanPham = [
        'ma_loai' => $maLoai,
        'ten_loai' => 'Tên loại sản phẩm'
    ];

    // Trả về tên loại
    return $loaiSanPham['ten_loai'];
}

// Sử dụng hàm để lấy tên loại
$maLoai = 'ABC123';
$tenLoai = getTenLoai($maLoai);
echo $tenLoai;

?>