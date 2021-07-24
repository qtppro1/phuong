
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
                                <form action="{{route('datHang')}}" method="post">
                                    @csrf
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
                                                    PPOS_{{ucwords(Auth::user()->hoten)}}
                                                    <br>Hẻm 391,Đường 30/4,Ninh kiều, Cần Thơ
                                                    @foreach($quyens as $quyen)
                                                        @if($quyen->id == Auth::user()->maquyen)
                                                            <br>Chức vụ: {{$quyen->tenquyen}}
                                                        @endif
                                                    @endforeach
                                                    <br>Phone: {{Auth::user()->sdt}}
                                                    <br>Email: {{Auth::user()->email}}
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                <strong>Bên mua</strong>
                                                <address>
                                                    @foreach($kh as $khs)
                                                        @if($khs -> id == $customer_cart)
                                                            <b>Họ và Tên: </b>{{ucwords($khs->hoten)}}<br>
                                                            <b>Địa chỉ: </b>{{ucwords($khs->diachicuthe)}} <br>
                                                            <b>SĐT: </b>{{$khs->sdt}}<br>
                                                            <b>Tuyến: </b>
                                                            <p hidden >
                                                                @foreach($tuyens as $tuyen)
                                                                    @if($tuyen->id == $route_cart)
                                                                        {{$r_cart = $tuyen->id.'.'.$tuyen->diemdau.'_'.$tuyen->diemcuoi}}
                                                                        @break
                                                                    @else
                                                                        {{$r_cart="Chọn tuyến đường..."}}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                            <select id="gender" onchange="genderChanged(this)">
                                                                <option value="">{{$r_cart }}</option>
                                                                @foreach($tuyens as $tuyen)
                                                                    <option value="{{$tuyen->id}}">{{$tuyen->id}}.{{$tuyen->diemdau}}-{{$tuyen->diemcuoi}}</option>
                                                                @endforeach
                                                            </select>
                                                            <script language="javascript">
                                                                // Hàm xử lý khi thẻ select thay đổi giá trị được chọn
                                                                // obj là tham số truyền vào và cũng chính là thẻ select
                                                                function genderChanged(obj){
                                                                    var valuex = obj.value;
                                                                    if(1 < 2){
                                                                        $.ajax({
                                                                            method: "get",
                                                                            url: '{{ route('route_post') }}',
                                                                            data: {_token: '{{ csrf_token() }}',
                                                                                id_route: valuex,
                                                                            },
                                                                            success: function (result) {

                                                                                window.setTimeout(function(){
                                                                                    window.location.reload();
                                                                                } ,600);
                                                                            }
                                                                        });
                                                                    }else{
                                                                        swal({
                                                                            title: "Có tiền không mà mua cho dữ dạ má !",
                                                                            text: "",
                                                                            type: "warning",
                                                                            timer: 600,
                                                                            showConfirmButton: false,
                                                                            position: 'top-end',
                                                                        });
                                                                    }
                                                                }
                                                            </script>
                                                            @break
                                                        @endif
                                                    @endforeach
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                                <b>Đơn hàng #0076_{{$customer_cart}}</b>
                                                <br><b>Loại hóa đơn:</b>
                                                @foreach($lhd as $lhds)
                                                    @if($lhds->id == $ma_ldh)
                                                        <input disabled type="text" value="{{ucfirst($lhds->tenldh)}}">
                                                        @break
                                                    @endif
                                                @endforeach
                                                <br>
                                                <b>Mã đơn hàng:</b> {{date('md').'_'.$customer_cart}}
                                                <br>
                                                <b>Payment Due:</b> {{date('Y-m-d H:i:s')}}
                                                <br>
                                                <b>Người tạo:</b>
                                                @foreach($quyens as $quyen)
                                                    @if($quyen->id == Auth::user()->maquyen)
                                                        {{ ucfirst($quyen->tenquyen).": ".Auth::user()->hoten}}
                                                    @endif
                                                @endforeach
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
                                                    @foreach($product_cart as $product)
                                                        <tr>
                                                            <td>{{ucwords($product['item']['tensp'])}}</td>
                                                            <td>{{$product['qty']}}</td>
                                                            <td>{{number_format($product['item']['giaspbanra'])}} VNĐ</td>
                                                            <td>{{ucwords($product['item']['mieuta'])}}
                                                            </td>
                                                            <td>{{number_format($product['qty'] * $product['item']['giaspbanra'])}} VNĐ</td>
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
                                                <p class="lead">Hình thức thanh toán:</p>
                                                  <input type="radio" id="thanhtoan" name="thanhtoan" value="1">
                                                  <label for="">Tiền mặt</label><br>
                                                  <input type="radio" id="thanhtoan" name="thanhtoan" value="2">
                                                  <label for="">Chuyển khoản</label><br>
                                                  <input type="radio" id="thanhtoan" name="thanhtoan" value="3">
                                                  <label for="">Thanh Toán sau</label><br>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-6">
                                                <p class="lead">Thanh toán</p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <th style="width:50%">Tạm tính:</th>
                                                            <td>{{number_format($totalPrice)}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Giảm giá (Nếu có)</th>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phí vận chuyển:</th>
                                                            <td>
                                                                @foreach($tuyens as $tuyen)
                                                                    @if($tuyen->id ==$route_cart)
                                                                        <input name="phiship" id="phiship" disabled type="text" value="{{number_format($tuyen->phiship)}}">
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tổng tiền thanh toán:</th>
                                                            <td>
                                                                @foreach($tuyens as $tuyen)
                                                                    @if($tuyen->id ==$route_cart)
                                                                        <input name="tongtien" id="tongtien" disabled type="text" value="{{number_format($tuyen->phiship+$totalPrice)}}"> VNĐ
                                                                        @break
                                                                    @endif
                                                                @endforeach

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-print">
                                            <div class=" ">
                                                <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> In Hóa đơn</button>
                                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>Thanh toán (không in hóa đơn) </button>
                                            </div>
                                        </div>
                                    </section>
                                </form>
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
    <script>
        var msg1 = '{{Session::get('order_success')}}';
        var exist1 = '{{Session::has('order_success')}}';
        var exist2 = '{{Session::has('order_Nsuccess')}}';
        if(exist1){
            swal({
                title: "Đặt hàng thành công.",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
        if(exist2){
            swal({
                title: "Giỏ hàng rỗng !",
                text: "",
                type: "error",
                timer: 800,
                showConfirmButton: false,
                position: 'top-end',
            });
        }



    </script>
@endsection
