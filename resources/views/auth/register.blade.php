@extends('layouts.frontLayout.front_design')
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
                        <h2 class="text-theme-colored font-36">My Account</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Sign Up</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <form class="register-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="icon-box mb-0 p-0">
                            <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                <i class="pe-7s-users"></i>
                            </a>
                            <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                        </div>
                        <hr>
                        <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias.</p>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="form_name">Name</label>
                                <input id="form_name" class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email Address</label>
                                <input id="form_email" class="form-control" type="email"  name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="form_choose_username">Choose Username</label>
                                <input id="form_choose_username" name="username" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Contact Number</label>
                                <input id="form_choose_username" name="contact_no" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Category</label>
                                <select name="category" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="donor">Donor</option>
                                    <option value="fundraiser">Fundraiser</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="form_choose_password">Choose Password</label>
                                <input id="form_choose_password" name="password" class="form-control" type="password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Re-enter Password</label>
                                <input id="form_re_enter_password" name="password_confirmation"  class="form-control" type="passsword" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection