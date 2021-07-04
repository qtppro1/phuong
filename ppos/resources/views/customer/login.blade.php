<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập |</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/fontend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/fontend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/fontend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('public/fontend/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/fontend/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">

        <div class="animate form login_form">
            <section class="login_content">
                <form>
                    <h1>ĐĂNG NHẬP</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="MSSV" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="MẬT KHẨU" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">ĐĂNG NHẬP</a>
                        <a class="reset_pass" href="#">QUÊN MẬT KHẨU ?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">
                            <a href="#signup" class="to_register"> TẠO TÀI KHOẢN MỚI </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <p> <i class="fas fa-tasks"></i> Pos Phần miềm quản lý phân phối sản phẩm</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form>
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="mssv" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="mật khẩu" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">TẠO TÀI KHOẢN</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <br />
                        <div>
                            <p> <i class="fas fa-tasks"></i> Pos Phần miềm quản lý phân phối sản phẩm</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<!-- font -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</body>
</html>
