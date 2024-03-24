<style>
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
                    <?php
                    require '../config/config.php';
                    // Lấy dữ liệu từ bảng nhanhieu
                    $sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          echo '<option value="' . $row["MaNhanHieu"] . '">' . $row["TenNhanHieu"] . '</option>';
                      }
                    } else {
                      echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="filter-container">
                <select id="filterSelect">
                    <?php 
                    // Lấy dữ liệu từ bảng loaisp
                    $sql = "SELECT MaLoai, TenLoai FROM loaisp";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          echo '<option value="' . $row["MaLoai"] . '">' . $row["TenLoai"] . '</option>';
                      }
                    } else {
                      echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="button" class="btn btn-primary Add-SP-button" data-bs-toggle="modal" data-bs-target="#themsanpham">
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
            <?php 
                $sql_shoes = "SELECT * FROM `sanpham`";
                $result_shoes = $connect->query($sql_shoes);
                if ($result_shoes->num_rows > 0) {
                    while ($row = $result_shoes->fetch_assoc()) {
                        // Câu truy vấn SQL
                        $sql = "SELECT TenNhanHieu FROM `nhanhieu` WHERE MaNhanHieu = " . $row["MaNhanHieu"];
                        // Thực thi truy vấn
                        $result = $connect->query($sql);
                        $tennhanhieu = 'kotimthay';
                        if ($result->num_rows > 0) {
                            $rowd = $result->fetch_assoc();
                            $tennhanhieu = $rowd["TenNhanHieu"];
                        }

                        $tongSL = 0;
                        // Câu truy vấn SQL
                        $sql = "SELECT *, SUM(SoLuong) AS TongSoLuong FROM ctsizesp WHERE MaSP = " . $row["MaSP"];
                        // Thực thi truy vấn
                        $result = $connect->query($sql);
                        if ($result->num_rows > 0) {
                            $rowd = $result->fetch_assoc();
                            $tongSL = $rowd["TongSoLuong"];
                        }

                        echo '
                            <tr>
                                <td>' . $row["MaSP"] . '</td>
                                <td>
                                    <div>
                                        <img src="../assets/img/' .$row["HinhAnh"]. '" alt="" class="" width="80">
                                    </div>
                                </td>
                                <td>' . $row["TenSP"] . '</td>
                                <td>' . $tennhanhieu . '</td>
                                <td>' . $formatted_number = number_format($row["GiaMoi"], 0, ',', '.') .' VND</td>
                                <td>
                                    <button type="button" class="btn btn-primary view-size-button" data-bs-toggle="modal" data-bs-target="#chitietsoluong" data-product-id="' . $row["MaSP"] . '">
                                    ' . $tongSL . '
                                    </button>
                                </td>
                                <td>
                                    <div class="dropdown" >
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                                            <li><button type="button" class="btn btn-primary view-SP-button" data-bs-toggle="modal" data-bs-target="#chitietsanpham" data-product-id="' . $row["MaSP"] . '">
                                                Chi tiết
                                                </button></li>
                                            <li><button type="button" class="btn btn-primary fix-sp-button" data-bs-toggle="modal" data-bs-target="#suasanpham" data-product-id="' . $row["MaSP"] . '">Sửa</button></li>
                                            <li><button type="button" class="btn btn-primary xoa-sp-button" data-bs-toggle="modal" data-bs-target="#xoasanpham" data-product-id="' . $row["MaSP"] . '">Xóa</button></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>';
                    }
                } else {
                    echo "<tr><td colspan='2'>Không có dữ liệu</td></tr>";
                }
            ?>
            
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- Modal thêm sản phẩm -->
<div class="modal fade" id="themsanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelThemsanpham">Thêm Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="responsepp"></p>
        <form id="new_data_product">
          <table class="table">
            <tr>
              <td>Mã SP:</td>
                <?php 
                $sql = "SELECT COUNT(*) AS total FROM sanpham";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $tongSoSanPham = $row["total"];
                } else {
                    $tongSoSanPham = 0;
                }
                echo '<td><input id="MaSPid" type="number" name="MaSP" value="' .$tongSoSanPham + 1 .'"></td>';
               ?>
            </tr>
            <tr>
              <td>Tên Sản Phẩm:</td>
              <td><input type="text" name="TenSP"></td>
            </tr>
            <tr>
              <td>Mô Tả:</td>
              <td><textarea name="MoTa"></textarea></td>
            </tr>
            <tr>
              <td>Hình Ảnh:</td>
              <td><input type="file" name="HinhSanPham" id="hinhanh"></td>
            </tr>
            <tr>
              <td>Giá Mới:</td>
              <td><input type="number" name="GiaMoi"></td>
            </tr>
            <tr>
                <td>Mã Nhãn Hiệu:</td>
                <td>
                    <select name="MaNhanHieu">
                        <?php
                        // Chuẩn bị câu truy vấn SQL
                        $sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu";
                        $result = $connect->query($sql);

                        // Kiểm tra số dòng trả về từ câu truy vấn
                        if ($result->num_rows > 0) {
                            // Đổ dữ liệu vào dropdown menu
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row["MaNhanHieu"] . '">' . $row["TenNhanHieu"] . '</option>';
                            }
                        } else {
                            echo "<option value=''>Không có dữ liệu</option>";
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
              <td>Mã Loại:</td>
              <td>
                <select name="MaLoai">
                    <?php 
                    $sql = "SELECT MaLoai, TenLoai FROM loaisp";
                    $result = $connect->query($sql);

                    // Kiểm tra số dòng trả về từ câu truy vấn
                    if ($result->num_rows > 0) {
                        // Đổ dữ liệu vào dropdown menu
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["MaLoai"] . '">' . $row["TenLoai"] . '</option>';
                        }
                    } else {
                        echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </select>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="submitForm">Lưu</button>
        <button type="submit" class="btn btn-primary" id="resetForm">Clear</button>
      </div>
    </div>
  </div>
</div>
<script>
    document.getElementById('resetForm').addEventListener('click', function() {

    var MaSPField = document.getElementById('MaSPid');
    var socuaMaSp = MaSPField.value;
    // Lấy danh sách các trường input
    var inputs = document.querySelectorAll('input[type="text"], input[type="number"], textarea');

    // Đặt lại giá trị của từng trường input thành chuỗi rỗng
    inputs.forEach(function(input) {
        input.value = '';
    });

    // Tăng giá trị của trường MaSP lên 1
    var currentMaSP = parseInt(socuaMaSp);
    MaSPField.value = currentMaSP + 1;
});
</script>
<script>
$(document).ready(function(){
    $('#submitForm').on('click', function(e){
        e.preventDefault(); // Ngăn chặn gửi form thông qua trình duyệt

        var formData = new FormData($('#new_data_product')[0]);

        // Lấy dữ liệu từ input file và thêm vào formData
        var hinhanh = $('#hinhanh')[0].files[0];
        if (hinhanh == null)
            formData.append('hinhanh', new Blob());
        else 
            formData.append('hinhanh', hinhanh);

        console.log(formData);

        // Gửi dữ liệu bằng AJAX
        $.ajax({
            type: 'POST',
            url: 'module/main/add_product.php', // Đường dẫn đến tệp PHP xử lý dữ liệu
            data: formData,
            processData: false, // Không xử lý dữ liệu
            contentType: false, // Không thiết lập kiểu dữ liệu
            success: function(response){
                $('#responsepp').html(response);
            },
            error: function(xhr, status, error){
                console.error(error); // Hiển thị lỗi nếu có
            }
        });

    });
});
</script>


<!-- Modal chi tiết sản phẩm -->
<div class="modal fade" id="chitietsanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelCTsanpham">Chi tiết Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table >
            <thead>
                <tr>
                    <th>Column</th>
                    <th>data</th>
                </tr>
            </thead>
            <tbody id="list_data_product">
                <!-- Dữ liệu sẽ được thêm vào đây từ mã JavaScript -->
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.view-SP-button').click(function(event){
        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
        var productId = $(this).attr('data-product-id');
        console.log(productId);
        $.ajax({
            url: 'module/main/get_product_info.php',
            type: 'POST',
            data: { productId: productId },
            success: function(response){
                $('#list_data_product').html(response);
            }
        });
        
    });
});
</script>

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
            <tbody id="list_size_and_number">
                <!-- Dữ liệu sẽ được thêm vào đây từ mã JavaScript -->
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.view-size-button').click(function(){
        var productId = $(this).attr('data-product-id');
        $.ajax({
            url: 'module/main/get_list_size_and_number.php',
            type: 'POST',
            data: { productId: productId },
            success: function(response){
                $('#list_size_and_number').html(response);
            }
        });
    });
});
</script>
<div class="modal fade" id="xoasanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelXoasanpham">Sửa Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="contendelete">
            <h2>Bạn có chắc muốn xóa sản phẩm này?</h2>
            <p id="idsp">1</p>
            <button type="submit" class="btn btn-primary" id="submitXoa">Xóa</button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('.xoa-sp-button').click(function(){
            var productId = $(this).attr('data-product-id');
            var pElement = document.getElementById("idsp");
            // Thay đổi nội dung bằng thuộc tính textContent
            pElement.textContent = productId;
        });
    });
</script>
<script>
    document.getElementById('submitXoa').addEventListener('click', function() {
        // Lấy giá trị của idsp
        var idSanPham = document.getElementById('idsp').innerText;

        // Gửi yêu cầu xóa sản phẩm
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Xử lý phản hồi từ máy chủ (nếu cần)
                $('#contendelete').html(this.responseText);
                // Sau khi xóa, bạn có thể thực hiện các hành động khác ở đây
            }
        };
        xhttp.open("POST", "module/main/delete_sanpham.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("idSanPham=" + idSanPham);
    });
</script>


<div class="modal fade" id="suasanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelSuasanpham">Sửa Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="fix_data_product">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="submitFormforfix">Lưu</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $('.fix-sp-button').click(function(){
            var productId = $(this).attr('data-product-id');
            $.ajax({
                url: 'module/main/get_product_info_for_fix_info.php',
                type: 'POST',
                data: { productId: productId },
                success: function(response){
                    $('#fix_data_product').html(response);
                }
            });
        });
    });
</script>

<script>
$(document).ready(function(){
    $('#submitFormforfix').on('click', function(e){
        e.preventDefault(); // Ngăn chặn gửi form thông qua trình duyệt
        var formData = new FormData($('#fix_data_product')[0]);
        // Lấy dữ liệu từ input file và thêm vào formData
        var hinhanh = $('#hinhanh2')[0].files[0];
        if (hinhanh == null)
            formData.append('hinhanh2', new Blob());
        else 
            formData.append('hinhanh2', hinhanh);
        console.log(formData);
        // Gửi dữ liệu bằng AJAX
        $.ajax({
            type: 'POST',
            url: 'module/main/fix_sanpham.php', // Đường dẫn đến tệp PHP xử lý dữ liệu
            data: formData,
            processData: false, // Không xử lý dữ liệu
            contentType: false, // Không thiết lập kiểu dữ liệu
            success: function(response){
                $('#responsfixed').html(response);
            },
            error: function(xhr, status, error){
                console.error(error); // Hiển thị lỗi nếu có
            }
        });
    });
});
</script>