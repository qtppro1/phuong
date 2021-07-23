@extends('layout.master')
@section('title','Chi tiết đơn hàng ')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><i class="fas fa-shopping-cart"></i> <small>Thanh toán ngay</small></h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            @foreach($donhang as $dh)
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
                                                @foreach($user as $us)
                                                    PPOS_{{ucwords($us->hoten)}}
                                                    <br>Hẻm 391,Đường 30/4,Ninh kiều, Cần Thơ
                                                    @foreach($quyens as $quyen)
                                                        @if($quyen->id == $us->maquyen)
                                                            <br>Chức vụ: {{$quyen->tenquyen}}

                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                    <br>Phone: {{$us->sdt}}
                                                    <br>Email: {{$us->email}}
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <strong>Bên mua</strong>
                                            <address>
                                                @foreach($donhang as $donhangs)
                                                @foreach($user as $us)
                                                    @if($donhangs->makh==$us->id)
                                                        <b>Họ và Tên: </b>{{ucwords($us->hoten)}}<br>
                                                        <b>Địa chỉ: </b>{{ucwords($us->diachicuthe)}} <br>
                                                        <b>SĐT: </b>{{$us->sdt}}<br>
                                                        <b>Tuyến: </b>
                                                            @foreach($tuyens as $tuyen)
                                                                @if($tuyen->id == $dh->matuyen)
                                                                    {{$tuyen->diemdau.'_'.$tuyen->diemcuoi}}

                                                                @endif
                                                            @endforeach
                                                     @endif
                                                @endforeach
                                                @endforeach
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <b>Đơn hàng #0076_{{$dh->id}}</b>
                                            <br><b>Loại hóa đơn:</b>
                                            @foreach($lhd as $lhds)
                                                @if($lhds->id == $dh->maldh)
                                                    <input disabled type="text" value="{{ucfirst($lhds->tenldh)}}">

                                                @endif
                                            @endforeach
                                            <br>

                                            <br>
                                            <b>Ngày tạo:</b> {{$dh->ngaytao}}
                                            <br>
                                        </div>
                                    </div>
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
                                                @foreach($donhang_detail as $donhang_details)
                                                    <tr>
                                                        <td>
                                                            @foreach($product as $products)
                                                                @if($products->id == $donhang_details->masp)
                                                                    {{$products->tensp}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>{{$donhang_details->soluong}}</td>
                                                        <td>
                                                            @foreach($product as $products)
                                                                @if($products->id == $donhang_details->masp)
                                                                    {{$products->giaspbanra}}
                                                                @endif
                                                            @endforeach
                                                                VNĐ</td>
                                                        <td>
                                                            @foreach($product as $products)
                                                                @if($products->id == $donhang_details->masp)
                                                                    {{$products->mieuta}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>{{number_format($donhang_details->thanhtien)}} VNĐ</td>
                                                    </tr>
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
                                            <p class="lead">Hình thức thanh toán: {{$dh->hinhthucthanhtoan}}</p>
                                             
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">
                                            <p class="lead">Thanh toán</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th style="width:50%">Tạm tính:</th>
                                                        <td>{{number_format($dh->tongtien-$dh->phiship)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Giảm giá (Nếu có)</th>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phí vận chuyển:</th>
                                                        <td>
                                                            {{number_format($dh->phiship)}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng tiền thanh toán:</th>
                                                        <td>
                                                            {{number_format($dh->tongtien)}} VNĐ
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
        </div>
    </div>
@endsection
