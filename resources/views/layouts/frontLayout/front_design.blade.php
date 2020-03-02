<!DOCTYPE html>
<html dir="ltr" lang="en">


	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="CharityFund - Charity & Crowdfunding HTML Template" />
	<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
	<meta name="author" content="ThemeMascot" />

	<!-- Page Title -->
	<title>CrowdFundNepal</title>

	<!-- Favicon and Touch Icons -->
	<link href="images/favicon.png" rel="shortcut icon" type="image/png">
	<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Stylesheet -->
	<link href="{{asset('css/frontendCss/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/frontendCss/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/frontendCss/animate.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/frontendCss/css-plugin-collections.css')}}" rel="stylesheet"/>
	<!-- CSS | menuzord megamenu skins -->
	<link id="menuzord-menu-skins" href="{{asset('css/frontendCss/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
	<script src="https://khalti.com/static/khalti-checkout.js"></script>
	<!-- CSS | Main style file -->
	<link href="{{asset('css/frontendCss/style-main.css')}}" rel="stylesheet" type="text/css">
	<!-- CSS | Preloader Styles -->
	<link href="{{asset('css/frontendCss/preloader.css')}}" rel="stylesheet" type="text/css">
	<!-- CSS | Custom Margin Padding Collection -->
	<link href="{{asset('css/frontendCss/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
	<!-- CSS | Responsive media queries -->
	<link href="{{asset('css/frontendCss/responsive.css')}}" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="{{asset('css/frontendCss/style.css')}}" rel="stylesheet" type="text/css"> -->

	<!-- Revolution Slider 5.x CSS settings -->
	<link  href="{{asset('js/frontendJs/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
	<link  href="{{asset('js/frontendJs/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
	<link  href="{{asset('js/frontendJs/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

	<!-- CSS | Theme Color -->
	<link href="{{asset('css/frontendCss/colors/theme-skin-yellow.css')}}" rel="stylesheet" type="text/css">

	<!-- external javascripts -->
	<script src="{{asset('js/frontendJs/jquery-2.2.0.min.js')}}"></script>
	<script src="{{asset('js/frontendJs/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/frontendJs/bootstrap.min.js')}}"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="{{asset('js/frontendJs/jquery-plugin-collection.js')}}"></script>

	<!-- Revolution Slider 5.x SCRIPTS -->
	<script src="{{asset('js/frontendJs/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('js/frontendJs/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>



@include('layouts.frontLayout.front_header')

@yield('content')
		
@include('layouts.frontLayout.front_footer')
	<script>
		var config = {
			// replace the publicKey with yours
			"publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
			"productIdentity": "1234567890",
			"productName": "Dragon",
			"productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
			"eventHandler": {
				onSuccess (payload) {
					// hit merchant api for initiating verfication
					console.log(payload);
				},
				onError (error) {
					console.log(error);
				},
				onClose () {
					console.log('widget is closing');
				}
			}
		};

		var checkout = new KhaltiCheckout(config);
		var btn = document.getElementById("payment-button");
		btn.onclick = function () {
			checkout.show({amount: 1000});
		}
	</script>


<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('js/frontendJs/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontendJs/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>


</body>

</html>