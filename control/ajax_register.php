<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/taikhoan-act.php');
    $tenDangNhap= $_POST['tenDangNhap'];
    if(tenDangNhapTonTai($tenDangNhap)==1){
        echo 1;
    }else{
        echo 0;
    }
?>