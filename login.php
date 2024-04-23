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
    <style>
        body{
            margin-top:20px;
            background: #f6f9fc;
        }
        .account-block {
            padding: 0;
            background-image: url(assets/img/login-img.png);
            background-repeat:no-repeat;
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
        .formLogin{
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <form action="xulylogin.php" method="post" class="formLogin">
        <!-- Login 6 - Bootstrap Brain Component -->
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center" style="border-radius: 10px;">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="txtUser">
                                            </div>
                                            <div class="form-group mb-5">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="txtPass">
                                            </div>
                                            <button type="submit" class="btn btn-theme" name="btnLogin">Login</button>
                                            <a href="#l" class="link float-right text-primary">Forgot password?</a>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right">
                                        <div class="overlay rounded-right"></div>
                                        <div class="account-testimonial">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="register.php" class="link text-primary ml-1">register</a></p>

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>
    </form>
</body>
</html>
