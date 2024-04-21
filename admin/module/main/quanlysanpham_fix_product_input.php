<?php
require '../config/config.php'; 

$sql="SELECT
    sp.MaSP,
    sp.TenSP,
    sp.SoSaoDanhGia,
    sp.SoLuotDanhGia,
    sp.MoTa,
    sp.HinhAnh,
    sp.SanPhamMoi,
    sp.SanPhamHot,
    sp.GiaCu,
    sp.GiaMoi,
    sp.SoLuongDaBan,
    nhanhieu.MaNhanHieu,
    nhanhieu.TenNhanHieu,
    loaisp.MaLoai,
    loaisp.TenLoai

FROM sanpham sp
INNER JOIN nhanhieu ON sp.MaNhanHieu = nhanhieu.MaNhanHieu
INNER JOIN loaisp ON sp.MaLoai = loaisp.MaLoai
WHERE sp.MaSP = " . $_GET['idsp'];

$result = $connect->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $MaSP = $row["MaSP"];
    $TenSP =  $row["TenSP"];
    $SoSaoDanhGia = $row["SoSaoDanhGia"];
    $SoLuotDanhGia = $row["SoLuotDanhGia"];
    $SoLuongDaBan = $row["SoLuongDaBan"];
    $MoTa = $row["MoTa"];
    $HinhAnh = $row["HinhAnh"];
    $SanPhamMoi = $row["SanPhamMoi"];
    $SanPhamHot = $row["SanPhamHot"];
    $GiaCu = $row["GiaCu"];
    $GiaMoi = $row["GiaMoi"];
    $MaNhanHieu = $row["MaNhanHieu"];
    $TenNhanHieu = $row["TenNhanHieu"];
    $MaLoai = $row["MaLoai"];
    $TenLoai = $row["TenLoai"];
}
 ?>



<link type="text/css" href="assets/css/ckedittor.css" rel="stylesheet"/>

<div id="divTong" class="container mt-4 mb-4">
    <div>
        <p id="responsepp"></p>
        <div style="display: flex; width: 100%;"> 
            <div class="input-group">
                <input id="tensp" type="text" value="<?php echo $TenSP; ?>" required>
                <label for="">Tên Sản Phẩm</label>
            </div>
            <div class="input-group">
                <input id="SoLuongDaBan" type="number" value="<?php echo $SoLuongDaBan; ?>" required>
                <label for="">Số lượng đã bán</label>
            </div>
        </div>
        <div style="display: flex; width: 100%;"> 
            <div class="input-group">
                <input id="giacu" type="number" value="<?php echo $GiaCu; ?>" required>
                <label for="">Giá Cũ</label>
            </div>
            <div class="input-group">
                <input id="giamoi" type="number" value="<?php echo $GiaMoi; ?>" required>
                <label for="">Giá Mới</label>
            </div>
        </div>
        <div style="display: flex; width: 100%;"> 
            <div class="input-group">
                <input id="SoLuotDanhGia" type="number" value="<?php echo $SoLuotDanhGia; ?>" required>
                <label for="">Số lượt đánh giá</label>
            </div>
            <div class="input-group">
                <input id="SoSaoDanhGia" type="number" value="<?php echo $SoSaoDanhGia; ?>" required>
                <label for="">Số Sao đánh giá</label>
            </div>
        </div>
        <div style="display: flex; align-items: center;"> 
            <input class="form-check-input" type="checkbox" value="" id="SanPhamMoi"
                <?php 
                    if ($row['SanPhamMoi'] == '1') 
                        echo ' checked';
                ?>
            >
            <label class="form-check-label" style="font-size: 16px; margin-left: 10px;">
                Sản Phẩm mới
            </label>
            &nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp
            <input class="form-check-input" type="checkbox" value="" id="SanPhamHot"
                <?php 
                    if ($row['SanPhamHot'] == '1') 
                        echo ' checked';
                ?>
             >
            <label class="form-check-label" style="font-size: 16px; margin-left: 10px;">
                Sản Phẩm Hot
            </label>
        </div>
            
        <div style="display: flex; width: 100%;">    
            <div class="dropdown">
                <div class="select">
                    <span class="selected" id="TenNhanHieu"><?php echo $TenNhanHieu; ?></span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <?php
                    // Chuẩn bị câu truy vấn SQL
                    $sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu";
                    $result = $connect->query($sql);

                    // Kiểm tra số dòng trả về từ câu truy vấn
                    if ($result->num_rows > 0) {
                        // Đổ dữ liệu vào dropdown menu
                        while ($row = $result->fetch_assoc()) {
                            if ($MaNhanHieu != $row["MaNhanHieu"])
                                echo '<li>' . $row["TenNhanHieu"] . '</li>';
                            else 
                                echo '<li class="active">' . $row["TenNhanHieu"] . '</li>';
                        }
                    } else {
                        echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </ul>
            </div>
            <div class="dropdown">
                <div class="select">
                    <span class="selected" id="MaLoai"><?php echo $TenLoai; ?></span>
                    <div class="caret"></div>
                </div>
                <ul class="menu" >
                    <?php 
                    $sql = "SELECT MaLoai, TenLoai FROM loaisp";
                    $result = $connect->query($sql);

                    // Kiểm tra số dòng trả về từ câu truy vấn
                    if ($result->num_rows > 0) {
                        // Đổ dữ liệu vào dropdown menu
                        while ($row = $result->fetch_assoc()) {
                            if ($MaLoai != $row["MaLoai"])
                                echo '<li>' . $row["TenLoai"] . '</li>';
                            else 
                                echo '<li class="active">' . $row["TenLoai"] . '</li>';
                        }
                    } else {
                        echo "<option value=''>Không có dữ liệu</option>";
                    }
                    ?>
                </ul>
            </div>
        </div>



        <div class="drop-zone" id="dropZone">
            <span class="drop-zone__prompt">Kéo và thả ảnh vào đây hoặc nhấn để chọn ảnh</span>
            <input type="file" class="drop-zone__input" id="hinhanh" accept="image/*">
            <div class="image-preview" id="imagePreview">
                <img src="../assets/img/<?php echo $HinhAnh; ?>" style="width: 800px;">
            </div>
        </div> <br><br>

        <div id="editor">
            <?php echo $MoTa; ?>
        </div><br><br>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="submitForm">Lưu</button>
        <button type="submit" class="btn btn-primary" id="resetForm">Clear</button>
    </div>
</div>

<script src="js/ckeditor.js"></script>

<script>
    let editor;
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]

        } )
        .then( newEditor  => {
            editor = newEditor ;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
</script>

<script type="text/javascript">
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const select = dropdown.querySelector('.select');
        const caret = dropdown.querySelector('.caret');
        const menu = dropdown.querySelector('.menu');
        const options = dropdown.querySelectorAll('.menu li');
        const selected = dropdown.querySelector('.selected');

        select.addEventListener('click', () => {
            select.classList.toggle('select-clicked');
            caret.classList.toggle('caret-rotate');
            menu.classList.toggle('menu-open');
        });

        options.forEach(option => {
            option.addEventListener('click', () => {
                selected.innerText = option.innerText;
                select.classList.remove('select-clicked');
                caret.classList.remove('caret-rotate');
                menu.classList.remove('menu-open');

                // Remove 'active' class from all options
                options.forEach(opt => {
                    opt.classList.remove('active');
                });

                // Add 'active' class to the clicked option
                option.classList.add('active');
            });
        });
    });
</script>
<script>
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('hinhanh');
    const imagePreview = document.getElementById('imagePreview');
    dropZone.addEventListener('click', () => {
        fileInput.click();
    });
    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('drop-zone--over');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('drop-zone--over');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFiles(files);
        }
        dropZone.classList.remove('drop-zone--over');
    });

    function handleFiles(files) {
        const imageFile = files[0];
        const imageUrl = URL.createObjectURL(imageFile);
        const imageElement = document.createElement('img');
        imageElement.onload = function() {
            const aspectRatio = this.width / this.height;
            const newWidth = 800;
            imageElement.style.width = `${newWidth}px`;
        };
        imageElement.src = imageUrl;
        imageElement.classList.add('image-preview__image');
        imagePreview.innerHTML = '';
        imagePreview.appendChild(imageElement);
    }
    var submitButton = document.getElementById('submitForm');

    // Thêm sự kiện click cho nút Lưu
    submitButton.addEventListener('click', function() {
        // Lấy dữ liệu từ các phần tử HTML
        var tenSP = document.getElementById('tensp').value;
        var giacu = document.getElementById('giacu').value;
        var giamoi = document.getElementById('giamoi').value;
        var SoLuongDaBan = document.getElementById('SoLuongDaBan').value;
        var SoSaoDanhGia = document.getElementById('SoSaoDanhGia').value;
        var SoLuotDanhGia = document.getElementById('SoLuotDanhGia').value;
        var SanPhamMoi = document.getElementById('SanPhamMoi').checked;
        var tenNhanHieu = document.getElementById('TenNhanHieu').textContent;
        var maLoai = document.getElementById('MaLoai').textContent;
        var hinhanh = document.getElementById('hinhanh').files[0]; // Lấy file ảnh
        var editorContent = editor.getData();

        console.log(SanPhamMoi.checked);

        // Kiểm tra và thay đổi màu sắc của các trường không có dữ liệu
        var d = 0;
        if (tenSP === '') {
            document.getElementById('tensp').style.border = '1px solid red'; // Đổi màu viền thành đỏ
            d = 1;
        } else {
            document.getElementById('tensp').style.border = ''; // Reset màu viền nếu có dữ liệu
        }

        if (giacu === '') {
            document.getElementById('giacu').style.border = '1px solid red';
            d = 1;
        } else {
            document.getElementById('giacu').style.border = '';
        }

        if (giamoi === '') {
            document.getElementById('giamoi').style.border = '1px solid red';
            d = 1;
        } else {
            document.getElementById('giamoi').style.border = '';
        }

        if (SoLuongDaBan === '') {
            document.getElementById('SoLuongDaBan').style.border = '1px solid red';
            d = 1;
        } else {
            document.getElementById('SoLuongDaBan').style.border = '';
        }

        if (SoLuotDanhGia === '') {
            document.getElementById('SoLuotDanhGia').style.border = '1px solid red';
            d = 1;
        } else {
            document.getElementById('SoLuotDanhGia').style.border = '';
        }

        if (SoSaoDanhGia === '') {
            document.getElementById('SoSaoDanhGia').style.border = '1px solid red';
            d = 1;
        } else {
            document.getElementById('SoSaoDanhGia').style.border = '';
        }

        if (tenNhanHieu === 'Chọn Nhãn Hiệu') {
            document.getElementById('TenNhanHieu').style.color = 'red';
            d = 1;
        } else {
            document.getElementById('TenNhanHieu').style.color = '';
        }

        if (maLoai === 'Chọn Loại') {
            document.getElementById('MaLoai').style.color = 'red';
            d = 1;
        } else {
            document.getElementById('MaLoai').style.color = '';
        }

        if (hinhanh == null) {
            document.getElementById('dropZone').style.color = 'red';
            document.getElementById('dropZone').style.border = '2px dashed red';
            d = 1;
        } else {
            document.getElementById('dropZone').style.border = '2px dashed black';
            document.getElementById('dropZone').style.color = '';
        }

        if (d === 1){
            alert('Vui lòng nhập đầy đủ');
        } else {
            // Tạo đối tượng FormData để chứa dữ liệu
            var formData = new FormData();
            formData.append('tenSP', tenSP);
            formData.append('giaSP', giaSP);
            formData.append('tenNhanHieu', tenNhanHieu);
            formData.append('maLoai', maLoai);
            formData.append('editorContent', editorContent);
            formData.append('hinhanh', hinhanh);

            // // Tạo đối tượng XMLHttpRequest
            // var xhr = new XMLHttpRequest();

            // // Mở kết nối
            // xhr.open('POST', 'module/main/quanlysanpham_add_product.php', true);

            // // Gửi dữ liệu
            // xhr.send(formData);

            // // Xử lý kết quả trả về
            // xhr.onreadystatechange = function() {
            //     if (xhr.readyState == XMLHttpRequest.DONE) {
            //         if (xhr.status == 200) {
            //             // Xử lý phản hồi từ server (nếu cần)
            //             var response = xhr.responseText;
            //             alert(response);
            //         } else {
            //             // Xử lý lỗi (nếu có)
            //             console.error('Đã xảy ra lỗi:', xhr.status);
            //         }
            //     }
            // };
        }

        // In dữ liệu lấy được ra console để kiểm tra
        // console.log('Tên Sản Phẩm:', tenSP);
        // console.log('Giá:', giaSP);
        // console.log('Nhãn Hiệu:', tenNhanHieu);
        // console.log('Loại:', maLoai);
        // console.log('Hình ảnh:', hinhanh);
        // console.log('Nội dung:', editorContent);

        
    });
</script>

