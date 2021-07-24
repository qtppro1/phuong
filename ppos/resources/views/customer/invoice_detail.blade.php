
@extends('layout.master')
@section('title','Thanh toán')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <div class="page-title">
                    <div class="title_left">
                        <h3><i class="fas fa-shopping-cart"></i> <small>Thanh toán ngay</small></h3>
                        <span>*Nếu là khách hàng mới, Mời bạn tao thông tin khách hàng !!</span>
                        <a href="{{route('dangky')}}"><button >Tạo Thông tin khách hàng</button></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                @foreach($donhang as $donhangs)
                                    <section class="content invoice">
                                        <!-- title row -->
                                        <div class="row">
                                            <div class="  invoice-header">
                                                <h1>
                                                    <i class="fa fa-globe"></i> Hóa đơn.

                                                </h1>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <br>
                                        <!-- info row -->
                                        <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                                <strong>Bên bán</strong>
                                                <address>
                                                    @foreach($user as $users)
                                                        @if($users->id == $donhangs->mauser)
                                                            PPOS_{{ucwords($users->hoten)}}
                                                            <br>Hẻm 391,Đường 30/4,Ninh kiều, Cần Thơ
                                                            @foreach($quyen as $quyens)
                                                                @if($quyens->id == $users->maquyen)
                                                                    <br>Chức vụ: {{$quyens->tenquyen}}
                                                                @endif
                                                            @endforeach
                                                            <br>Phone: {{$users->sdt}}
                                                            <br>Email: {{$users->email}}
                                                        @endif
                                                    @endforeach
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                <strong>Bên mua</strong>
                                                <address>
                                                    @foreach($user as $users)
                                                        @if($users->id == $donhangs->makh)
                                                            <b>Họ và Tên: </b>{{ucwords($users->hoten)}}<br>
                                                            <b>Địa chỉ: </b>{{ucwords($users->diachicuthe)}} <br>
                                                            <b>SĐT: </b>{{$users->sdt}}<br>
                                                            <b>Tuyến: </b>
                                                            @foreach($tuyen as $tuyens)
                                                                @if($tuyens->id == $donhangs->matuyen)
                                                                    {{$tuyens->diemdau.'_'.$tuyens->diemcuoi}}
                                                                @endif
                                                            @endforeach
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                <b>Đơn hàng #0076_{{$donhangs->id}}</b>
                                                <br><b>Loại hóa đơn:</b>
                                                @foreach($loaihoadon as $lhd)
                                                    @if($lhd->id == $donhangs->maldh)
                                                        <input disabled type="text" value="{{ucfirst($lhd->tenldh)}}">

                                                    @endif
                                                @endforeach
                                                <br>
                                                <b>Ngày tạo:</b> {{$donhangs->ngaytao}}
                                                <br>
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
                                                        <th>Sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Mã Sản phẩm</th>
                                                        <th style="width: 59%">Mô tả</th>
                                                        <th>Thành tiền</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($chitietdonhang as $chitietdonhangs)
                                                        @if($chitietdonhangs->madh ==$donhangs->id)
                                                            <tr>
                                                                <td>
                                                                    @foreach($product as $products)
                                                                        @if($products->id == $chitietdonhangs->masp)
                                                                            {{ucwords($products->tensp)}}
                                                                        @endif
                                                                    @endforeach

                                                                </td>
                                                                <td>{{$chitietdonhangs->soluong}}</td>
                                                                <td>{{number_format($chitietdonhangs->dongia)}} VNĐ</td>
                                                                <td>
                                                                    @foreach($product as $products)
                                                                        @if($products->id == $chitietdonhangs->masp)
                                                                            {{ucwords($products->mieuta)}}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>{{number_format($chitietdonhangs->thanhtien)}} VNĐ</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->


                                        <div class="row">
                                            <!-- accepted payments column -->
                                            <div class="col-md-6">
                                                <p class="lead">Hình thức thanh toán:</p>
                                                  <label style="background-color: lightyellow" for="">{{$donhangs->hinhthucthanhtoan}}</label><br>
                                                  <label style="font-size: 20px" for=""><u>{{$donhangs->stt}}</u></label><br>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-6">
                                                <p class="lead">Thanh toán</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th style="width:50%">Tạm tính:</th>
                                                            <td>{{number_format($donhangs->tongtien - $donhangs->phiship)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Giảm giá (Nếu có)</th>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phí vận chuyển:</th>
                                                            <td>
                                                                {{number_format($donhangs->phiship)}} VNĐ
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tổng tiền thanh toán:</th>
                                                            <td>
                                                                {{$donhangs->tongtien}} VNĐ
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-print">
                                            <div class=" ">
                                                <button class="btn btn-default"><i class="fa fa-print"></i> In Hóa đơn</button>
                                            </div>
                                        </div>
                                    </section>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <p style="font-size: 22px">Xin hãy đăng nhập!! <a href="{{route('login')}}"><i>Đăng nhập</i></a></p>
                            <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0939337416</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
