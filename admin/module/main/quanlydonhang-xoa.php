<?php

// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "shoestore");

// Lấy ID từ URL
$id = $_GET['id'];

// Xác minh đơn hàng
$sql = "SELECT TinhTrangDH FROM phieuxuat WHERE MaPX = $id";
$result = $conn->query($sql);
$tinhTrangDH = $row["TinhTrangDH"];
if ($result->num_rows === 0) {
  echo "<p>Lỗi: Đơn hàng không tồn tại.</p>";
  die();
}
if ($tinhTrangDH === "Đang xử lý" || $tinhTrangDH === "Đã hoàn thành") {
  echo "<script>alert('Bạn không thể xóa đơn hàng đang được xử lý hoặc đã hoàn thành!');</script>";
  echo "<script>window.location.href = '../../index.php?danhmuc=quanlydonhang';</script>";
  exit;
}
// Xóa chi tiết phiếu xuất
$sql = "UPDATE ctpx SET trangThai = 0 WHERE MaPX = $id";
$conn->query($sql);
// Xóa đơn hàng
$sql = "UPDATE phieuxuat SET trangThai = 0 WHERE MaPX = $id";
$conn->query($sql);

// Đóng kết nối
$conn->close();


header('Location: ../../index.php?danhmuc=quanlydonhang');
?>
