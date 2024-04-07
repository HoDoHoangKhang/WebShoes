<?php session_start();
 ?>

<header class="header">
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/taikhoan-act.php');
        // echo $_SESSION['taikhoan'];
        if(isset($_SESSION['taikhoan'])){
            if(getTenNhomQuyen($_SESSION['taikhoan'])!="Khách hàng"){?>
                <a href="admin/index.php" class="header_Admin">
                    <i class="fa-solid fa-circle-right icon-admin"></i><span>Admin</span>
                </a>
            <?php }
        }
        
    ?>

    <div class="container">
        <div class="header-main">
            <div class="header-logo">
                <div class="header-logo-menu none">
                    <i class="fa-solid fa-bars"></i>
                    <!-- <i class="fa-sharp fa-solid fa-list-ul"></i> -->
                </div>
                <a  href="index.php?danhmuc=home">
                <?php               
                    $_SESSION['logo'];
                    if($_SESSION['logo'] == '')
                      $_SESSION['logo'] = 'logo.png';    
                    $logo = $_SESSION['logo'];
                    ?>
                    <img src="./assets/img/<?php echo $logo; ?>" alt="Logo" class="header__logo" style="height: 50px; width: 100px;">                 
                </a>
            </div>
            <div class="header__menu">
                <a class="menu_sub" href="index.php?danhmuc=home" >
                    Home
                </a>
                <div class="menu_sub menu_sub-products">
                    Products
                    <div class="menu__hover">
                        <div class="menu__hover-shoes">
                            <h5 class="menu__hover__title">
                                Danh mục
                            </h5>
                            <ul class="menu__hover__content">
                                <?php 
                                    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/loaisp-act.php');
                                    showDanhMucMegaMenu();
                                ?>
                            </ul>
                        </div>
                        <div class="menu__hover-brands">
                            <h5 class="menu__hover__title">
                                Nhãn hiệu
                            </h5>
                            <ul class="menu__hover__content">
                                <?php 
                                    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/nhanhieu-act.php');
                                    showNhanHieuMegaMenu();
                                ?>
                            </ul>
                        </div>
                        <div class="menu__hover-img">
                            <img src="./assets/img/megaMenu.png" alt="">
                        </div>
                    </div>
                </div>
                <a class="menu_sub" href="index.php?danhmuc=about">About</a>
                <a class="menu_sub" href="index.php?danhmuc=contact">Contact</a>

            </div>
            <div class="header__action">
                <div class="header__action-search">
                    <i class="header__action-icon header__action-search-icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="header__action-search-input" placeholder="Search">
                </div>
                <a href="" class="header__action-like">
                    <i class="header__action-icon header__action-like-icon fa-regular fa-heart"></i>
                </a>
                <div class="header__action-cart">
                    <a href="index.php?danhmuc=shell" class="header__action-icon header__action-cart-icon fa-regular fa-basket-shopping-simple" style="color: #000000;"></a>
                    <span class="header__action-cart-count">
                        <?php 
                            // echo $_SESSION['voHang'];
                        ?>
                    </span>
                    <div class="header__action-cart-hover">
                        <div class="header__action-cart-title">Sản phẩm mới thêm</div>

                        <ul class="header__action-cart-list">
                         <!-- <li class="header__action-cart-item">
                                <div class="header__action-img">
                                    <img src="./assets/img/pd-1.png" alt="">
                                </div>
                                <div class="header__action-cart-detail">
                                    <div class="header__action-cart-name">
                                        <span>ADIDAS Ultraboost hiel sadi</span>
                                        <div>18.000.000đ</div>
                                    </div>
                                    <div class="header__action-cart-amount">
                                        <div class="header__action-cart-number">SL: 2</div>
                                        <div class="header__action-cart-size_color">
                                            <div class="header__action-cart-size">Size: 39</div>
                                            <div class="header__action-cart-color"></div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                        <div class="header__action-cart-btn">
                            <a href="index.php?danhmuc=shell" class="header__action-cart-btn-link">
                                Xem tất cả
                            </a>
                        </div>
                        <div class="header__action-cart-rote">

                        </div>
                    </div>
                </div>
                <?php 
                    if(isset($_SESSION['taikhoan'])){?>
                       <a href="index.php?danhmuc=profile" class="header__action-login" style="display: flex; align-items: center; justify-content: space-between;">
                            <span>Admin ádasd ád</span>
                            <i class="fa-solid fa-user"></i>
                        </a>
                    <?php }
                    else{ ?>
                        <a href="login.php" class="header__action-login">
                            ĐĂNG NHẬP
                        </a>
                    <?php }
                ?>
            </div>
        </div>
        <div class="search_mobile none">
            <input type="text" class="search_mobile-input" placeholder="Search">
            <i class="search_mobile-input-icon fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>
<script>
    $(document).ready(function(){
        var cardQuanlity=document.querySelector('.header__action-cart-count').innerHTML=getCardUser().length;
        function getCardUser(){
            var cartAll = JSON.parse(localStorage.getItem('cart')) || [];
            var cartUser=[];
            cartAll.forEach(item => {
                if(item['TaiKhoan']=="<?php echo $_SESSION['taikhoan']; ?>"){
                    cartUser.push(item);
                }
            });
            return cartUser;
        }
        function reverseCartUser(){
            var reverseArr=getCardUser().reverse();
            return reverseArr;
        }
        showCartUser();
        function showCartUser(){
            var cartUser=reverseCartUser();
            var cartUserSlice=cartUser.slice(0,5);
            var listProduct=[];
            $.ajax({
                url:"./control/ajax_action.php",
                method: "POST",
                data:{
                    action: "getListProductFromCart",
                    cart: JSON.stringify(cartUserSlice)
                },
                success: function(data){
                    listProduct=JSON.parse(data);
                    showCardVuaThem(listProduct);
                }
            })
            function showCardVuaThem(listProduct){
                listProduct.forEach(product => {
                    console.log(product);
                    var li = document.createElement("li");
                    li.classList.add("header__action-cart-item");
                    li.innerHTML = `
                        <div class="header__action-img">
                            <img src="./assets/img/`+product.HinhAnh+`" alt="">
                        </div>
                        <div class="header__action-cart-detail">
                            <div class="header__action-cart-name">
                                <span>`+product.TenSP+`</span>
                                <div>`+product.GiaMoi+`</div>
                            </div>
                            <div class="header__action-cart-amount">
                                <div class="header__action-cart-number">SL: `+product.SoLuong+`</div>
                                <div class="header__action-cart-size_color">
                                    <div class="header__action-cart-size">Size: `+product.Size+` </div>
                                    <div class="header__action-cart-color"></div>
                                </div>
                            </div>
                        </div>
                    `;
                    var list = document.querySelector(".header__action-cart-list");
                    list.appendChild(li);
                });
            }
        }
        function linkMenuJs(){
            var linkProduct=document.querySelector(".menu_sub-products").addEventListener("click", function(){
                window.location.href = "index.php?danhmuc=products";
            });
        }
        linkMenuJs();
        //var list_tag;
        var search = document.querySelector(".header__action-search-input");
        if (search) {
            search.addEventListener('keydown', function(e) {
                list_tag = document.querySelectorAll(".tagret-item");
                if (e.which == 13) {
                    e.stopPropagation(); //Ngăn chặn nổi bọt
                    var url =`index.php?danhmuc=products`+`&search=`+ search.value;
                    window.location.href = url;
                    // console.log(search.value);
                }
            });
        }
    });
</script>