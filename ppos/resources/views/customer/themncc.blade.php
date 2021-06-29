@extends('layout.master')
@section('title','Thên nhà cung cấp sản phẩm')
@section('content')


    <div class="right_col" role="main">

        <h1>Thêm nhà cung cấp sản phẩm </h1>

        <div class="">
            <div class="page-title">
                <div class="title_left">

                </div>


            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h3>Form Điền Thông Tin </h3>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Thêm</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sữa</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Xóa</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="NCC">Tên Nhà Cung Cấp  <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="NCC" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="DCNCC">Địa Chỉ Nhà Cung Cấp  <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="DCNCC" name="DCNCC" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="Phone Number" class="col-form-label col-md-3 col-sm-3 label-align">Số Điện Thoại</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Phone Number" class="form-control" type="text" name="Phone Number">
                                    </div>
                                </div>
                                <!-- <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Trong Nước &nbsp;
                                            </label>
                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="female" class="join-btn"> Nước Ngoài
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="item form-group">
                                    <label for= "Nganhang" class="col-form-label col-md-3 col-sm-3 label-align">Ngân Hàng </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="Nganhang" class="form-control" type="text" name="Nganhang">
                                           <script>
                                            function timeFunctionLong(input) {
                                                setTimeout(function() {
                                                    input.type = 'text';
                                                }, 60000);
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection
