<?php

//$id = $_GET['id'];
$ten = 'admin1';
// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "shoestore");
  //lấy thông tin tài khoản,nhân viên
$sql="SELECT
  nv.HoTenNV,
  nv.NgaySinh,
  nv.GioiTinh,
  nv.SDT,
  nv.Email,
  nv.Diachi,
  tk.Avt,
  tk.MatKhau
FROM taikhoan tk  
INNER JOIN nhanvien nv ON tk.TenDangNhap = nv.TenDangNhap
WHERE nv.MaNV = 2;";
$result = $conn->query($sql);
if ($result->num_rows === 0) {
    echo "<p>Không có dữ liệu.</p>";
    die();
  }
  $data = mysqli_fetch_assoc($result);
  $hoTenNV = $data["HoTenNV"];
  $ngaySinh = $data["NgaySinh"];
  $gioiTinh = $data["GioiTinh"];
  $sdt = $data["SDT"];
  $email = $data["Email"];
  $diaChi = $data["Diachi"];
  $avatar = $data["Avt"];
  $matKhau = $data["MatKhau"];

  // Hiển thị thông tin người dùng
  ?>
  <style>
    .container {
  display: flex;
  
  align-items: center;
}
.form-group label {
  width: 300px; 
}

.form-group input select {
  width: 500px; 
}

.form-group {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 10px;
}

.update-button {
  margin: 0 auto; 
  display: block;
}

#password {
  -webkit-text-security: disc; /* Safari và Chrome */
  -moz-text-security: disc; /* Firefox */
  text-security: disc; /* Internet Explorer */
}
img{
  border-radius: 50%;
  width: 100px; 
  height: 100px; 
  overflow: hidden; 
  margin-right: 20px;
}
  </style>

  <div class="container">
  <form action="module/main/thongtintaikhoan-capnhat.php" method="post" enctype="multipart/form-data">
  <h1>Thông tin tài khoản</h1>
  <div class="form-group">
      <label for="avt">Avatar</label>
      <br>
      <img src="assets/img/<?php echo $avatar; ?>">
      <br>
      <input type="file" id="avatar" name="avatar">
  </div>
  <div class="form-group">
    <label for="name">Họ và tên:</label>
    <input type="text" name="name" id="name" class="form-control" value="<?php echo $hoTenNV; ?>">
  </div>
  <div class="form-group">
    <label for="dob">Ngày sinh:</label>
    <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $ngaySinh; ?>">
  </div>
  <div class="form-group">
    <label for="gender">Giới tính:</label>
    <select name="gender" id="gender" class="form-control" value="<?php echo $gioiTinh; ?>">
      <option value="Nam">Nam</option>
      <option value="Nữ">Nữ</option>
    </select>
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại:</label>
    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $sdt; ?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label for="address">Địa chỉ:</label>
    <input type="text" name="address" id="address" class="form-control" value="<?php echo $diaChi; ?>">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu hiện tại:</label>
    <input type="password" name="password" id="password" class="form-control">
  </div>
  <div class="form-group">
    <label for="new_password">Mật khẩu mới:</label>
    <input type="password" name="new_password" id="new_password" class="form-control">
</div>
<button class="update-button" type="submit">Cập nhật</button>
</div>
