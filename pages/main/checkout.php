<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="./assets/css/bootstrap.css" />
<main class="container" style="margin-top: 100px; font-size: 16px;">

    <div class="row my-4">
                <div class="col">
                    <a href="index.php?danhmuc=shell" class="btn btn-link text-muted">
                        <i class="mdi mdi-arrow-left me-1"></i>Trở về vỏ hàng</a>
                </div> <!-- end col -->
            </div> <!-- end row-->
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="">
                <div class="card-body">
                    <ol class="activity-checkout mb-0 px-4 mt-3">

                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-truck text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Địa chỉ nhận hàng</h5>
                                    <p class="text-muted text-truncate mb-4">Nơi đơn vị vận chuyển sẽ giao đến</p>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label mb-0">
                                                        <input type="radio" name="address" id="info-address1" class="card-radio-input" checked="">
                                                        <div class="card-radio text-truncate p-3">
                                                            <span class="fs-14 mb-4 d-block">Hoàng Khang</span>
                                                            <span class="fs-14 mb-2 d-block">(+84) 338873461</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">hodohoangkhang@gmail.com</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">109 Clarksburg Park Road Show Low, AZ 85901</span>

                                                        </div>
                                                    </label>
                                                    <div class="edit-btn bg-light rounded">
                                                        <div class="edit-address edit-address--checked" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                            <i class="bx bx-pencil font-size-16"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="none div-pay-address row info-pay mt-4 p-4">
                                            <div id="pay-address">
                                                <p class="font-size-16 pay-address_title">
                                                    Thay đổi địa chỉ nhận hàng
                                                </p>
                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Địa chỉ</label>
                                                    <textarea class="form-control" id="billing-address" rows="3" placeholder="Nhập đầy đủ địa chỉ nhận hàng"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Phương thức thanh toán</h5>
                                    <p class="text-muted text-truncate mb-4">Hình thức thanh toán để nhận hàng</p>
                                </div>
                                <div>
                                    <h5 class="font-size-14 mb-3">Phương thức :</h5>
                                    <div class="row">       
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <div data-bs-toggle="collapse">
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption1" class="card-radio-input" checked>
                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="fa-solid fa-building-columns d-block h2 mb-3"></i>
                                                        Chuyển khoản <br> ngân hàng
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div>
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption2" class="card-radio-input">
                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="bx bx-credit-card d-block h2 mb-3"></i>   
                                                        Thánh toán VNPAY <br> (QR, Visa)
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div>
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption3" class="card-radio-input">

                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="fa-solid fa-hand-holding-dollar d-block h2 mb-3"></i>
                                                        <span>Thanh toán khi <br> nhận hàng</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-3 col-sm-6">
                                            <div>
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption4" class="card-radio-input" >

                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="bx bx-money d-block h2 mb-3"></i>
                                                        <span>Tiền mặt tại <br> cửa hàng </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- <div class="row info-pay mt-4 p-4">
                                        <div id="pay-chuyenkhoan">
                                            <p class="font-size-16 pay-chuyenkhoan_title">
                                                Thông tin chuyển khoản
                                            </p>
                                            <div class="pay-chuyenkhoan-div">
                                                <div class="pay-chuyenkhoan_img">
                                                    <img src="./assets/img/banking.png" alt="">
                                            
                                                </div>
                                                <div class="pay-chuyenkhoan_main">
                                                    <p class="font-size-16 pay-chuyenkhoan_content">
                                                        Nội dung: <strong class="font-size-16">#123</strong>.
                                                    </p>
                                                    <p class="font-size-16 pay-chuyenkhoan_note">
                                                        Sau khi nhận được tiền shop sẽ gửi hàng về cho bạn.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </li>    
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-receipt text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Phương thức giao hàng</h5>
                                    <p class="text-muted text-truncate mb-4">Chọn phương thức giao hàng</p>
                                    <div class="mb-3">
                                        <div class="row">                
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="pay-delivery" id="pay-methodoption1" class="card-radio-input" checked>
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="fa-solid fa-truck d-block h2 mb-3"></i>
                                                            Giao hàng tiết kiệm <br> <strong style="color: #BE1004;">30,000 VND</strong>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="pay-delivery" id="pay-methodoption1" class="card-radio-input">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="fa-solid fa-truck-fast d-block h2 mb-3"></i>
                                                            Giao hàng nhanh <br> <strong style="color: #BE1004;">50,000 VND</strong>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                    
                    </ol>
                </div>
            </div>

            
        </div>
        <div class="col-lg-4">
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
                        </ul>
                        <div class="shell-total-div shell-total-total">
                            <span>Tổng tiền hàng</span>
                            <span class="shell-priceTotal" style="text-align: end;"></span>
                        </div>
                        <div class="shell-total-div shell-total-total">
                            <span>Phí vận chuyển</span>
                            <span class="shell-priceTotal-delivery" style="text-align: end;">30,000₫</span>
                        </div>
                        <div class="shell-total-div shell-total-total">
                            <span>Tổng thanh toán</span>
                            <span class="shell-priceTotal-total" style="text-align: end;"></span>
                        </div>
                        <a href="index.php?danhmuc=checkout" class="shell-total-btn" style="width: 100%; display: block;">
                            Đặt hàng
                        </a>
                    </div>
                </div>
        </div>
    </div>
    <!-- end row -->
    
</div>
<script>
    $(document).ready(function(){
        var listCart="<?php echo $_GET["checkout"]?>";
        var parts = listCart.split("/");
        parts.pop();

        $.ajax({
            url: "./control/ajax_action.php",
            method: "POST",
            data: {
                listCart: JSON.stringify(getCart(parts)),
                action: "showCheckout"
            },
            success: function(data){
                var shellTotal=document.querySelector(".shell-total-product").innerHTML=data;
                showPriceTotal();
            }
        });
        function getCart(listCart){
            var cartAll = JSON.parse(localStorage.getItem('cart')) || [];
            var cart=[];
            cartAll.forEach(item => {
                listCart.forEach(elements => {
                    element=elements.split(",");
                    // console.log(element[1]+" "+element[2]+" "+element[3]);
                    if(item['MaSP']==element[1] && item['Size']==element[2] && item['SoLuong']==element[3]){
                    cart.push(item);
                }
                });
            });
            return cart;
        }
        function getPrice(){
            var getPrice=document.querySelectorAll(".shell-total-item-price");
            var total=0;
            getPrice.forEach(element =>{
                total+=vndToInteger(element.children[0].textContent);
            });
            return total;
        }
        function showPriceTotal(){
            var PriceTotal=document.querySelector(".shell-priceTotal");
            var Delivery=document.querySelector(".shell-priceTotal-delivery");
            var Total=document.querySelector(".shell-priceTotal-total");
            PriceTotal.innerHTML=integerToVND(getPrice());
            console.log(Delivery.textContent);
            console.log(vndToInteger(Delivery.textContent));
            Total.innerHTML=integerToVND(vndToInteger(Delivery.textContent)+vndToInteger(PriceTotal.textContent));
        }
        console.log(getPrice());
        function integerToVND(amount) {
            // Chuyển số nguyên thành chuỗi
            var amountStr = amount.toString();
            
            // Thêm dấu phân tách hàng nghìn vào chuỗi
            var formattedAmount = '';
            for (var i = amountStr.length - 1, count = 0; i >= 0; i--, count++) {
                formattedAmount = amountStr.charAt(i) + formattedAmount;
                if (count % 3 == 2 && i > 0) {
                    formattedAmount = ',' + formattedAmount;
                }
            }
            
            // Thêm ký tự đơn vị tiền tệ vào cuối chuỗi
            formattedAmount += '₫';
            
            return formattedAmount;
        }
        function vndToInteger(amount) {
            // Loại bỏ ký tự phân tách hàng nghìn và ký tự đơn vị tiền tệ
            amount = amount.replace(/,/g, '');
            amount = amount.replace('₫', '');
            
            // Chuyển chuỗi thành số nguyên
            var integerAmount = parseInt(amount, 10);
            
            return integerAmount;
        }
        var btnEdit=document.querySelector(".edit-address");
        btnEdit.addEventListener('click', function(){
            btnEdit.classList.toggle('edit-address--checked');
            var divEditAddress= document.querySelector(".div-pay-address");
            divEditAddress.classList.toggle("block");
        });
    });
</script>