<div class="content">
    <?php
        if(isset($_GET['danhmuc'])){
            switch ($_GET['danhmuc']) {
                case 'dashboard':
                    require_once 'module/main/dashboard.php';
                    break;
                case 'thongkekinhdoanh':
                    require_once 'module/main/thongkekinhdoanh.php';
                    break;
                case 'quanlysanpham':
                    require_once 'module/main/quanlysanpham.php';
                    break;
                case 'quanlydanhgia':
                    require_once 'module/main/quanlydanhgia.php';
                    break;
                case 'quanlydonhang':
                    require_once 'module/main/quanlydonhang.php';
                    break;
                case 'quanlynhaphang':
                    require_once 'module/main/quanlynhaphang.php';
                    break;
                case 'quanlyquyen':
                    require_once 'module/main/quanlyquyen.php';
                    break;
                case 'quanlytaikhoan':
                    require_once 'module/main/quanlytaikhoan.php';
                    break;
                case 'caidat':
                    require_once 'module/main/caidat.php';
                    break;
                case 'caidatwebsite':
                    require_once 'module/main/caidatwebsite.php';
                    break;   
                case 'quanlydonhang-chitiet':                     
                    require_once 'module/main/quanlydonhang-chitiet.php';             
                    break;  
                case 'quanlydonhang-timkiem':                     
                    require_once 'module/main/quanlydonhang-timkiem.php';             
                    break; 
                case 'thongtintaikhoan':                     
                    require_once 'module/main/thongtintaikhoan.php';             
                    break;   
                case 'chitietphieunhap':                     
                    require_once 'module/main/quanlynhaphang_view_chi_tiet_phieu.php';
                    break;
                default:
                    require_once 'module/main/dashboard.php';
                break;
            }
        }
        if(isset($_GET['caidat'])){
            switch ($_GET['caidat']) {
                case 'size':
                    require_once 'module/main/caidat/size.php';
                    break; 
                case 'nhacungcap':
                    require_once 'module/main/caidat/nhacungcap.php';
                    break;
                case 'nhanhieu':
                    require_once 'module/main/caidat/nhanhieu.php';
                    break;
                case 'danhmuc':
                    require_once 'module/main/caidat/danhmuc.php';
                    break;      
            
            }
        }
        else{
            require_once 'module/main/dashboard.php';
        }
    ?>
</div>