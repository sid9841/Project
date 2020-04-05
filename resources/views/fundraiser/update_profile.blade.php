@extends('layouts.frontLayout.front_design')
@section('header')
    @include('layouts.frontLayout.front_header')
@endsection
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark" style="background: url({{asset('images/bg/bg2.jpg')}}); heigjt" >
            <div class="container pt-30 pb-30">
                <!-- Section Content -->
                <div class="section-content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="text-theme-colored font-36">Update Profile</h2>
                            <ol class="breadcrumb text-center mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">Update Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="divider">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <div class="border-1px p-30 mb-0">
                        <h3 class="text-theme-colored mt-0 pt-5"> Update Profile</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        <form id="job_apply_form" name="job_apply_form" action="http://html.kodesolution.live/html/nonprofit/charity/charityfund-html/v3.4/demo/includes/job.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name <small>*</small></label>
                                        <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="user_name">User Name <small>*</small></label>
                                        <input id="user_name" name="user_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact_no">Contact No <small>*</small></label>
                                        <input id="contact_no" name="contact_no" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="form_attachment">Image Upload</label>
                                <input id="form_attachment" name="form_attachment" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
                                <small>Maximum upload file size: 12 MB</small>
                            </div>
                            <div class="form-group">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Update Profile</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
