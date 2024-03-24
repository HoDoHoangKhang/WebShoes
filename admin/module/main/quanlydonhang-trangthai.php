<?php
$id = $_GET['id'];
 // Kết nối cơ sở dữ liệu
 $conn = mysqli_connect("localhost", "root", "", "shoestore");
// Lấy danh sách đơn hàng
$sql = "SELECT TinhTrangDH FROM phieuxuat WHERE MaPX=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
  $trangThaiHienTai = $row['TinhTrangDH'];
  if ($trangThaiHienTai === "Đã hoàn thành") {
    echo "<script>alert('Bạn không thể chuyển trạng thái đơn hàng đang đã hoàn thành!');</script>";
    echo "<script>window.location.href = '../../index.php?danhmuc=quanlydonhang';</script>";
    exit;
  }

  $trangThaiTiepTheo = getTrangThaiTiepTheo($trangThaiHienTai);
  $sql = "UPDATE phieuxuat SET TinhTrangDH = '$trangThaiTiepTheo' WHERE MaPX = $id";
  $conn->query($sql);

  // Đóng kết nối
  $conn->close();

  header('Location: ../../index.php?danhmuc=quanlydonhang');

function getTrangThaiTiepTheo($trangThaiHienTai) {
  switch ($trangThaiHienTai) {
    case 'Tạm giữ':
      return 'Đang xử lý';
    case 'Đang xử lý':
      return 'Đã hoàn thành';
    default:
      return null;
  }
}
?>