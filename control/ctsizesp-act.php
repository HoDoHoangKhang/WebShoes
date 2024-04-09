<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/ctsizesp.php');

function getSoluongTuMaVaSize($MaSP, $SizeSP){
    $db = new DTB();
    $kq = mysqli_query($db->getConnection(), "SELECT * FROM `ctsizesp` WHERE MaSP = ".$MaSP." AND SizeSP = ".$SizeSP." ");
    $row=mysqli_fetch_array($kq);
    $ctSizeSP = new CTSizeSP(
        $row['MaSP'],
        $row['SizeSP'],
        $row['SoLuong']
    );
    $db->disconnect();
    return $ctSizeSP;
}
?>