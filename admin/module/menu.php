<style>
    ul{
        list-style: none;
    }
</style>
<nav class="sidebar-navigation">
	<ul>
		<a href="index.php?danhmuc=dashboard">
			<li>
				<i class="fa-solid fa-gauge-high"></i>
				<span class="tooltip">Dashboard</span>
			</li>
		</a>
		<a href="index.php?danhmuc=thongkekinhdoanh">
			<li>
				<i class="fa-solid fa-chart-simple"></i>
				<span class="tooltip">Thống kê kinh doanh</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlysanpham">
			<li>
				<i class="fa-brands fa-shopify"></i>
				<span class="tooltip">Quản lý sản phẩm</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlydanhgia">
			<li>
				<i class="fa-solid fa-star"></i>
				<span class="tooltip">Quản lý đánh giá</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlydonhang">
			<li>
				<i class="fa-solid fa-cube"></i>
				<span class="tooltip">Quản lý đơn hàng</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlynhaphang">
			<li>
				<i class="fa-solid fa-file-import"></i>			
				<span class="tooltip">Quản lý nhập hàng</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlyquyen">
			<li>
				<i class="fa-solid fa-user-shield"></i>
				<span class="tooltip">Quản lý quyền</span>
			</li>
		</a>
		<a href="index.php?danhmuc=quanlytaikhoan">
			<li>
				<i class="fa-solid fa-user-gear"></i>
				<span class="tooltip">Quản lý tài khoản</span>
			</li>	
		</a>
		<a href="index.php?danhmuc=caidat">
			<li>
				<i class="fa-solid fa-gear"></i>
				<span class="tooltip">Cài đặt</span>
			</li>
		</a>
		<a href="index.php?danhmuc=caidatwebsite">
			<li>
				<i class="fa-solid fa-screwdriver-wrench"></i>	
				<span class="tooltip">Cài đặt website</span>
			</li>
		</a>
		
		
		

		
		


	</ul>
</nav>
<script>
   // Lấy tất cả các phần tử <li> trong các phần tử <ul> và gán sự kiện 'click' cho từng phần tử
    document.querySelectorAll('ul li').forEach(function(li) {
    li.addEventListener('click', function() {
        // Loại bỏ lớp 'active' từ tất cả các phần tử <li>
        document.querySelectorAll('li').forEach(function(item) {
            item.classList.remove('active');
        });
        // Thêm lớp 'active' cho phần tử <li> đang được click
        this.classList.add('active');
    });
});

</script>