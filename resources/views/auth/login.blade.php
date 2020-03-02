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
                                <li class="active">My Account</li>
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
                        <h4 class="text-gray mt-0 pt-5"> Login</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12">
                                    <label for="form_username_email">Username/Email</label>
                                    <input id="form_username_email" name="email" class="form-control" type="text" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-12">
                                    <label for="form_password">Password</label>
                                    <input id="form_password" name="password" class="form-control" type="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="checkbox pull-left mt-15">
                                <label for="form_checkbox">
                                    <input id="form_checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                    Remember me </label>
                            </div>

                            <div class="form-group pull-right mt-10">
                                <button type="submit" class="btn btn-dark btn-sm">Login</button>
                            </div>
                            <div class="clear text-center pt-10">
                                <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                            <div class="clear text-center pt-10">
                                <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" style="background-color: #3b5998;" >Login with facebook</a>
                                <a class="btn btn-dark btn-lg btn-block no-border" href="#" style="background-color: #00acee;">Login with twitter</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

@endsection
