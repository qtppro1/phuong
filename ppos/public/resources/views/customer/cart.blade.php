{{--san pham--}}
@extends('layout.master')
@section('title',"Tạo đơn hàng")
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Thêm <small> hóa đơn</small> </h3>
                </div>
            </div>
            @if(Auth::check())
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="col-sm-12 col-md-6 text-left">
                                    <span>*Nếu là khách hàng mới, Mời bạn tao thông tin khách hàng !!</span>
                                    <a href="{{route('dangky')}}"><button >Tạo Thông tin khách hàng</button></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    {{--ben trai--}}
                                    <div class="col-md-5">
                                        <div class="container" style="padding-top: 90px">
                                        </div>
                                        @foreach($sp as $sanpham)
                                            @php($temp="public/fontend/images/".$sanpham->malsp."/".$sanpham->hinhanh)
                                            <div class="col-md-4">
                                                <div class="thumbnail">
                                                    <div class="image view view-first">
                                                        <a href="{{ route('addCard', $sanpham->id) }}"><img style="width: 100%; display: block;"src="{{$temp}}" alt="image" /></a>
                                                        {{--                                                 src="{{url('public/fontend/images/admin.jpg')}}" alt="image" />--}}
                                                        <div class="mask">
                                                            <p style="font-size: 15px"><i class="fas fa-apple-alt"></i></p>
                                                            <div class="tools tools-bottom">
                                                                <a href="{{ route('addCard',$sanpham->id) }}"><i class="fas fa-shopping-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <p>{{$sanpham->tensp}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{--ben phai--}}
                                    <div class="col-md-7">
                                        <div class="container">
                                            <h1 style="text-align: center" class="jumbotron-heading">Đơn hàng của bạn</h1>
                                        </div>
                                        <div class="container mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col"> </th>
                                                                <th scope="col">Sản phẩm</th>
                                                                <th scope="col">Đơn giá</th>
                                                                <th scope="col" >Số lượng</th>
                                                                <th scope="col">Thành tiền</th>
                                                                <th scope="col"> </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @if(Session::has('cart'))
                                                                @if(Session('cart')->totalQty > 0)
                                                                    @foreach($product_cart as $product)
                                                                        <tr>
                                                                            @php($temp="public/fontend/images/".$product['item']['malsp']."/".$product['item']['hinhanh'])
                                                                            <td><img height="50px" width="50px" src="{{$temp}}" /> </td>
                                                                            <td>{{ $product['item']['tensp']}}</td>
                                                                            <td>{{ number_format($product['item']['giaspbanra']) }}</td>
                                                                            <td >
                                                                                <div class="quantity1">
                                                                                    <input style="width: 50%;" type="number" id="txt_solg"  name="txt_solg"
                                                                                           value="{{$product['qty']}}" class="form-control quantity1"
                                                                                           onchange="update_cart({{ $product['item']['id']}} + ',' + this.value + ',' +document.getElementById('gender').value)">
                                                                                </div>
                                                                            </td>
                                                                            <td >{{ number_format($product['qty'] * $product['item']['giaspbanra']) }}</td>

                                                                            <td class="text-center">
                                                                                <a onclick="return   xacnhanxoa('Bạn chắc chắn xóa')"
                                                                                   href="{{ route('getDeleteCart',$product['item']['id']) }}"
                                                                                   class="btn btn-danger"
                                                                                   data-toggle="tooltip"
                                                                                   title="xóa">
                                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>

                                                                    @endforeach
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Tổng tiền</td>
                                                                        <td class="text-right">{{number_format($totalPrice)}} VNĐ</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>Giảm giá</td>
                                                                        <td class="text-right">0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td colspan="2" class="text-right" class="text-right">
                                                                            <p hidden >@foreach($loaidhs as $ldhs)
                                                                                    @if($ldhs->id == $ma_ldh)
                                                                                        {{$ldn_cart = $ldhs->tenldh}}
                                                                                        @break
                                                                                    @else
                                                                                        {{$ldn_cart="-- chọn --"}}
                                                                                    @endif
                                                                                @endforeach</p>
                                                                            <select placeholder="loaidh" name="loaidonhang" id="loaidonhang" class="form-control ldh_cart">
                                                                                <option value="">{{$ldn_cart}}</option>
                                                                                @foreach($loaidhs as $ldh)
                                                                                    <option value="{{$ldh->id}}">{{$ldh->tenldh}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <p></p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td colspan="2" class="text-right">
                                                                            <p hidden >
                                                                                @foreach($kh as $khs)
                                                                                    @if($khs->id == $customer_cart)
                                                                                        {{$c_cart = $khs->hoten}}
                                                                                        @break
                                                                                    @else
                                                                                        {{$c_cart="-- chọn --"}}
                                                                                    @endif
                                                                                @endforeach
                                                                            </p>
                                                                            <select  id="gender" onchange="genderChanged(this)" class="form-control">
                                                                                    <option  value="">{{$c_cart }}</option>
                                                                                @foreach($kh as $khs)
                                                                                    @if($khs -> maquyen ==4)
                                                                                        <option  value="{{$khs->id}}">{{$khs->hoten}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                            <script language="javascript">
                                                                                // Hàm xử lý khi thẻ select thay đổi giá trị được chọn
                                                                                // obj là tham số truyền vào và cũng chính là thẻ select
                                                                                function genderChanged(obj){
                                                                                    var valuex = obj.value;
                                                                                    var message = document.getElementById('show_message');
                                                                                    var ldhs = document.getElementById('loaidonhang').value;
                                                                                    if(1 < 2){
                                                                                        $.ajax({
                                                                                            method: "get",
                                                                                            url: '{{ route('postthanhtoan') }}',
                                                                                            data: {_token: '{{ csrf_token() }}',
                                                                                                idkh: valuex,
                                                                                                ldh:ldhs,
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
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><strong>Thành tiền</strong></td>
                                                                        <td class="text-right"><strong>{{number_format($totalPrice)}} VNĐ</strong></td>
                                                                    </tr>
                                                                @else
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class="qua-col "></td>
                                                                        <td class="text-right"></td>
                                                                        <td class="text-right"></td>
                                                                    </tr>
                                                                @endif
                                                            @else
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="qua-col "></td>
                                                                    <td class="text-right"></td>
                                                                    <td class="text-right"></td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div class="row">
                                                        <div class="col-sm-12  col-md-6" style="padding: 5px">
                                                            <a title="Trang chủ" href="{{route('home')}}"><button class="btn btn-block btn-light"><i class="fas fa-home"></i></button></a>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6 text-right">

                                                            <a onclick="update_cart( document.getElementById('gender').value+ ',' + document.getElementById('gender').value)"
                                                               href="{{ route('thanhtoan')}}"
                                                               class="btn btn-lg btn-block btn-success text-uppercase"
                                                               data-toggle="tooltip"
                                                               title="Thanh toán">
                                                                <i class="fab fa-cc-amazon-pay"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead style="border-style: solid;border-color: #5a6268;border-width: 1px;border-bottom: #5a6268">
                                <tr >
                                    <th colspan="5" style="border-style: solid;border-color: #5a6268;border-width: 1px;border-bottom: #5a6268;text-align: center">
                                        Bạn chưa đăng nhập
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>

        function update_cart(e) {
            var ele = e.split(",");
            var ktra = document.getElementById('txt_solg').value;

            if(ktra > 0 && ktra < 1000){
                $.ajax({
                    method: "get",
                    url: '{{ route('getUpdateCart') }}',
                    data: {_token: '{{ csrf_token() }}',
                        id: ele[0],
                        quantity: ele[1]},

                    success: function (result) {
                        swal({
                            title: "Đã cập nhật giỏ hàng",
                            text: "",
                            type: "success",
                            timer: 600,
                            showConfirmButton: false,
                            position: 'top-end',
                        });
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
                document.getElementById('txt_solg').value = 1;
            }
        }

        var msg = '{{Session::get('delete_cart')}}';
        var exist = '{{Session::has('delete_cart')}}';
        if(exist){
            swal({
                title: "Đã xóa sản phẩm ra khỏi giỏ hàng.",
                text: "",
                type: "success",
                timer: 600,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
        function xacnhanxoa(msg){
            if(window.confirm(msg)){
                return true;
            }
            return false;
        }

    </script>

@endsection


{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}

