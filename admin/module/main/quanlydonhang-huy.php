<?php
$id = $_POST['MaPX'];
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "shoestore");
// Lấy danh sách đơn hàng
$sql = "SELECT TinhTrangDH FROM phieuxuat WHERE MaPX=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$tinhTrangDH = $row["TinhTrangDH"];

//Kiểm tra điều kiện hủy đơn
if ($tinhTrangDH === "Đang xử lý") {
  echo "Bạn không thể hủy đơn hàng đang xử lý!";
  exit;
}
if ($tinhTrangDH === "Đã hoàn thành") {
  echo "Bạn không thể hủy đơn hàng đã hoàn thành!";
  exit;
}
//Thay đổi trạng thái trong sql
$sql = "UPDATE phieuxuat SET TinhTrangDH = 'Đã hủy' WHERE MaPX = $id";
$conn->query($sql);

// Đóng kết nối
$conn->close();
//phản hồi cho javascript đã hủy thành công
echo "success";
?>
