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
                            <h2 class="text-theme-colored font-36">My Donations</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">My Donations</li>
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
                                <div class="col-md-6 col-md-push-3">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Goal Amount</th>
                                            <th>Raised Amount</th>
                                            <th>Donors</th>
                                            <th>Shares</th>
                                            <th>Followers</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($campaign as $camp)
                                            @if($camp->user_id==Auth::user()->id)
                                                <tr>
                                                    <td>{{$camp->title}}</td>
                                                    <td>{{$camp->description}}</td>
                                                    <td>{{$camp->goal_amount}} {{$camp->currency}}</td>
                                                    <td>{{$camp->raised}} {{$camp->currency}}</td>
                                                    <td>{{$camp->no_of_donors}}</td>
                                                    <td>{{$camp->no_of_shares}}</td>
                                                    <td>{{$camp->no_of_followers}}</td>

                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
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
