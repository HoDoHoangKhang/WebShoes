
<?php 
    function formatCurrency($amount) {
        // Chuyển đổi số tiền thành chuỗi
        $amount = strval($amount);
        
        // Chia chuỗi thành các phần nguyên và phần thập phân
        $parts = explode('.', $amount);
        
        // Định dạng phần nguyên
        $integerPart = number_format($parts[0]);
        
        // Định dạng phần thập phân (nếu có)
        $decimalPart = isset($parts[1]) ? ',' . $parts[1] : '';
        
        // Kết hợp phần nguyên và phần thập phân vào chuỗi tiền tệ hoàn chỉnh
        $formattedAmount = $integerPart . $decimalPart . ' ₫';
        
        return $formattedAmount;
    }
    
?>
<main>
    <section class="hero">
        <div class="container">
            <div class="hero-main">
                <div class="hero__text">
                    <div class="hero__text-title">LOREM IPSUM</div>
                    <div class="hero__text-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum optio ipsa et dolor quod minus quisquam, laudantium veritatis repellat labore id odio sequi, asperiores neque repellendus libero saepe blanditiis commodi.
                    </div>
                    <a href="./product.html">
                        <button class="button-hero">
                            <span>Explore more</span>
                            <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="hero__image">
                    <img src="./assets/img/hero.png" alt="" class="hero__image-img">
                    <!-- <a href="" class="hero__image-btn-sale button">
                        <i class="hero__image-btn-sale-icon fa-regular fa-badge-percent"></i>
                        <div>
                            <p>50%</p>
                            <span>Discount</span>
                        </div>
                    </a> -->
                    <div class="hero__image-text">
                        NIKE
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="about-main">
                <div class="about__box">
                    <div class="about__box-text">
                        <div class="about__box-title">
                            Running<br> Shoes
                        </div>
                        <a href="" class="about__box-link">
                            SHOP NOW
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                    <div class="about__box-img">
                        <img src="./assets/img/man.png" alt="" class="">
                    </div>
                </div>
                <div class="about__box">
                    <div class="about__box-text">
                        <div class="about__box-title">
                            Basketball <br> Shoes
                        </div>
                        <a href="" class="about__box-link">
                            SHOP NOW
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                    <div class="about__box-img">
                        <img src="./assets/img/women.png" alt="" class="">
                    </div>
                </div>
                <div class="about__box">
                    <div class="about__box-text">
                        <div class="about__box-title">
                            Gym <br> Shoes
                        </div>
                        <a href="" class="about__box-link">
                            SHOP NOW
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                    <div class="about__box-img">
                        <img src="./assets/img/kids.png" alt="" class="">
                    </div>
                </div>
                <div class="about__box">
                    <div class="about__box-text">
                        <div class="about__box-title">
                            All <br>
                            Shoes
                        </div>
                        <a href="" class="about__box-link">
                            SHOP NOW
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                    <div class="about__box-img">
                        <img src="./assets/img/family.png" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="video-main">

                <video loop width="67%" height="100%" autoplay muted>
                    <source src="assets/img/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="video__content">
                    <h2 class="video__content-title">AT LEAST</h2>
                    <div class="video__content-offer">50% OFF</div>
                    <h2 class="video__content-break">ALL NEXT SALE ITEMS</h2>
                    <div class="video__content-btn">
                        <i class="video__content-btn-icon fa-solid fa-right"></i>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="brand">
        <div class="container">
            <div class="brand-main">
                <div class="brand__title">BRAND</div>
                <div class="brand__list">
                    <div class="brand__box">
                        <img src="./assets/img/brand-nike.webp" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-adidas.png" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-vans.jpg" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-hoka.png" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-puma.png" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-balance.png" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-crocs.jpg" alt="">
                    </div>
                    <div class="brand__box">
                        <img src="./assets/img/brand-jordan.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="product-new">
        <div class="container">
            <div class="product-new-main">
                <div class="product-new__title-slick">
                    <span class="product-new__title title">
                        PRODUCT
                        <a href="">SẢN PHẨM MỚI</a>
                    </span>
                    <a class="btn-more" href="./product.html">
                        <span class="btn-more-title">More</span>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="btn-more--hover">

                        </div>
                    </a>
                </div>
                <div class="product-new__list card__list">
                    <?php
                        $sql_spmoi= "SELECT * FROM `sanpham` WHERE `SanPhamMoi` = 1 LIMIT 12";
                        $result=mysqli_query($connect,$sql_spmoi);
                        while($row=mysqli_fetch_array($result)){?>
                            <a href="index.php?danhmuc=product-detail&id=<?php echo $row['MaSP'] ?>">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/<?php echo $row['HinhAnh']?>" alt="">
                                    </div>
                                    <p class="card-title"><?php echo $row['TenSP']?></p>
                                    <div class="card-price-rate">
                                        <div class="card-price">
                                            <span><?php echo formatCurrency($row['GiaCu'])?></span>
                                            <span><del><?php echo formatCurrency($row['GiaMoi']) ?></del></span>  
                                        </div>
                                        <div class="card-rate">
                                            <i class="fa-solid fa-star"></i>
                                            <?php echo $row['SoSaoDanhGia']?>
                                        </div>
                                    </div>   
                                    <i class=" card-btn__like fa-regular fa-heart"></i>
                                    <div class="card-new-hot">
                                    <?php
                                        if($row['SanPhamMoi']==1){ ?>
                                            <div class="card-special card-hot">
                                            Mới
                                            </div>
                                        <?php }
                                        if($row['SanPhamHot']==1){?>
                                            <div class="card-special card-new">
                                                Hot
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                                                
                        <!-- <div class="card">
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
                    <div class="card-new-hot">
                        <div class="card-special card-hot">
                            Hot
                        </div>
                        <div class="card-special card-new">
                            New
                        </div>
                    </div>
                </div> -->

                    <!-- <div class="card">
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
                        <i class=" card-btn__like fa-regular fa-heart"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="product-hot">
        <div class="container">
            <div class="product-hot-main">
                <div class="product-hot__title-slick">
                    <span class="product-hot__title title">
                        HOT
                        <a href="">SẢN PHẨM HOT</a>
                    </span>
                    <a class="btn-more" href="./product.html">
                        <span class="btn-more-title">More</span>
                        <i class="fa-solid fa-chevron-right"></i>
                        <div class="btn-more--hover">

                        </div>
                    </a>
                </div>
                <div class="product-hot__list card__list">
                    <?php
                        $sql_spmoi= "SELECT * FROM `sanpham` WHERE `SanPhamHot` = 1 LIMIT 12";
                        $result=mysqli_query($connect,$sql_spmoi);
                        while($row=mysqli_fetch_array($result)){?>
                            <a href="index.php?danhmuc=product-detail&id=<?php echo $row['MaSP'] ?>">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="./assets/img/<?php echo $row['HinhAnh']?>" alt="">
                                    </div>
                                    <p class="card-title"><?php echo $row['TenSP']?></p>
                                    <div class="card-price-rate">
                                        <div class="card-price">
                                            <span><?php echo formatCurrency($row['GiaCu'])?></span>
                                            <span><del><?php echo formatCurrency($row['GiaMoi']) ?></del></span>  
                                        </div>
                                        <div class="card-rate">
                                            <i class="fa-solid fa-star"></i>
                                            <?php echo $row['SoSaoDanhGia']?>
                                        </div>
                                    </div>   
                                    <i class=" card-btn__like fa-regular fa-heart"></i>
                                    <div class="card-new-hot">
                                    <?php
                                        if($row['SanPhamMoi']==1){ ?>
                                            <div class="card-special card-hot">
                                            Mới
                                            </div>
                                        <?php }
                                        if($row['SanPhamHot']==1){?>
                                            <div class="card-special card-new">
                                                Hot
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    <!-- <div class="card">
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
                        <i class=" card-btn__like fa-regular fa-heart"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback-main">
                <span class="feedback__title title">
                    FeedBack
                    <a href="">PHẢN HỒI</a>
                </span>
                <div class="feedback__list">
                    <div class="feedback__item">
                        <div class="feedback__star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="feedback__text">
                            "Mình không thể hạnh phúc hơn với đôi giày này! Chất liệu tuyệt vời, thiết kế đẹp mắt và rất thoải mái khi mang. Mình đã nhận được nhiều lời khen từ bạn bè về sự phong cách của giày. Sẽ tiếp tục ủng hộ thương hiệu này trong tương lai!"
                        </div>
                        <div class="feedback__person">
                            <img class="feedback__person-img" src="./assets/img/person_1.jpg" alt="">
                            <div class="feedback__person-name_work">
                                <span class="feedback__person-name">DONAL TRUMP</span>
                                <div class="feedback__person-work">CUSTOMER @SHOES</div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item">
                        <div class="feedback__star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="feedback__text">
                            "Đôi giày mới của mình đơn giản là tuyệt vời! Chúng không chỉ làm cho bàn chân mình cảm thấy thoải mái hơn mà còn giúp tôn lên phong cách riêng của mình. Chắc chắn sẽ giới thiệu cho bạn bè và gia đình mình biết về thương hiệu này."
                        </div>
                        <div class="feedback__person">
                            <img class="feedback__person-img" src="./assets/img/person_2.jpg" alt="">
                            <div class="feedback__person-name_work">
                                <span class="feedback__person-name">BILL GATES</span>
                                <div class="feedback__person-work">CUSTOMER @SHOES</div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item">
                        <div class="feedback__star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="feedback__text">
                            "Mua giày online lần đầu tiên và thật may mắn khi chọn được đôi giày tuyệt vời như thế này! Chất liệu cao cấp và cảm giác chân thật sự thoải mái. Những ngày dạo chơi hay đi làm đều trở nên dễ dàng hơn với đôi giày này."
                        </div>
                        <div class="feedback__person">
                            <img class="feedback__person-img" src="./assets/img/person_3.jpg" alt="">
                            <div class="feedback__person-name_work">
                                <span class="feedback__person-name">MR BEAN</span>
                                <div class="feedback__person-work">CUSTOMER @SHOES</div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item">
                        <div class="feedback__star">
                            <i class="fa-solid fa-sta feedback__star-1"></i>
                            <i class="fa-solid fa-star feedback__star-2"></i>
                            <i class="fa-solid fa-star feedback__star-3"></i>
                            <i class="fa-solid fa-star feedback__star-4"></i>
                            <i class="fa-solid fa-star feedback__star-5"></i>
                        </div>
                        <div class="feedback__text">
                            "Đây là lần đầu tiên mình mua giày từ thương hiệu này và chắc chắn sẽ không phải là lần cuối. Giày không chỉ đẹp mắt mà còn rất chất lượng. Mình đã có một trải nghiệm mua sắm tốt và sẽ quay lại mua sắm ở đây nếu cần."
                        </div>
                        <div class="feedback__person">
                            <img class="feedback__person-img" src="./assets/img/person_4.jpg" alt="">
                            <div class="feedback__person-name_work">
                                <span class="feedback__person-name">OBAMA</span>
                                <div class="feedback__person-work">CUSTOMER @SHOES</div>
                            </div>
                        </div>
                    </div>
                    <div class="feedback__item">
                        <div class="feedback__star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="feedback__text">
                            "Đôi giày hoàn toàn đáng tiền! Chất liệu và thiết kế không chỉ đẹp mắt mà còn rất bền. Mình đã đi dạo một hồi dài và đôi giày vẫn giữ form tốt. Cảm ơn thương hiệu đã mang đến cho mình một sản phẩm tuyệt vời như vậy!"
                        </div>
                        <div class="feedback__person">
                            <img class="feedback__person-img" src="./assets/img/person_5.jpg" alt="">
                            <div class="feedback__person-name_work">
                                <span class="feedback__person-name">ELON MUSK</span>
                                <div class="feedback__person-work">CUSTOMER @SHOES</div>
                            </div>
                        </div>
                    </div>
                    <!-- <i class="feedback__slick-left btn-slick__left fa-solid fa-angle-left"></i>
                    <i class="feedback__slick-right btn-slick__right fa-solid fa-angle-right"></i>    
                    -->
                </div>
            </div>
        </div>
    </section>
</main>
<script>
var cards = document.querySelectorAll(".card");
cards.forEach(function(card) {
    card.addEventListener("click", function() {
        var like = card.querySelector(".card-btn__like");
        if (like) {
            like.addEventListener('click', function(e) {
                e.preventDefault(); // Ngăn chặn hành vi mặc định khi click vào liên kết
                e.stopPropagation();
                if (like.classList.contains("fa-regular")) {
                    like.classList.remove("fa-regular");
                    like.classList.add("fa-solid");
                    like.style.color = "#F02757";
                } else {
                    like.classList.remove("fa-solid");
                    like.classList.add("fa-regular");
                    like.style.color = "";
                }
            });
        }
    });
});
</script>
