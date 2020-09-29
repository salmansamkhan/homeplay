<!--Web_Footer-->
<div class="web_footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_info">
					<a href="#" class="footer_logo"><img src="images/footer_logo_without_glow.png" class="logo_white" class="img-fluid"><img src="images/footer_logo_with_glow.png" class="logo_white_glow" class="img-fluid"></a>
					<div class="footer_mail">
						<label>Contact</label>
						<a href="mailto:info@homeplay.live">info@homeplay.live</a>
					</div>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_tab">
					<h3>Useful Links</h3>							
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Find Events</a></li>
						<li><a href="#">HomePlay For Venues</a></li>
						<li><a href="#">HomePlay For Artists</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_tab">
					<h3>Support</h3>							
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">Register Your Event</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="footer_tab">
					<h3>Genres</h3>							
					<div class="genres_tab">
						<a href="#">Hip-Hop/Rap</a>
						<a href="#">Country</a>
						<a href="#">Pop</a>
						<a href="#">R&B/soul</a>
						<a href="#">Classical</a>
						<a href="#">Rock</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer_link">
			<div class="row">
				<div class="col-lg-3">
					<div class="socialsquared">
						<p>socialsquared.</p>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="copyright">
						<p> <a href="#">Terms and Conditions</a> | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | Do Not Sell My Personal Information <a href="#"><u>Powered By iSi LIVE Technologies</u></a> Copyright HomePlay LIVE 2020. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Web_Footer-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>

<script>
	$(window).on("scroll", function() {
		if($(window).scrollTop() > 150) {
			$(".navbar").addClass("active");
		} else {
			$(".navbar").removeClass("active");
		}
	});
</script>

<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 3,
			navigation: true,
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true
		});
		$('.play').on('click', function() {
			owl.trigger('play.owl.autoplay', [1000])
		})
		$('.stop').on('click', function() {
			owl.trigger('stop.owl.autoplay')
		})
	})
</script>
	
</body>
</html>