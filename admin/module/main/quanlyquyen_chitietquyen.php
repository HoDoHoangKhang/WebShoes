<style
>
    .img-pr{
        width: 50px;
        height: 50px;
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
<div class="tableBox ">
    <a href="index.php?danhmuc=quanlyquyen" class="header_banhang">
                <i class="fa-solid fa-circle-right icon-banhang"></i><span>Trở về</span>
        </a>
    <?php
         require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/admin/config/config.php'); //Kết nối mysql
         $sql = "SELECT * FROM quyen";
         $result = mysqli_query($connect,$sql);
         while ($row = mysqli_fetch_array($result)) {
            if($row['MaQuyen']==$_GET['id']) {
    ?>
    <div class="tableTitle">Chi tiết quyền <?php echo $row['TenQuyen']?></p>
    <?php }}?>
        <div class="table-func">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themquyen">
                Thêm Chức năng mới
            </button>
        </div>
    </div>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th>Tên các chức năng</th>
                <th>Các hành động của chức năng</th>
                <th>Được phép sử dụng </th>
                <th>Hành động<g/th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once($_SERVER['DOCUMENT_ROOT'] . '/webbangiay/admin/config/config.php'); //Kết nối mysql
                $sql = "SELECT * FROM `chitietquyenchucnang` ctqcn join chucnang cn on cn.MaCN=ctqcn.MaCN GROUP by HanhDong";
                $result = mysqli_query($connect,$sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>                    
                <tr>
                  <td> <?php echo $row['TenCN'] ?></td>  
                    <td> </td>                
                    <td> <?php echo $row['HanhDong'] ?></td>
                    <td><input type="checkbox"></td>
                    <td>
                        <div class="dropdown" >
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="z-index: 2;">
                                <li><a class="dropdown-item edit-btn"  href="#" >Sửa tên chức năng</a></li>
                                <li><a class="dropdown-item" href="#">Xóa</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
  
            <?php
                }
                mysqli_close($connect);
            ?> 
            
        </tbody>
    </table>
</div>

<!-- form thêm quyền mới -->
<div class="modal fade" id="themquyen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 500px;">
  <div class="modal-dialog">
  <form action="module/main/quanlyquyen_themquyen.php" method="post" >

    <div class="modal-content" style="">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelThemquyen">Thêm Quyền mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="responsepp"></p>
        
          <table>
            <tr>
              <td>Tên Quyền:</td>
              <td><input type="text" name="txtTenQuyen"></td>
            </tr>
            </table>
        
      </div>    
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="buttonAddQuyen" id="submitForm">Thêm</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- Form Sửa tên quyền -->
<div class="modal fade" id="suaquyen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 500px;">
  <div class="modal-dialog">
  <form action="module/main/quanlyquyen_suaquyen.php?id=<?php echo $_GET['MaQuyen'] ?>" method="post" >
    <div class="modal-content" style="">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabelSuaquyen">Sửa Tên Quyền </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="responsepp"></p>
        
          <table>
            <tr>
                <td>Tên Hiện tại:</td>
                <td>
                    <?php 
                        if (isset($_GET['TenQuyen'])) {
                          echo $_GET['TenQuyen'];
                        }
                    ?>
                </td>
            </tr>
            <tr>
              <td>Nhập Tên Mới:</td>
              <td><input type="text" name="txtTenQuyenCanSua"></td>
            </tr>
            </table>
        
      </div>    
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="buttonUpdateQuyen" id="UpdateQuyen">Lưu</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- Form thông báo -->
<div class="modal fade" id="suaquyenthanhcong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 500px;">
  <div class="modal-dialog">
    <div class="modal-content" style="">
      <div class="modal-header">
        <h2 class="modal-title" id="ModalLabelthongbao">Thông báo </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="responsepp"></p> 
          <?php
            if ( isset($_GET['note']) ) {   
              switch ($_GET['note']) {
                case 'detrongtenquyen':
                  echo "<h4>Vui lòng nhập tên quyền!</h4>";
                  break;
                case 'themquyentrue':
                  echo "<h4>Thêm quyền thành công!</h4>";
                  break;
                case 'themquyenfail':
                  echo "<h4>Tên quyền này đã tồn tại trong hệ thống.Vui lòng nhập tên khác!</h4>";
                  break;
                case 'suaquyentrue':
                  echo "<h4>Đã sửa tên quyền thành công!</h4>";
                  break;
                case 'suaquyenfalse':
                  echo "<h4>Tên quyền này đã tồn tại trong hệ thống.Vui lòng nhập tên khác!</h4>";
                  break;
                case 'xoaquyentrue':
                  echo "<h4>Đã xóa quyền này ra khỏi hệ thống!</h4>";
                  break;
                case 'xoaquyenfalse':
                  echo "<h4>Quyền này đã có tài khoản sử dụng, không thể xóa nhé!</h4>";
                  break;
              }
            }
          ?>
      </div>    
    </div>
  </div>
</div>

<?php 
  if (isset($_GET['Getsuccess']) && $_GET['Getsuccess']==true) {
    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
      var myModal = new bootstrap.Modal(document.getElementById("suaquyen"));
      myModal.show();
    });
  </script>';
  }
  if (isset($_GET['success']) && $_GET['success']==true) {
    echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
      var myModal = new bootstrap.Modal(document.getElementById("suaquyenthanhcong"));
      myModal.show();
    });
  </script>';
  }
?>