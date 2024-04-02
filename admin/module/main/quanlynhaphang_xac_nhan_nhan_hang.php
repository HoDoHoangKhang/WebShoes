<?php
$dir =  __DIR__;
$targetDir = str_replace("admin\\module\\main", "config\\config.php", $dir);
require $targetDir;

$MaPN = $_REQUEST['maPhieuNhap']; 

$sql = "UPDATE phieunhap SET TinhTrangDH = 'Đã nhận' WHERE MaPN = $MaPN";

if ($connect->query($sql) === TRUE) {
    echo "Cập nhật trạng thái đơn hàng thành công";
} else {
    echo "Lỗi khi cập nhật trạng thái đơn hàng: " . $connect->error;
}

$connect->close();
?>
