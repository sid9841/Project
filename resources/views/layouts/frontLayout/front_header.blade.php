<body class="has-side-panel side-panel-left fullwidth-page side-push-panel">
<div class="body-overlay"></div>
<div id="wrapper" class="clearfix">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<div class="preloader-dot-loading">
				<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
			</div>
		</div>
	</div>

	<header id="header" class="header">
		<div class="header-top bg-deep sm-text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="widget no-border m-0">
							<ul class="styled-icons icon-sm sm-text-center">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<div class="widget no-border m-0">
							<ul class="list-inline text-right sm-text-center mt-5">
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored"></i> <a class="text-gray" href="#">123-456-789</a> </li>
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00 to 2:00 </li>
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="header-nav-wrapper navbar-scroll bg-lightest" style="z-index: auto; position: static; top: auto;">
				<div class="container pt-10 pb-10">
					@if (Auth::guest())
						<nav id="menuzord-right" class="menuzord orange menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
							<a class="menuzord-brand" href="javascript:void(0)">
								<img src="{{asset('images/logo-wide.png')}}" alt="">
							</a>
							<ul class="menuzord-menu menuzord-left menuzord-indented " style="max-height: 400px;">
								<li class="active"><a href="{{url('/')}}">Home</a>

								</li>
								<li>
									<a href="#">Browse By</a>
									<ul class="dropdown" style="right: auto; display: none;">
										@foreach($categoriesAll as $cat)
											<li><a href="{{url('discover/'.$cat->id)}}"> {{$cat->name}}</a></li>
										@endforeach

									</ul>
								</li>
								<li><a href="{{url('/login')}}">Login</a>

								</li>
								<li><a href="{{url('/register')}}">Sign Up  </a>

								</li>

								<li><a href="#myModal" data-toggle = "modal" data-target= "#myModal" class="nav-link"><i class="fa-search"></i>Search  </a>

								</li>


								<li class="scrollable-fix"></li>
							</ul>

						</nav>
					@else
						<nav id="menuzord-right" class="menuzord orange menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
							<a class="menuzord-brand" href="javascript:void(0)">
								<img src="{{asset('images/logo-wide.png')}}" alt="">
							</a>
							<ul class="menuzord-menu menuzord-left menuzord-indented " style="max-height: 400px;">

								<li>
									<a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }}
									</a>

									<ul class="dropdown" role="menu">
										<li>
											<a href="{{ url('/fundraiser/dashboard/') }}">
												My Campaigns
											</a>


										</li>
										<li>
											<a href="{{ url('/fundraiser/dashboard/') }}">
												My Donations
											</a>


										</li>
										<li>
											<a href="{{ url('/fundraiser/profile/') }}">
												View Profile
											</a>


										</li>
										<li>
											<a href="{{ url('/fundraiser/updateProfile/') }}">
												Update Profile
											</a>


										</li>
										<li>
											<a href="{{ route('logout') }}"
											   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
												Logout
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
									</ul>
								</li>



								<li class="scrollable-fix"></li>
							</ul>

						</nav>

					@endif




				</div>
			</div><div style="display: none; width: 1519.2px; height: 70.4px; float: none;"></div>
		</div>
	</header>
