@extends('layout.master')
@section('title','Tình trạng đơn hàng')
@section('content')

    <div class="right_col" role="main">
    <div class="">

        @if(Auth::check())
            <div class="page-title">
                <div class="title_left">
                    <h3> Tình trạng đơn hàng<small></small></h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <p>*Các đơn hàng được sắp xiếp từ mới đến củ</p>


                            <!-- start project list -->

                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 1%"></th>
                                    <th style="width: 20%">Đơn hàng</th>
                                    <th>Hình thức thanh toán</th>
                                    <th>Trạng thái đơn hàng</th>
                                    <th>Cập nhật trạng thái</th>
                                    <th style="width: 20%">Cập nhật</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donhang as $dhs)
                                    <form action="{{route('post_stt',$dhs->id)}}" method="post">
                                        @csrf
                                        <tr>
                                            <td>
                                                <i class="fas fa-shopping-cart"></i>
                                            </td>
                                            <td>
                                                <a href="{{route('invoice_detail',$dhs->id)}}">#0076_{{$dhs->id}}</a>
                                                <a></a>
                                            </td>
                                            <td>
                                                {{ucwords($dhs->hinhthucthanhtoan)}}
                                            </td>
                                            <td>
                                                <input disabled  type="text" value="{{ucwords($dhs->stt)}}">
                                                {{--                                        <input hidden type="text" id="madhs" name="madhs" value="{{$dhs->id}}">--}}
                                            </td>
                                            <td>
                                                <select id="trangthai" name="trangthai">
                                                    <option value="">--Cập nhật Trạng thái...</option>
                                                    <option value="Đã thanh toán">Đã Thanh Toán</option>
                                                    <option value="Hủy đơn">Hủy đơn</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-xs"> <i class="fas fa-cart-plus"></i> Cập nhật </button>
                                            </td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- end project list -->
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
        var msg = '{{Session::get('stt_success')}}';
        var exist = '{{Session::has('stt_success')}}';
        if(exist){
            swal({
                title: "Đã cập nhật",
                text: "",
                type: "success",
                timer: 1000,
                showConfirmButton: false,
                position: 'top-end',
            });
        }
    </script>
@endsection
