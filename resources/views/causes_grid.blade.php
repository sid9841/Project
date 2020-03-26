@extends('layouts.frontLayout.front_design')
@section('header')
    @include('layouts.frontLayout.front_header')
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg2.jpg">
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="text-theme-colored font-36">Causes</h3>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Causes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Upcoming Event -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="row">
                            @foreach($campaigns as $campaign)
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-30">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="{{asset('images/campaign/'.$campaign->cover_photo_video)}}">
                                    </div>
                                    <div class="progress-item mt-0">
                                        <div class="progress mb-0">
                                            <div class="progress-bar" data-percent="84"></div>
                                        </div>
                                    </div>
                                    <div class="causes-details clearfix border-bottom p-15 pt-10">
                                        <h5><a href="#">{{$campaign->title}}</a></h5>
                                        <p>{{$campaign->description}}</p>
                                        <ul class="list-inline clearfix mt-20">
                                            <li class="pull-left pr-0">Raised: {{$campaign->raised}}{{$campaign->currency}}</li>
                                            <li class="text-theme-colored pull-right pr-0">Goal: {{$campaign->goal_amount}}{{$campaign->currency}}</li>
                                        </ul>
                                        <div class="mt-10">
                                            <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="{{url('causes/'.$campaign->id)}}">View</a>
                                            <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> {{$campaign->no_of_donors}} Donors</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <nav>
                                    <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                                        <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">...</a></li>
                                        <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Search box</h5>
                                <div class="search-form">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" placeholder="Click to Search" class="form-control search-input">
                                            <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Categories</h5>
                                <div class="categories">
                                    <ul class="list list-border angle-double-right">
                                        <li><a href="#">Creative<span>(19)</span></a></li>
                                        <li><a href="#">Portfolio<span>(21)</span></a></li>
                                        <li><a href="#">Fitness<span>(15)</span></a></li>
                                        <li><a href="#">Gym<span>(35)</span></a></li>
                                        <li><a href="#">Personal<span>(16)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Latest News</h5>
                                <div class="latest-posts">
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                                            <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                            <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                        </div>
                                    </article>
                                    <article class="post media-post clearfix pb-0 mb-10">
                                        <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                        <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                                            <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                                <div id="flickr-feed" class="clearfix">
                                    <!-- Flickr Link -->
                                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection