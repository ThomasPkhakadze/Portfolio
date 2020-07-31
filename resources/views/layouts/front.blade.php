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
						<a href="index.html" class="standard-logo font-secondary ls3"
							style="line-height: 90px;">canvas</a>
						<a href="index.html" class="retina-logo font-secondary ls3"
							style="line-height: 90px;">canvas</a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="0">
							<li class="current"><a href="#" data-href="#wrapper"><i class="icon-line2-home"></i>
									<div>Intro</div>
								</a></li>
							<li><a href="#" data-href="#section-skills"><i class="icon-line2-star"></i>
									<div>Skills</div>
								</a></li>
							<li><a href="#" data-href="#section-about"><i class="icon-line2-user"></i>
									<div>About</div>
								</a></li>
							<li><a href="#" data-href="#section-works"><i class="icon-line2-grid"></i>
									<div>Portfolio</div>
								</a></li>
							<li><a href="#" data-href="#section-articles"><i class="icon-line2-pencil"></i>
									<div>Articles</div>
								</a></li>
								@foreach ($menuItems as $MenuItem)
									<li><a href="#" data-href="#{{ $MenuItem->label }}"><i>{{$MenuItem->label[0]}}</i>
										<div>{{ $MenuItem->label }}</div>
									</a></li>
								@endforeach
							<li><a href="#" data-href="#footer"><i class="icon-line2-envelope"></i>
									<div>Contact</div>
								</a></li>
								<li >
									@if(Request::is('*en/')){{  dd(Auth::user()->name) }} @endif
									
								</li>

							
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
		<footer id="footer" class="page-section dark noborder nopadding clearfix" style="background-color: #1C1C1C;">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix" style="padding: 80px 0">
					<div class="col_one_fourth">
						<div class="footer-logo"><span class="t400 color ls1"
								style="font-size: 22px; ">SemiColonWeb.</span><br><small class="ls3 uppercase"
								style="color: rgba(255,255,255,0.2);">&copy; 2017 Reserved.</small></div>
					</div>
					<div class="col_three_fourth col_last">
						<div class="col_one_third">
							<div class="widget widget_links clearfix">
								<h4>Contact Us</h4>
								<div class="footer-content">
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>
							</div>
						</div>
						<div class="col_one_third">
							<div class="widget clearfix">
								<h4>Location</h4>
								<div class="footer-content">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
								</div>
							</div>
						</div>
						<div class="col_one_third col_last">
							<div class="widget widget_links clearfix">
								<h4>Social</h4>
								<a href="#" class="social-icon nobg si-small si-light si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon nobg si-small si-light si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon nobg si-small si-light si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
								<a href="#" class="social-icon nobg si-small si-light si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
								<a href="#" class="social-icon nobg si-small si-light si-dribbble">
									<i class="icon-dribbble"></i>
									<i class="icon-dribbble"></i>
								</a>

								<a href="#" class="social-icon nobg si-small si-light si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" style="background-color: #111;">

				<div class="container clearfix">

					<div class="col_full center nobottommargin">
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