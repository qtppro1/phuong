<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khách hàng mới</title>

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

    <div class="login_wrapper">

        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{route('post_dk')}}" method="post" >
                    @csrf
                    <h1>Đăng ký thông tin khách hàng</h1>
                    <div>
                        <input name="hoten" type="text" class="form-control" placeholder="Họ & Tên khách hàng" required="" />
                    </div>
                    <br>
                    <div>
                        <input name="diachicuthe" type="text" class="form-control" placeholder="Địa chỉ cụ thể" required="" />
                    </div>
                    <div style="float: left">
                        <input type="checkbox" name="gioitinh" value="Nam"> Nam
                        <input type="checkbox" name="gioitinh" value="Nữ">    Nữ
                    </div>
                    <br>
                    <br>
                    <div>
                        <input name="email" type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input name="sdt" type="text" class="form-control" placeholder="Số điện thoại" required="" />
                    </div>
                    <div>
                        <input name="matkhau" type="password" class="form-control" placeholder="mật khẩu" required="" />
                    </div>
                    <div>
                        <span style="font-size: 14px;float: left;color: #1b1e21">Ảnh đại diện</span>
                        <input name="image" type="file" class="form-control" placeholder="Chọn ảnh" required="" />
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Tạo tài khoản</button></span>
                        <a href="{{route('login')}}"><button class="btn btn-primary" type="button">Đăng nhập</button></a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <br />
                        <div>
                            <a href="{{route('home')}}"> Trang chủ</a>
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
