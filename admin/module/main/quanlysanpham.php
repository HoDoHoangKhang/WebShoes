<style
>
    .img-pr{
        width: 40px;
        height: 40px;
        border-radius: 1000px;
        overflow: hidden;
    }
    .img-pr img{
        width: 100%;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div class="tableBox ">
    <div class="tableTitle">
        <p>Danh sách sản phẩm</p>
        <div class="table-func">
            <div class="filter-container">
                <select id="filterSelect">
                    <option value="">Nhãn hiệu</option>
                    <option value="">Nike</option>
                    <option value="">Adidas</option>
                    <option value="">Vans</option>
                </select>
            </div>
            <div class="filter-container">
                <select id="filterSelect">
                    <option value="">Danh mục</option>
                    <option value="">Gym</option>
                    <option value="">Chạy bộ</option>
                    <option value="">Bóng rỗ</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#themsanpham">
                Thêm
            </button>
            
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã</th>
                <th>Hình ảnh</th>
                <th>Tên SP</th>
                <th>Nhãn hiệu</th>
                <th>giá bán</th>
                <th>Số lượng</th>
                <th>Hành động</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div class="img-pr">
                        <img src="assets/img/user.png" alt="" class="">
                    </div>
                </td>
                <td>Nike air 11</td>
                <td>Nike</td>
                <td>300.000</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chitietsoluong">
                        23
                    </button>
                </td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Chi tiết</a></li>
                            <li><a class="dropdown-item" href="#">Sửa</a></li>
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="chitietsoluong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết số lượng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table >
            <thead>
                <tr>
                    <th >Size</th>
                    <th>Số lượng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>30</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>6</td>
                </tr>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
