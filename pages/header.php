<?php session_start();
 ?>
<header class="header">
    <div class="container">
        <div class="header-main">
            <div class="header-logo">
                <div class="header-logo-menu none">
                    <i class="fa-solid fa-bars"></i>
                    <!-- <i class="fa-sharp fa-solid fa-list-ul"></i> -->
                </div>
                <a  href="./index.html">
                    <img src="./assets/img/logo.png" alt="Logo" class="header__logo">
                </a>
            </div>
            <div class="header__menu">
                <a class="menu_sub" href="index.php?danhmuc=home" >
                    Home
                </a>
                <a class="menu_sub" href="index.php?danhmuc=products">
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
                <a class="menu_sub" href="index.php?danhmuc=about">About</a>
                <a class="menu_sub" href="index.php?danhmuc=contact">Contact</a>
                <a class="menu_sub" href="index.php?danhmuc=blog">Blog</a>
            </div>
            <div class="header__action">
                <div class="header__action-search">
                    <i class="header__action-search-icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="header__action-search-input" placeholder="Search">
                </div>
                <a href="" class="header__action-like">
                    <i class="header__action-like-icon fa-regular fa-heart"></i>
                </a>
                <div class="header__action-cart">
                    <a href="index.php?danhmuc=shell" class="header__action-cart-icon fa-regular fa-basket-shopping-simple" style="color: #000000;"></a>
                    <span class="header__action-cart-count">
                        <?php 
                            // echo $_SESSION['voHang'];
                        ?>
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
                            <a href="index.php?danhmuc=shell" class="header__action-cart-btn-link">
                                Xem tất cả
                            </a>
                        </div>
                        <div class="header__action-cart-rote">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_mobile none">
            <input type="text" class="search_mobile-input" placeholder="Search">
            <i class="search_mobile-input-icon fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>
