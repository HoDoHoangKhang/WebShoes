<?php
//tạo session lưu tên logo
$logo = $_SESSION['logo'];
//tạo session lưu tên ảnh trang home
$image = $_SESSION['img'];

$_SESSION['name'];
if($_SESSION['name']=='')
  $_SESSION['name']='nike';
$thuonghieu = $_SESSION['name'];
?>
<style>
    .container {
  display: flex;
  
  align-items: center;
}
.form-group h5 {
  width: 300px; 
}

.change {
  width: 400px; 
}

.form-group {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  margin-left: 30px;
  width: 100%;
}

input file, text{
  width: 300px;
}

.update-button {
  color: white;
  width: 100px;
  height: 50px;
  margin: 0 auto; 
  display: block;
  border: 3px solid #ddd;
  border-radius: 10px;
  background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(103,73,242,1) 100%);
}

img{
  width: 200px; 
  height: 100px; 
  margin-right: 20px;
}
  </style>

  <div class="container">
  <form action="module/main/caidatwebsite-capnhat.php" method="post" enctype="multipart/form-data">
  <h1>Cài đặt website</h1>
  <div class="form-group">
      <h5 for="logo">Thay đổi logo :</h5>
      <div class="change">
        <br>
        <img src="../assets/img/<?php echo $logo; ?>">
        <br>
        <input type="file" id="logo" name="logo">
      </div>
  </div>

  <div class="form-group">
      <h5 for="logo">Thay đổi hình nền trang home:</h5>
      <div class="change">
        <br>
        <img src="../assets/img/<?php echo $image; ?>">
        <br>
        <input type="file" id="img" name="img">
      </div>
  </div>
  
  <div class="form-group">
      <h5 for="logo">Tên thương hiệu:</h5>
      <input type="text" name="name" placeholder="<?php echo $thuonghieu; ?>">
  </div>

  <div class="form-group" style="display: block;">
    <br></br>
    <h5>Chọn đánh giá đưa vào Feedback</h5>
    <table id="myTable" class="table table-striped " style="width: 100%;">
        <thead>
            <tr>
                <th >Mã DG</th>
                <th>Mã SP</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Thời gian</th>
                <th>Số sao</th>
                <th>Chọn</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123</td>
                <td>123</td>
                <td>Sản phẩm tốt</td>
                <td>Nội dung đánh giá</td>
                <td>12/12/1212</td>
                <td>
                    5
                </td>
                <td><input type="checkbox" name="row_id" value="1"></td>
            </tr>
        </tbody>
  </table>
  </div>
<button class="update-button" type="submit">Cập nhật</button>
</form>
</div>
