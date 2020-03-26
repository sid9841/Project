<body class="has-side-panel side-panel-left fullwidth-page side-push-panel">
<div class="body-overlay"></div>

<div id="wrapper" class="clearfix">
    <div id="header" class="header">
        <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent navbar-sticky-animated animated-active">
            <div class="header-nav-wrapper">
                <div class="container pt-10 pb-10">
                    <nav id="menuzord-right" class="menuzord orange menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
                        <a class="menuzord-brand" href="javascript:void(0)">
                            <img src="images/logo-wide.png" alt="">
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

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog" style="    width: 100%;
    position: fixed;
    top: 0;
">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">For your Queries</h5>
            </div>
            <div class="modal-body">
                IF you have any questions, Mess Manager Office number is <strong>+01234567890</strong> or you can email us by <strong>Ouremail@domain.com</strong>>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss = "modal">Close</button>
            </div>
        </div>
    </div>
</div>