@extends('layout.master')
@section('title','Thành viên')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <div class="page-title">
                    <div class="title_left">
                        <h3>Quản lý thành viên</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Tìm</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="col-md-12 col-sm-12  text-center">
                                <ul class="pagination pagination-split">

                                </ul>
                            </div>

                            <div class="clearfix"></div>
                            @foreach($user as $users)

                                <div class="col-md-4 col-sm-4  profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            @foreach($quyen as $quyens)
                                                @if($quyens->id == $users->maquyen)
                                                    <h4 class="brief"><i>{{$quyens->tenquyen}}</i></h4>
                                                @endif
                                            @endforeach
                                            <div class="left col-md-7 col-sm-7">
                                                <h2>{{$users->hoten}}</h2>
                                                <p><strong>Giới tính: </strong> {{$users->gioitinh}} </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-building"></i> Địa chỉ: {{$users->diachicuthe}}</li>
                                                    <li><i class="fas fa-phone-volume"></i> SĐT: {{$users->sdt}}</li>
                                                    <li><i class="fas fa-envelope-open-text"></i> Email: {{$users->email}}</li>
                                                </ul>
                                            </div>
                                            <div class="right col-md-5 col-sm-5 text-center">
                                                <img src="{{asset('public/fontend/images/user/'.$users->image)}}" alt="" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                        <div class=" profile-bottom text-center">
                                            <div class=" col-sm-6 emphasis">
                                                <p class="ratings">

                                                </p>
                                            </div>
                                            <div class=" col-sm-6 emphasis" >

                                                <button style="float: right" type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-user"> </i> Edit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
