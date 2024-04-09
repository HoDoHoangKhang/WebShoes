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
$sql = "SELECT sizesp.SizeSP FROM sizesp ";
$sql = "SELECT SizeSP FROM sizesp WHERE hide = 1"; // Chỉ lấy những dòng có hide = 1
$result = $conn->query($sql);

?>

<div class="content">
  <div class="tableBox ">
    <div class="tableTitle">
        <p>CÀI ĐẶT SIZE</p>
        <button type="button" class="btn btn-primary Add-SP-button" data-bs-toggle="modal" data-bs-target="#myModal">Thêm</button>

            <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm Size</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <label for="exampleFormControlInput" class="form-label">Số Size</label>
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
                <th>Size</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Duyệt qua các hàng dữ liệu từ kết quả truy vấn
                while($row = $result->fetch_assoc()) {
                    // In dữ liệu vào từng dòng của bảng
                    echo "<tr data-size='" . $row["SizeSP"] . "'>";
                    echo "<td>" . $row["SizeSP"] . "</td>";
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
   // Gắn sự kiện click cho nút "Thêm"
   $('.btn-primary-1').click(function(e){
      e.preventDefault();
      var size = $('#exampleFormControlInput').val(); // Lấy dữ liệu từ trường input
      $.ajax({
          url: 'module/main/caidat/insertsize.php', // Đường dẫn đến file PHP xử lý thêm dữ liệu
          method: 'POST',
          data: {size: size}, // Dữ liệu gửi đi
          success: function(response){
              // Cập nhật giao diện sau khi thêm dữ liệu thành công
              var lastRow = $('#myTable tbody tr:last'); // Chọn phần tử cuối cùng trong tbody
              if (lastRow.length) {
                  lastRow.after(response); // Thêm dữ liệu mới vào sau phần tử cuối cùng
              } else {
                  $('#myTable tbody').append(response); // Nếu không có phần tử nào, thêm vào cuối tbody
              }
              $('#myModal').modal('hide'); // Đóng modal sau khi thêm dữ liệu thành công
          }
      });
   });
});
</script>
<script>
$(document).ready(function(){
   // Gắn sự kiện click cho phần tử cha của nút "Xóa"
   $('#myTable').on('click', '.btn-delete', function(e){
      e.preventDefault(); // Ngăn chặn hành động mặc định của nút
      var size = $(this).closest('tr').data('size'); 
      if(confirm("Bạn có chắc chắn muốn xóa Size này không?")) {
          $.ajax({
              url: 'module/main/caidat/deletesize.php', // Đường dẫn đến file xử lý xóa
              method: 'POST',
              data: {size: size}, // Dữ liệu gửi đi 
              success: function(response){
                  $('[data-size="' + size + '"]').remove();
                  console.log(response)
              }
          });
      }
   });
});
</script>