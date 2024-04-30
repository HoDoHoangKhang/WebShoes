<?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/admin/config/config.php');
        $TenDangNhap=$_GET['id'];
        $sqltest="SELECT TrangThai FROM taikhoan WHERE TenDangNhap='$TenDangNhap'";
        $resulttest=mysqli_query($connect,$sqltest);
        $row=mysqli_fetch_array($resulttest);
        if($row['TrangThai']==0) { //Kiểm tra xem tài khoản này có bị khóa chưa
            $sql="UPDATE taikhoan SET TrangThai=1 WHERE TenDangNhap='$TenDangNhap'";
            $result=mysqli_query($connect,$sql);
            header("Location: ../../index.php?danhmuc=quanlytaikhoan&success=true&note=khoataikhoantrue&TenDangNhap=$TenDangNhap");
        } else {
            header("Location: ../../index.php?danhmuc=quanlytaikhoan&success=true&note=khoataikhoanfalse");
        }
        mysqli_close($connect);
?>