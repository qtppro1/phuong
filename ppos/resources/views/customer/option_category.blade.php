@extends('layout.master')
@section('title','Thêm sản phẩm')
@section('content')

    <div class="right_col" role="main">
        @if(Auth::check())
            <h3 style="text-align: center">Thêm Sản phẩm mới</h3>
            <div class="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form  method="GET" action="{{route('addproduct')}}">
                                    @csrf
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="heard"></label>
                                    <div class="item form-group">

                                        <div class="col-md-6 col-sm-6">
                                            <select id="heard" name="heard" class="form-control" required>
                                                <option value="#">Chọn loại sản phẩm..</option>
                                                @foreach($lsp as $loaisp)
                                                    <option value="{{$loaisp->tenlsp}}">{{$loaisp->tenlsp}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">

                                            <button type="submit" class="btn btn-success">Tiếp tục thêm Sản phẩm</button>
                                        </div>
                                    </div>

                                </form>
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
@endsection
