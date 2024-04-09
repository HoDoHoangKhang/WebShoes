<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/sanpham.php');
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
        $search = $_POST['search'];
        $query= "SELECT * FROM sanpham 
        INNER JOIN nhanhieu ON nhanhieu.MaNhanHieu = sanpham.MaNhanHieu 
        INNER JOIN loaisp ON loaisp.MaLoai = sanpham.MaLoai ";
        if(isset($_POST['search']) && $search!=""){
            $query.=" WHERE TenSP LIKE '%".$search."%'";
        }
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
    if($_POST['action']=='showCart'){
        $output='';
        $cart=json_decode($_POST['cart']);
        foreach($cart as $product){
            $sanPham=new SanPham(null,null,null,null,null,null,null,null,null,null,null,null,null);
            $sanPham=getProduct($product->MaSP);
            $output.='
            <tr>
                <td>
                    <div class="shell-product">
                        <div class="shell-img">
                            <img src="./assets/img/'.$sanPham->getHinhAnh().'" alt="" class="">
                        </div>
                        <div class="shell-title-repository">
                            <div class="shell-title">
                                '.$sanPham->getTenSP().'
                            </div>
                            <div class="shell-repository">
                                23 stocks remaining
                            </div>
                        </div>
                    </div>
                </td>
                <td class="cartSize">'.$product->Size.'</td>
                <td class="cartSoluong">'.$product->SoLuong.'</td>
                <td>'.formatCurrency($sanPham->getGiaMoi()*$product->SoLuong).'</td>
                <td style="display:flex; align-item:center; padding:30px 0; gap:5px" >
                    <input class="inputCart" style="width: 20px; height: 20px;" type="checkbox" value="'.$product->MaSP.'">
                    <button class="buttonDeleteCart" id="'.$product->MaSP.'" style="width: 20px; height: 20px;"> 
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </td>
            </tr>
            ';
        }
        echo $output;
    }
    if($_POST['action']=='addProductToTotal'){
        $output='';
        $products=json_decode($_POST['products']);
        foreach($products as $product){
            $sanPham=new SanPham(null,null,null,null,null,null,null,null,null,null,null,null,null);
            $sanPham=getProduct($product->MaSP);
            $output.='
            <li class="shell-total-item">
                <div class="shell-total-item-detail">
                    <div class="shell-total-img-quanlity">
                        <div class="shell-total-img">
                            <img src="./assets/img/'.$sanPham->getHinhAnh().'" alt="" class="">
                        </div>
                        <div class="shell-total-item_quanlity">
                            '.$product->SoLuong.'
                        </div>
                    </div>
                    <div class="shell-total-title_size">
                        <div class="shell-total-title">
                            '.$sanPham->getTenSP().'
                        </div>
                        <div class="shell-total-size">
                            Size: '.$product->Size.'
                        </div>
                    </div>
                </div>
                <div class="shell-total-item-price">
                    <span>'.formatCurrency($sanPham->getGiaMoi()*$product->SoLuong).'</span>
                </div>  
            </li>
            ';
        }
        echo $output;
    }
    if($_POST['action'] == "getListProductFromCart") {
        $carts = json_decode($_POST['cart']);
        $productArr = array();
        foreach($carts as $cart) {
            $sanPham=getProduct($cart->MaSP);
            $product = array(
                'HinhAnh' => $sanPham->getHinhAnh(),
                'MaSP' => $sanPham->getMaSP(),
                'TenSP' => $sanPham->getTenSP(),
                'GiaMoi' => $sanPham->getGiaMoi(),
                'SoLuong' => $cart->SoLuong,
                'Size' => $cart->Size                
            );
            $productArr[]=$product;
        } 
        echo json_encode($productArr);
    }
    if($_POST['action']=='showCheckout'){
        $output='';
        $products=json_decode($_POST['listCart']);
        foreach($products as $product){
            $sanPham=new SanPham(null,null,null,null,null,null,null,null,null,null,null,null,null);
            $sanPham=getProduct($product->MaSP);
            $output.='
            <li class="shell-total-item">
                <div class="shell-total-item-detail">
                    <div class="shell-total-img-quanlity">
                        <div class="shell-total-img">
                            <img src="./assets/img/'.$sanPham->getHinhAnh().'" alt="" class="">
                        </div>
                        <div class="shell-total-item_quanlity">
                            '.$product->SoLuong.'
                        </div>
                    </div>
                    <div class="shell-total-title_size">
                        <div class="shell-total-title">
                            '.$sanPham->getTenSP().'
                        </div>
                        <div class="shell-total-size">
                            Size: '.$product->Size.'
                        </div>
                    </div>
                </div>
                <div class="shell-total-item-price">
                    <span>'.formatCurrency($sanPham->getGiaMoi()*$product->SoLuong).'</span>
                </div>  
            </li>
            ';
        }
        echo $output;
    }
?>
