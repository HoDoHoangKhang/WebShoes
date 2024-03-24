<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/DTB.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/nhanhieu-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/ctsizesp-act.php');
    if(($_POST['action'])=='filter_data'){
        /////////////////////////////////////////////////////////// pagination
        $record_per_page = 20;                                   // pagination  
        $page = '';                                              // pagination
        $pagination = '';                                        // pagination
        if(isset($_POST["page"]))                                // pagination
        {                                                        // pagination
             $page = $_POST["page"];                             // pagination
        }                                                        // pagination
        else                                                     // pagination
        {                                                        // pagination
             $page = 1;                                          // pagination
        }                                                        // pagination                                                                   
        $start_from = ($page - 1)*$record_per_page;              // pagination
        /////////////////////////////////////////////////////////// pagination
        $keyWordNhanHieu = json_decode($_POST['nhanhieu']);
        $keyWordNDanhMuc = json_decode($_POST['danhmuc']);
        $minPrice = $_POST['min'];
        $maxPrice = $_POST['max'];
        $newValue = $_POST['newValue'];
        $hotValue = $_POST['hotValue'];
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
        if(isset($_POST['min']) && isset($_POST['max'])){
            $query.=" AND sanpham.GiaMoi BETWEEN ".$minPrice." AND ".$maxPrice."";
        }
        if(isset($_POST['newValue']) && $_POST['newValue']!=0){
            $query.=" AND sanpham.SanPhamMoi = ".$newValue."";
        }
        if(isset($_POST['hotValue']) && $_POST['hotValue']!=0){
            $query.=" AND sanpham.SanPhamHot = ".$hotValue."";
        }
        if(isset($_POST['sortprice']) && $_POST['sortprice']!=""){
            $sortPrice=$_POST['sortprice'];
            if($sortPrice=="asc"){
                $query.=" ORDER BY sanpham.GiaMoi ASC";
            }else{
                $query.=" ORDER BY sanpham.GiaMoi DESC";
            }
        }
        ////////////////////////////////////////////////////////// pagination
        $query.=" LIMIT $start_from, $record_per_page";         // pagination
        ////////////////////////////////////////////////////////// pagination
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

        if($productArr==[]){
            $response = array(
                'data1' => "<h2>Không tìm thấy sản phẩm</h2>",
                'data2' => " ",
                'data3' => 0
            );
            echo json_encode($response);
        }
        else{
            /////////////////////////////////////////////////////////// pagination
            $queryExplore=explode("LIMIT",$query);                   // pagination
            $queryTemp=$queryExplore[0];                             // pagination
            $result = mysqli_query($db->getConnection(), $queryTemp);// pagination
            $total_records = mysqli_num_rows($result);               // pagination            
            $total_pages = ceil($total_records/$record_per_page);    // pagination
            for($i=1; $i<=$total_pages; $i++)                        // pagination    
            {                                                        // pagination
                $pagination .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
            }                                                        // pagination
            $pagination .= '</div><br /><br />';                     // pagination
            /////////////////////////////////////////////////////////// pagination
            $response = array(
                'data1' => showListProductString($productArr),
                'data2' => $pagination,
                'data3' => $total_records
            );
            echo json_encode($response);
        }
        $db->disconnect();
    }
    if($_POST['action']=='kiemTraKho'){
        echo getSoluongTuMaVaSize($_POST['MaSP'],$_POST['SizeSP'])->getSoLuong();
    }
    if($_POST['action']=='themVaoGioHang'){
        if($_POST['SoLuong']>getSoluongTuMaVaSize($_POST['MaSP'],$_POST['SizeSP'])->getSoLuong()){
            echo 0;
        }else{
            session_start();
            $tempProduct[]=[$_POST['MaSP'],$_POST['SizeSP'],$_POST['SoLuong']];
            $_SESSION['voHang']=$tempProduct;
            echo count($_SESSION['voHang']);
        }
    }
?>
