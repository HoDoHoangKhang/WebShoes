<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/nhanhieu-act.php');
    $keyWordNhanHieu = json_decode($_POST['nhanhieu']);
    $keyWordNDanhMuc = json_decode($_POST['danhmuc']);
    if(($_POST['action'])=='filter_data'){
        $query= "SELECT * FROM sanpham 
        INNER JOIN nhanhieu ON nhanhieu.MaNhanHieu = sanpham.MaNhanHieu 
        INNER JOIN loaisp ON loaisp.MaLoai = sanpham.MaLoai ";
        if(isset($_POST['nhanhieu']) && !empty($keyWordNhanHieu)){
            $filterNhanHieu=implode("','",$keyWordNhanHieu);
            $query.=" AND nhanhieu.TenNhanHieu IN('".$filterNhanHieu."')";
        }
        if(isset($_POST['danhmuc']) && !empty($keyWordNDanhMuc)){
            $filterDanhMuc=implode("','",$keyWordNDanhMuc);
            $query.=" AND loaisp.TenLoai IN('".$filterDanhMuc."')";
        }
        if(isset($_POST['sortprice']) && $_POST['sortprice']!=""){
            $sortPrice=$_POST['sortprice'];
            if($sortPrice=="asc"){
                $query.=" ORDER BY sanpham.GiaMoi ASC";
            }else{
                $query.=" ORDER BY sanpham.GiaMoi DESC";
            }
        }
        $db = new DTB();
        $result = mysqli_query($db->getConnection(), $query);
        $productArr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $sanPham = new SanPham(
                $row['MaSP'],
                $row['TenSP'],
                $row['SoSaoDanhGia'],
                $row['SoLuotDanhGia'],
                $row['MoTa'],
                $row['HinhAnh'],
                $row['SanPhamMoi'],
                $row['SanPhamHot'],
                $row['GiaCu'],
                $row['GiaMoi'],
                $row['SoLuongDaBan'],
                $row['MaNhanHieu'],
                $row['MaLoai']
            );
            $productArr[] = $sanPham;
        }
        echo showListProductString($productArr);
        $db->disconnect();
    }
?>
