@extends('layout.master')
@section('title','Thêm loại khách hàng')
@section('content')


    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <h3>Tạo mới loại khách hàng</h3>
                <div class="page-title">
                    <div class="title_left">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">

                            <div class="x_content">

                                <form action="{{route('postlkh')}}"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên loại khách hàng <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="tenlkh" name="tenlkh" required="required" class="form-control ">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">

                                            <button type="submit" class="btn btn-success">Thêm </button>
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
                            <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0939337416</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <script>
        var msg = '{{Session::get('loaikh_success')}}';
        var exist = '{{Session::has('loaikh_success')}}';
        if(exist){
            swal({
                title: "Thêm thành công",
                text: "",
                type: "success",
                timer: 1200,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
