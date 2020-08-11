<?php include 'header.php'; ?>

<body>

	<?php include 'navigation.php'; ?>

	<style type="text/css">
		body {
			position: relative;
		}

		#second-content-home {
			position: relative;
		}

		#second-content-home .leaf-compontent-1 {
			content: '';
			width: 300px;
			height: 300px;
			/*background-color: #000;*/
			background-image: url('assets/img/img-component/bg-leaf-intro.svg');
			background-repeat: no-repeat;
			background-position: center;
			background-size: 100% 100%;
			position: absolute;
			left: -10%;
			transform: rotate(-30deg);
		}

		#second-content-home .leaf-compontent-2 {
			content: '';
			width: 250px;
			height: 250px;
			/*background-color: #000;*/
			background-image: url('assets/img/img-component/bg-leaf-intro.svg');
			background-repeat: no-repeat;
			background-position: center;
			background-size: 100% 100%;
			position: absolute;
			right: -5%;
			bottom: -15%;
			transform: scaleX(-1);
		}

		#fourth-content-home .text-home-quote {
			position: relative;
		}

		.thumbnail-slider-banner-home .slick-slide {
			opacity: .5;
		}

		.thumbnail-slider-banner-home .slick-current.slick-active {
			opacity: 1;
		}

		
	</style>

	<style type="text/css">
		@media screen and (max-width: 767px) {
			#fourth-content-home {
				background-position: center !important;
			}
		}
	</style>

	<section id="banner">
		<div class="container-fluid p-0">
			<div class="banner-hero-home">
				<div class="main-slider-banner-home">
					<div class="main-slider-home" style="background: url('assets/img/background/bg-home.png'); background-repeat:no-repeat; background-size:cover;">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="btn-play-video" type="button" class="btn btn-primary" data-toggle="modal" data-target="#BannerModal">
								<img src="assets/img/icon/btn-play-video.svg" alt="" class="img-fluid">
							</div>
							<div class="hero-title-banner">
								<h1>BELIEVE IT. DEW IT. </h1>
							</div>
							<div class="main-button">
								<a href="#" class="button-home-banner"> <span>Shop It</span><img src="assets/img/icon/ic-arrow-button-white.svg" /></a>
							</div>
						</div>
					</div>
					<div class="main-slider-home" style="background: url('assets/img/background/bg-home-2.png'); background-repeat:no-repeat; background-size:cover;">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="btn-play-video">
								<img src="assets/img/icon/btn-play-video.svg" alt="" class="img-fluid">
							</div>
							<div class="hero-title-banner">
								<h1>BELIEVE IT. DEW IT. </h1>
							</div>
							<div class="main-button">
								<a href="#" class="button-home-banner"> <span>Shop It</span><img src="assets/img/icon/ic-arrow-button-white.svg" /></a>
							</div>
						</div>
					</div>
					<div class="main-slider-home" style="background: url('assets/img/background/bg-home-2.png'); background-repeat:no-repeat; background-size:cover;">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="btn-play-video">
								<img src="assets/img/icon/btn-play-video.svg" alt="" class="img-fluid">
							</div>
							<div class="hero-title-banner">
								<h1>BELIEVE IT. DEW IT. </h1>
							</div>
							<div class="main-button">
								<a href="#" class="button-home-banner"> <span>Shop It</span><img src="assets/img/icon/ic-arrow-button-white.svg" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnail-slider-banner-home">
					<div class="thumbnail-slider-home">
						<!-- <h1>01</h1> -->
						<img src="assets/img/img-component/banner-img-home.png" alt="" class="img-fluid thumbnail-banner-home">
					</div>
					<div class="thumbnail-slider-home">
						<!-- <h1>02</h1> -->
						<img src="assets/img/img-component/banner-img-home-2.png" alt="" class="img-fluid thumbnail-banner-home">
					</div>
					<div class="thumbnail-slider-home">
						<!-- <h1>03</h1> -->
						<img src="assets/img/img-component/banner-img-home-2.png" alt="" class="img-fluid thumbnail-banner-home">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal Banner -->
		<div class="modal fade" id="BannerModal" tabindex="-1" role="dialog" aria-labelledby="BannerModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/nUcuNnDKzuA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	<!-- End Of Modal bBanner -->

	<!-- Second Content -->
	<section id="second-content-home">
		<!-- <div class="leaf-compontent-1"></div> -->
		<div class="leaf-compontent-2"></div>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 left-content-home align-items-center">
					<h4>Bodycare for the<br> Active Woman</h4>
				</div>
				<div class="col-12 col-md-6 right-content-home">
					<div class="blue-component-home">
						<img src="assets/img/img-component/bubble-blue.svg" alt="" class="img-fluid vector-blue-home">
					</div>
					<div class="image-right-second-content-home">
						<img src="assets/img/img-component/img-home-1.png" alt="" class="img-fluid img-second-content-home-1">
					</div>
					<div class="vector-image-intro-1">
						<img src="assets/img/icon/vector-image-intro-1.svg" alt="" class="img-fluid vector-intro-1">
					</div>
				</div>

				<div class="col-12 col-md-6 left-content-home-2 align-items-center">
					<div class="orange-component-home">
						<img src="assets/img/img-component/buble-orange.svg" alt="" class="img-fluid vector-orange-home">
					</div>
					<div class="image-right-second-content-home-2">
						<img src="assets/img/img-component/img-home-2.png" alt="" class="img-fluid img-second-content-home-2">
					</div>
					<div class="vector-image-intro-2">
						<img src="assets/img/icon/vector-image-intro-2.svg" alt="" class="img-fluid vector-intro-2">
					</div>
				</div>
				<div class="col-12 col-md-6 right-content-home-2">
					<h4>
						Meet the lazy-proof, simplified companion for your everyday activities.
					</h4>
					<p>
						Catered to the woman that simply has “no time” to care for their body, Dew It is here to aid in
						her relentless work ethic and continuous drive to reach goals. Our Body Water Oil, Body Polish
						and Body Mask is intuitive, easy to use and designed to meet the demands of her “do-it”
						lifestyle.
					</p>

					<div class="main-button">
						<a href="#" class="button-home-second-content"> <span>Shop It</span> <img src="assets/img/icon/icon-arrow-next-18px.svg" alt="" class="img-fluid arrow-button-black"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Second Content -->

	<!-- Third Content -->
	<section id="third-content-home">
		<!-- <div class="bg-section-third"></div> -->
		<div class="container-fluid">
			<div class="row justify-content-start">
				<!-- <div class="col-12 col-md-12">
					<div class="vector-leaf-section-third">
						<img src="assets/img/icon/Image 10.svg" alt="" class="img-fluid leaf-vector-third-section">
					</div>
				</div> -->
				<div class="col-12 col-md-12 product-title">
					<h1>
						When Should I Dew it?<br>We say, All Day!
					</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-4 grid-product-content">
					<div class="content-product-title">
						<h4>In The Shower</h4>
						<h2>Body Water Oil</h2>
					</div>
					<div class="image-product">
						<img src="assets/img/img-component/in-the-shower.png" alt="" class="img-fluid image-product-content product-in-the-shower">
					</div>
				</div>
				<div class="col-12 col-md-4 grid-product-content">
					<div class="content-product-title">
						<h4>On The Go</h4>
						<h2>Body Polish</h2>
					</div>
					<div class="image-product">
						<img src="assets/img/img-component/on-the-go.png" alt="" class="img-fluid image-product-content">
					</div>
				</div>
				<div class="col-12 col-md-4 grid-product-content">
					<div class="content-product-title">
						<h4>Before Bed</h4>
						<h2>Body Mask</h2>
					</div>
					<div class="image-product">
						<img src="assets/img/img-component/before-bed.png" alt="" class="img-fluid image-product-content">
					</div>
				</div>
				<div class="col-12 col-md-12 vector-third-section">
					<div class="vector-bubble-orange-section-third">
						<img src="assets/img/img-component/vector-bubble-product-orange.svg" alt="" class="img-fluid bubble-orange-vector-third-section">
					</div>
					<div class="vector-bubble-white-section-third">
						<img src="assets/img/img-component/vector-bubble-product-white.svg" alt="" class="img-fluid bubble-white-vector-third-section">
					</div>
					<div class="vector-lines-product-section-third">
						<img src="assets/img/icon/lines-vector-product.svg" alt="" class="img-fluid lines-vector-product">
					</div>
					<div class="vector-leaf-section-third">
						<img src="assets/img/icon/leaf-vector-third-section.svg" alt="" class="img-fluid leaf-vector-third-section">
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-12 col-md-12">
					<div class="main-button">
						<a href="#" class="button-home-third-content"> <span>Shop It</span><img src="assets/img/icon/ic-arrow-button-white.svg" /></a>
					</div>
				</div>
			</div>
			<!-- <div class="vector-leaf">
				<img src="assets/img/img-component/vector-leaf-product-home.svg" alt=""
					class="img-fluid leaf-vector-home">
			</div>
			<div class="vector-bubble-white"></div>
			<div class="vector-bubble-orange"></div> -->
		</div>
	</section>
	<!-- End of Third Content -->

	<!-- Quotes -->
	<section id="fourth-content-home">
		<div class="container-fluid d-flex justify-content-center align-items-center layout-quote">
			<div class="row">
				<div class="text-home-quote">
					<h1>Reflect your beauty through healthy, supple & dewy skin</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Quotes -->

	<!-- Fifth Content -->
	<section id="fifth-content-home">
		<div class="container-fluid p-0">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 text-center title-fifth-content-home">
					<h1>Women Who Dew It</h1>
					<p>Follow us on Instagram<br>@dew.itskin</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-4 fifth-second-title-home d-flex align-items-center">
					<div class="slider-title-fifth-content-home">
						<h4>Show us how you <br><span>#BelieveItDewIt</span> </h4>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="slider-content-fifth-content-home">
						<div class="slick-content-images">
							<div class="slider-slick-home">
								<img src="assets/img/img-component/img-slide-home-1.png" alt="" class="img-fluid slider-img">
							</div>
							<div class="slider-slick-home">
								<img src="assets/img/img-component/img-slide-home-2.png" alt="" class="img-fluid slider-img">
							</div>
							<div class="slider-slick-home">
								<img src="assets/img/img-component/img-slide-home-3.png" alt="" class="img-fluid slider-img">
							</div>
							<div class="slider-slick-home">
								<img src="assets/img/img-component/img-slide-home-4.png" alt="" class="img-fluid slider-img">
							</div>
							<div class="slider-slick-home">
								<img src="assets/img/img-component/img-slide-home-1.png" alt="" class="img-fluid slider-img">
							</div>
						</div>
					</div>

					<div class="slider-vector-dots">
						<img src="assets/img/img-component/dots-vector-home.svg" alt="" class="img-fluid vector-slider-dots">
					</div>
					<div class="slider-vector-blue">
						<img src="assets/img/img-component/slider-blue-vector-home.svg" alt="" class="img-fluid vector-slider-blue">
					</div>
					<div class="slider-vector-orange">
						<img src="assets/img/img-component/slider-orange-vector-home.svg" alt="" class="img-fluid vector-slider-orange">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Fifth Content -->

	<?php include 'footer.php'; ?>

	<!-- Internal JS -->

	<script type="text/javascript">
		$('.slick-content-images').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: "<button class='arrowLeft'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
			nextArrow: "<button class='arrowRight'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>"	
		});
	</script>

	<script type="text/javascript">
		$('.main-slider-banner-home').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.thumbnail-slider-banner-home'
		});

		$('.thumbnail-slider-banner-home').slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			asNavFor: '.main-slider-banner-home',
			// dots: true,
			// centerMode: true,
			focusOnSelect: true,
			prevArrow: "<button class='arrowLeftBannerHome'><img src='assets/img/icon/ic-arrow-back-banner-home.svg' class='img-fluid'></button>",
			nextArrow: "<button class='arrowRightBannerHome'><img src='assets/img/icon/ic-arrow-next-banner-home.svg' class='img-fluid'></button>"
		});

		// $('#fourth-content-home').css({
		// 	backgroundPosition: 'center !important'
		// });
	</script>
</body>

</html>