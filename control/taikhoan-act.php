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
    // echo getTaiKhoan("user2");
?>