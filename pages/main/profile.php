
<?php
    //dtb taikhoan nhanvien khachhang
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/taikhoan-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/taikhoan-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/control/user-act.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/model/user.php');
    $tenDangNhap=$_SESSION["taikhoan"];
    $Ma=getUser($tenDangNhap)->getMa();
    $hoTen=getUser($tenDangNhap)->getHoTen();
    $ngaySinh=getUser($tenDangNhap)->getNgaySinh();
    $sdt=getUser($tenDangNhap)->getSDT();
    $email=getUser($tenDangNhap)->getEmail();
    $diaChi=getUser($tenDangNhap)->getDiaChi();
    $gioiTinh=getUser($tenDangNhap)->getGioiTinh();
    $matKhau=getTaiKhoan($tenDangNhap)->getMatKhau();
    $avt=getTaiKhoan($tenDangNhap)->getAvt();
    echo $avt." ".$Ma ." ".$hoTen." ".$ngaySinh." ".$sdt." ".$email." ".$diaChi." ".$gioiTinh." ".$matKhau;
?>
<main id="profile-main" class="">
<!-- <link rel="stylesheet" href="./assets/css/bootstrap.css" /> -->
<div class="my-account-header">
	<div class="page-title-inner flex-row container text-left">
		<div class="flex-col flex-grow text-center">
            <h1 class="uppercase mb-0">My Account</h1>
            <small class="uppercase">Trang tài khoản</small>
		</div>
	</div>
</div>
<div class="my-account mb">
    <div class="container" role="main">
        <div class="row my-account-flex">
            <div class="col-lg-3 profile-menu">
                <div class="profile-user">
                    <div class="profile-user-img">
                        <img alt="" src="./assets/img/<?php echo $avt?>">		
                    </div>
                    <span class="profile-user-name">
                        <?php
                            echo $hoTen;
                        ?>
                    </span>
                </div>
                <ul class="profile-user-menu">
                 <li class="profile-user-item">
                        <a href="index.php?danhmuc=profile&profile=taikhoan">TÀI KHOẢN</a>
                    </li>
                    <li class="profile-user-item">
                        <a href="index.php?danhmuc=profile&profile=donhang">ĐƠN HÀNG</a>
                    </li>
                    <li class="profile-user-item">
                    <a href="logout.php">ĐĂNG XUẤT</a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-lg-9 profile-main">
                <?php
                    if(isset($_GET["profile"])){
                        switch ($_GET["profile"]) {
                            case 'donhang':
                                include_once 'pages/main/profile/donhang.php';
                                break;
                            case 'taikhoan':
                                include_once 'pages/main/profile/taikhoan.php';
                                break;
                            case 'dangxuat':
                                include_once 'pages/main/profile/dangxuat.php';
                                break;
                            case 'donhang-chitiet':
                                include_once 'pages/main/profile/donhang-chitiet.php';
                                break;
                            default:
                                include_once 'pages/main/profile/taikhoan.php';
                                break;
                        }
                    }
                    else{
                        include_once 'pages/main/profile/taikhoan.php';
                    }
                
                ?>
            </div>
        </div>


    </div>
</div>



</main>