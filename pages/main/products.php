<main>
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-main">
                <span>
                    Home
                </span>
                <i class="breadcrumb-icon fa-solid fa-chevron-right"></i>
                <span>
                    Products
                </span>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="product-main">
                <div class="filter">
                    <h3 class="filter__title">FILTER</h3>
                    <div class="filter__categories">
                        <div class="filterPrice">
                            <div class="price-input">
                                <div class="field">
                                    <input type="number" class="input-min" value="0">
                                </div>
                                <p class="separator">-</p>
                                <div class="field">
                                    <input type="number" class="input-max" value="5000000">
                                </div>
                            </div>
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="5000000" value="0" step="200000">
                                <input type="range" class="range-max" min="0" max="5000000" value="5000000" step="200000">
                            </div>
                        </div>           
                    </div>
                    <div class="filter__categories">
                        <div class="filter__categories-title">
                            <h3>DANH MỤC</h3>
                            <i class="filter__categories-title-icon fa-solid fa-sort-down"></i>
                        </div>
                        <ul class="filter__list">
                            <?php
                                require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/loaisp-act.php');
                                showDanhMuc();
                            ?>
                            <!-- <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter danhmucFilter" type="checkbox" name="" id="" value="Basketball">
                                <span>Basketball</span>
                            </li> -->
                        </ul>            
                    </div>
                    <div class="filter__categories">
                        <div class="filter__categories-title">
                            <h3>NHÃN HIỆU</h3>
                            <i class="filter__categories-title-icon fa-solid fa-sort-down"></i>
                        </div>
                        <ul class="filter__list">
                            <?php
                                require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/nhanhieu-act.php');
                                showNhanHieu();
                            ?>
                            <!-- <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter nhanhieuFilter" type="checkbox" name="" id="" value="Nike">
                                <span>Nike</span>
                            </li> -->
                        </ul>
                    </div>
                    <!-- <div class="filter__categories">
                        <div class="filter__categories-title">
                            <h3>SIZE</h3>
                            <i class="filter__categories-title-icon fa-solid fa-sort-down"></i>
                        </div>
                        <ul class="filter__list">
                            <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="35">
                                <span>35</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text" >
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="36">
                                <span>36</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="38">
                                <span>38</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text" >
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="39">
                                <span>39</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="40">
                                <span>40</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text" >
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="41">
                                <span>41</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text">
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="42">
                                <span>42</span>
                            </li>
                            <li class="filter__list-item filter__list-item-text" >
                                <input class="inputFilter sizeFilter" type="checkbox" name="" id="" value="43">
                                <span>43</span>
                            </li>
                        </ul>            
                    </div> -->
                </div>
                <div class="show">
                    <!-- <div class="show-pannel_list">
                            <img src="./assets/img/product_pannel.png" alts="">
                            <img src="./assets/img/product_pannel.png" alt="">
                            <img src="./assets/img/product_pannel.png" alt="">
                    </div> -->
                    <div class="sort-filter_hidden">
                        
                        <div class="hidden-filter">
                            Filters
                            <div class="btn-filter btn-filter--off">
                                <div class="btn-filter__on-off ">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="sort">
                            <div class="sort-new btn-sort">
                                New
                            </div>
                            <div class="sort-hot btn-sort">
                                Hot
                            </div>
                            <select id="myComboBox" class="sort-price__title"> 
                                <option value="" selected>Sắp xếp theo giá</option>
                                <option value="asc"  >Tăng dần</option>
                                <option value="desc">Giảm dần</option>
                            </select>
                        </div>  
                    </div>
                    <div class="target-result">
                        <div class="result">
                            <span class="result-number">
                                123
                            </span>
                            <span class="result-text">
                                Kết quả
                            </span>
                        </div>
                        <div class="tagret">
                            <!-- <div class="tagret-item">
                                <span>HiHiHi</span>
                                <i class="targer-icon fa-solid fa-xmark"></i>
                            </div> -->
                        </div>
                    </div>
                    <div class="list-shoes">
                        <?php
                            // require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/sanpham-act.php');
                            // echo showListProductString(getAllProduct());
                        ?>
                    </div>
                    <div class="page">
                        <div class="page-main">
                            <div class="page-left page-left-right page-item--disable">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="page-number">


                            </div>
                            <div class="page-right page-left-right">
                                <i class="fa-solid fa-angle-right "></i>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</main>


<script type="text/javascript">
    //Lọc dữ liệu sử dụng ajax
    $(document).ready(function(){
        ////////////////////////////////////////////////////////////////////////////////////////////////////Lọc dữ liệu
        filterData();
        function filterData(page){
            var action = 'filter_data';
            var danhmuc = getFilter('danhmucFilter');
            var nhanhieu = getFilter('nhanhieuFilter');
            var sortprice= getValueSortPrice();
            var min=getValueFilterPrice()[0];
            var max=getValueFilterPrice()[1];
            var newValue=getNew();
            var hotValue=getHot();
            $.ajax({
                url:"./control/ajax_action.php",
                method:"POST",
                data:{action:action,danhmuc:JSON.stringify(danhmuc), nhanhieu:JSON.stringify(nhanhieu), sortprice:sortprice ,min:min,max:max,newValue:newValue,hotValue:hotValue,page:page},
                success: function(response){
                    var data = JSON.parse(response);//chuyển json thành mảng
                    $('.list-shoes').html(data['data1']);
                    $('.page-number').html(data['data2']);
                    showNumberProduct(data['data3']);
                },
            });
        }
        $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           filterData(page);  
        });
        function getFilter(class_name){
            var filter = [];
            document.querySelectorAll('.'+class_name+':checked').forEach(input => {
                filter.push(input.value);
            });
            return filter;
        }
        //Click vào item lọc thì sẽ kiểm tra và lọc dữ liệu
        var inputs = document.querySelectorAll('.filter__list-item');
        inputs.forEach(input => {
            input.addEventListener('click', function(){
                filterData();
                var buttonTagets = document.querySelectorAll('.targer-icon');
                buttonTagets.forEach(buttonTaget => {
                    buttonTaget.addEventListener('click', function(){
                        filterData();
                    });
                });
            });
        });
        ////////////////////////////////////////////////////////////////////////////////////////////////////Sắp xếp theo giá
        var comboBox = document.getElementById("myComboBox");
        comboBox.addEventListener("change", function() {
            filterData();
        });
        function getValueSortPrice() {
            var comboBox = document.getElementById("myComboBox");
            var selectedValue = comboBox.value;
            return selectedValue;
        }
        // Lọc theo giá
        function getValueFilterPrice() {
            const rangeMin = document.querySelector(".range-min");
            const rangeMax = document.querySelector(".range-max");
            var min=parseInt(rangeMin.value);
            var max=parseInt(rangeMax.value);
            return [min,max];
        };
        rangeInput.forEach(input =>{
            input.addEventListener("input", e =>{
                filterData();
            });
        });
        ////////////////////////////////////////////////////////////////////////////////////////////////////Hiển thị số lượng sản phẩm
        function showNumberProduct(quanlity){
            var resultNumber = document.querySelector('.result-number');
            resultNumber.innerHTML = quanlity;
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////// Lọc new và hot
        function getNew(){
            var btnNew=document.querySelector(".sort-new");
            if(btnNew.classList.contains("btn-sort--click")){
                return 1;
            }
            return 0;
        }
        function getHot(){
            var btnNew=document.querySelector(".sort-hot");
            if(btnNew.classList.contains("btn-sort--click")){
                return 1;
            }
            return 0;
        }
        var btnNewHot=document.querySelectorAll(".btn-sort");
        btnNewHot.forEach(element=>{
            element.addEventListener('click',function(){ 
                filterData();
            });
        });
    });
        




    //     //Load dữ liệu
    //     $(document).on('click', '.btn-sort', function(){
    //         var sort = $(this).text();
    //         $.ajax({
    //             url:"./pages/main/ajax_action.php",
    //             method:"POST",
    //             data:{sort:sort},
    //             success: function(data){
    //                 $('.list-shoes').html(data);
    //             },
    //         });
    //     });
    //     function fetch_data(){
    //         $.ajax({
    //             url:"./pages/main/ajax_action.php",
    //             method:"POST",
    //             success: function(data){
    //                 $('.list-shoes').html(data);
    //             },
    //         });
    //     }
    //     fetch_data();


</script>
