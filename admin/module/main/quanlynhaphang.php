
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
	nhanvien.MaNV,
	nhanvien.HoTenNV,
	nhanvien.SDT,
	nhacungcap.MaNCC,
	nhacungcap.SdtNCC,
	nhacungcap.TenNCC

FROM phieunhap pn
INNER JOIN nhacungcap ON pn.MaNCC = nhacungcap.MaNCC
INNER JOIN nhanvien ON pn.MaNV = nhanvien.MaNV;";


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
</style>

<div id="noi-dung-chi-tiet" ></div>
<div class="tableBox ">
	<div class="tableTitle">
		<p>Danh sách nhập hàng</p>
		
	</div>
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
					<li>ID: <?php echo $row['MaNV']; ?></li></li>
					<li>Tên: <?php echo $row['HoTenNV']; ?> </li>
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
				<button type="button" class="btn btn-primary view-size-button" data-bs-toggle="modal" data-bs-target="#chitietsoluong" id="<?php echo $row['MaPN']; ?>"> <?php echo $row['TongSoLuong']; ?> </button>
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
				<button type="button" class="btn btn-primary fix-sp-button" data-bs-toggle="modal" data-bs-target="#suasanpham"  id="">Sửa</button>
				<button type="button" class="btn btn-primary xoa-sp-button" data-bs-toggle="modal" data-bs-target="#xoasanpham"  id="">Xóa</button>
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
<div class="modal fade" id="chitietsoluong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			console.log(phieunhapId)
			$.ajax({
				url: 'module/main/quanlynhaphang_get_ctpn_info.php',
				type: 'POST',
				data: { phieunhapId: phieunhapId },
				success: function(response){
					$('#list_size_and_number').html(response);
				}
			});
		});
	});
</script>
</body>
</html>
