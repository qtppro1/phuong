<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        @if(Auth::check())
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{url('public/fontend/images/admin.jpg')}}" alt="">{{Auth::user()->hoten}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i>Đăng xuất</a>
                    </div>
                </li>


            </ul>
        @else
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a style="background-color: #0f6674;border: #0f6674" href="{{ url('/login')}}" class="btn btn-primary">
                        <i class="fa fa-user" aria-hidden="true"></i> Đăng nhập
                    </a>
                </li>
            </ul>
        @endif
        </nav>
    </div>
</div>
