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
                    <?php
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/admin/config/config.php'); //Kết nối mysql
                        $sql = "SELECT *
                                FROM quyen";
                        $result = mysqli_query($connect,$sql);
                        while ( $row=mysqli_fetch_array($result) ) {
                            ?>
                            <option value="<?php echo $row['MaQuyen'] ?>"> <?php echo $row['TenQuyen'] ?> </option>
                            <?php
                        }
                    ?> 
                </select>
            </div>
            
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th>Thông tin</th>
                <th>Tài khoản</th>
                <th>Quyền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            $sql = "SELECT tk.TenDangNhap, tk.MatKhau, tk.MaQuyen, tk.Avt, nv.HoTenNV, nv.SDT ,nv.Email
                    FROM taikhoan tk JOIN nhanvien nv ON tk.TenDangNhap = nv.TenDangNhap";
            $result = mysqli_query($connect,$sql);
            while ($row=mysqli_fetch_array($result)) { ?>
                <tr>
                
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/<?php echo $row['Avt']?>" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li> <?php echo $row['HoTenNV'] ?> </li>
                            <li> <?php echo $row['Email'] ?> </li>
                            <li> <?php echo $row['SDT'] ?> </li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> <?php echo $row['TenDangNhap'] ?>
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> <?php echo $row['MatKhau'] ?>
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                        <?php
                            $sql ="SELECT * From quyen";
                            $result1 = mysqli_query($connect,$sql);
                            while ($row1=mysqli_fetch_array($result1)) { ?>
                                <option value="<?php echo $row['MaQuyen']?>" <?php if($row['MaQuyen']==$row1['MaQuyen']){ echo "selected";} ?> ><?php echo $row1['TenQuyen'] ?></option>
                            <?php
                            }
                        ?>
                        
                        
                        
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
            <?php
            }
            
            $sql = "SELECT tk.TenDangNhap, tk.MatKhau, tk.MaQuyen, tk.Avt, kh.HoTenKH, kh.Sdt ,kh.Email 
                    FROM taikhoan tk JOIN khachhang kh ON tk.TenDangNhap = kh.TenDangNhap";
            $result = mysqli_query($connect,$sql);
            while ($row=mysqli_fetch_array($result)) { ?>
                <tr>
                
                <td>
                    <div style="display: flex; align-items: center; gap: 10px">
                        <div class="img-pr">
                            <img src="assets/img/<?php echo $row['Avt']?>" alt="" class="">
                        </div>
                        <ul class="ml-2">
                            <li> <?php echo $row['HoTenKH'] ?> </li>
                            <li> <?php echo $row['Email'] ?> </li>
                            <li> <?php echo $row['Sdt'] ?> </li>
                        </ul>
                    </div>
                    
                </td>
                <td>
                    <ul>
                        <li>
                            <strong>Tài khoản: </strong> <?php echo $row['TenDangNhap'] ?>
                        </li>
                        <li>
                            <strong>Mật khẩu: </strong> <?php echo $row['MatKhau'] ?>
                        </li>
                    </ul>
                </td>
                <td>
                <div class="filter-container">
                    <select id="filterSelect" style="width: 100%;">
                    <?php
                            $sql ="SELECT * From quyen";
                            $result1 = mysqli_query($connect,$sql);
                            while ($row1=mysqli_fetch_array($result1)) { ?>
                                <option value="<?php echo $row['MaQuyen']?>" <?php if($row['MaQuyen']==$row1['MaQuyen']){ echo "selected";} ?> ><?php echo $row1['TenQuyen'] ?></option>
                            <?php
                            }
                        ?>
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
            <?php
            }
            mysqli_close($connect);
            ?>
        </tbody>
    </table>
</div>
