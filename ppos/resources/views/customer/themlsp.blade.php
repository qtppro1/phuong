@extends('layout.master')
@section('title','Thêm loại sản phẩm')
@section('content')


    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <h3>Thêm Loại sản phẩm</h3>
                <div class="page-title">
                    <div class="title_left">

                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">

                            <div class="x_content">

                                <form action="{{route('postlsp')}}"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên Loại sản phẩm <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="tenlsp" name="tenlsp" required="required" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mô tả <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="mota" name="mota" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Thêm mới</button>
                                            <a type="submit" href="{{route('home')}}">Thoát</a>
                                        </div>
                                    </div>
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
                            <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0854366167</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
@endsection
