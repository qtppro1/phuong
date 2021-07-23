@extends('layout.master')
@section('title','Thêm tuyến đường')
@section('content')


    <div class="right_col" role="main">

        <h3>Tạo mới tuyến đường</h3>

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

                            <form action="{{route('post_route')}}"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Điểm đầu tuyến <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select placeholder="Tỉnh" name="diemdau" class="form-control">
                                            <option value="">Chọn...</option>
                                            @foreach($thanhpho as $tp)
                                                <option value="{{$tp->name}}">{{$tp->matp}} - {{$tp->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Điểm cuối tuyến <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select placeholder="Tỉnh" name="diemcuoi" class="form-control">
                                            <option value="">Chọn...</option>
                                            @foreach($thanhpho as $tp)
                                                <option value="{{$tp->name}}">{{$tp->matp}} - {{$tp->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Khoảng cách(km) <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="km" name="km" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Chi phí vận chuyển <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="km" name="ship" required="required" class="form-control ">
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
        </div>
    </div>
    <script>
        var msg = '{{Session::get('route_success')}}';
        var exist = '{{Session::has('route_success')}}';
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
