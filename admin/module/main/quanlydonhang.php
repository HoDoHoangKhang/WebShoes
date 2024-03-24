<?php
// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "shoestore");  
  //lấy thông tin sản phẩm,khách hàng,nhân viên
  $sql="SELECT
  px.MaPX,
  px.NgayDatHang,
  px.TinhTrangDH,
  px.TongTien,
  px.TongSoLuong,
  px.trangThai,
  khachhang.MaKH,
  khachhang.HoTenKH,
  khachhang.Sdt,
  nhanvien.MaNV,
  nhanvien.HoTenNV,
  nhanvien.SDT

FROM phieuxuat px
INNER JOIN khachhang ON px.MaKH = khachhang.MaKH
INNER JOIN nhanvien ON px.MaNV = nhanvien.MaNV;";


$result = $conn->query($sql);
if ($result->num_rows === 0) {
    echo "<p>Không có dữ liệu phiếu xuất.</p>";
    die();
  }


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí đơn hàng</title>
  
</head>
<body>
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
    ul{
       padding: 0;
    }
</style>

<div id="noi-dung-chi-tiet" ></div>
<div class="tableBox ">
    <div class="tableTitle">
        <p>Danh sách đơn hàng</p>
        <div class="table-func">
            <div class="filter-container">
                <select id="filterSelect">
                    <option value="">Tình trạng đơn hàng</option>
                    <option value="">a</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>
            
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã</th>
                <th>Khách hàng</th>
                <th>Nhân viên</th>
                <th>Ngày đặt</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Tình trạng đơn hàng</th>
                <th>Hàng động</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            if($row['trangThai'] == 1){
        ?>
      <tr>
        <td><?php echo $row['MaPX']; ?></td>
        <td>
                    <ul>
                        <li>ID: <?php echo $row['MaKH']; ?></li></li>
                        <li>Tên: <?php echo $row['HoTenKH']; ?> </li>
                        <li>SĐT:<?php echo $row['Sdt']; ?></li>
                        <li></li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>ID: <?php echo $row['MaNV']; ?></li></li>
                        <li>Tên: <?php echo $row['HoTenNV']; ?> </li>
                        <li>SĐT: <?php echo $row['SDT']; ?></li>
                        <li></li>
                    </ul>
                </td>
                <td><?php echo $row['NgayDatHang']; ?></td>
                <td><?php echo $row['TongSoLuong']; ?></td>
                <td><?php echo $row['TongTien']; ?></td>
                <td><?php echo $row['TinhTrangDH']; ?></td>
                <td>
                    <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                            <li><a class="dropdown-item" href="index.php?danhmuc=chitietdonhang&id=<?php echo $row['MaPX']; ?>">Xem chi tiết</a></li>                   
                            <li><a class="dropdown-item" href="module/main/trangthai.php?id=<?php echo $row['MaPX']; ?>" onclick="return confirm('Bạn có chắc muốn xóa chuyển trạng thái đơn hàng?');" >Chuyển trạng thái</a></li>
                            <li><a class="dropdown-item" href="module/main/xoadonhang.php?id=<?php echo $row['MaPX']; ?>" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng?');" >Xóa đơn hàng</a></li>
                        </ul>
                    </div>
                </td>
      </tr>
    <?php } } ?>
        </tbody>
    </table>
</div>
<?php
  // Đóng kết nối
  $conn->close();
  ?>
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
</body>
</html>
