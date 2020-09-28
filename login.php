<?php include("header.php");?>

<!--Web_Login_BG-->
<div class="web_login_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
				<div class="login_register_box">
					<ul class="nav nav-tabs nav-tabs-login" role="tablist">
						<li class="nav-item"><a class="nav-link active" href="#viewer_login" role="tab" data-toggle="tab">Viewer Login</a></li>
						<li class="nav-item"><a class="nav-link nav-link-last" href="#artist_login" role="tab" data-toggle="tab">Artist Login</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="viewer_login">
							<div class="hp_login_register">
								<h4>Login to your HomePLAY account to access your virtual events!</h4>
								<div class="hp_login_regi_tab">
									<input type="text" name="email" placeholder="Email *">
								</div>
								<div class="hp_login_regi_tab">
									<input type="text" name="password" placeholder="Password *">
								</div>
								<div class="hp_login_regi_tab">
									<p>Don't have view account <a href="#"><u>Create One!</u></a></p>
								</div>
								<div class="hp_login_regi_button">
									<a href="#">Login</a>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="artist_login">
							<div class="hp_login_register">
								<h4>Login to your HomePLAY account to access your Artist Login!</h4>
								<div class="hp_login_regi_tab">
									<input type="text" name="email" placeholder="Email *">
								</div>
								<div class="hp_login_regi_tab">
									<input type="text" name="password" placeholder="Password *">
								</div>
								<div class="hp_login_regi_tab">
									<p>Don't have view account <a href="#"><u>Artist One!</u></a></p>
								</div>
								<div class="hp_login_regi_button">
									<a href="#">Login</a>
								</div>
							</div>
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