<style
>
    .img-pr{
        width: 50px;
        height: 50px;
        border-radius: 1000px;
        overflow: hidden;
    }
    .img-pr img{
        width: 100%;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    ul{
        padding: 0;
    }
</style>
<div class="tableBox ">
    <div class="tableTitle">
        <p>Danh sách tài khoản</p>
        <div class="table-func">
            <div class="filter-container">
                <select id="filterSelect">
                    <option value="">Trạng thái</option>
                    <option value="">Nike</option>
                    <option value="">Adidas</option>
                    <option value="">Vans</option>
                </select>
            </div>
            <div class="filter-container">
                <select id="filterSelect">
                    <option value="">Loại tài khoản</option>
                    <option value="">Gym</option>
                    <option value="">Chạy bộ</option>
                    <option value="">Bóng rỗ</option>
                </select>
            </div>
            
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã</th>
                <th>Thông tin</th>
                <th>Tài khoản</th>
                <th>Quyền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/user.png" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li>
                                Tăng Hồng Nguyên Đán
                            </li>
                            <li>mai@gmail.com</li>
                            <li>0912982341</li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> mail@gmail.com
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> 12344
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <option value="">Quyền</option>
                        <option value="">Nhân viên</option>
                        <option value="">Admin</option>
                        <option value="">Khách hàng</option>
                    </select>
                </div>
                </td>
                <td>Hoạt động</td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                            <li><a class="dropdown-item" href="#">Kích hoạt</a></li>
                            <li><a class="dropdown-item" href="#">Khóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/user.png" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li>
                                Tăng Hồng Nguyên Đán
                            </li>
                            <li>mai@gmail.com</li>
                            <li>0912982341</li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> mail@gmail.com
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> 12344
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <option value="">Quyền</option>
                        <option value="">Nhân viên</option>
                        <option value="">Admin</option>
                        <option value="">Khách hàng</option>
                    </select>
                </div>
                </td>
                <td>Hoạt động</td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                            <li><a class="dropdown-item" href="#">Kích hoạt</a></li>
                            <li><a class="dropdown-item" href="#">Khóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/user.png" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li>
                                Tăng Hồng Nguyên Đán
                            </li>
                            <li>mai@gmail.com</li>
                            <li>0912982341</li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> mail@gmail.com
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> 12344
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <option value="">Quyền</option>
                        <option value="">Nhân viên</option>
                        <option value="">Admin</option>
                        <option value="">Khách hàng</option>
                    </select>
                </div>
                </td>
                <td>Hoạt động</td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                            <li><a class="dropdown-item" href="#">Kích hoạt</a></li>
                            <li><a class="dropdown-item" href="#">Khóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/user.png" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li>
                                Tăng Hồng Nguyên Đán
                            </li>
                            <li>mai@gmail.com</li>
                            <li>0912982341</li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> mail@gmail.com
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> 12344
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <option value="">Quyền</option>
                        <option value="">Nhân viên</option>
                        <option value="">Admin</option>
                        <option value="">Khách hàng</option>
                    </select>
                </div>
                </td>
                <td>Hoạt động</td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                            <li><a class="dropdown-item" href="#">Kích hoạt</a></li>
                            <li><a class="dropdown-item" href="#">Khóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/user.png" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li>
                                Tăng Hồng Nguyên Đán
                            </li>
                            <li>mai@gmail.com</li>
                            <li>0912982341</li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> mail@gmail.com
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> 12344
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <option value="">Quyền</option>
                        <option value="">Nhân viên</option>
                        <option value="">Admin</option>
                        <option value="">Khách hàng</option>
                    </select>
                </div>
                </td>
                <td>Hoạt động</td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="#">Xóa</a></li>
                            <li><a class="dropdown-item" href="#">Kích hoạt</a></li>
                            <li><a class="dropdown-item" href="#">Khóa</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
