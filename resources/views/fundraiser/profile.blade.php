@extends('layouts.frontLayout.front_design')
@section('header')
    @include('layouts.frontLayout.front_header')
@endsection
@section('content')

<style>
    .card .card-subtitle {
        font-weight: bold;
        margin-bottom: 15px;
        color: #99abb4;
    }
    .btn-secondary, .btn-secondary.disabled {
        -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
        box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in;
        background-color: #ffffff;
        color: #67757c;
        border-color: #b1b8bb;
    }
    .btn-circle {
        border-radius: 100%;
        width: 40px;
        height: 40px;
        padding: 10px;
    }
    .btn {
        padding: 7px 12px;
        cursor: pointer;
    }

</style>
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" style="background: url({{asset('images/bg/bg2.jpg')}}); heigjt" >
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">My Profile</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row " >
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-4">
                        <div class="m-t-30" style="text-align: center;"> <img src="{{asset('images/user/male-icon.png')}}" class="img-circle" width="150">
                            <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="fa fa-user"></i> <font class="font-medium">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="fa fa-image"></i> <font class="font-medium">54</font></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="m-t-30" style="text-align: center;">
                        <small class="text-muted">Email address </small>
                        <h6>{{ Auth::user()->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ Auth::user()->contact_no }}</h6> <small class="text-muted p-t-30 db">Address</small>
                        <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                        <small class="text-muted">Joined At </small>
                        <h6>{{ Auth::user()->created_at }}</h6>
                        <small class="text-muted p-t-30 db">Social Profile</small>
                        <br>
                        <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    {{--    <li class="dropdown">--}}
    {{--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
    {{--            {{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--        </a>--}}

    {{--        <ul class="dropdown-menu" role="menu">--}}
    {{--            <li>--}}
    {{--                <a href="{{ route('logout') }}"--}}
    {{--                   onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                    Logout--}}
    {{--                </a>--}}

    {{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                    {{ csrf_field() }}--}}
    {{--                </form>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </li>--}}




@endsection
