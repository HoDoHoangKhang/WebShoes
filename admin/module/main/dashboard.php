<?php
// Kết nối với cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "shoestore");

$sql = "SELECT
    (SELECT COUNT(*) FROM user AS u INNER JOIN taikhoan AS tk ON u.TenDangNhap = tk.TenDangNhap WHERE tk.MaQuyen = 4) AS so_luong_khach_hang,
    (SELECT COUNT(*) FROM user AS u INNER JOIN taikhoan AS tk ON u.TenDangNhap = tk.TenDangNhap WHERE tk.MaQuyen != 4) AS so_luong_nhan_vien,
    (SELECT COUNT(*) FROM sanpham) AS so_luong_san_pham,
    (SELECT COUNT(*) FROM phieuxuat) AS so_luong_phieuxuat;
";

$result = $conn->query($sql);
    // Lưu kết quả vào biến
    $data = $result->fetch_assoc();
    $kh = $data["so_luong_khach_hang"];
    $nv = $data["so_luong_nhan_vien"];
    $sp= $data["so_luong_san_pham"];
    $dh = $data["so_luong_phieuxuat"];

// Kết thúc kết nối
$conn->close();
?>
     <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        .container {
            display: flex;
        }
        .item {          
            width: 100%;
            padding: 20px;
            text-align: center;
            border: 3px solid #ddd;
            border-radius: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <div class="container">
        <div class="item" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(242,73,92,1) 100%);">
            <h2>Số lượng khách hàng</h2>
            <h3><?php echo $kh ?></h3>
        </div>
        <div class="item" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(45,51,253,1) 100%);">
            <h2>Số lượng nhân viên</h2>
            <h3><?php echo $nv ?></h3>
        </div>
        <div class="item" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(166,249,162,1) 100%);">
            <h2>Số lượng sản phẩm</h2>
            <h3><?php echo $sp ?></h3>
        </div>
        <div class="item" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(242,162,249,1) 100%);">
            <h2>Số lượng đơn hàng</h2>
            <h3><?php echo $dh ?></h3>
        </div>
    </div>
</body>
</html>
