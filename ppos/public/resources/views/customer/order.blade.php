{{--san pham--}}
@extends('layout.master')
@section('tittle',"Tạo đơn hàng")
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
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Tìm</button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
{{--                        ben trai--}}
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
                                                    <a href="{{ route('addCard', $sanpham->id) }}"><i class="fas fa-shopping-cart"></i></a>
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

{{--                        ben phai--}}

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
                                                    <th scope="col" class="text-center" style="float: right">Số lượng</th>
                                                    <th scope="col" class="text-right">Thành tiền</th>
                                                    <th> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(Session::has('cart'))
                                                    @if(Session('cart')->totalQty > 0)
                                                        @foreach($product_cart as $product)
                                                            <tr>
                                                                <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                                <td>{{ $product['item']['tensp']}}</td>
                                                                <td>{{ number_format($product['item']['giaspbanra']) }}</td>

                                                                <td class="qua-col ">
                                                                    <div class="quantity">
                                                                        <input style="width: 60%;float:right" type="number" id="txt_solg"
                                                                               value="{{$product['qty']}}" class="form-control quantity"
                                                                               onchange="update_cart({{ $product['item']['id'] }}+','+{{$product['qty']}} )">

                                                                    </div>
                                                                </td>
                                                                <td class="text-right">{{ number_format($product['qty'] * $product['item']['giaspbanra']) }}</td>

                                                                <td class="text-right">
                                                                    <a onclick="return xacnhanxoa('Ban co chac chan xoa?')"
                                                                       href="{{ route('getDeleteCart',$product['item']['id']) }}"
                                                                       class="btn btn-danger"
                                                                       data-toggle="tooltip"
                                                                       title="xóa">
                                                                        <i class="glyphicon glyphicon-trash"></i>
                                                                    </a> </td>
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
                                                            <td class="text-right"><input class="abc" id="abc" type="text" value="0"></td>
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
                                                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                            <td><i class="fas fa-exclamation-triangle"></i></td>
                                                            <td><i class="fas fa-exclamation-triangle"></i></td>

                                                            <td class="qua-col ">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </td>

                                                            <td class="text-right"></td>
                                                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                        </tr>
                                                    @endif
                                                @else
                                                    <tr>
                                                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                                        <td><i class="fas fa-exclamation-triangle"></i></td>
                                                        <td><i class="fas fa-exclamation-triangle"></i></td>

                                                        <td class="qua-col ">
                                                            <i class="fas fa-exclamation-triangle"></i>
                                                        </td>

                                                        <td class="text-right">0 VNĐ</td>
                                                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                                    </tr>
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="row">
                                            <div class="col-sm-12  col-md-6" style="padding: 5px">
                                                <a href="{{route('home')}}"><button class="btn btn-block btn-light">Trang chủ</button></a>
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-right">
                                                <button class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</button>
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
@endsection
