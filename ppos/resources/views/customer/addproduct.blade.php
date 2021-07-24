@extends('layout.master')
@section('title','Thêm sản phẩm')
@section('content')

<div class="right_col" role="main">
    <h3>Thêm sản phẩm mới</h3>
    <div class="">
        @if(Auth::check())
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />

                            <form action="{{route('postproduct')}}"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Loại sản phẩm <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select id="lsp" name="lsp"  required="required" class="form-control">
                                            <option value="#">Loại sản phẩm...</option>
                                            @foreach($lsp as $loaisp)
                                                <option value="{{$loaisp->id}}">{{$loaisp->tenlsp}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nhà cung cấp <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select id="ncc" name="ncc"  required="required" class="form-control">
                                            <option value="#">Nhà cung cấp...</option>
                                            @foreach($ncc as $nhacc)
                                                <option value="{{$nhacc->id}}">{{$nhacc->tenncc}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Tên sản phẩm <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="first-name" name="tensp" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Số lượng <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" id="first-name" name="soluong" min="1" max="1000" required="required" class="form-control ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Hình ảnh <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="hinhanh" name="hinhanh"  required="required" class="form-control ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Giá vốn <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="giavon" name="giavon"  required="required" class="form-control ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Giá bán ra <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="giabanra" name="giabanra"  required="required" class="form-control ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Miêu tả <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="mieuta" name="mieuta"  required="required" class="form-control ">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Trạng thái <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="trangthai" name="trangthai"  required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{route('home')}}"><button class="btn btn-primary" type="button">Cancel</button></a>
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
        var msg = '{{Session::get('addp_success')}}';
        var exist = '{{Session::has('addp_success')}}';
        if(exist){
            swal({
                title: "Đã thêm",
                text: "",
                type: "success",
                timer: 1200,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
