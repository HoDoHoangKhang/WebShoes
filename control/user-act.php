<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/user.php');
    function getUser($tendangnhap){
        $db = new DTB();
        $kq = mysqli_query($db->getConnection(), "SELECT * FROM `user` WHERE TenDangNhap = '$tendangnhap' ");
        $row=mysqli_fetch_array($kq);
        $user = new User(
            $row['Ma'],
            $row['TenDangNhap'],
            $row['HoTen'],
            $row['NgaySinh'],
            $row['SDT'],
            $row['Email'],
            $row['DiaChi'],
            $row['GioiTinh']
        );
        $db->disconnect();
        return $user;
    }
?>