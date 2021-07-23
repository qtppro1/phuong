@extends('layout.master')
@section('title','Tình trạng đơn hàng')
@section('content')

    <div class="right_col" role="main">
        <div class="">
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
                                    <tr>
                                        <td>
                                            <i class="fas fa-shopping-cart"></i>
                                        </td>
                                        <td>
                                            <a>#0076_{{$dhs->id}}</a>
                                        </td>
                                        <td>
                                            {{ucwords($dhs->hinhthucthanhtoan)}}
                                        </td>
                                        <td>
                                            {{ucwords($dhs->stt)}}
                                        </td>
                                        <td>
                                            <select>
                                                <option value="Đã thanh toán">--Cập nhật Trạng thái...</option>
                                                <option value="Đã thanh toán">Đã Thanh Toán</option>
                                                <option value="Đã thanh toán">Hủy đơn</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fas fa-cart-plus"></i> Cập nhật </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
