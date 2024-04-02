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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<div class="tableBox ">
    <div class="tableTitle">
        <p>Danh sách sản phẩm</p>
        <div class="table-func">
            <div class="filter-container">
                <select id="filterSelect1">
                    <option value=''>All</option>
                    <?php
                    require '../config/config.php';
                    // Lấy dữ liệu từ bảng nhanhieu
                    $sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          echo '<option value="' . $row["TenNhanHieu"] . '">' . $row["TenNhanHieu"] . '</option>';
                      }
                    } else {
                      echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="filter-container">
                <select id="filterSelect2">
                    <option value=''>All</option>
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
                <th data-visible="false">ẨN</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql_shoes = "SELECT * FROM `sanpham`";
                $result_shoes = $connect->query($sql_shoes);
                if ($result_shoes->num_rows > 0) {
                    while ($row = $result_shoes->fetch_assoc()) {
                        if ($row['hide'] == 0)
                            continue; 
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
                                    <button type="button" class="btn btn-primary view-size-button" data-bs-toggle="modal" data-bs-target="#chitietsoluong" id="' .$row["MaSP"] . '">
                                    ' . $tongSL . '
                                    </button>
                                </td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-primary view-SP-button" data-bs-toggle="modal" data-bs-target="#chitietsanpham" id="' .$row["MaSP"] . '">
                                            Chi tiết
                                            </button>
                                        <button type="button" class="btn btn-primary fix-sp-button" data-bs-toggle="modal" data-bs-target="#suasanpham"  id="' .$row["MaSP"] . '">Sửa</button>
                                        <button type="button" class="btn btn-primary xoa-sp-button" data-bs-toggle="modal" data-bs-target="#xoasanpham"  id="' .$row["MaSP"] . '">Xóa</button>
                                        
                                    </div>
                                </td>
                                <td style="display:none;visibility:hidden;">' .$row["MaLoai"]. '</td>
                            </tr>'
                            ;
                    }
                } else {
                    echo "<tr><td colspan='2'>Không có dữ liệu</td></tr>";
                }
            ?>
            
        </tbody>
    </table>
</div>
<script>
$(document).ready(function() {
  $('#myTable').DataTable();
  $('#filterSelect1').on('change', function() {
    $('#myTable').DataTable().column(3).search($(this).val()).draw();
  });
  $('#filterSelect2').on('change', function() {
    $('#myTable').DataTable().column(7).search($(this).val()).draw();
    console.log($(this).val())
  });
});
</script>

<!-- Modal thêm sản phẩm -->
<div class="modal fade" id="themsanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 800px;">
  <div class="modal-dialog">
    <div class="modal-content" style="">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelThemsanpham">Thêm Sản Phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="responsepp"></p>
        <form id="new_data_product">
          <table>
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
    // Lấy danh sách các trường input
    var inputs = document.querySelectorAll('input[type="text"], input[type="number"], textarea');

    // Đặt lại giá trị của từng trường input thành chuỗi rỗng
    inputs.forEach(function(input) {
        input.value = '';
    });

    document.getElementById("responsepp").innerHTML = "";
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
            url: 'module/main/quanlysanpham_add_product.php', // Đường dẫn đến tệp PHP xử lý dữ liệu
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
<div class="modal fade" id="chitietsanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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
    $('table').on('click', 'td' , function (event) {
        var productId = $('button', this).attr('id');
        // console.log(productId);
        $.ajax({
            url: 'module/main/quanlysanpham_get_product_info.php',
            type: 'POST',
            data: { maPhieuNhap: maPhieuNhap },
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
    $('table').on('click', 'td' , function (event) {
        var productId = $('button', this).attr('id');
        $.ajax({
            url: 'module/main/quanlysanpham_get_list_size_and_number.php',
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
            <style>
                .inline-p {
                    display: inline-block;
                }
            </style>

            <p class="inline-p">Mã sản phẩm: </p><p id="idsp" class="inline-p"></p>
            <h2>Bạn có chắc muốn xóa sản phẩm này?</h2>
            <button type="submit" class="btn btn-primary" id="submitXoa">Xóa</button>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<script>
    $('table').on('click', 'td' , function (event) {
        var productId = $('button', this).attr('id');
        var pElement = document.getElementById("idsp");
        // Thay đổi nội dung bằng thuộc tính textContent
        pElement.textContent = productId;
    });
</script>
<script>
$(document).ready(function(){
  $('#xoasanpham').on('hidden.bs.modal', function () {
    // Ví dụ: Reset form
    $('#contendelete').html(`
      <style>
        .inline-p {
          display: inline-block;
        }
      </style>
      <p class="inline-p">Mã sản phẩm: </p><p id="idsp" class="inline-p"></p>
      <h2>Bạn có chắc muốn xóa sản phẩm này?</h2>
      <button type="submit" class="btn btn-primary" id="submitXoa">Xóa</button>
    `);
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
                $('#contendelete').html(this.responseText);
                // xóa hàng theo idSanPham
                var searchValue = idSanPham;
                $("#myTable tbody tr").each(function() {
                    var rowData = $(this).find("td:eq(0)").text(); // Lấy dữ liệu của cột 0 trong hàng
                    if (rowData === searchValue) {
                        $(this).remove(); // Xóa hàng nếu dữ liệu cột 0 trùng khớp với giá trị tìm kiếm
                        return false; // Dừng vòng lặp sau khi xóa hàng
                    }
                });
            }
        };
        xhttp.open("POST", "module/main/quanlysanpham_delete_sanpham.php", true);
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
    $('table').on('click', 'td' , function (event) {
        var productId = $('button', this).attr('id');
        $.ajax({
            url: 'module/main/quanlysanpham_get_product_info_for_fix_info.php',
            type: 'POST',
            data: { productId: productId },
            success: function(response){
                $('#fix_data_product').html(response);
            }
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
            url: 'module/main/quanlysanpham_fix_sanpham.php', // Đường dẫn đến tệp PHP xử lý dữ liệu
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