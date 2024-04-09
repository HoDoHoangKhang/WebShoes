<?php
$productId = $_POST['productId'];

// Thực hiện truy vấn để lấy danh sách các size và số lượng tương ứng của sản phẩm
$connect=mysqli_connect('localhost','root','','shoestore');
if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
else{
    echo "Kết nối thất bại";
}

$html = '';
$sql = "SELECT * FROM `sanpham` WHERE MaSP = " . $productId;
$result = $connect->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();

    $html .= '<p id="responsfixed"></p>';

    $html .= '<table class="table">
            <tr>
              <td>Mã SP:</td>';
    $html .= '<td><input id="MaSPid" type="number" name="MaSP" value="' . $row["MaSP"] . '"></td></tr>';
    $html .= '<tr>
              <td>Tên Sản Phẩm:</td>
              <td><input type="text" name="TenSP" value="' . $row["TenSP"]. '"></td>
                </tr>';
    $html .= '<tr>
              <td>Mô Tả:</td>
              <td><textarea name="MoTa">' .$row["MoTa"]. '</textarea></td>
            </tr>';
    $html .= '<tr>
              <td>Số sao đánh giá:</td>
              <td><input type="number" name="saoDG" value="' .$row["SoSaoDanhGia"]. '"></td>
            </tr>';
    $html .= '<tr>
              <td>Số sao lượt đánh giá:</td>
              <td><input type="number" name="luotDG" value="' .$row["SoLuotDanhGia"]. '"></td>
            </tr>';
    $html .= '<tr>
              <td>Số lượng đã bán:</td>
              <td><input type="number" name="SoLuongDaBan" value="' .$row["SoLuongDaBan"]. '"></td>
            </tr>';
    $checked = 'checked';
    if ($row["SanPhamMoi"] == '0')
        $checked = ' ';
    $html .= '<tr>
              <td>Sản phẩm mới:</td>
              <td><input type="checkbox" name="SanPhamMoi" ' .$checked. '></td>
            </tr>';
    $checked = 'checked';
    if ($row["SanPhamHot"] == '0')
        $checked = ' ';
    $html .= '<tr>
              <td>Sản phẩm Hot:</td>
              <td><input type="checkbox" name="SanPhamHot"></td>
            </tr>';
    $html .= '<tr>
              <td>Hình Ảnh:</td>
              <td><input type="file" name="HinhSanPham" id="hinhanh2"></td>
            </tr>';
    $html .= '<tr>
              <td>Giá cũ:</td>
              <td><input type="number" name="GiaCu" value="' .$row["GiaCu"]. '"></td>
            </tr>';
    $html .= '<tr>
              <td>Giá Mới:</td>
              <td><input type="number" name="GiaMoi" value="' .$row["GiaMoi"]. '"></td>
            </tr>';

    $html .= '<tr>
              <td>Mã Nhãn Hiệu:</td>
              <td>
                <select name="MaNhanHieu">';
                  // Lấy dữ liệu từ bảng nhanhieu
                  $sql = "SELECT MaNhanHieu, TenNhanHieu FROM nhanhieu";
                  $result = $connect->query($sql);
                  if ($result->num_rows > 0) {
                      while ($rowd = $result->fetch_assoc()) {
                            if ($row["MaNhanHieu"] == $rowd["MaNhanHieu"])
                                $html .= '<option value="' . $rowd["MaNhanHieu"] . '" selected>' . $rowd["TenNhanHieu"] . '</option>';
                            else
                                $html .= '<option value="' . $rowd["MaNhanHieu"] . '">' . $rowd["TenNhanHieu"] . '</option>';
                      }
                  } 
    $html .= '</select>
              </td>
            </tr>
            <tr>
              <td>Mã Loại:</td>
              <td>
                <select name="MaLoai">';
            // Lấy dữ liệu từ bảng loaisp
                  $sql = "SELECT MaLoai, TenLoai FROM loaisp";
                  $result = $connect->query($sql);
                  if ($result->num_rows > 0) {
                      while ($rowd = $result->fetch_assoc()) {
                            if ($row["MaLoai"] == $rowd["MaLoai"])
                                $html .= '<option value="' . $rowd["MaLoai"] . '" selected>' . $rowd["TenLoai"] . '</option>';
                            else 
                                $html .= '<option value="' . $rowd["MaLoai"] . '">' . $rowd["TenLoai"] . '</option>';
                      }
                  }
    $html .= '</select>
              </td>
            </tr>
          </table>';
}
echo $html;
?>