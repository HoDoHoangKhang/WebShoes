<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/loaisp.php');

function getLoaiSanPhamList(){
    $db = new DTB();
    $kq = mysqli_query($db->getConnection(), "SELECT * FROM loaisp");
    $loaiSpArr = array();
    while ($row = mysqli_fetch_assoc($kq)) {
        $loaiSP = new LoaiSP(
            $row['MaLoai'],
            $row['TenLoai']
        );
        $loaiSpArr[] = $loaiSP;
    }
    $db->disconnect();
    return $loaiSpArr;
}
function showDanhMuc(){
    $danhMucArr = getLoaiSanPhamList();
    foreach($danhMucArr as $danhMuc){
        echo "
        <li class='filter__list-item filter__list-item-text'>
            <input class='inputFilter danhmucFilter' type='checkbox' name='' id='' value='".$danhMuc->getTenLoai()."'>
            <span>".$danhMuc->getTenLoai()."</span>
        </li>
        ";
    }
}
?>