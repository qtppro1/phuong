{{--cac don hang--}}
@extends('layout.master')
@section('title','Quản lý đơn hàng')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            @if(Auth::check())
                <div class="page-title">
                    <div class="title_left">
                        <h3><small>Tổng hợp đơn hàng</small></h3>
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
                <div class="row" style="display: block;">

                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2> <small>Đơn hàng của bạn</small></h2>

                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">


                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                        <tr class="headings">
                                            <th>

                                            </th>
                                            <th class="column-title">Đơn hàng </th>
                                            <th class="column-title">Ngày tạo </th>
                                            <th class="column-title">Tuyến </th>
                                            <th class="column-title">Khách hàng </th>
                                            <th class="column-title">Trạng thái </th>
                                            <th class="column-title">Tổng tiền </th>
                                            <th class="column-title no-link last"><span class="nobr">Hành động</span>
                                            </th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($donhang as $dhs)
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </td>
                                                <td class=" ">#0076_{{$dhs->id}}</td>
                                                <td class=" ">{{$dhs->ngaytao}}</td>
                                                @foreach($tuyen as $tuyens)
                                                    @if($tuyens->id ==$dhs->matuyen)
                                                        <td class=" ">{{$tuyens->diemdau}} - {{$tuyens->diemcuoi}}</td>
                                                        @break
                                                    @endif
                                                @endforeach
                                                @foreach($khachhang as $khs)
                                                    @if($khs->id == $dhs->makh)
                                                        <td class=" ">{{ucwords($khs->hoten)}}</td>
                                                        @break
                                                    @endif
                                                @endforeach
                                                <td class=" ">{{ucwords($dhs->stt)}}</td>
                                                <td class="a-right a-right ">{{number_format($dhs->tongtien)}} VNĐ</td>
                                                <td class=" last"><a href="{{route('invoice_detail',$dhs->id)}}">Chi tiết</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
