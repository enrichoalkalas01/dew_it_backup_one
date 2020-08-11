	<style type="text/css">
		@media screen and (max-width: 575px) {
		    /* Footer */
		        #sixth-content-home .top-box .box-content {
		            flex-direction: column !important;
		        }

		        #sixth-content-home .top-box .box-content .left-box {
		            max-width: 100%;
		            width: 100%;
		            margin-bottom: 10px;
		        }

		        #sixth-content-home .top-box .box-content .right-box {
		        	max-width: 100%;
		        	width: 100%;
		        }

		        #sixth-content-home .top-box .box-content .right-box .email-box {
		        	padding-left: 0;
		        }
		    /* End Of Footer */
		}
	</style>
	
	<section id="sixth-content-home">
		<div class="container">
			<div class="row top-box">
				<div class="col-md-12 box-content">
					<div class="left-box">
						<div class="title-box">
							<h6>Our Newsletter</h6>
						</div>
					</div>
					<div class="right-box">
						<div class="email-box">
							<input type="text" name="email-input" placeholder="Your email">
						</div>
						<div class="button-box">
							<button>Subscribe</button>
						</div>
					</div>
				</div>
			</div>

			<div class="row bottom-footer">
				<div class="col-12 col-md-4 address">
					<div class="title-footer footer-title-addres">
						<h6>Address:</h6>
					</div>
					<div class="desc-footer footer-desc-address">
						<p>
							<span>District</span> <span style="font-family: 'Gotham-Bold';">8</span>, <span>SCBD</span>, <span>Lot</span> <span style="font-family: 'Gotham-Bold';">28</span>. <span>Jl Jen, Sudirman Kav</span> <span style="font-family: 'Gotham-Bold';">52-53</span> <span>Jakarta, Indonesia</span> <span style="font-family: 'Gotham-Bold';">12190</span>
						</p>
					</div>
				</div>
				<div class="col-6 col-md-3 contact-us">
					<div class="title-footer footer-title-contact">
						<h6>Contact Us:</h6>
					</div>
					<div class="desc-footer footer-desc-contact">
						<p>
							<span class="icon-telp"><i class="fas fa-phone-alt"></i></span>
							<span style="font-family: 'Gotham-Bold';">(021) - 345 589</span><br>

							<span class="icon-email"><i class="fas fa-envelope"></i></span>
							hello<span style="font-family: 'ghotambold'; ">@</span>dewit.com
						</p>
					</div>
				</div>
				<div class="col-6 col-md-3 costumer-service">
					<div class="title-footer footer-title-cs">
						<h6>Customer Service:</h6>
					</div>
					<div class="desc-footer footer-desc-cs">
						<a href="#" style="display: none;">FAQ</a><br>
						<a href="#" style="display: none;">Terms & Conditions</a>
					</div>
				</div>
				<div class="col-12 col-md-2 social-media">
					<div class="title-footer footer-title-socmed">
						<h6>Social Media:</h6>
						<a href="#" class="instagram-footer socmed-logo-footer">
							<img src="assets/img/icon/instagram-logo.svg" alt="" class="img-fluid">
						</a>
						<a href="#" class="facebook-footer socmed-logo-footer">
							<img src="assets/img/icon/facebook-letter-logo.svg" alt="" class="img-fluid">
						</a>
						<a href="#" class="twitter-footer socmed-logo-footer">
							<img src="assets/img/icon/twitter-logo-silhouette.svg" alt="" class="img-fluid">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-12 col-md-6">
					<div class="left-footer-content">
						<p>@Dew it 2019</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="right-footer-content">
						<p>Imagined by Label Ideas.co</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Vendors JS -->
	<script src="assets/vendors/jquery-3.4.1/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="assets/vendors/slick-1.8.1/slick/slick.js"></script>

	<script type="text/javascript">
		if ( $(window).width() < 768 ) {
			$('#sixth-content-home .container').attr('class', 'container-fluid');
		}

		$(document).ready(function() {
			$(".menu-icon").on("click", function() {
				$("nav ul").toggleClass("showing");
			});
		});

		// Scrolling Effect
		$(window).on("scroll", function() {
			if ($(window).scrollTop()) {
				$('nav').addClass('shadow');
				$('#desktop-nav').css({
					height: 'auto !important'
				});
			} else {
				$('nav').removeClass('shadow');
				$('#desktop-nav').css({
					height: 'auto !important'
				});
			}
		})

	    $('.burger-menu').click(function(e) {
	        let get_data_aria = $('#mobile-page').attr('data-aria')

	        if (get_data_aria == 'false') {
	        	$('#mobile-page').fadeIn('400')
	        	$('#mobile-page').attr('data-aria', 'true')
	        } else {
	        	$('#mobile-page').fadeOut('400')
	        	$('#mobile-page').attr('data-aria', 'false')
	        }
	    });
	</script>