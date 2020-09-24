<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link
		href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700,900|Playfair+Display:400,700"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}" type="text/css" />

	<!-- Resume Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('front/css/resume.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('front/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{ asset('front/css/colors.php?color=7B6ED6') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Resume | Canvas</title>

</head>

<body class="stretched sticky-responsive-menu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header sticky-transparent static-sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo font-secondary ls3"
							style="line-height: 90px;">{{ __('Thomas') }}</a>
						<a href="/" class="retina-logo font-secondary ls3"
							style="line-height: 90px;">{{ __('Thomas') }}</a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
							<li class="current"><a href="#" data-href="#wrapper"><i class="icon-line2-home"></i>
									<div>{{ __('Intro') }}</div>
								</a></li>
							<li><a href="#" data-href="#section-skills"><i class="icon-line2-star"></i>
									<div>{{ __('Skills') }}</div>
								</a></li>
							<li><a href="#" data-href="#section-about"><i class="icon-line2-user"></i>
									<div>{{ __('About') }}</div>
								</a></li>
							<li><a href="#" data-href="#section-works"><i class="icon-line2-grid"></i>
									<div>{{ __('Portfolio') }}</div>
								</a></li>
								@foreach ($menuItems as $MenuItem)
									<li><a href="#" data-href="#{{ $MenuItem->label }}"><i>{{$MenuItem->label[0]}}</i>
										<div>{{ $MenuItem->label }}</div>
									</a></li>
								@endforeach
							<li><a href="#" data-href="#contact"><i class="icon-line2-envelope"></i>
									<div>{{ __('Contact') }}</div>
								</a></li>

							
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

        </header><!-- #header end -->

        <!-- Content
        ============================================= -->
        @yield('content')
        <!-- #content end -->
        
        <!-- Footer
		============================================= -->
		<footer id="footer" class="page-section dark noborder nopadding clearfix" >
		

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background-image: linear-gradient(#078292af, rgba(0, 57, 90, 0.808)" >

				<div class="container clearfix">
					<div class="col_full center nobottommargin" style="color: seashell">
						Copyrights &copy; 2017 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('front/js/jquery.js') }}"></script>
	<script src="{{ asset('front/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('front/js/functions.js') }}"></script>

	<script>
		jQuery(window).scroll(function () {
			var pixs = jQuery(window).scrollTop(),
				opacity = pixs / 650,
				element = jQuery('.blurred-img'),
				elementHeight = element.outerHeight(),
				elementNextHeight = jQuery('.content-wrap').find('.page-section').first().outerHeight();
			if ((elementHeight + elementNextHeight + 50) > pixs) {
				element.addClass('blurred-image-visible');
				element.css({ 'opacity': opacity });
			} else {
				element.removeClass('blurred-image-visible');
			}
		});
	</script>

</body>

</html>