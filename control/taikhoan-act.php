<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/taikhoan.php');
    function getTenNhomQuyen($TenDangNhap){
        $db = new DTB();
        $kq = mysqli_query($db->getConnection(), "SELECT * FROM `taikhoan` INNER JOIN `quyen` ON taikhoan.MaQuyen = quyen.MaQuyen WHERE taikhoan.TenDangNhap='$TenDangNhap'");
        $row=mysqli_fetch_array($kq);
        return $row['TenQuyen'];
    }
    function getTaiKhoan($TenDangNhap){
        $db = new DTB();
        $kq = mysqli_query($db->getConnection(), "SELECT * FROM `taikhoan` WHERE TenDangNhap = '$TenDangNhap' ");
        $row=mysqli_fetch_array($kq);
        $taikhoan = new TaiKhoan(
            $row['TenDangNhap'],
            $row['MatKhau'],
            $row['NgayTaoTK'],
            $row['MaQuyen'],
            $row['Avt']
        );
        $db->disconnect();
        return $taikhoan;
    }
    function tenDangNhapTonTai($TenDangNhap){
        $db = new DTB();
        $kq = mysqli_query($db->getConnection(), "SELECT * FROM `taikhoan` WHERE TenDangNhap = '$TenDangNhap' ");
        $row=mysqli_fetch_array($kq);
        $db->disconnect();
        if($row) {
            return 1; // Tên đăng nhập tồn tại
        } else {
            return 0; // Tên đăng nhập không tồn tại
        }
    }
    // echo getTaiKhoan("user2");
?>