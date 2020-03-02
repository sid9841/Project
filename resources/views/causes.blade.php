@extends('layouts.frontLayout.front_design')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">Causes</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>

                                <li class="active">Causes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Partners & Donors -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="upcoming-events media bg-light p-15 pb-60 mb-50 mb-sm-30">
                            <h2 class="media-heading text-uppercase font-weight-500">{{$cause->title}}</h2>

                            <div class="thumb">
                                <img class="img-fullwidth" src="../images/campaign/{{$cause->cover_photo_video}}">
                            </div>
                            {{$user->name}} organized this fundraising.<br>
                            {{$cause->created_at}}<br>
                            {{$category->name}}
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="mt-30">
                                        <p class="mb-20">{{$cause->description}}</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-sm-12 col-md-3" >
                        <div class="sidebar sidebar-right mt-sm-30" >
                            <div class="widget">
                                <ul class="list-inline clearfix">
                                    <li class="pull-left pr-0">{{$cause->currency}} {{$cause->raised}} of {{$cause->currency}} {{$cause->goal_amount}}</li>

                                </ul>
                                <div class="progress-item mt-20 mb-30">
                                    <div class="progress mb-30">
                                        <div class="progress-bar" data-percent="85"></div>
                                    </div>
                                </div>

                                <div class="mt-10">
                                    <ul class="pull-left list-inline mt-20">
                                        <li class="pr-0">{{$cause->no_of_donors}}<br> Donors</li>
                                        <li class="pr-0">{{$cause->no_of_shares}}<br> Shares</li>
                                        <li class="pr-0">{{$cause->no_of_followers}}<br> Followers</li>
                                    </ul>

                                </div>
                                <a href="#" class="btn btn-dark btn-flat btn-lg  mt-15" style="width: 100%;" id="payment-button">Donate</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- end main-content -->

@endsection