{{--san pham--}}
@extends('layout.master')
@section('title',"Sản phẩm")
@section('content')
    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <div class="page-title">
                    <div class="title_left">
                        <h3> Sản phẩm <small> </small> </h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">

                            <div class="x_content">

                                <div class="row">
                                    @foreach($sp as $sanpham)
                                        @php($temp="public/fontend/images/".$sanpham->malsp."/".$sanpham->hinhanh)
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;"src="{{$temp}}" alt="image" />
                                                    {{--                                                 src="{{url('public/fontend/images/admin.jpg')}}" alt="image" />--}}
                                                    <div class="mask">
                                                        <p style="font-size: 15px"><i class="fas fa-apple-alt"></i></p>
                                                        <div class="tools tools-bottom">
                                                            <a href="#"><i class="fas fa-info"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href=""><i class="fas fa-edit"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <p style="font-size: 22px">Xin hãy đăng nhập!! <a href="{{route('login')}}"><i>Đăng nhập</i></a></p>
                            <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0854366167</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
