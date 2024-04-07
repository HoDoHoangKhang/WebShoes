<?php
session_start();
//lấy thông tin logo
$logoName = $_FILES["logo"]["name"];
$logoTmpName = $_FILES["logo"]["tmp_name"];
//lấy thông tin hình trang home
$imgName = $_FILES["img"]["name"];
$imgTmpName = $_FILES["img"]["tmp_name"];
$name = $_POST["name"];
// Xử lý logo
if (isset($logoName) && !empty($logoName)) {
  // Kiểm tra định dạng file
  $allowedTypes = array("image/jpeg", "image/png", "image/gif");
  if (!in_array($_FILES["logo"]["type"], $allowedTypes)) {
    echo "Lỗi: Định dạng file không hợp lệ!";
    exit();
  }

  // Di chuyển file từ đường dẫn tạm thời sang thư mục lưu trữ
  $logoPath = "C:/xampp/htdocs/webbangiay/assets/img/" . $logoName;
  move_uploaded_file($logoTmpName, $logoPath);
 
  $_SESSION['logo']= $logoName;
}

// Xử lý img
if (isset($imgName) && !empty($imgName)) {
  // Kiểm tra định dạng file
  $allowedTypes = array("image/jpeg", "image/png", "image/gif");
  if (!in_array($_FILES["img"]["type"], $allowedTypes)) {
    echo "Lỗi: Định dạng file không hợp lệ!";
    exit();
  }

  // Di chuyển file từ đường dẫn tạm thời sang thư mục lưu trữ
  $imgPath = "C:/xampp/htdocs/webbangiay/assets/img/" . $imgName;
  move_uploaded_file($imgTmpName, $imgPath);
 
  $_SESSION['img']= $imgName;
}
  if($name != '')
    $_SESSION['name']= $name;
  
  echo "<script>alert('Cập nhật thông tin thành công');</script>";
  echo "<script>window.location.href = '../../index.php?danhmuc=caidatwebsite';</script>";
