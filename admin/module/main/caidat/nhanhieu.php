<div class="container">
<ul class="row">
        <li class="col-sm-3 index-danhmuc">
            <a class="nav-link" href="index.php?danhmuc=caidat&id=size">Size</a>
        </li>
        <li class="col-sm-3 index-danhmuc">
            <a class="nav-link" href="index.php?danhmuc=caidat&id=nhacungcap">Nhà Cung Cấp</a>
        </li>
        <li class="col-sm-3 index-danhmuc">
            <a class="nav-link" href="index.php?danhmuc=caidat&id=nhanhieu">Nhãn hiệu</a>
        </li>
        <li class="col-sm-3 index-danhmuc">
            <a class="nav-link" href="index.php?danhmuc=caidat&id=danhmuc">Danh Mục</a>
        </li>
    </ul>
</div>
<style>
    .img-pr {
        width: 40px;
        height: 40px;
        border-radius: 1000px;
        overflow: hidden;
    }

    .img-pr img {
        width: 100%;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }   
</style>



<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoestore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng sản phẩm và bảng size sản phẩm
$sql = "SELECT nhanhieu.MaNhanHieu, nhanhieu.TenNhanHieu FROM nhanhieu ";
$sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu WHERE hide = 1"; // Chỉ lấy những dòng có hide = 1
$result = $conn->query($sql);

?>

<div class="content">
  <div class="tableBox ">
  
</div>
    <div class="tableTitle">
        <p>CÀI ĐẶT NHÃN HIỆU</p>
        <button type="button" class="btn btn-primary Add-SP-button" data-bs-toggle="modal" data-bs-target="#myModal">Thêm</button>

            <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm Nhãn Hiệu</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <label for="exampleFormControlInput" class="form-label">Tên Nhãn Hiệu</label>
                    <input type="email" class="form-control" id="exampleFormControlInput" placeholder="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary-1">Thêm</button>
                </div>
                
                </div>
            </div>
            </div>

    </div>
    
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã</th>
                <th>Tên Nhãn Hiệu</th>
                <th>Hành động</th>

            </tr>
        </thead>
        <tbody>
        <?php
            if ($result->num_rows > 0) {
                // Duyệt qua các hàng dữ liệu từ kết quả truy vấn
                while($row = $result->fetch_assoc()) {
                    // In dữ liệu vào từng dòng của bảng
                    echo "<tr data-nh='" . $row["MaNhanHieu"] . "'>";
                    echo "<td>" . $row["MaNhanHieu"] . "</td>";
                    echo "<td>" . $row["TenNhanHieu"] . "</td>";
                    echo "<td>
                    <button class='btn btn-secondary btn-delete' type='button' aria-expanded='false'>
                    Xóa
                </button>
                
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $('.btn-primary-1').click(function(e){
      e.preventDefault();
      var tenNhanHieu = $('#exampleFormControlInput').val(); // Lấy dữ liệu từ trường input
      $.ajax({
          url: 'module/main/caidat/insertnh.php', // Đường dẫn đến file PHP xử lý thêm dữ liệu
          method: 'POST',
          data: {tenNhanHieu: tenNhanHieu}, // Dữ liệu gửi đi
          success: function(response){
              // Cập nhật giao diện sau khi thêm dữ liệu thành công
              $('#myTable tbody').append(response);
              $('#myModal').modal('hide'); // Đóng modal sau khi thêm dữ liệu thành công
          }
      });
   });
});
</script>
<script>
$(document).ready(function(){
   // Gắn sự kiện click cho nút "Xóa"
   $('.btn-delete').click(function(e){
      e.preventDefault(); // Ngăn chặn hành động mặc định của nút
      var supplierId = $(this).closest('tr').data('nh'); // 
      if(confirm("Bạn có chắc chắn muốn xóa nhãn hiệu này không?")) {
          $.ajax({
              url: 'module/main/caidat/deletenh.php', // Đường dẫn đến file xử lý xóa
              method: 'POST',
              data: {nh: supplierId}, // Dữ liệu gửi đi 
              success: function(response){
            
                      $('[data-nh="' + supplierId + '"]').remove();
                      console.log(response) 
                  
              }
          });
      }
   });
});
</script>
