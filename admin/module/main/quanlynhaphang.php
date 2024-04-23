
<?php
	require '../config/config.php';
	//lấy thông tin sản phẩm,khách hàng,nhân viên
	$sql="SELECT
	pn.MaPN,
	pn.NgayNhap,
	pn.TongTien,
	pn.TongSoLuong,
	pn.TinhTrangDH,
	pn.trangThai,
	user.Ma,
	user.HoTen,
	user.SDT,
	nhacungcap.MaNCC,
	nhacungcap.SdtNCC,
	nhacungcap.TenNCC

FROM phieunhap pn
INNER JOIN nhacungcap ON pn.MaNCC = nhacungcap.MaNCC
INNER JOIN user ON pn.MaNV = user.Ma;";


$result = $connect->query($sql);
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
	<title>Quản lí Nhập hàng</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    .contentdivselect {
        display: none; /* Ẩn tất cả các div */
    }
    /* Hiển thị div content1 mặc định */
    #contentdivselect1 {
        display: block;
    }
</style>
<div id="noi-dung-chi-tiet" ></div>
<div class="tableBox ">
	<div class="tableTitle">
		<p>Danh sách nhập hàng</p>
		<div class="table-func" style="width: 50%">
			<select id="selectBox" onchange="changeContent()">
				    <option value="option1">Theo Ngày</option>
				    <option value="option2">Theo Tiền</option>
				    <option value="option3">Theo Số lượng</option>
				    <option value="option4">Trạng thái</option>
				</select>
			<div id="contentdivselect1" class="contentdivselect filter-container" style="width: 100%">
				<label>Bắt đầu:</label>
			    <input type="date" id="startdate">
				<label>Kết thúc:</label>
				<input type="date" id="enddate">
				<button class="btn btn-primary" id="filterBtnDate">Filter</button>
				<button class="btn btn-secondary" id="clearBtnDate">Clear</button>
			</div>
			<div id="contentdivselect2" class="contentdivselect filter-container" style="width: 100%">
				<label>Bắt đầu:</label>
			    <input type="number" id="startmoney">
				<label>Kết thúc:</label>
				<input type="number" id="endmoney">
				<button class="btn btn-primary" id="filterBtnMoney">Filter</button>
				<button class="btn btn-secondary" id="clearBtnMoney">Clear</button>
			</div>
			<div id="contentdivselect3" class="contentdivselect filter-container" style="width: 100%">
				<label>Bắt đầu:</label>
			    <input type="number" id="startSL">
				<label>Kết thúc:</label>
				<input type="number" id="endSL">
				<button class="btn btn-primary" id="filterBtnNumber">Filter</button>
				<button class="btn btn-secondary" id="clearBtnNumber">Clear</button>
			</div>
			<div id="contentdivselect4" class="contentdivselect filter-container" style="width: 100%">
				<label>Trạng thái:</label>
				<select id="selectTrangThai">
				    <option value=" ">All</option>
				    <option value="Đã Nhận">Đã Nhận</option>
				    <option value="Chưa Nhận">Chưa Nhận</option>
				</select>
				<script type="text/javascript">
					$('#selectTrangThai').on('change', function() {
					    $('#myTable').DataTable().column(6).search($(this).val()).draw();
					  });
				</script>
			</div>
			&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp
			<a class="btn btn-primary" href="index.php?danhmuc=themphieunhap">Thêm</a>
		</div>
	</div>
	<script>
	    // Hàm để thay đổi nội dung của div
	    function changeContent() {
	        var selectBox = document.getElementById("selectBox");
	        var selectedOption = selectBox.options[selectBox.selectedIndex].value;

	        // Ẩn tất cả các div
	        var allContents = document.getElementsByClassName("contentdivselect");
	        for (var i = 0; i < allContents.length; i++) {
	            allContents[i].style.display = "none";
	        }

	        // Hiển thị div tương ứng với option đã chọn
	        var contentDiv = document.getElementById("contentdivselect" + selectedOption.substr(-1));
	        contentDiv.style.display = "block";
	    }
	</script>
	<script>
		document.getElementById('filterBtnDate').addEventListener('click', function() {
		  	var startDate = document.getElementById('startdate').value;
		  	var endDate = document.getElementById('enddate').value;

		  	if (startDate != '' && endDate != '') {
				var table = document.getElementById('myTable');
				var rows = table.getElementsByTagName('tr');

				for (var i = 1; i < rows.length; i++) {
					var rowDate = rows[i].getElementsByTagName('td')[3].innerHTML;
					if (rowDate >= startDate && rowDate <= endDate) {
						rows[i].style.display = '';
					} else {
				  		rows[i].style.display = 'none';
					}
				}
		  	}
		});
		document.getElementById('clearBtnDate').addEventListener('click', function() {
		  document.getElementById('startdate').value = '';
		  document.getElementById('enddate').value = '';

		  var table = document.getElementById('myTable');
		  var rows = table.getElementsByTagName('tr');

		  for (var i = 1; i < rows.length; i++) {
		    rows[i].style.display = '';
		  }
		});
		document.getElementById('filterBtnMoney').addEventListener('click', function() {
		  	var startmoney = document.getElementById('startmoney').value;
		  	var endmoney = document.getElementById('endmoney').value;
		  	// console.log(startmoney + ' ' + endmoney);
		  	if (startmoney != '' && endmoney != '') {
				var table = document.getElementById('myTable');
				var rows = table.getElementsByTagName('tr');

				for (var i = 1; i < rows.length; i++) {
					var rowMoney = rows[i].getElementsByTagName('td')[4].innerHTML;
					var numberString = rowMoney.replace(/\D/g, '');
					var number = parseFloat(numberString);
					if (number >= startmoney && number <= endmoney) {
						rows[i].style.display = '';
					} else {
				  		rows[i].style.display = 'none';
					}
				}
		  	}
		});
		document.getElementById('clearBtnMoney').addEventListener('click', function() {
		  document.getElementById('startmoney').value = '';
		  document.getElementById('endmoney').value = '';

		  var table = document.getElementById('myTable');
		  var rows = table.getElementsByTagName('tr');

		  for (var i = 1; i < rows.length; i++) {
		    rows[i].style.display = '';
		  }
		});


		document.getElementById('filterBtnNumber').addEventListener('click', function() {
		  	var startSL = document.getElementById('startSL').value;
		  	var endSL = document.getElementById('endSL').value;
		  	// console.log(startmoney + ' ' + endmoney);
		  	if (startSL != '' && endSL != '') {
				var table = document.getElementById('myTable');
				var rows = table.getElementsByTagName('tr');

				for (var i = 1; i < rows.length; i++) {
					var sl = rows[i].getElementsByTagName('td')[5].textContent;
					var number = parseInt(sl.match(/\d+/)[0]);
					console.log(sl);
					if (number >= startSL && number <= endSL) {
						rows[i].style.display = '';
					} else {
				  		rows[i].style.display = 'none';
					}
				}
		  	}
		});
		document.getElementById('clearBtnNumber').addEventListener('click', function() {
		  document.getElementById('startSL').value = '';
		  document.getElementById('endSL').value = '';

		  var table = document.getElementById('myTable');
		  var rows = table.getElementsByTagName('tr');

		  for (var i = 1; i < rows.length; i++) {
		    rows[i].style.display = '';
		  }
		});
	</script>
	<table id="myTable" class="table table-striped " style="width: 100%;">
		<thead>
			<tr>
				<th >Mã</th>
				<th>Nhân viên</th>
				<th>Nhà cung cấp</th>
				<th>Ngày nhập</th>
				<th>Tổng tiền</th>
				<th>Số lượng</th>
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
			<td><?php echo $row['MaPN']; ?></td>
			<td>
				<ul>
					<li>ID: <?php echo $row['Ma']; ?></li></li>
					<li>Tên: <?php echo $row['HoTen']; ?> </li>
					<li>SĐT: <?php echo $row['SDT']; ?></li>
				</ul>
			</td>
			<td>
				<ul>
					<li>ID: <?php echo $row['MaNCC']; ?></li></li>
					<li>Tên: <?php echo $row['TenNCC']; ?> </li>
					<li>SĐT: <?php echo $row['SdtNCC']; ?> </li>
				</ul>
			</td>
			
			<td><?php echo $row['NgayNhap']; ?></td>
			<td><?php echo number_format($row['TongTien'], 0, ',', '.') . ' '; ?>VND</td>
			<td>
				<button type="button" class="btn btn-primary view-size-button" data-bs-toggle="modal" data-bs-target="#chitietsoluongPhieunhap" id="<?php echo $row['MaPN']; ?>"> <?php echo $row['TongSoLuong']; ?> </button>
			</td>
			<td>
				<input class="form-check-input" type="checkbox" value="" id="<?php echo $row['MaPN']; ?>"
					<?php 
						if ($row['TinhTrangDH'] == 'Đã nhận') 
							echo ' checked';
					?>
				>
				<label class="form-check-label" id="p<?php echo $row['MaPN']; ?>">
			        <?php echo $row['TinhTrangDH']; ?>
			    </label>
			</td>
			<td>
				<a class="btn btn-primary fix-sp-button" href="index.php?danhmuc=chitietphieunhap&mapn=<?php echo $row['MaPN']; ?>">Chi tiết</a>
				<button type="button" class="btn btn-primary xoa-pn-button" data-bs-toggle="modal" data-bs-target="#xoaPhieunhap" id="<?php echo $row['MaPN'] ?>">Xóa</button>
			</td>
		</tr>
	<?php } } ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
	$('table').on('click', 'td' , function (event) {
		var checkbox = $('input', this); 
		var maPhieuNhap = checkbox.attr('id');
		if (checkbox.is(':checked')){
			var confirmation = confirm("Xác nhận đã nhận được đơn hàng có mã = " + maPhieuNhap + " ?");
			if (confirmation) {
				$.ajax({
					url: 'module/main/quanlynhaphang_xac_nhan_nhan_hang.php',
					type: 'POST',
					data: { maPhieuNhap: maPhieuNhap },
					success: function(response){
						console.log(response);
						document.getElementById("p" + maPhieuNhap).innerHTML = "Đã nhận";
					}
				});
			} else {
				checkbox.prop('checked', false);
			}
		}
		
		
	});
	$(document).ready(function(){
    $('table').on('change', 'input[type="checkbox"]' , function (event) {
        var checkbox = $(this);
        var maPhieuNhap = checkbox.attr('id');
        
        if (!checkbox.is(':checked')) {
        	$.ajax({
				url: 'module/main/quanlynhaphang_huy_nhan_hang.php',
				type: 'POST',
				data: { maPhieuNhap: maPhieuNhap },
				success: function(response){
					console.log(response);
        			document.getElementById("p" + maPhieuNhap).innerHTML = "Chưa nhận";
				}
			});
        }
    });
});
});

</script>
<?php $connect->close(); ?>
<!-- Modal -->
<div class="modal fade" id="chitietsoluongPhieunhap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content"  style="">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Chi tiết số lượng</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<table >
			<tbody id="list_size_and_number">
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
			var phieunhapId = $('button', this).attr('id');
        	if (phieunhapId != null) {
				console.log(phieunhapId)
				$.ajax({
					url: 'module/main/quanlynhaphang_get_ctpn_info.php',
					type: 'POST',
					data: { phieunhapId: phieunhapId },
					success: function(response){
						$('#list_size_and_number').html(response);
					}
				});
			}
		});

	});
</script>
</body>
</html>
<div class="modal fade" id="xoaPhieunhap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <p class="inline-p">Mã sản phẩm: </p><p id="idpn" class="inline-p"></p>
            <h2>Bạn có chắc muốn xóa phiếu nhập này?</h2>
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
	        if (productId != null) {
	        var pElement = document.getElementById("idpn");
	        // Thay đổi nội dung bằng thuộc tính textContent
	        pElement.textContent = productId;
	    }
    });
</script>