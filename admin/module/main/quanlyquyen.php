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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#themsanpham">
                Thêm
            </button>
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã quyền</th>
                <th>Tên quyền</th>
                <th>Hành động<g/th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/admin/config/config.php'); //Kết nối mysql
                $sql = "SELECT * FROM quyen";
                $result = mysqli_query($connect,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['MaQuyen'] ?></td>
                    <td><?php echo $row['TenQuyen'] ?></td>
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
            <?php
                }
                mysqli_close($connect);
            ?> 
            
        </tbody>
    </table>
</div>
