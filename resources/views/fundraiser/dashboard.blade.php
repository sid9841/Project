@extends('layouts.frontLayout.front_design')
@section('header')
    @include('layouts.frontLayout.front_header')
@endsection
@section('content')


    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" style="background: url({{asset('images/bg/bg2.jpg')}});" >
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">My Campagins</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">My Campagins</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">

                        @if(count($campaign)==0)
                        <div class="col-md-6 col-md-push-5">
                        <a href="addCampaign">
                        <button class="btn btn-success">
                            Add New Campaign
                        </button>
                        </a>
                        @else
                        <div class="col-md-12 ">

                                @foreach($campaign as $camp)
                                @if($camp->user_id==Auth::user()->id)
                                    <div class="col-sm-6 col-md-3 col-lg-3">
                                        <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="" src="{{asset('images/campaign/'.$camp->cover_photo_video)}}">
                                            </div>
                                            <div class="progress-item mt-0">
                                                <div class="progress mb-0">
                                                    <div class="progress-bar" data-percent="{{round(($camp->raised/$camp->goal_amount)*100)}}"></div>
                                                </div>
                                            </div>
                                            <div class="causes-details clearfix border-bottom p-15 pt-10">
                                                <h5><a href="causes/{{$camp->id}}">{{$camp->title}}</a></h5>
                                                <p>{{$camp->description}}</p>
                                                <ul class="list-inline clearfix mt-20">
                                                    <li class="pull-left pr-0">Raised: {{$camp->currency}}{{$camp->raised}}</li>
                                                    <li class="text-theme-colored pull-right pr-0">Goal: {{$camp->currency}}{{$camp->goal_amount}}</li>
                                                </ul>
                                                <div class="mt-10">
                                                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                                                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> {{$camp->no_of_donors}} Donors</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                    @endforeach
                        </div>
                        @endif

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
