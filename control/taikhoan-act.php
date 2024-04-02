<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    function getTenNhomQuyen($TenDangNhap){
        $db = new DTB();
        $kq = mysqli_query($db->getConnection(), "SELECT * FROM `taikhoan` INNER JOIN `quyen` ON taikhoan.MaQuyen = quyen.MaQuyen WHERE taikhoan.TenDangNhap='$TenDangNhap'");
        $row=mysqli_fetch_array($kq);
        return $row['TenQuyen'];
    }
    // echo getTenNhomQuyen("user2");
?>