<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/px.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');

    function insertPhieuXuat($MaNV, $MaKH, $NgayDatHang, $TinhTrangDH, $TongTien, $TongSoLuong, $trangThai){
        $db = new DTB();
        $query = "INSERT INTO phieuxuat (MaNV, MaKH, NgayDatHang, TinhTrangDH, TongTien, TongSoLuong, trangThai) 
                    VALUES ('$MaNV', '$MaNV', '$NgayDatHang', '$TinhTrangDH', '$TongTien', '$TongSoLuong', '$trangThai')";
        $result = mysqli_query($db->getConnection(), $query);
        $new_id = mysqli_insert_id($db->getConnection());
        return $new_id;
    }
    function deletePhieuXuat($MaPX){
        $db = new DTB();
        $query = "DELETE FROM `phieuxuat` WHERE MaPX=$MaPX";
        $result = mysqli_query($db->getConnection(), $query);
    }
    // insertPhieuXuat(2, 2 ,"2024-05-04","Tạm giữ",300000,1,1);
    function showPhieuXuat($maKH){
        $db = new DTB();
        $query = "SELECT * FROM phieuxuat WHERE MaKH=$maKH";
        $result = mysqli_query($db->getConnection(), $query);
        $output='';
        while($row=mysqli_fetch_array($result)){
            $output.='
            <tr>
                <td>#'.$row['MaPX'].'</td>
                <td>'.$row['NgayDatHang'].'</td>
                <td >
                    '.$row['TinhTrangDH'].'
                </td>
                <td>'.formatCurrency($row['TongTien']).'</td>
                <td>
                    <div style="display: flex; gap: 10px; justify-content: center;">
                        <button class="openModalBtn" style="padding: 5px 10px; background-color: #3294fe; border: none; color: white; border-radius: 4px; cursor: pointer;">Xem</button>
                        <button class="btnHuyDon" style="color:white; border:none; border-radius:4px; cursor: pointer; background-color: rgb(247, 55, 55); padding: 5px 10px">
                            Hủy
                        </button>    
                    </div>
                </td>
            </tr>
            ';
        }
        $db->disconnect();
        return $output;
    }
    function getTinhTrangPhieuXat($maPX){
        $db = new DTB();
        $query = "SELECT * FROM phieuxuat WHERE MaPX=$maPX";
        $result = mysqli_query($db->getConnection(), $query);
        $row=mysqli_fetch_array($result);
        return $row['TinhTrangDH'];
    }
    function getTongTien($maPX){
        $db = new DTB();
        $query = "SELECT * FROM phieuxuat WHERE MaPX=$maPX";
        $result = mysqli_query($db->getConnection(), $query);
        $row=mysqli_fetch_array($result);
        return $row['TongTien'];
    }
?>