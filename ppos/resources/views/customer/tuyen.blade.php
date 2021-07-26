@extends('layout.master')
@section('title','Tuyến đường')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            @if(Auth::check())
                <div class="page-title">
                    <div class="title_left">
                        <h3>Tuyến <small>Đường</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                                *Phí Ship còn dựa trên chiều dài tuyến và Trọng lượng hàng
                                            </p>
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Điểm đầu</th>
                                                    <th>Điểm cuối</th>
                                                    <th>Khoảng cách</th>
                                                    <th>Ngày cập nhật</th>
                                                    <th>Phí ship</th>
                                                </tr>
                                                </thead>


                                                <tbody>
                                                @foreach($tuyen as $tuyens)
                                                    <tr>
                                                        <td>{{$tuyens->id}}</td>
                                                        <td>{{$tuyens->diemdau}}</td>
                                                        <td>{{$tuyens->diemcuoi}}</td>
                                                        <td>{{$tuyens->km}}KM</td>
                                                        <td>{{date($tuyens->created_at)}}</td>
                                                        <td>{{number_format($tuyens->phiship)}} VNĐ</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
                            <p style="font-size: 22px">Nếu chưa có tài khoản, hãy liên hệ Admin để đăng ký Tài khoản: 0854366167</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
