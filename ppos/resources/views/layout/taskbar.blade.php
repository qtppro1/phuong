<div class="col-md-3 left_col " style="top:0px;clear:both;display:block;padding:5px 0 0 0;position:fixed;overflow:hidden">
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
                    <li><a><i class="fa fa-edit"></i> Các biểu mẫu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/login#signup')}}">Thêm mới thành viên</a></li>
                            <li><a href="{{route('optionproduct')}}">Thêm sản phẩm</a></li>
                            <li><a href="{{route('themncc')}}">Thêm nhà cung cấp</a></li>
                            <li><a href="{{route('createorder')}}">Thêm hóa đơn</a></li>
                            <li><a href="{{route('invoice')}}">Tổng hợp đơn hàng </a></li>
                            <li><a href="{{route('invoice_detail')}}">Chi tiết đơn hàng</a></li>
                            <li><a href="{{route('product')}}">Sản phẩm</a></li>
                            <li><a href="{{route('user')}}">Thành viên</a></li>
                            <li><a href="{{route('status_invoice')}}">Tình trạng đơn hàng</a></li>
                            <li><a href="{{route('tuyen')}}">Tuyến</a></li>
                            <li><a href="{{route('product_detail')}}">chi tiết sản phẩm</a></li>
                            <li><a href="{{route('agency')}}">Đại lý</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Tiện ích <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="general_elements.html">General Elements</a></li>
                            <li><a href="media_gallery.html">Media Gallery</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="glyphicons.html">Glyphicons</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> CSDL Sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="tables.html">Tables</a></li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Quản Lý Doanh Thu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="chartjs.html">Chart JS</a></li>
                            <li><a href="chartjs2.html">Chart JS2</a></li>
                            <li><a href="morisjs.html">Moris JS</a></li>
                            <li><a href="echarts.html">ECharts</a></li>
                            <li><a href="other_charts.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Quản lý đơn hàng <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Chỉnh sửa</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Thêm Sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">Tạo đơn hàng</a></li>
                            <li><a href="projects.html">Thêm nhà cung cấp</a></li>
                            <li><a href="project_detail.html">Xuất hóa đơn</a></li>
                            <li><a href="contacts.html">Chỉnh sữa thông tin cá nhân</a></li>

                        </ul>
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
