{{--chi tiet don hang--}}
{{--@extends('layout.master')--}}
{{--@section('title','Quản lý đơn hàng')--}}
{{--@section('content')--}}
@extends('layout.master')
@section('tittle','Chi tiết đơn hàng')
@section('content')
    <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Chi Tiết Đơn Hàng</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thông Tin Người Đặt Hàng</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="  invoice-header">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Iron Admin, Inc.</strong>
                                        <br>795 Freedom Ave, Suite 600
                                        <br>New York, CA 94107
                                        <br>Phone: 1 (804) 123-9876
                                        <br>Email: ironadmin.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                  
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J
                                    <br>
                                    <b>Payment Due:</b> 2/22/2014
                                    <br>
                                    <b>Account:</b> 968-34567
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="  table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Số Lượng</th>
                                            <th>Sản Phẩm</th>
                                            <th>Số Điện Thoại</th>
                                            <th style="width: 50%">Thông Tin Sản Phẩm</th>
                                            <th>Thanh Toán</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Iphone XS Max</td>
                                            <td>(804) 123-9876</td>
                                            <td>Hoàn toàn xứng đáng với những gì được mong chờ, phiên bản cao cấp nhất iPhone Xs Max 64 GB của Apple năm nay nổi bật với chip A12 Bionic mạnh mẽ, màn hình rộng đến 6.5 inch, cùng camera kép trí tuệ nhân tạo và Face ID được nâng cấp.
                                            </td>
                                            <td>$120.50</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cốc Sạc</td>
                                            <td>(804) 123-9876</td>
                                            <td>USB đầu ra: iPhone gần như bất kỳ điện thoại thông minh. Tiêu chuẩn an toàn , 2 chân cắm dẹt, cắm phù hợp với bất kỳ ổ cắm tường nhà hoặc văn phòng. Sạc sẽ không ảnh hưởng đến nghe, trả lời hoặc sử dụng điện thoại. </td>
                                            <td>$80.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Tay Nghe</td>
                                            <td>(804) 123-9876</td>
                                            <td>Tai nghe EarPods chính hãng Apple Foxconn là dòng tai nghe cao cấp mới nhất đưa Apple lọt top các tai nghe chuẩn mực nhất, được sản xuất trực tiếp tại Foxconn – đối tác sản xuất phụ kiện chính thức của Apple.</td>
                                            <td>$30.70</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Sạc Dự Phòng</td>
                                            <td>(804) 123-9876</td>
                                            <td>Dung lượng sạc cực lớn: 20000 mAh. Thiết kế đẹp, mặt tráng gương, đèn led hiển thị thông minh, bắt mắt. Có thể sạc được tới 3 thiết bị một lúc. 2 cổng USB sạc nhanh. Hỗ trợ sạc không dây, cực nhạy và nhanh</td>
                                            <td>$85.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-6">
                                    
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class=" ">
                                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                    <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Thanh Toán Qua Thẻ</button>
                                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Xuất PDF</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
