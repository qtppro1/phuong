{{--đại lý--}}
@extends('layout.master')
@section('title','Đại lý')
@section('content')
    <div class="right_col" role="main">
    <div class="">
        @if(Auth::check())
            <div class="page-title">
                <div class="title_left">
                    <h3>Đại lý</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel" style="height:600px;">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach($agency as $agencys)
                                        <div class="col-md-3 col-sm-6  ">
                                        <div class="pricing">

                                                <div class="title">
                                                    <h2>{{$agencys->tenncc}}</h2>
                                                    <h1><i class="fas fa-building"></i></h1>
                                                </div>
                                                <div class="x_content">
                                                    <div class="">
                                                        <div class="pricing_features ">
                                                            <ul class="list-unstyled text-left">
                                                                <li><i class="fa fa-building"></i> Địa chỉ: {{$agencys->diachincc}}</li>
                                                                <li><i class="fas fa-phone-volume"></i> SĐT: {{$agencys->sdt}}</li>
                                                                <li><i class="fas fa-code-branch"></i> Ngành hàng: {{$agencys->nganhhangcc}}</li>
                                                                <li><i class="far fa-calendar-alt"></i> Ngày tạo: {{$agencys->created_at}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="pricing_footer">
                                                        <a href="javascript:void(0);" class="btn btn-success btn-block" role="button">Edit</a>
                                                        <p>
                                                            <a href="javascript:void(0);">Delete</a>
                                                        </p>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                    @endforeach
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
                        <p style="font-size: 22px">Xin hãy đăng nhập!! <a href="{{route('login')}}"><i>Đăng nhập</i></a></p>
                        <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0939337416</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
