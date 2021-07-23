@extends('layout.master')
@section('title','Thêm nhà cung cấp sản phẩm')
@section('content')


    <div class="right_col" role="main">

        <h3>Thêm nhà cung cấp sản phẩm của bạn</h3>

        <div class="">
            <div class="page-title">
                <div class="title_left">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">

                        <div class="x_content">

                            <form action="{{route('postncc')}}"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên nhà cung cấp <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="tenncc" name="tenncc" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Địa chỉ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="diachincc" name="diachincc" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Số điện thoại</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="sdtncc" name="sdtncc" class="form-control" type="text" >
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ngành hàng</label>
                                    <div class="col-md-6 col-sm-6 ">
                                    @foreach($lsp as $loaisp)
                                        <input type="checkbox" name="nganhhang1" value="{{$loaisp->tenlsp}}"> {{$loaisp->tenlsp}}<br>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">

                                        <button type="submit" class="btn btn-success">Thêm nhà cung cấp sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
