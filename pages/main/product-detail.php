<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/sanpham.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/nhanhieu-act.php');


    $product= new SanPham(null,null,null,null,null,null,null,null,null,null,null,null,null);
    $product=getProduct($_GET['id']);
    $MaSP=$product->getMaSP();
    $TenSP=$product->getTenSP();        
    $SoSaoDanhGia=$product->getSoSaoDanhGia();
    $SoLuotDanhGia=$product->getSoLuotDanhGia();
    $MoTa=$product->getMoTa();
    $HinhAnh=$product->getHinhAnh();
    $SanPhamMoi=$product->getSanPhamMoi();
    $SanPhamHot=$product->getSanPhamHot();
    $GiaCu=$product->getGiaCu();
    $GiaMoi=$product->getGiaMoi();
    $SoLuongDaBan=$product->getSoLuongDaBan();
    $MaNhanHieu=$product->getMaNhanHieu();
    $MaLoai=$product->getMaLoai();

    //Kiểm tra hàng có còn tromg kho không, còn thì trả về trua, hết thì false
    function kiemTraKho($MaSP,$SizeSP){
        global $connect;
        $sql_kiemTraKho= "SELECT sanpham.MaSP, ctsizesp.SizeSP,ctsizesp.SoLuong FROM sanpham INNER JOIN ctsizesp ON ctsizesp.MaSP = sanpham.MaSP WHERE sanpham.MaSP = '" . $MaSP . "' AND ctsizesp.SizeSP ='" . $SizeSP . "' ";
        $result_kiemTraKho=mysqli_query($connect,$sql_kiemTraKho);
        $product_kiemTraKho=mysqli_fetch_array($result_kiemTraKho);
        if($product_kiemTraKho['SoLuong']>0){
            return True;
        }
        else{
            return False;
        }
    }
?>
<main style="position: relative;">
    <div class="notification">

    </div>
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-main">
                <span>
                    Home
                </span>
                <i class="breadcrumb-icon fa-solid fa-chevron-right"></i>
                <span>
                    Product
                </span>
                <i class="breadcrumb-icon fa-solid fa-chevron-right"></i>
                <span class="breadcrumb-detail">
                    <?php echo getTenNhanHieu($MaNhanHieu)?>
                </span>
                <i class="breadcrumb-icon fa-solid fa-chevron-right"></i>

                <span class="breadcrumb-detail">
                    <?php echo $TenSP ?>
                </span>
            </div>
        </div>
    </section>
    <section class="detail">
        <div class="container">
            <div class="detail-main">
                <div class="detail-show">
                    <ul class="detail-show__slick">
                        <!-- <li class="detail-show__item ">
                            <img src="./assets/img/detail-1.jpeg" alt="" class="">
                        </li> -->
                    </ul>
                    <div class="detail-show__image">
                        <img src="./assets/img/<?php echo $HinhAnh ?>" alt="" class="">
                        <div class="detail-show__image-slick">
                            <i class="detail-show__image-slick-btn fa-solid fa-angle-left"></i>
                            <i class="detail-show__image-slick-btn fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="detail-content">
                    <div class="detail-content-product">
                        <h3 class="detail-content__title" style="font-size: 25px; margin-bottom: 10px;">
                            <?php echo $TenSP ?>
                        </h3>
                        <div class="detail-content__rate-review-sold">
                            <div class="detail-content__rate">
                                <i class="detail-content__rate-icon fa-solid fa-star"></i>
                                <i class="detail-content__rate-icon fa-solid fa-star"></i>
                                <i class="detail-content__rate-icon fa-solid fa-star"></i>
                                <i class="detail-content__rate-icon fa-solid fa-star"></i>
                                <i class="detail-content__rate-icon fa-solid fa-star"></i>
                                <span></span>
                            </div>
                            <div class="detail-content__review">
                                <span>
                                    <?php echo $SoLuotDanhGia ?>
                                </span> 
                                Đánh giá
                            </div>
                            <div class="detail-content__sold">
                                <span>
                                    <?php echo $SoLuongDaBan ?>
                                </span> 
                                Đã bán
                            </div>
                        </div>
                        <div class="detail-content__price">
                            <div class="detail-content__price-sale">
                                <i  class="detail-content__price-icon fa-sharp fa-regular fa-badge-percent"></i>
                                <i>
                                    20%
                                </i>
                            </div>
                            <span><del>
                                <?php echo formatCurrency($GiaCu) ?>
                            </del></span>  
                            <span>
                                <?php echo formatCurrency($GiaMoi) ?>
                            </span>
                        </div>
                        <div class="detail-content__size">
                            <div class="titleSize">
                                <h4>Size</h4>
                                <div class="size-warning">
                                    <i class="fa-solid fa-exclamation-circle"></i>
                                    <p>Vui lòng chọn size</p>
                                </div>
                            </div>
                            <ul class="detail-content__size-list">
                                <!-- Hiển thị size sản phẩm -->
                                <?php 
                                    $sql_sizeSp= "SELECT * FROM `sizesp`";
                                    $result_sizeSp=mysqli_query($connect,$sql_sizeSp);
                                    $product_sizeSp=mysqli_fetch_array($result_sizeSp);
                                    while($product_sizeSp=mysqli_fetch_array($result_sizeSp)){
                                            if(kiemTraKho($MaSP,$product_sizeSp['SizeSP'])){?>
                                                <li class="detail-content__size-item"><?php echo $product_sizeSp['SizeSP'] ?></li>
                                            <?php }
                                            else{ ?>
                                                <li class="detail-content__size-item detail-content__size-item--disable"><?php echo $product_sizeSp['SizeSP'] ?></li>
                                            <?php } 
                                   } ?>                                
                            </ul>
                        </div>
                        <div class="detail-content__quanlity">
                            <div class="detail-content__title" style="padding-bottom: 10px; margin: 0;">
                                <h4 style="font-size: 20px;">Số lượng</h4>
                                <div class="detail-content__instock">
                                    còn lại: <span class="detail-content__instock-value">1000</span>
                                </div>
                                <div class="stock-warning">
                                    <i class="fa-solid fa-exclamation-circle"></i>
                                    <p>Số lượng trong kho không đủ</p>
                                </div>
                            </div>
                            <div class="detail-content__count">
                                <input type="number" id="quantity" value="1">
                                <div class="detail-content__count--quanlity">
                                    <button onclick="increaseQuantity()">
                                        <i class="fa-solid fa-caret-up"></i>
                                    </button>
                                    <button onclick="decreaseQuantity()">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="detail-button">
                            <div  class="detail-btn__buy card-btn">Mua ngay</div>
                            <button class="detail-btn__cart card-btn ">
                                <i class="fa-regular fa-bag-shopping"></i>
                            </button>
                            <button class="detail-btn__like card-btn">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="detail-content-shop">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="describe">
        <div class="container">
            <div class="describe-main">
                <div class="describe-title">
                    <img class="describe-title_bg" src="./assets/img/higtline.png" alt="">
                    <h3>Describe</h3>
                </div>
                <div class="describe-detail">
                    <h4>
                        LEGENDARY STYLE REFINED.
                    </h4>
                    <p>
                        The radiance lives on in the Nike Air Force 1 '07, the b-ball icon that puts a fresh spin on what you know best: crisp leather, bold colours and the perfect amount of flash to make you shine.
                    </p>
                    <h5>
                        Benefits
                    </h5>
                    <ul>
                        <li>
                            The stitched leather overlays on the upper add heritage style, durability and support.
                        </li>
                        <li>
                            The  leather overlays on the upper add heritage style, durability and support.
                        </li>
                        <li>
                            The stitched leather overlays on the upper add heritage style, durability and support.

                        </li>
                        <li>
                            The stitched leather overlays on the upper add heritage style, durability and support.
                        </li>
                    </ul>
                    <h5>
                        Product Details
                    </h5>
                    <ul>
                        <li>
                            Foam midsole
                        </li>
                        <li>
                            Perforations on the toe
                        </li>
                        <li>
                            Colour Shown: White/Jade Ice
                        </li>
                        <li>
                            Style: DD8959-113
                        </li>
                        <li>
                            Country/Region of Origin: Vietnam
                        </li>
                    </ul>
                    <h5>
                        Air Force 1 Origins
                    </h5>
                    <p>
                        Debuting in 1982, the AF-1 was the first basketball shoe to house Nike Air, revolutionising the game while rapidly gaining traction around the world. Today, the Air Force 1 stays true to its roots with the same soft and springy cushioning that changed sneaker history.
                    </p>
        
                </div>
                <ul class="describe__menu">
                    <li class="describe__menu-sub describe__menu-sub_reviews describe--primary">
                        Reviews
                    </li>
                    <li class="describe__menu-sub describe__menu-sub_size">
                        Size & Fit
                    </li>
                    <li class="describe__menu-sub describe__menu-sub_delivery">
                        Free Delivery and Returns
                    </li>
                </ul>
                <div class="describe-reviews describe-select ">
                    <div class="describe-reviews_total-detail">
                        <div class="reviews_total-average">
                            <div class="reviews_total-number">
                                <div class="reviews_total-number-number">4.9</div>
                                <div class="reviews_total-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="reviews_total-turn">
                                    999 rating
                                </span>
                            </div>
                            <div class="reviews_total-rate">
                                <div class="reviews_total-rate-item">
                                    <span class="reviews_total-rate-number">5</span>
                                    <div class="reviews_total-rate-full">
                                        <div class="reviews_total-rate-box"></div>
                                    </div>
                                </div>
                                <div class="reviews_total-rate-item">
                                    <span class="reviews_total-rate-number">4</span>
                                    <div class="reviews_total-rate-full">
                                        <div class="reviews_total-rate-box"></div>
                                    </div>
                                </div>
                                <div class="reviews_total-rate-item">
                                    <span class="reviews_total-rate-number">3</span>
                                    <div class="reviews_total-rate-full">
                                        <div class="reviews_total-rate-box"></div>
                                    </div>
                                </div>
                                <div class="reviews_total-rate-item">
                                    <span class="reviews_total-rate-number">2</span>
                                    <div class="reviews_total-rate-full">
                                        <div class="reviews_total-rate-box"></div>
                                    </div>
                                </div>
                                <div class="reviews_total-rate-item">
                                    <span class="reviews_total-rate-number">1</span>
                                    <div class="reviews_total-rate-full">
                                        <div class="reviews_total-rate-box"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="describe-reviews_detail">
                            <div class="describe-reviews_detail-filter">
                                <div class="reviews_detail-filter_item reviews_detail-filter_item--select">
                                    All
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    Pictrure
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    1
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    2
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    3
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    4
                                </div>
                                <div class="reviews_detail-filter_item">
                                    <i class="fa-solid fa-star"></i>
                                    5
                                </div>
                            </div>
                            <div class="describe-reviews_detail-list">
                                <div class="describe-reviews_detail-item">
                                    <div class="describe-reviews_detail-info">
                                        <div class="describe-reviews_detail-avt">
                                            <img src="./assets//img/rating.jpg" alt="" class="">
                                            <div class="describe-reviews_detail-name_type">
                                                <div class="describe-reviews_detail-name">Elonmusk</div>
                                                <div class="describe-reviews_detail-type">
                                                    <div class="describe-reviews_detail-size">Size: 40</div>
                                                    <div class="describe-reviews_detail-color">Color: Red</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="describe-reviews_detail-time">
                                            20 hours ago
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-rating">
                                        <div class="describe-reviews_detail-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="describe-reviews_detail-title">
                                            Sản phẩm rất tốt
                                        </div>
                                        <div class="describe-reviews_detail-cmt">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis culpa ipsum repudiandae magni labore perspiciatis ex consectetur cumque mollitia. Temporibus perspiciatis ratione ad a, nobis nisi obcaecati autem minus facere.
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-like">
                                        <i class="fa-solid fa-thumbs-up describe-reviews_detail-like-icon"></i>
                                        <span>Hữu ích</span>
                                    </div>
                                </div>  
                                <div class="describe-reviews_detail-item">
                                    <div class="describe-reviews_detail-info">
                                        <div class="describe-reviews_detail-avt">
                                            <img src="./assets//img/rating.jpg" alt="" class="">
                                            <div class="describe-reviews_detail-name_type">
                                                <div class="describe-reviews_detail-name">Elonmusk</div>
                                                <div class="describe-reviews_detail-type">
                                                    <div class="describe-reviews_detail-size">Size: 40</div>
                                                    <div class="describe-reviews_detail-color">Color: Red</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="describe-reviews_detail-time">
                                            20 hours ago
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-rating">
                                        <div class="describe-reviews_detail-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="describe-reviews_detail-title">
                                            Sản phẩm rất tốt
                                        </div>
                                        <div class="describe-reviews_detail-cmt">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis culpa ipsum repudiandae magni labore perspiciatis ex consectetur cumque mollitia. Temporibus perspiciatis ratione ad a, nobis nisi obcaecati autem minus facere.
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-like">
                                        <i class="fa-solid fa-thumbs-up"></i>
                                        <span>Hữu ích</span>
                                    </div>
                                </div>  
                                <div class="describe-reviews_detail-item">
                                    <div class="describe-reviews_detail-info">
                                        <div class="describe-reviews_detail-avt">
                                            <img src="./assets//img/rating.jpg" alt="" class="">
                                            <div class="describe-reviews_detail-name_type">
                                                <div class="describe-reviews_detail-name">Elonmusk</div>
                                                <div class="describe-reviews_detail-type">
                                                    <div class="describe-reviews_detail-size">Size: 40</div>
                                                    <div class="describe-reviews_detail-color">Color: Red</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="describe-reviews_detail-time">
                                            20 hours ago
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-rating">
                                        <div class="describe-reviews_detail-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="describe-reviews_detail-title">
                                            Sản phẩm rất tốt
                                        </div>
                                        <div class="describe-reviews_detail-cmt">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis culpa ipsum repudiandae magni labore perspiciatis ex consectetur cumque mollitia. Temporibus perspiciatis ratione ad a, nobis nisi obcaecati autem minus facere.
                                        </div>
                                    </div>
                                    <div class="describe-reviews_detail-like">
                                        <i class="fa-solid fa-thumbs-up"></i>
                                        <span>Hữu ích</span>
                                    </div>
                                </div>  
                            </div>
                            <div class="page">
                                <div class="page-main">
                                    <div class="page-left page-left-right page-item--disable">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </div>
                                    <div class="page-number">
                                        <div class="page-item page-item--select">
                                            1
                                        </div>
                                        <div class="page-item">
                                            2
                                        </div>
                                        <div class="page-item">
                                            3
                                        </div>
                                        <div class="page-item">
                                            4
                                        </div>
                                        <div class="page-item">
                                            5
                                        </div>
                                        <div class="page-dot">
                                            ...
                                        </div>
                                        <div class="page-item">
                                            10
                                        </div>
                                    </div>
                                    <div class="page-right page-left-right">
                                        <i class="fa-solid fa-angle-right "></i>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="describe-size describe-select none">
                    <img src="./assets/img/size_fit.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <section class="relate">
        <div class="container">
            <div class="relate-main">
                <div class="relate__title-slick">
                    <span class="relate__title title">
                        SAME
                        <a href="">SẢN PHẨM TƯƠNG TỰ</a>
                    </span>
                    <div class="relate__slick btn-slick">
                        <i class="btn-slick__left fa-solid fa-angle-left"></i>
                        <i class="btn-slick__right fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="relate__list">
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                        
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recent">
        <div class="container">
            <div class="recent-main">
                <div class="recent__title-slick">
                    <span class="recent__title title">
                        VIEW
                        <a href="">XEM GẦN ĐÂY</a>
                    </span>
                    <div class="recent__slick btn-slick">
                        <i class="btn-slick__left fa-solid fa-angle-left"></i>
                        <i class="btn-slick__right fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="recent__list">
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="./assets/img/pd-1.png" alt="">
                        </div>
                        <p class="card-title">Nike Running Shoes</p>
                        <div class="card-price-rate">
                            <div class="card-price">
                                <span>18.900.000 <u>đ</u></span>
                                <span><del>18.900.000 <u>đ</u></del></span>  
                            </div>
                            <div class="card-rate">
                                <i class="fa-solid fa-star"></i>
                                4.5
                            </div>
                        </div>   
                        <i class="card-btn__like fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>
<script src="index.js">
    
</script>
<script>
    $(document).ready(function(){
        var btnAddCart=document.querySelector(".detail-btn__cart");
        btnAddCart.addEventListener('click',function(){
            if(getSize()==0){// chưa chọn size
                var sizeWarning=document.querySelector(".size-warning");
                sizeWarning.style.opacity=1;
            }
            else{   //đã chọn size
                $.ajax({
                    url: "./control/ajax_action.php",
                    method: "POST",
                    data: {
                        MaSP: parseInt(<?php echo $MaSP ?>),
                        SizeSP: getSize(),
                        SoLuong: getQuantity(),
                        action: "themVaoGioHang"
                    },
                    success: function(data){//Nếu = 0 thì số luog trong kho không đủ
                        if(data==0){
                            var stock=document.querySelector(".stock-warning");
                            stock.style.opacity=1;
                        }
                        else{ //Nếu = 1 thì thêm vào giỏ hàng thành công
                            creatToast("item-success","Thêm vào vỏ hàng thàng công !","fa-solid fa-circle-check","item-end-success");
                            var quanlityCart=document.querySelector(".header__action-cart-count");
                            if(data>0){
                                quanlityCart.style.display="block";
                                quanlityCart.innerHTML=data;
                            }
                        }
                    }
                });
            }
        })
        function getSize(){
            var valueSize=0;
            var size=document.querySelectorAll(".detail-content__size-item");
            size.forEach(element => {
                if(element.classList.contains("detail-content__size-item--select")){
                    valueSize=element.textContent;
                }
            });
            return parseInt(valueSize);
        }
        function getQuantity(){
            return parseInt(document.querySelector("#quantity").value);
        }
        var selectSize=document.querySelectorAll(".detail-content__size-item");
        selectSize.forEach(element=>{
            element.addEventListener('click',function(){
                var sizeWarning=document.querySelector(".size-warning");
                sizeWarning.style.opacity=0;
                var stock=document.querySelector(".detail-content__instock");
                stock.style.display="block";
                $.ajax({
                    url: "./control/ajax_action.php",
                    method: "POST",
                    data: {
                        MaSP: parseInt(<?php echo $MaSP ?>),
                        SizeSP: parseInt(element.textContent),
                        action: "kiemTraKho"
                    },
                    success: function(data){
                        var valueStock=document.querySelector(".detail-content__instock-value");
                        valueStock.textContent=data;
                    }
                });
            });
        });
        var inputQuantity=document.querySelector("#quantity");
        inputQuantity.addEventListener('change',function(){
            var stock=document.querySelector(".stock-warning");
            stock.style.opacity=0;
            if(inputQuantity.value<0) inputQuantity.value=1;
        });
        

    });

</script>
<!-- <script>
    function priceNew(priceOld,sale){
        var priceAfterSale = priceOld - (priceOld * sale / 100);
        return priceAfterSale.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    }
    function insertSize(size){
        var listSize=document.querySelector(".detail-content__size-list");
        var newLi=document.createElement("li");
        newLi.classList.add("detail-content__size-item");
        newLi.textContent=size;
        listSize.appendChild(newLi);
    }
    function addSize(listSize){
        var arrSize=listSize.split(",");
        arrSize.forEach(element =>{
            insertSize(element);
        });
    }
    function insertColor(color){
        var listColor=document.querySelector(".detail-content__color-list");
        var newLi=document.createElement("li");
        newLi.classList.add("detail-content__color-item");
        switch(color){
            case "black":
                newLi.classList.add("bg-black");
                break;
            case "white":
                newLi.classList.add("bg-white");
                break;
            case "blue":
                newLi.classList.add("bg-blue");
                break;
            case "yellow":
                newLi.classList.add("bg-yellow");
                break;
            case "green":
                newLi.classList.add("bg-green");
                break;
            case "red":
                newLi.classList.add("bg-red");
                break;
        }
        listColor.appendChild(newLi);
    }
    function addColor(listColor){
        var arrColor=listColor.split(",");
        arrColor.forEach(element =>{
            insertColor(element);
        });
    }
    function rate(rate){
        var rateNumber=document.querySelector(".detail-content__rate span");
        rateNumber.textContent=rate;
        var rateStar=document.querySelectorAll(".detail-content__rate-icon");
        switch(rate){
            case 1:
                rateStar[0].classList.add("cl-orange");
                break;
            case 2:
                rateStar[0].classList.add("cl-orange");
                rateStar[1].classList.add("cl-orange");
                break;
            case 3:
                rateStar[0].classList.add("cl-orange");
                rateStar[1].classList.add("cl-orange");
                rateStar[2].classList.add("cl-orange");
                break;
            case 4:
                rateStar[0].classList.add("cl-orange");
                rateStar[1].classList.add("cl-orange");
                rateStar[2].classList.add("cl-orange");
                rateStar[3].classList.add("cl-orange");
                break;
            case 5:
                rateStar[0].classList.add("cl-orange");
                rateStar[1].classList.add("cl-orange");
                rateStar[2].classList.add("cl-orange");
                rateStar[3].classList.add("cl-orange");
                rateStar[4].classList.add("cl-orange");
                break;
        }

    }
    function imgList(imgList){
        var listSlick=imgList.split(";");
        listSlick.forEach(element => {
            var newLi=document.createElement("li");
            newLi.classList.add("detail-show__item");
            var html=`
                <img src="./assets/img/`+element+`" alt="" class="">
            `
            newLi.innerHTML=html;
            document.querySelector(".detail-show__slick").appendChild(newLi);
        });
    }
    window.onload = function() {
        // Lấy thông tin sản phẩm từ query parameters
        const urlParams = new URLSearchParams(window.location.search);
        const ob = urlParams.get("ob");
        var object=JSON.parse(ob);
        document.querySelector(".detail-content__title").textContent=object.title;
        document.querySelector(".detail-show__image img").src="./assets/img/"+object.img;
        document.querySelector(".detail-content__review span").textContent=object.reviews;
        document.querySelector(".detail-content__sold span").textContent=object.sold;
        document.querySelector(".detail-content__price-sale i:last-child").textContent=object.sale+"%";
        document.querySelector(".detail-content__price span:nth-child(2) del").textContent=object.price_old.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' })
        document.querySelector(".detail-content__price span:nth-child(3)").textContent=priceNew(object.price_old,object.sale);
        addSize(object.size);
        addColor(object.color)
        rate(object.rate);
        imgList(object.list_img);



        //slick product-detial
        var next=document.querySelector(".detail-show__image-slick i:nth-child(2)");
        var back=document.querySelector(".detail-show__image-slick i:nth-child(1)");

        var hero=document.querySelector(".detail-show__image img");
        var list_img=document.querySelectorAll(".detail-show__item");

        var arr_img=object.list_img.split(";");

        function removeBorder(){
            list_img.forEach(element => {
                element.classList.remove("select-product-detail");
            });
        }


        var curentIndex=0;
        list_img[0].classList.add("select-product-detail")
        list_img.forEach((element,index) => {
            element.addEventListener('click',function(){
                removeBorder();
                hero.src="./assets/img/"+arr_img[index]; // trong 1 lớp có nhiều lớp con nên phải lấy ra phần tử đầu tiên
                curentIndex=index;
                element.classList.add("select-product-detail");
            })
        });
        
        next.addEventListener('click',function(){
            removeBorder();
            console.log(curentIndex);
            if(curentIndex===arr_img.length-1){
                curentIndex=0;
                hero.src=list_img[0].children[0].src;
                list_img[curentIndex].classList.add("select-product-detail");
            }
            else{
                hero.src=list_img[curentIndex+1].children[0].src;
                list_img[curentIndex+1].classList.add("select-product-detail");
                curentIndex++;
            }
        });

        back.addEventListener('click',function(){
            removeBorder();
            if(curentIndex===0){
                curentIndex=arr_img.length-1;
                hero.src=list_img[arr_img.length-1].children[0].src;
                list_img[arr_img.length-1].classList.add("select-product-detail");
            }
            else{
                hero.src=list_img[curentIndex-1].children[0].src;
                list_img[curentIndex-1].classList.add("select-product-detail");
                curentIndex--;
            }
        });
        function removeSelectSize(){
            var selectSize=document.querySelectorAll(".detail-content__size-item");
            selectSize.forEach(element=>{
                element.classList.remove("detail-content__size-item--select");

            });
        }
        var selectSize=document.querySelectorAll(".detail-content__size-item");
        selectSize.forEach(element=>{
            element.addEventListener('click',function(){
                if(element.classList.contains("detail-content__size-item--disable")==false){
                    removeSelectSize();
                    element.classList.add("detail-content__size-item--select");   
                }
            });
        });

        //breadcrumb-detail
        document.querySelector(".breadcrumb-detail").textContent=object.title;


    };
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

console.log($$(".page-item"));
$$(".page-item").forEach(element => {
    element.addEventListener('click', function() {
        removeClasslist($$(".page-item"), "page-item--select");
        element.classList.add("page-item--select");
    });
});

$$(".reviews_detail-filter_item").forEach(element => {
    element.addEventListener('click', function() {
        removeClasslist($$(".reviews_detail-filter_item"), "reviews_detail-filter_item--select");
        element.classList.add("reviews_detail-filter_item--select");
    });
});

// $(".detail-content__count-minus").addEventListener('click', function(){
//   console.log($(".detail-content__count-number").innerHTML);
// });



//-------------------------------------SHELL
//check box
function selectShell() {
    console.log("?")
    $$(".shell-check_box").forEach(element => {
        element.addEventListener('click', function() {
            console.log("vppafs")
            element.classList.toggle("shell-check_box--select");
            element.children[0].classList.toggle("block")
        });
    });
}
selectShell();
$(".header__action-cart").addEventListener('click', function() {
    window.location.href = "./shell.html";
});

</script> -->
