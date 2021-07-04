<div class="col-md-3 left_col " >
  <!-- lam cho thanh taskbar dung yen style="top:0px;clear:both;display:block;padding:5px 0 0 0;position:fixed;overflow:hidden" -->
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('home')}}" class="site_title"><i class="fa fa-paw"></i> <span>PosManager!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('public/fontend/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin chào</span>
                <h2>Quách Phương</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Chức Năng Chính</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Trang chủ </a>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('invoice')}}">Tổng hợp đơn hàng</a></li>
                            <li><a href="{{route('user')}}">Thành viên</a></li>
                            <li><a href="{{route('agency')}}">Đại lý</a></li>
                            <li><a href="{{route('tuyen')}}">Tuyến</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Thêm mới <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{route('createorder')}}">Thêm hóa đơn</a></li>
                            <li><a href="{{url('/login#signup')}}">Thêm mới thành viên</a></li>
                            <li><a href="{{route('optionproduct')}}">Thêm sản phẩm</a></li>
                            <li><a href="{{route('themncc')}}">Thêm nhà cung cấp</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-edit"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('invoice')}}">Tổng hợp đơn hàng</a></li>
                            <li><a href="{{route('invoice_detail')}}">Chi tiết đơn hàng</a></li>
                            <li><a href="{{route('status_invoice')}}">Tình trạng đơn hàng</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-table"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{route('product')}}">Sản phẩm</a></li>
                          <li><a href="{{route('product_detail')}}">chi tiết sản phẩm</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs2.html">Doanh thu theo sản phẩm</a></li>
                            <li><a href="morisjs.html">Doanh Thu theo tuyến</a></li>
                            <li><a href="echarts.html">Doanh thu theo khách hàng</a></li>
                            <li><a href="other_charts.html"> Tồn kho </a></li>
                            <li><a href="other_charts.html"> Chưa thanh toán </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
