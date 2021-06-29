{{--san pham--}}
@extends('layout.master')
@section('tittle',"Sản phẩm")
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Sản phẩm <small> </small> </h3>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thông Tin Sản Phẩm</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 60%; display: block;" src="{{asset('public/fontend/images/iphonexsmax.jpg')}}" alt="image" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>Iphone XS Max 64Gb </p>
                                            <b> 12 triệu </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 60%; display: block;" src="{{asset('public/fontend/images/ipadpro.jpg')}}" alt="image" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>Ipad Pro 2020(128gb)</p>
                                            <b> 22 triệu </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 90%; display: block;" src="{{asset('public/fontend/images/laptop.jpg')}}" alt="image" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>MacBook Pro Mid 2019 Core i5 RAM 8GB, SSD 128GB</p>
                                            <b> 23 triệu </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/airpod.jpg')}}" alt="image" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>Tai nghe Bluetooth AirPods 2 Apple</p>
                                            <b> 4 triệu </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/pinduphong.jpg')}}" alt="image" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p>Pin sạc dự phòng không dây 20000mAh</p>
                                            <b> 850 ngàn </b>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/watch.jpg')}}" alt="image" />
                                            <div class="mask no-caption">
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            
                                            </p>
                                            <p>Apple Watch S6 40mm viền nhôm</p>
                                            <b> 9,5 triệu </b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/media.jpg')}}" alt="image" />
                                            <div class="mask no-caption">
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Snow and Ice Incoming</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/media.jpg')}}" alt="image" />
                                            <div class="mask no-caption">
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Snow and Ice Incoming</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/media.jpg')}}" alt="image" />
                                            <div class="mask no-caption">
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Snow and Ice Incoming</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img style="width: 100%; display: block;" src="{{asset('public/fontend/images/media.jpg')}}" alt="image" />
                                            <div class="mask no-caption">
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <p><strong>Image Name</strong>
                                            </p>
                                            <p>Snow and Ice Incoming</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
