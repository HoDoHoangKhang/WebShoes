<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiêu đề ở đây</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> <!-- reset css -->
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css"> <!-- icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100;1,300&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome.com/releases/v6.4.0/css/sharp-solid.css">

    

</head>
<body>
    <div class="app">
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="header-main">
                    <a href="./index.html">
                        <img src="./assets/img/logo.png" alt="Logo" class="header__logo">
                    </a>
                    <div class="header__menu">
                        <a class="menu_sub" href="index.html" >
                            Home
                        </a>
                        <a class="menu_sub" href="./product.html">
                            Products
                            <div class="menu__hover">
                                <div class="menu__hover-shoes">
                                    <h5 class="menu__hover__title">
                                        SHOES
                                    </h5>
                                    <ul class="menu__hover__content">
                                        <li>All Men's Shoes</li>
                                        <li>Basketball</li>
                                        <li>Running</li>
                                        <li>Gym</li>
                                        <li>Football</li>
                                    </ul>
                                </div>
                                <div class="menu__hover-brands">
                                    <h5 class="menu__hover__title">
                                        BRANDS
                                    </h5>
                                    <ul class="menu__hover__content">
                                        <li>Nike</li>
                                        <li>Adidas</li>
                                        <li>Jordan</li>
                                        <li>New Balance</li>
                                        <li>Vans</li>
                                        <li>Puma</li>
                                    </ul>
                                </div>
                                <div class="menu__hover-size">
                                    <h5 class="menu__hover__title">
                                        SIZE
                                    </h5>
                                    <ul class="menu__hover__content ">
                                        <ul class="menu__hover__content-size ">
                                            <li>33</li>
                                            <li>34</li>
                                        </ul>
                                        <ul class="menu__hover__content-size ">
                                            <li>35</li>
                                            <li>36</li>
                                        </ul>
                                        <ul class="menu__hover__content-size ">
                                            <li>37</li>
                                            <li>38</li>
                                        </ul>
                                        <ul class="menu__hover__content-size ">
                                            <li>39</li>
                                            <li>40</li>
                                        </ul>
                                        <ul class="menu__hover__content-size ">
                                            <li>41</li>
                                            <li>42</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <a class="menu_sub" href="">About</a>
                        <a class="menu_sub" href="">Contact</a>
                        <a class="menu_sub" href="">Blog</a>
                    </div>
                    <div class="header__action">
                        <div class="header__action-search">
                            <i class="header__action-search-icon fa-solid fa-magnifying-glass"></i>
                            <input type="text" class="header__action-search-input" placeholder="Search">
                        </div>
                        <a href="" class="header__action-like">
                            <i class="header__action-like-icon fa-regular fa-heart"></i>
                        </a>
                        <div href="" class="header__action-cart">
                            <i class="header__action-cart-icon fa-regular fa-basket-shopping-simple" style="color: #000000;"></i>
                            <span class="header__action-cart-count">
                                12
                            </span>
                            <div class="header__action-cart-hover">
                                <div class="header__action-cart-title">Sản phẩm mới thêm</div>

                                <ul class="header__action-cart-list">
                                    <li class="header__action-cart-item">
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
                                    </li>
                                    <li class="header__action-cart-item">
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
                                    </li>
                                    <li class="header__action-cart-item">
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
                                    </li>
                                    <li class="header__action-cart-item">
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
                                    </li>
                                    <li class="header__action-cart-item">
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
                                    </li>
                                </ul>
                                <div class="header__action-cart-btn">
                                    <a href="./shell.html" class="header__action-cart-btn-link">
                                        Xem tất cả
                                    </a>
                                </div>
                                <div class="header__action-cart-rote">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main>
            <section class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-main">
                        <span>
                            Trang chủ
                        </span>
                        <i class="breadcrumb-icon fa-solid fa-chevron-right"></i>
                        <span>
                            Man
                        </span>
                    </div>
                </div>
            </section>
            <section class="shell">
                <div class="container">
                    <div class="shell-main">
                        <div class="shell-show">
                            <div class="shell-header">
                                <div class="shell-header_item">
                                    Item
                                </div>
                                <div class="shell-header_size">
                                    Size
                                </div>
                                <div class="shell-header_quanlity">
                                    Quanlity
                                </div>
                                <div class="shell-header_price">
                                    Price
                                </div>
                            </div>
                            <ul class="shell-list">
                                <li class="shell-item">
                                    <div class="shell-check">
                                        <div class="shell-check_box">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="shell-detail">
                                        <div class="shell-product">
                                            <div class="shell-img">
                                                <img src="./assets/img/pd-1.png" alt="" class="">
                                            </div>
                                            <div class="shell-title-repository">
                                                <div class="shell-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-repository">
                                                    23 stocks remaining
                                                </div>
                                                <div class="shell-sale">
                                                    <div class="shell-sale-delivery">
                                                        <i class="fa-light fa-truck"></i>
                                                        30% Shipping
                                                    </div>
                                                    <div class="shell-sale-discount">
                                                        <i class="fa-regular fa-badge-percent"></i>
                                                        25% Discount
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shell-size">
                                            Size: 43
                                        </div>
                                        <div class="shell_quantity-main">
                                            <div class="shell-quantity">
                                                <div class="shell-quantity-minus shell-quantity-btn">
                                                    -
                                                </div>
                                                <div class="shell-quantity-number">
                                                    1
                                                </div>
                                                <div class="shell-quantity-plus shell-quantity-btn">
                                                    +
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="shell-price">
                                            <span>16,000,000đ</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="shell-item">
                                    <div class="shell-check">
                                        <div class="shell-check_box">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="shell-detail">
                                        <div class="shell-product">
                                            <div class="shell-img">
                                                <img src="./assets/img/pd-1.png" alt="" class="">
                                            </div>
                                            <div class="shell-title-repository">
                                                <div class="shell-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-repository">
                                                    23 stocks remaining
                                                </div>
                                                <div class="shell-sale">
                                                    <div class="shell-sale-delivery">
                                                        <i class="fa-light fa-truck"></i>
                                                        30% Shipping
                                                    </div>
                                                    <div class="shell-sale-discount">
                                                        <i class="fa-regular fa-badge-percent"></i>
                                                        25% Discount
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shell-size">
                                            Size: 43
                                        </div>
                                        <div class="shell_quantity-main">
                                            <div class="shell-quantity">
                                                <div class="shell-quantity-minus shell-quantity-btn">
                                                    -
                                                </div>
                                                <div class="shell-quantity-number">
                                                    1
                                                </div>
                                                <div class="shell-quantity-plus shell-quantity-btn">
                                                    +
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="shell-price">
                                            <span>16,000,000đ</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="shell-item">
                                    <div class="shell-check">
                                        <div class="shell-check_box">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="shell-detail">
                                        <div class="shell-product">
                                            <div class="shell-img">
                                                <img src="./assets/img/pd-1.png" alt="" class="">
                                            </div>
                                            <div class="shell-title-repository">
                                                <div class="shell-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-repository">
                                                    23 stocks remaining
                                                </div>
                                                <div class="shell-sale">
                                                    <div class="shell-sale-delivery">
                                                        <i class="fa-light fa-truck"></i>
                                                        30% Shipping
                                                    </div>
                                                    <div class="shell-sale-discount">
                                                        <i class="fa-regular fa-badge-percent"></i>
                                                        25% Discount
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shell-size">
                                            Size: 43
                                        </div>
                                        <div class="shell_quantity-main">
                                            <div class="shell-quantity">
                                                <div class="shell-quantity-minus shell-quantity-btn">
                                                    -
                                                </div>
                                                <div class="shell-quantity-number">
                                                    1
                                                </div>
                                                <div class="shell-quantity-plus shell-quantity-btn">
                                                    +
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="shell-price">
                                            <span>16,000,000đ</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="shell-item">
                                    <div class="shell-check">
                                        <div class="shell-check_box">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="shell-detail">
                                        <div class="shell-product">
                                            <div class="shell-img">
                                                <img src="./assets/img/pd-1.png" alt="" class="">
                                            </div>
                                            <div class="shell-title-repository">
                                                <div class="shell-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-repository">
                                                    23 stocks remaining
                                                </div>
                                                <div class="shell-sale">
                                                    <div class="shell-sale-delivery">
                                                        <i class="fa-light fa-truck"></i>
                                                        30% Shipping
                                                    </div>
                                                    <div class="shell-sale-discount">
                                                        <i class="fa-regular fa-badge-percent"></i>
                                                        25% Discount
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shell-size">
                                            Size: 43
                                        </div>
                                        <div class="shell_quantity-main">
                                            <div class="shell-quantity">
                                                <div class="shell-quantity-minus shell-quantity-btn">
                                                    -
                                                </div>
                                                <div class="shell-quantity-number">
                                                    1
                                                </div>
                                                <div class="shell-quantity-plus shell-quantity-btn">
                                                    +
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="shell-price">
                                            <span>16,000,000đ</span>
                                        </div>
                                    </div>
                                </li>
                                
                                
                        
                                
                                
                            </ul>
                        </div>
                        <div class="shell-total">
                            <div class="shell-total-main">
                                <ul class="shell-total-product">
                                    <li class="shell-total-item">
                                        <div class="shell-total-item-detail">
                                            <div class="shell-total-img-quanlity">
                                                <div class="shell-total-img">
                                                    <img src="./assets/img/pd-1.png" alt="" class="">
                                                </div>
                                                <div class="shell-total-item_quanlity">
                                                    1
                                                </div>
                                            </div>
                                            <div class="shell-total-title_size">
                                                <div class="shell-total-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-total-size">
                                                    Size: 43
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="shell-total-item-price">
                                            <span>16,000,000đ</span>
                                        </div>  

                                    </li>
                                    <li class="shell-total-item">
                                        <div class="shell-total-item-detail">
                                            <div class="shell-total-img-quanlity">
                                                <div class="shell-total-img">
                                                    <img src="./assets/img/pd-1.png" alt="" class="">
                                                </div>
                                                <div class="shell-total-item_quanlity">
                                                    1
                                                </div>
                                            </div>
                                            <div class="shell-total-title_size">
                                                <div class="shell-total-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-total-size">
                                                    Size: 43
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="shell-total-item-price">
                                            <span>16,000,000đ</span>
                                        </div>  

                                    </li>
                                    <li class="shell-total-item">
                                        <div class="shell-total-item-detail">
                                            <div class="shell-total-img-quanlity">
                                                <div class="shell-total-img">
                                                    <img src="./assets/img/pd-1.png" alt="" class="">
                                                </div>
                                                <div class="shell-total-item_quanlity">
                                                    1
                                                </div>
                                            </div>
                                            <div class="shell-total-title_size">
                                                <div class="shell-total-title">
                                                    Lorem ipsum dolor
                                                </div>
                                                <div class="shell-total-size">
                                                    Size: 43
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="shell-total-item-price">
                                            <span>16,000,000đ</span>
                                        </div>  

                                    </li>
                                    
                                </ul>
                                <div class="shell-total-div shell-total-price">
                                    <span>Price</span>
                                    <span>21.000.000đ</span>
                                </div>
                                <div class="shell-total-div shell-total-delivery">
                                    <span>Delivery</span>
                                    <span>200.000đ</span>
                                </div>
                                <div class="shell-total-div shell-total-total">
                                    <span>Total</span>
                                    <span>21.200.000đ</span>
                                </div>

                                <div class="shell-total-btn">
                                    Place order
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

    <!-- Footer -->
        <footer class="footer">
            <div class="container"> 
                <div class="footer-main">
                    <div class="footer-content">
                        <div class="footer-item">
                            <h4 class="footer-title">Hà Nội</h4>
                            <p class="footer-detail">
                                Địa chỉ: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.<br>
                                Hotline: 1900 6750<br>
                                Email: hodohoangkhang@gmail.com
                            </p>
                        </div>
                        <div class="footer-item">
                            <h4 class="footer-title">Hải Phòng</h4>
                            <p class="footer-detail">
                                Địa chỉ: TP Building, 232 Dong Khe Street, Ngo Quyen District, HaiPhong.
                                <br>
                                Hotline: 1900 6750
                                <br>
                                Email: hodohoangkhang@gmail.com
                            </p>
                        </div>
                        <div class="footer-item">
                            <h4 class="footer-title">Hồ Chí Minh</h4>
                            <p class="footer-detail">
                                Địa chỉ: LDT Building, 45 Long Thanh My Street, Tan Binh District, HCM.
                                <br>
                                Hotline: 1900 6750
                                <br>
                                Email: hodohoangkhang@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="footer-btn">
                        <a href="#" class="footer-btn-link">
                            Hệ thống trung tâm
                            <i class="footer-btn-icon fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                    <ul class="footer-nav">
                        <li class="footer-nav-item">Womem</li>
                        <li class="footer-nav-item">Men</li>  
                        <li class="footer-nav-item">Kis</li>
                        <li class="footer-nav-item">Sale</li>
                        <li class="footer-nav-item">Contact</li>
                    </ul>
                </div>

            </div>
            <div class="footer-end">
                <div class="container">
                    <span class="footer-end-text">© 2023 Bản quyền thuộc về Hoàng Khang.</span>
                </div>
            </div>
        </footer>
    </div>
    <script src="./index.js"></script>
</body>
</html>