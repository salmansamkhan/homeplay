<?php include("header.php");?>

<!--Web_Login_BG-->
<div class="web_login_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
				<div class="login_register_box lrb">
					<div class="hp_login_register register_bg">
						<h2>Viewer Registration</h2>
						<div class="hp_login_regi_tab">
							<input type="email" name="email" placeholder="Email *">
						</div>
						<div class="hp_login_regi_tab">
							<input type="password" name="password" placeholder="Password *">
						</div>
						<div class="hp_login_regi_tab">
							<input type="password" name="confirm_password" placeholder="Confirm Password *">
						</div>
						<div class="hp_login_regi_check">
							<input type="radio" id="reg_terms" name="terms" value="1">
							<label for="reg_terms">I agree to HomePlays <a href="#">terms of services.</a></label>
						</div>
						<div class="hp_login_regi_button">
							<a href="#">Login</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1"></div>
		</div>
	</div>
</div>
<!--Web_Login_BG-->

<?php include("footer.php");?>
