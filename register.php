<?php
    session_start();
    if(isset($_SESSION['taikhoan'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-6/assets/css/login-6.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body{
            margin-top:20px;
            background: #f6f9fc;
        }
        .account-block {
            padding: 0;
            background-image: url(assets/img/background-login.png);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            position: relative;
        }
        .account-block .overlay {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .account-block .account-testimonial {
            text-align: center;
            color: #fff;
            position: absolute;
            margin: 0 auto;
            padding: 0 1.75rem;
            bottom: 3rem;
            left: 0;
            right: 0;
        }

        .text-theme {
            color: #1788F4 !important;
        }

        .btn-theme {
            background-color: #1788F4;
            border-color: #1788F4;
            color: #fff;
        }
        .card{
            border-radius: 10px;
            overflow: hidden;
        }
        .link{
            text-decoration: none;
        }
        .form-group{
            margin: 10px 0;
        }
        .warning-tendangnhap{
            color: red;
            margin-left: 20px;
            opacity: 0;
        }
    </style>
</head>
<body>
        <!-- Login 6 - Bootstrap Brain Component -->
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center" style="border-radius: 10px;">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Register</h3>
                                        </div>
                                            <div class="form-group">
                                                <label>Tên đăng nhập</label><span class="warning-tendangnhap">Tên đăng nhập đã tồn tại</span>
                                                <input type="text" id="tenDangNhap" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                
                                                    <label>Họ và tên</label> <span class="warning-hoten">Phải có họ và tên và không chứa ký tự số</span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Ngày sinh</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-4" >
                                                    <label>Giới tính</label>
                                                    <div style="display: flex; gap: 30px;">
                                                        <div class="form-check" style="margin-top: 10px;">
                                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                                            <label class="form-check-label" for="male">
                                                                Nam
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="margin-top: 10px;">
                                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                            <label class="form-check-label" for="female">
                                                                Nữ
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row"></div>
                                            
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group mb-5">
                                                <label>Nhập lại mật khẩu</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button id="btnSubmit" class="btn btn-theme">Register</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <p class="text-muted text-center mt-3 mb-0">Trở về <a href="login.php" class="link text-primary ml-1">Login</a></p>

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>
</body>
</html>
<script>
    $(document).ready(function(){
        var btnSubmit=document.getElementById("btnSubmit");
        btnSubmit.addEventListener('click', function(){
            $.ajax({
                url: './control/ajax_register.php',
                type: 'POST',
                data: {
                    tenDangNhap: getTenDangNhap(),
                },
                success: function(data){
                    var warningTenDangNhap=document.querySelector(".warning-tendangnhap");
                    if(data==1){
                        warningTenDangNhap.style.opacity=1;
                    }
                    else{
                        warningTenDangNhap.style.opacity=0;
                    }
                }
            });
        });
    });
    function getTenDangNhap(){
        var tenDangNhap = document.getElementById('tenDangNhap').value;
        return tenDangNhap;
    }
</script>