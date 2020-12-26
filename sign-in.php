<!DOCTYPE html>
<html>
	<head>
		<title>My Forme</title>
		<meta charset="UTF-8">
		<meta name="description" content="GerLearn">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
	   
		<div id="preloader">
			<div class="wraper">
				<div class="cssload-loader"></div>
			</div>
		</div>

		<!-- ***** Top Search Area Start ***** -->
		<div class="top-search-area">
			<!-- Search Modal -->
			<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<!-- Close Button -->
							<button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
							<!-- Form -->
							<form action="index-n.php" method="post">
								<input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
								<button type="submit">Search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Top Search Area End ***** -->
	 </head>
	  <header class="header-area">
		<!-- Main Header Start -->
		<div class="main-header-area">
			<div class="classy-nav-container breakpoint-off">
				<!-- Classy Menu -->
				<nav class="classy-navbar justify-content-between" id="uzaNav">
	
					<!-- Logo -->
					<a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>
	
					<!-- Navbar Toggler -->
					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>
	
					<!-- Menu -->
					<div class="classy-menu">
						<!-- Menu Close Button -->
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>
	
						<!-- Nav Start -->
						<div class="classynav">
							<ul id="nav">
								<li class="current-item"><a href="sign-in.php">Sign in</a></li>
								<li><a href="sign-up.php">Sign up</a></li>
							</ul>
	
							
	
					</div>
				</nav>
			</div>
		</div>
	 </header>
	 <!-- ***** Header Area End ***** -->
	 <!-- ***** Breadcrumb Area Start ***** -->
	 <div class="breadcrumb-area">
		<div class="container h-100">
			<div class="row h-100 align-items-end">
				<div class="col-12">
					<h1 style="text-align: left;" style="margin :10em">Sign-In</h1>
					<div class="breadcumb--con">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sign-in</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Background Curve -->
		<div class="breadcrumb-bg-curve">
			<img src="./img/core-img/curve-5.png" alt="">
		</div>
	</div>
	<!-- ***** Breadcrumb Area End ***** -->
	<body class="form">
		<div class="content">
            <div class="inscription-content">
                <!--form connection-->
				<div class="content">
					<div class="connection-form">
						<form class = "form-detail" id="inscription" action="verifie-data.php" method="post">
							<fieldset>
								<br/>
								<div class="col-12 col-lg-8">
									<div class="uza-contact-form mb-80">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<input type="email" class="forme-control mb-30" name="Email" id="Email" placeholder="E-mail">
													</div>
												</div>
												<br/>
											</div>	
											<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
												    <input type = "password" class="forme-control mb-30" id ="Password" name ="Password" placeholder = "password"> 
												</div>
											</div>
										</div>	
								<div class="div8">
										<input type="checkbox" class = "form-controle" name="remember-me" id="remember-me" class="agree-term" />
										<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label><br/><br/>
								</div>
								<div class="div1">
									<a href="sign-up.php" class="lienn">Create an account</a><br/>
								</div>
								<div class="div1">
									<button href="" type="submit" onclick="SignIn()" class="btn uza-btnn btn-2 mt-4">Sign In</button>
								</div><br/>
							</fieldset>	
						</form>
					</div>
                </div>
            </div>
		</div>
		<script src="Code JS.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/uza.bundle.js"></script>
        <script src="js/default-assets/active.js"></script>
        <style>
          
@import url(fonts/aileron-font-style.css);
@import url(css/bootstrap.min.css);
@import url(css/animate.css);
@import url(css/default-assets/classy-nav.css);
@import url(css/owl.carousel.min.css);
@import url(css/magnific-popup.css);
@import url(css/font-awesome.min.css);
@import url(css/style.css);
/* :: 1.0 Reboot CSS */
* {
  margin: 0;
  padding: 0; }

body {
  font-family: "Aileron";
  font-weight: 400;
  font-size: 14px; }

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Aileron";
  color: #303030;
  line-height: 1.4;
  font-weight: 600; 
}

a,
a:active,
a:focus,
a:hover {
  font-family: "Aileron";
  color: #303030;
  text-decoration: none;
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms;
  outline: none;
  font-size: 16px;
  font-weight: 600; }

li {
  list-style: none; }

p {
  line-height: 2;
  color: #707070;
  font-size: 16px;
  font-weight: normal; }

img {
  max-width: 100%;
  height: auto; }

ul {
  margin: 0;
  padding: 0; }
  ul li {
    margin: 0;
    padding: 0; }

.bg-overlay {
  position: relative;
  z-index: 1; }
  .bg-overlay::after {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    z-index: -1;
    background-color: rgba(0, 0, 0, 0.5); }

.bg-img {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat; }

.jarallax {
  position: relative;
  z-index: 0; }
.jarallax > .jarallax-img {
  position: absolute;
  object-fit: cover;
  font-family: 'object-fit: cover';
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1; 
}

.mfp-iframe-holder .mfp-close {
  top: 0;
  width: 30px;
  height: 30px;
  background-color: #1583e9;
  text-align: center;
  right: 0;
  padding-right: 0;
  line-height: 32px; }

.bg-transparent {
  background-color: transparent !important; }

.bg-gray {
  background-color: #e7f2fd !important; }

textarea:focus,
input:focus {
  outline: none; }

/* :: 2.0 Spacing CSS */
.mt-15 {
  margin-top: 15px; }

.mt-30 {
  margin-top: 30px; }

.mt-40 {
  margin-top: 40px; }

.mt-50 {
  margin-top: 50px; }

.mt-70 {
  margin-top: 70px; }

.mt-80 {
  margin-top: 80px; }

.mt-100 {
  margin-top: 100px; }

.mt-150 {
  margin-top: 150px; }

.mr-15 {
  margin-right: 15px; }

.mr-30 {
  margin-right: 30px; }

.mr-50 {
  margin-right: 50px; }

.mr-100 {
  margin-right: 100px; }

.mb-15 {
  margin-bottom: 15px; }

.mb-30 {
  margin-bottom: 30px; }

.mb-40 {
  margin-bottom: 40px; }

.mb-50 {
  margin-bottom: 50px; }

.mb-60 {
  margin-bottom: 60px; }

.mb-70 {
  margin-bottom: 70px; }

.mb-80 {
  margin-bottom: 80px; }

.mb-100 {
  margin-bottom: 100px; }

.ml-15 {
  margin-left: 15px; }

.ml-30 {
  margin-left: 30px; }

.ml-50 {
  margin-left: 50px; }

.ml-100 {
  margin-left: 100px; }

.pt-50 {
  padding-top: 50px !important; }

.section-padding-80 {
  padding-top: 80px;
  padding-bottom: 80px; }

.section-padding-0-80 {
  padding-top: 0;
  padding-bottom: 80px; }

.section-padding-80-0 {
  padding-top: 80px;
  padding-bottom: 0; }

/* :: 3.0 Preloader CSS */
#preloader {
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: 99999;
  top: 0;
  left: 0;
  background-color: #1583e9;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }

.wrapper {
  margin: auto;
  display: block; }

.cssload-loader {
  width: 49px;
  height: 49px;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  vertical-align: middle;
  background: #ffffff; }

.cssload-loader,
.cssload-loader:after,
.cssload-loader:before {
  animation: 1.15s infinite ease-in-out;
  -o-animation: 1.15s infinite ease-in-out;
  -ms-animation: 1.15s infinite ease-in-out;
  -webkit-animation: 1.15s infinite ease-in-out;
  -moz-animation: 1.15s infinite ease-in-out; }

.cssload-loader:after,
.cssload-loader:before {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  position: absolute;
  top: 0;
  left: 0; }

.cssload-loader {
  animation-name: cssload-loader;
  -o-animation-name: cssload-loader;
  -ms-animation-name: cssload-loader;
  -webkit-animation-name: cssload-loader;
  -moz-animation-name: cssload-loader; }

@keyframes cssload-loader {
  from {
    transform: scale(0);
    opacity: 1; }
  to {
    transform: scale(1);
    opacity: 0; } }
@-o-keyframes cssload-loader {
  from {
    -o-transform: scale(0);
    opacity: 1; }
  to {
    -o-transform: scale(1);
    opacity: 0; } }
@-ms-keyframes cssload-loader {
  from {
    -ms-transform: scale(0);
    opacity: 1; }
  to {
    -ms-transform: scale(1);
    opacity: 0; } }
@-webkit-keyframes cssload-loader {
  from {
    -webkit-transform: scale(0);
    opacity: 1; }
  to {
    -webkit-transform: scale(1);
    opacity: 0; } }
@-moz-keyframes cssload-loader {
  from {
    -moz-transform: scale(0);
    opacity: 1; }
  to {
    -moz-transform: scale(1);
    opacity: 0; } }
/* :: 4.0 Heading CSS */
.section-heading {
  position: relative;
  z-index: 1;
  margin-bottom: 70px; }
  .section-heading h2 {
    font-size: 48px;
    text-transform: capitalize;
    margin-bottom: 0;
    line-height: 1.1; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .section-heading h2 {
        font-size: 36px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .section-heading h2 {
        font-size: 42px; } }
    @media only screen and (max-width: 767px) {
      .section-heading h2 {
        font-size: 30px; } }
  .section-heading p {
    margin-top: 15px;
    font-size: 18px;
    margin-bottom: 0;
    color: #a6a6a6; }

/* :: 5.0 Backtotop CSS */
#scrollUp {
  bottom: 50px;
  font-size: 30px;
  line-height: 45px;
  right: 50px;
  width: 50px;
  background-color: #1583e9;
  color: #ffffff;
  text-align: center;
  height: 50px;
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms;
  border-radius: 50%;
  -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
  box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
  #scrollUp:focus, #scrollUp:hover {
    background-color: #000000;
    color: #ffffff; }
  @media only screen and (max-width: 767px) {
    #scrollUp {
      right: 30px;
      bottom: 30px; } }

/* :: 6.0 Buttons CSS */
.uza-btn {
  position: relative;
  z-index: 1;
  margin-left: 20em;
  min-width: 160px;
  height: 50px;
  line-height: 50px;
  font-size: 16px;
  font-weight: 600;
  display: inline-block;
  padding: 0 30px;
  text-align: center;
  text-transform: capitalize;
  color: #1583e9;
  border: none;
  border-radius: 50px;
  background-color: #ffffff;
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms;
  -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
  box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }

    .uza-btnn {
      position: relative;
      z-index: 1;
      margin-left: 33em;
      min-width: 160px;
      height: 50px;
      line-height: 50px;
      font-size: 16px;
      font-weight: 600;
      display: inline-block;
      padding: 0 30px;
      text-align: center;
      text-transform: capitalize;
      color: #1583e9;
      border: none;
      border-radius: 50px;
      background-color: #ffffff;
      -webkit-transition-duration: 500ms;
      -o-transition-duration: 500ms;
      transition-duration: 500ms;
      -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
      box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
  .uza-btn:focus, .uza-btn:hover {
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    background-color: #1583e9;
    color: #ffffff; }
  .uza-btn.btn-2 {
    background-color: #1583e9;
    color: #ffffff; }
    .uza-btn.btn-2:focus, .uza-btn.btn-2:hover {
      background-color: #ffffff;
      color: #1583e9; }
  .uza-btn.btn-3 {
    border: 2px solid #1583e9;
    line-height: 46px; }
    

    .uza-btnn:focus, .uza-btnn:hover {
      -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
      box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
      background-color: #1583e9;
      color: #ffffff; }
    .uza-btnn.btn-2 {
      background-color: #1583e9;
      color: #ffffff; }
      .uza-btnn.btn-2:focus, .uza-btnn.btn-2:hover {
        background-color: #ffffff;
        color: #1583e9; }
    .uza-btnn.btn-3 {
      border: 2px solid #1583e9;
      line-height: 46px; }
  

.login-register-btn a {
  display: inline-block; }
  .login-register-btn a span {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    color: #a6a6a6; }
    .login-register-btn a span:focus, .login-register-btn a span:hover {
      
      color: #1583e9; }
  .login-register-btn a:focus, .login-register-btn a:hover {
    color: #1583e9; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .login-register-btn a {
      font-size: 14px; } }

/* :: 7.0 Header CSS */
.header-area {
  position: fixed;
  z-index: 600;
  width: 100%;
  left: 0;
  top: 0;
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .header-area .main-header-area {
      border-top: 10px solid #303030; } }
  @media only screen and (max-width: 767px) {
    .header-area .main-header-area {
      border-top: 10px solid #303030; } }
  .header-area .main-header-area.sticky {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    top: 0;
    width: 100%;
    position: fixed;
    background-color: #e7f2fd;
    -webkit-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.1);
    border-bottom: none;
    left: 0;
    z-index: 650; }
  .header-area .search-icon {
    position: relative;
    z-index: 1;
    margin-top: 14px; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .header-area .search-icon {
        margin-left: 15px;
        margin-top: 20px; } }
    @media only screen and (max-width: 767px) {
      .header-area .search-icon {
        margin-left: 15px;
        margin-top: 20px; } }
    .header-area .search-icon i {
      font-size: 20px;
      color: #303030;
      cursor: pointer; }

.classy-nav-container {
  background-color: transparent;
  padding: 0; }
  @media only screen and (max-width: 767px) {
    .classy-nav-container {
      padding: 0 15px; } }
  .classy-nav-container .classy-navbar {
    height: 100px;
    padding: 0 3%; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .classy-nav-container .classy-navbar {
        height: 70px;
        padding: 0 5%; } }
    @media only screen and (max-width: 767px) {
      .classy-nav-container .classy-navbar {
        height: 70px;
        padding: 0 5%; } }
    @media only screen and (max-width: 767px) {
      .classy-nav-container .classy-navbar .nav-brand {
        max-width: 90px;
        margin-right: 15px; } }
    .classy-nav-container .classy-navbar .classynav ul li a {
      position: relative;
      z-index: 1;
      font-weight: normal;
      font-size: 18px;
      text-transform: capitalize;
      color: #303030; }
      .classy-nav-container .classy-navbar .classynav ul li a:focus, .classy-nav-container .classy-navbar .classynav ul li a:hover {
        color: #1583e9; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .classy-nav-container .classy-navbar .classynav ul li a {
          font-size: 14px;
          padding: 0 10px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .classy-nav-container .classy-navbar .classynav ul li a {
          font-size: 14px; } }
      @media only screen and (max-width: 767px) {
        .classy-nav-container .classy-navbar .classynav ul li a {
          font-size: 14px; } }
    .classy-nav-container .classy-navbar .classynav ul li.cn-dropdown-item ul li a {
      font-size: 16px;
      text-transform: capitalize;
      height: 42px;
      line-height: 42px;
      padding: 0 30px; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .classy-nav-container .classy-navbar .classynav ul li.cn-dropdown-item ul li a {
          font-size: 14px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .classy-nav-container .classy-navbar .classynav ul li.cn-dropdown-item ul li a {
          font-size: 14px; } }
      @media only screen and (max-width: 767px) {
        .classy-nav-container .classy-navbar .classynav ul li.cn-dropdown-item ul li a {
          font-size: 14px; } }
    .classy-nav-container .classy-navbar .classynav ul li.current-item a::after {
      content: '';
      position: absolute;
      width: 70%;
      height: 2px;
      background-color: #1583e9;
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      z-index: 1; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .classy-nav-container .classy-navbar .classynav ul li.current-item a::after {
          width: 100%;
          height: 1px; } }
      @media only screen and (max-width: 767px) {
        .classy-nav-container .classy-navbar .classynav ul li.current-item a::after {
          width: 100%;
          height: 1px; } }

.classynav ul li.has-down > a::after,
.classynav ul li.has-down.active > a::after,
.classynav ul li.megamenu-item > a::after {
  color: #303030; }

.breakpoint-off .classynav ul li .dropdown {
  width: 210px;
  -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
  box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
  border-radius: 6px; }

.top-search-area .modal-content {
  border: none; }
  .top-search-area .modal-content .modal-body {
    padding: 50px; }
    @media only screen and (max-width: 767px) {
      .top-search-area .modal-content .modal-body {
        padding: 50px 15px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .top-search-area .modal-content .modal-body {
        padding: 50px; } }
    .top-search-area .modal-content .modal-body button.close-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      z-index: 10;
      font-size: 14px; }
      .top-search-area .modal-content .modal-body button.close-btn.btn {
        padding: 0;
        background-color: transparent; }
        .top-search-area .modal-content .modal-body button.close-btn.btn:focus, .top-search-area .modal-content .modal-body button.close-btn.btn:hover {
          box-shadow: none;
          color: #1583e9; }
.top-search-area form {
  width: 100%;
  position: initial;
  z-index: 1; }
  .top-search-area form input {
    width: 100%;
    height: 50px;
    border: none;
    box-shadow: 0 0 30px 15px rgba(0, 0, 0, 0.08);
    border-radius: 6px;
    font-size: 12px;
    font-style: italic;
    padding: 0 20px; }
    .top-search-area form input:focus {
      box-shadow: 0 0 30px 15px rgba(0, 0, 0, 0.08); }
  .top-search-area form button {
    position: absolute;
    width: 100px;
    height: 50px;
    top: 0;
    right: 0;
    z-index: 10;
    border-radius: 0 6px 6px 0;
    border: none;
    background-color: #1583e9;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    cursor: pointer; }
    @media only screen and (max-width: 767px) {
      .top-search-area form button {
        width: 80px; } }

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .get-a-quote {
    margin: 30px 15px !important; } }
@media only screen and (max-width: 767px) {
  .get-a-quote {
    margin: 30px 15px !important; } }

/* :: 8.0 Hero CSS */
.welcome-slides {
  position: relative;
  z-index: 1;
  overflow: hidden; }

.single-welcome-slide {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 900px;
  background-color: #ffffff; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-welcome-slide {
      height: 750px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-welcome-slide {
      height: 600px; } }
  @media only screen and (max-width: 767px) {
    .single-welcome-slide {
      height: 900px; } }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .single-welcome-slide {
      height: 1000px; } }
  .single-welcome-slide .background-curve {
    position: absolute;
    width: 70%;
    top: 0;
    height: 100%;
    right: 0;
    z-index: -1; }
    .single-welcome-slide .background-curve img {
      width: 100%;
      height: auto;
      background-repeat: no-repeat; }
  .single-welcome-slide .welcome-text {
    position: relative;
    z-index: 1; }
    @media only screen and (max-width: 767px) {
      .single-welcome-slide .welcome-text {
        padding-top: 50px; } }
    .single-welcome-slide .welcome-text h2 {
      font-size: 72px;
      display: block;
      margin-bottom: 30px; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-welcome-slide .welcome-text h2 {
          font-size: 48px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-welcome-slide .welcome-text h2 {
          font-size: 42px; } }
      @media only screen and (max-width: 767px) {
        .single-welcome-slide .welcome-text h2 {
          font-size: 36px; } }
      @media only screen and (min-width: 576px) and (max-width: 767px) {
        .single-welcome-slide .welcome-text h2 {
          font-size: 42px; } }
      .single-welcome-slide .welcome-text h2 span {
        color: #1583e9; }
    .single-welcome-slide .welcome-text h5 {
      font-size: 22px;
      color: #a6a6a6;
      margin-bottom: 60px;
      display: block; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-welcome-slide .welcome-text h5 {
          font-size: 18px;
          margin-bottom: 40px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .single-welcome-slide .welcome-text h5 {
          font-size: 14px;
          margin-bottom: 40px; } }
  @media only screen and (max-width: 767px) {
    .single-welcome-slide .welcome-thumbnail {
      margin-top: -120px; } }

/* :: 09.0 Portfolio CSS */
.uza-portfolio-area {
  position: relative;
  z-index: 1;
  padding-left: 3%;
  padding-right: 3%; }
  .uza-portfolio-area .portfolio-bg-curve {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: -1;
    height: auto;
    width: auto; }

.single-portfolio-slide {
  position: relative;
  z-index: 1;
  margin-bottom: 50px; }
  .single-portfolio-slide img {
    position: relative;
    z-index: 1;
    width: 100%; }
  .single-portfolio-slide .overlay-effect {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background-color: rgba(231, 242, 253, 0.9);
    padding: 40px 30px;
    opacity: 0;
    visibility: hidden; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-portfolio-slide .overlay-effect {
        padding: 30px; } }
    @media only screen and (max-width: 767px) {
      .single-portfolio-slide .overlay-effect {
        padding: 30px; } }
    .single-portfolio-slide .overlay-effect h4 {
      display: block;
      margin-bottom: 15px;
      font-weight: 600; }
      @media only screen and (max-width: 767px) {
        .single-portfolio-slide .overlay-effect h4 {
          margin-bottom: 10px;
          font-size: 20px; } }
    .single-portfolio-slide .overlay-effect p {
      margin-bottom: 0;
      line-height: 1.6; }
      @media only screen and (max-width: 767px) {
        .single-portfolio-slide .overlay-effect p {
          font-size: 14px; } }
  .single-portfolio-slide .view-more-btn a {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #ffffff;
    display: inline-block;
    position: absolute;
    bottom: 40px;
    right: 0;
    z-index: 100;
    text-align: center;
    line-height: 65px;
    font-size: 24px;
    opacity: 0;
    visibility: hidden; 
  }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-portfolio-slide .view-more-btn a {
        bottom: 30px;
        width: 40px;
        height: 40px;
        line-height: 45px; } }
    @media only screen and (max-width: 767px) {
      .single-portfolio-slide .view-more-btn a {
        bottom: 30px;
        width: 40px;
        height: 40px;
        line-height: 45px; } }
    .single-portfolio-slide .view-more-btn a:focus, .single-portfolio-slide .view-more-btn a:hover {
      background-color: #1583e9;
      color: #ffffff; }
  .single-portfolio-slide:focus, .single-portfolio-slide:hover {
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
    .single-portfolio-slide:focus .overlay-effect, .single-portfolio-slide:hover .overlay-effect {
      opacity: 1;
      visibility: visible; }
    .single-portfolio-slide:focus .view-more-btn a, .single-portfolio-slide:hover .view-more-btn a {
      right: 40px;
      opacity: 1;
      visibility: visible; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-portfolio-slide:focus .view-more-btn a, .single-portfolio-slide:hover .view-more-btn a {
          right: 30px; } }

.portfolio-sildes {
  position: relative;
  z-index: 1; }
  .portfolio-sildes .owl-dots {
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center; }
    .portfolio-sildes .owl-dots .owl-dot {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 8px;
      flex: 0 0 8px;
      max-width: 8px;
      margin: 0 5px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #e7f2fd; }
      .portfolio-sildes .owl-dots .owl-dot.active {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 38px;
        flex: 0 0 38px;
        max-width: 38px;
        width: 38px;
        border-radius: 15px;
        background-color: #1583e9; }

.portfolio-menu {
  position: relative;
  z-index: 1; }
  .portfolio-menu button {
    background-color: transparent;
    padding: 0;
    font-weight: 600;
    color: #a6a6a6;
    font-size: 22px;
    margin: 0 20px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .portfolio-menu button {
        font-size: 20px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .portfolio-menu button {
        font-size: 18px; } }
    @media only screen and (max-width: 767px) {
      .portfolio-menu button {
        font-size: 16px;
        margin: 0 10px; } }
    @media only screen and (min-width: 480px) and (max-width: 767px) {
      .portfolio-menu button {
        font-size: 14px;
        margin: 0 5px; } }
    .portfolio-menu button.active, .portfolio-menu button:hover {
      color: #303030; }
    .portfolio-menu button:focus {
      box-shadow: none; }

.single-portfolio-item .single-portfolio-slide {
  margin-right: 10px;
  margin-left: 10px; }

.portfolio-details-text {
  position: relative;
  z-index: 1; }
  .portfolio-details-text h2 {
    font-size: 36px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .portfolio-details-text h2 {
        font-size: 30px; } }
    @media only screen and (max-width: 767px) {
      .portfolio-details-text h2 {
        font-size: 24px; } }
  .portfolio-details-text h6 {
    font-size: 14px;
    text-transform: uppercase;
    color: #1583e9;
    letter-spacing: 1px;
    margin-bottom: 20px;
    font-weight: 400; }
  .portfolio-details-text p {
    margin-bottom: 0; }

.portfolio-meta h6 {
  color: #707070;
  margin-bottom: 10px;
  font-weight: 400; }
@media only screen and (max-width: 767px) {
  .portfolio-meta {
    margin-top: 50px; } }

.portfolio-social-info p {
  margin-bottom: 0;
  margin-right: 15px; }
.portfolio-social-info a {
  display: inline-block;
  margin-right: 15px;
  font-size: 16px; }
  .portfolio-social-info a:last-child {
    margin-right: 0; }
  .portfolio-social-info a:hover, .portfolio-social-info a:focus {
    color: #1583e9; }

.portfolio-pager {
  position: relative;
  z-index: 1; }
  .portfolio-pager a {
    display: inline-block;
    color: #707070; }
    .portfolio-pager a:nth-child(2) {
      color: #a6a6a6; }
    .portfolio-pager a:hover, .portfolio-pager a:focus {
      color: #1583e9; }
    @media only screen and (max-width: 767px) {
      .portfolio-pager a {
        font-size: 12px; } }
    @media only screen and (min-width: 480px) and (max-width: 767px) {
      .portfolio-pager a {
        font-size: 16px; } }

/* :: 10.0 Testimonial CSS */
.testimonial-slides {
  position: relative;
  z-index: 1;
  padding-left: 10%;
  padding-right: 10%; }
  .testimonial-slides .owl-next,
  .testimonial-slides .owl-prev {
    position: absolute;
    top: 50%;
    width: 50px;
    height: auto;
    margin-top: -25px;
    left: 0;
    z-index: 10;
    line-height: 50px; }
    .testimonial-slides .owl-next i,
    .testimonial-slides .owl-prev i {
      font-size: 50px;
      color: #b7b7b7; }
      .testimonial-slides .owl-next i:hover, .testimonial-slides .owl-next i:focus,
      .testimonial-slides .owl-prev i:hover,
      .testimonial-slides .owl-prev i:focus {
        color: #1583e9; }
  .testimonial-slides .owl-next {
    left: auto;
    right: 0; }

.border-line {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 1px;
  background-color: #e7f2fd; }

.single-testimonial-slide {
  position: relative;
  z-index: 1; }
  @media only screen and (max-width: 767px) {
    .single-testimonial-slide {
      -ms-flex-wrap: wrap;
      flex-wrap: wrap; } }
  .single-testimonial-slide .testimonial-thumbnail {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 170px;
    flex: 0 0 170px;
    max-width: 170px;
    width: 170px;
    height: 170px;
    border-radius: 50%;
    margin-right: 60px; }
    .single-testimonial-slide .testimonial-thumbnail img {
      border-radius: 50%; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-testimonial-slide .testimonial-thumbnail {
        margin-right: 30px; } }
    @media only screen and (max-width: 767px) {
      .single-testimonial-slide .testimonial-thumbnail {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 120px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        height: 120px;
        margin-right: 0;
        margin-bottom: 50px; } }
  .single-testimonial-slide .testimonial-content {
    position: relative;
    z-index: 1; }
    .single-testimonial-slide .testimonial-content h4 {
      font-weight: normal;
      font-style: italic;
      margin-bottom: 30px; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-testimonial-slide .testimonial-content h4 {
          font-size: 20px; } }
      @media only screen and (max-width: 767px) {
        .single-testimonial-slide .testimonial-content h4 {
          font-size: 18px; } }
    .single-testimonial-slide .testimonial-content .ratings {
      position: relative;
      z-index: 1;
      display: block;
      margin-bottom: 10px; }
      .single-testimonial-slide .testimonial-content .ratings i {
        font-size: 16px;
        color: #f3c612; }
    .single-testimonial-slide .testimonial-content .author-info h5 {
      font-size: 22px;
      font-weight: 400;
      margin-bottom: 0; }
      @media only screen and (max-width: 767px) {
        .single-testimonial-slide .testimonial-content .author-info h5 {
          font-size: 14px; } }
      .single-testimonial-slide .testimonial-content .author-info h5 span {
        font-size: 14px;
        text-transform: uppercase;
        color: #b7b7b7; }
        @media only screen and (max-width: 767px) {
          .single-testimonial-slide .testimonial-content .author-info h5 span {
            font-size: 12px; } }
    .single-testimonial-slide .testimonial-content .quote-icon {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: -1; }

/* :: 11.0 Newsletter CSS */
.uza-newsletter-area {
  position: relative;
  z-index: 1; }
  .uza-newsletter-area .border-line {
    width: 100%;
    height: 1px;
    background-color: #e7f2fd; }
  .uza-newsletter-area .nl-content {
    position: relative;
    z-index: 1; }
    .uza-newsletter-area .nl-content h2 {
      font-size: 36px;
      display: block;
      margin-bottom: 0; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .uza-newsletter-area .nl-content h2 {
          font-size: 30px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .uza-newsletter-area .nl-content h2 {
          font-size: 24px; } }
      @media only screen and (max-width: 767px) {
        .uza-newsletter-area .nl-content h2 {
          font-size: 24px; } }
    .uza-newsletter-area .nl-content p {
      margin-bottom: 0; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .uza-newsletter-area .nl-content p {
          font-size: 14px; } }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .uza-newsletter-area .nl-content p {
          font-size: 12px; } }
  .uza-newsletter-area .nl-form form {
    position: relative;
    z-index: 1; }
    .uza-newsletter-area .nl-form form input {
      width: 100%;
      height: 50px;
      border-radius: 50px;
      background-color: #e7f2fd;
      border: none;
      font-size: 16px;
      padding: 0 30px; }

    .uza-newsletter-area .nl-form form button {
      -webkit-transition-duration: 500ms;
      -o-transition-duration: 500ms;
      transition-duration: 500ms;
      position: absolute;
      padding: 0 30px;
      border-radius: 0 50px 50px 0;
      background-color: #1583e9;
      font-size: 16px;
      color: #ffffff;
      height: 50px;
      top: 0;
      right: 0;
      border: none;
      cursor: pointer; }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .uza-newsletter-area .nl-form form button {
          padding: 0 20px; } }
      @media only screen and (max-width: 767px) {
        .uza-newsletter-area .nl-form form button {
          
          padding: 0 20px; } }
      .uza-newsletter-area .nl-form form button:hover, .uza-newsletter-area .nl-form form button:focus {
        background-color: #303030; }

/* :: 12.0 About CSS */
.about-us-content {
  position: relative;
  z-index: 1; }
  .about-us-content h2 {
    font-size: 48px;
    display: block;
    margin-bottom: 25px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .about-us-content h2 {
        font-size: 36px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .about-us-content h2 {
        font-size: 30px; } }
    @media only screen and (max-width: 767px) {
      .about-us-content h2 {
        font-size: 30px; } }

.about-us-thumbnail {
  position: relative;
  z-index: 1;
  width: 100%;
  padding-right: 100px; }
  .about-us-thumbnail img {
    width: 100%; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .about-us-thumbnail {
      padding-right: 0; } }
  @media only screen and (max-width: 767px) {
    .about-us-thumbnail {
      padding-right: 0; } }

.uza-video-area {
  position: absolute;
  top: 50%;
  right: 65px;
  z-index: 99;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .uza-video-area {
      right: auto;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); } }
  @media only screen and (max-width: 767px) {
    .uza-video-area {
      right: auto;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); } }
  .uza-video-area .video-play-btn {
    display: inline-block;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    background-color: #1583e9;
    color: #ffffff;
    line-height: 70px;
    text-align: center;
    font-size: 24px; }
    .uza-video-area .video-play-btn i {
      padding-left: 5px; }
    .uza-video-area .video-play-btn:focus, .uza-video-area .video-play-btn:hover {
      box-shadow: none;
      background-color: #1583e9; }

.uza-about-us-area {
  position: relative;
  z-index: 1; }
  .uza-about-us-area .about-bg-pattern {
    position: absolute;
    width: 40%;
    left: 0;
    bottom: 0;
    z-index: -1;
    height: 100%; }
    .uza-about-us-area .about-bg-pattern img {
      height: 100%;
      width: auto; }

.uza-video-area .video-play-btn {
  -webkit-transform: scale(0.93);
  -ms-transform: scale(0.93);
  transform: scale(0.93); }
  .uza-video-area .video-play-btn:after {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    content: '';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    top: 0;
    left: 0;
    padding: 0;
    z-index: -1;
    box-shadow: 0 0 0 2px #1583e9;
    opacity: 1;
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
    -webkit-animation: sonarEffect 1.3s ease-out 75ms infinite;
    animation: sonarEffect 1.3s ease-out 75ms infinite; }

@-webkit-keyframes sonarEffect {
  0% {
    opacity: 0.3; }
  40% {
    opacity: 0.5;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5); }
  100% {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    transform: scale(1.5);
    opacity: 0; } }
@-moz-keyframes sonarEffect {
  0% {
    opacity: 0.3; }
  40% {
    opacity: 0.5;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5); }
  100% {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    transform: scale(1.5);
    opacity: 0; } }
@keyframes sonarEffect {
  0% {
    opacity: 0.3; }
  40% {
    opacity: 0.5;
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5); }
  100% {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.1), 0 0 10px 10px #3851bc, 0 0 0 10px rgba(255, 255, 255, 0.5);
    transform: scale(1.5);
    opacity: 0; } }
.uza-why-choose-us-area {
  position: relative;
  z-index: 1; }
  .uza-why-choose-us-area ul li {
    font-size: 16px;
    margin-bottom: 15px;
    color: #707070;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .uza-why-choose-us-area ul li i {
      color: #1583e9;
      margin-right: 15px; }
    .uza-why-choose-us-area ul li:last-child {
      margin-bottom: 0; }

.about-tab-area {
  position: relative;
  z-index: 1; }
  .about-tab-area .nav-tabs .nav-item {
    margin-bottom: 0; }
  .about-tab-area .nav-tabs .nav-link {
    position: relative;
    z-index: 1;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 0 0 15px 0;
    border: none;
    margin-right: 30px;
    background-color: transparent; }
    @media only screen and (max-width: 767px) {
      .about-tab-area .nav-tabs .nav-link {
        letter-spacing: 1px;
        margin-right: 15px;
        font-size: 14px; } }
    .about-tab-area .nav-tabs .nav-link.active:after {
      content: '';
      position: absolute;
      bottom: -1px;
      left: 0;
      background-color: #1583e9;
      width: 100%;
      height: 2px; }

/* 13.0 Service CSS */
.single-service-area {
  position: relative;
  z-index: 1;
  text-align: center; }
  .single-service-area .service-icon {
    background-color: #e7f2fd;
    width: 145px;
    height: 110px;
    font-size: 42px;
    color: #303030;
    text-align: center;
    line-height: 110px;
    border-radius: 80px 200px 200px 362px;
    margin: 0 auto 30px;
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms; }
  .single-service-area h5 {
    font-size: 22px;
    display: block;
    margin-bottom: 15px;
    -webkit-transition-duration: 300ms;
    -o-transition-duration: 300ms;
    transition-duration: 300ms;
    font-weight: 600; }
  .single-service-area:focus .service-icon, .single-service-area:hover .service-icon {
    background-color: #1583e9;
    color: #ffffff;
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
  .single-service-area:focus h5, .single-service-area:hover h5 {
    color: #1583e9; }

.cta-testimonial-cfa-area {
  position: relative;
  z-index: 1; }
  .cta-testimonial-cfa-area .cta-testimonial-cfa-bg-curve {
    position: absolute;
    left: 0;
    top: 0;
    width: auto;
    height: 100%;
    z-index: -1; }

/* :: 14.0 Breadcrumb CSS */
.breadcrumb-area {
  position: relative;
  z-index: 1;
  height: 290px;
  margin-bottom: 40px; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .breadcrumb-area {
      height: 220px; } }
  @media only screen and (max-width: 767px) {
    .breadcrumb-area {
      height: 200px;
      margin-bottom: 0; } }
  .breadcrumb-area .breadcrumb-bg-curve {
    position: absolute;
    width: 80%;
    height: 100%;
    top: 0;
    right: 0;
    z-index: -1;
    background-size: cover;
    text-align: right !important; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .breadcrumb-area .breadcrumb-bg-curve {
        width: 90%; } }
  .breadcrumb-area .title {
    font-size: 60px;
    margin-bottom: 0;
    text-transform: capitalize; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .breadcrumb-area .title {
        font-size: 42px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .breadcrumb-area .title {
        font-size: 36px; } }
    @media only screen and (max-width: 767px) {
      .breadcrumb-area .title {
        font-size: 30px; } }
  .breadcrumb-area .breadcumb--con .breadcrumb {
    padding: 0;
    margin-bottom: 0;
    list-style: none;
    background-color: transparent;
    border-radius: 0; }
    .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item,
    .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item > a,
    .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active {
      font-size: 18px;
      text-transform: capitalize;
      color: #303030;
      font-weight: normal;
      letter-spacing: normal; }
      @media only screen and (max-width: 767px) {
        .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item,
        .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item > a,
        .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active {
          font-size: 14px; } }
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item:focus, .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item:hover,
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item > a:focus,
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item > a:hover,
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active:focus,
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active:hover {
        color: #1583e9; }
    .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active {
      color: #a6a6a6; }
      .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active:focus, .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item.active:hover {
        color: #a6a6a6; }
    .breadcrumb-area .breadcumb--con .breadcrumb .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }
    .breadcrumb-area .breadcumb--con .breadcrumb .page-item:last-child .page-link {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .breadcrumb-area .breadcumb--con .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
      content: "\f105";
      font-family: 'FontAwesome'; }

/* :: 15.0 Blog CSS */
.uza-blog-area {
  position: relative;
  z-index: 1; }
  .uza-blog-area .blog-bg-curve {
    position: absolute;
    width: auto;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1; }

.single-blog-post {
  position: relative;
  z-index: 1;
  -webkit-transition-duration: 500ms;
  -o-transition-duration: 500ms;
  transition-duration: 500ms;
  box-shadow: 0 8px 22px 0 rgba(0, 0, 0, 0.1); }
  .single-blog-post .post-content {
    position: relative;
    z-index: 10;
    padding: 40px;
    background-color: #ffffff;
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms; }
    .single-blog-post .post-content .post-date {
      font-size: 16px;
      text-transform: capitalize;
      color: #a6a6a6;
      display: block;
      margin-bottom: 10px; }
      .single-blog-post .post-content .post-date span {
        font-size: 36px;
        color: #1583e9;
        margin-right: 5px; }
    .single-blog-post .post-content .post-title {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 15px;
      display: block; }
      .single-blog-post .post-content .post-title:focus, .single-blog-post .post-content .post-title:hover {
        color: #1583e9; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-blog-post .post-content .post-title {
          font-size: 18px; } }
      @media only screen and (max-width: 767px) {
        .single-blog-post .post-content .post-title {
          font-size: 20px; } }
    .single-blog-post .post-content .read-more-btn {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
      .single-blog-post .post-content .read-more-btn i {
        color: #1583e9;
        font-size: 20px; }
  .single-blog-post:focus, .single-blog-post:hover {
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
    .single-blog-post:focus .post-content, .single-blog-post:hover .post-content {
      background-color: rgba(255, 255, 255, 0.9); }

.blog-details-content {
  position: relative;
  z-index: 1; }
  .blog-details-content .post-content .post-date {
    font-size: 16px;
    text-transform: capitalize;
    color: #a6a6a6;
    display: block;
    font-weight: 600; }
    .blog-details-content .post-content .post-date span {
      font-size: 36px;
      color: #1583e9; }
  .blog-details-content .post-content h2 {
    color: #303030;
    font-size: 60px;
    display: block;
    margin-bottom: 15px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .blog-details-content .post-content h2 {
        font-size: 42px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .blog-details-content .post-content h2 {
        font-size: 36px; } }
    @media only screen and (max-width: 767px) {
      .blog-details-content .post-content h2 {
        font-size: 24px; } }
  .blog-details-content h1,
  .blog-details-content h2,
  .blog-details-content h3,
  .blog-details-content h4,
  .blog-details-content h5,
  .blog-details-content h6 {
    margin-bottom: 15px; }
  @media only screen and (max-width: 767px) {
    .blog-details-content h2 {
      font-size: 24px; } }
  .blog-details-content p {
    font-size: 18px;
    color: #a6a6a6;
    font-weight: 400; }
    @media only screen and (max-width: 767px) {
      .blog-details-content p {
        font-size: 16px; } }

.uza-pagination {
  position: relative;
  z-index: 1; }
  .uza-pagination .pagination .page-item .page-link {
    width: 40px;
    height: 40px;
    border-radius: 3px;
    padding: 0;
    line-height: 38px;
    margin: 0 5px;
    text-align: center;
    background-color: transparent;
    color: #707070;
    font-size: 16px; }
    .uza-pagination .pagination .page-item .page-link:focus, .uza-pagination .pagination .page-item .page-link:hover {
      background-color: #1583e9;
      border-color: #1583e9;
      color: #ffffff; }
  .uza-pagination .pagination .page-item.active .page-link {
    background-color: #1583e9;
    border-color: #1583e9;
    color: #ffffff; }

.comment_area {
  border-top: 1px solid #ebebeb;
  border-bottom: 1px solid #ebebeb;
  padding-top: 50px;
  padding-bottom: 50px; }
  .comment_area .title {
    margin-bottom: 30px;
    font-size: 30px; }
    @media only screen and (max-width: 767px) {
      .comment_area .title {
        font-size: 24px; } }
  .comment_area .comment-content {
    position: relative;
    z-index: 1;
    margin-bottom: 30px; }
    .comment_area .comment-content .comment-author {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 70px;
      flex: 0 0 70px;
      width: 70px;
      max-width: 70px;
      margin-right: 20px;
      border-radius: 50%; }
      @media only screen and (max-width: 767px) {
        .comment_area .comment-content .comment-author {
          -webkit-box-flex: 0;
          -ms-flex: 0 0 50px;
          flex: 0 0 50px;
          width: 50px;
          max-width: 50px;
          margin-right: 10px; } }
      .comment_area .comment-content .comment-author img {
        border-radius: 50%; }
    .comment_area .comment-content .comment-meta .post-date {
      color: #1583e9;
      font-size: 12px;
      text-transform: uppercase;
      display: block;
      margin-bottom: 5px;
      font-weight: 600; }
    .comment_area .comment-content .comment-meta h5 {
      margin-bottom: 5px; }
      @media only screen and (max-width: 767px) {
        .comment_area .comment-content .comment-meta h5 {
          font-size: 16px; } }
    .comment_area .comment-content .comment-meta p {
      color: #303030;
      font-size: 16px;
      font-weight: 500; }
      @media only screen and (max-width: 767px) {
        .comment_area .comment-content .comment-meta p {
          font-size: 14px; } }
    .comment_area .comment-content .comment-meta a.like,
    .comment_area .comment-content .comment-meta a.reply {
      display: inline-block;
      padding: 5px 15px 3px;
      font-size: 12px;
      font-weight: 600;
      border: 1px solid #ebebeb;
      text-transform: uppercase; }
      .comment_area .comment-content .comment-meta a.like:focus, .comment_area .comment-content .comment-meta a.like:hover,
      .comment_area .comment-content .comment-meta a.reply:focus,
      .comment_area .comment-content .comment-meta a.reply:hover {
        border-color: #1583e9;
        background-color: #1583e9;
        color: #ffffff; }
  .comment_area .children {
    margin-left: 50px; }
    @media only screen and (max-width: 767px) {
      .comment_area .children {
        margin-left: 20px; } }
    .comment_area .children .single_comment_area:last-of-type {
      margin-bottom: 0; }

.uza-blockquote {
  position: relative;
  z-index: 1;
  margin-bottom: 30px;
  margin-top: 30px; }
  .uza-blockquote .icon {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 70px;
    flex: 0 0 70px;
    max-width: 70px;
    width: 70px; }
    @media only screen and (max-width: 767px) {
      .uza-blockquote .icon {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50px;
        flex: 0 0 50px;
        max-width: 50px;
        width: 50px; } }
    .uza-blockquote .icon i {
      font-size: 60px;
      color: #1583e9; }
      @media only screen and (max-width: 767px) {
        .uza-blockquote .icon i {
          font-size: 30px; } }
  .uza-blockquote .text h5 {
    font-size: 30px;
    font-style: italic;
    margin-bottom: 15px;
    line-height: 1.6;
    font-weight: 400; }
    @media only screen and (max-width: 767px) {
      .uza-blockquote .text h5 {
        font-size: 20px; } }
  .uza-blockquote .text h6 {
    font-size: 30px;
    margin-bottom: 0; }
    @media only screen and (max-width: 767px) {
      .uza-blockquote .text h6 {
        font-size: 20px; } }

.uza-post-share {
  position: relative;
  z-index: 1; }
  @media only screen and (max-width: 767px) {
    .uza-post-share h6 {
      font-size: 10px;
      margin-right: 10px !important; } }
  .uza-post-share .social-info- a {
    display: inline-block;
    color: #303030;
    font-size: 16px;
    margin-right: 15px; }
    .uza-post-share .social-info- a:last-child {
      margin-right: 0; }
    .uza-post-share .social-info- a:focus, .uza-post-share .social-info- a:hover {
      color: #1583e9; }
    @media only screen and (max-width: 767px) {
      .uza-post-share .social-info- a {
        font-size: 12px;
        margin-right: 5px; } }

.post-catagories {
  position: relative;
  z-index: 1;
  margin: 50px 0; }
  .post-catagories ul li a {
    display: inline-block;
    padding: 8px 20px;
    border: 1px solid #ebebeb;
    background-color: #ffffff;
    color: #303030;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 600;
    margin: 3px; }
    .post-catagories ul li a:focus, .post-catagories ul li a:hover {
      background-color: #1583e9;
      color: #ffffff; }
    @media only screen and (max-width: 767px) {
      .post-catagories ul li a {
        font-size: 10px;
        padding: 5px 10px; } }

.related-news-area {
  position: relative;
  z-index: 1;
  padding-top: 50px;
  border-top: 1px solid #ebebeb;
  margin-bottom: 20px; }

/* :: 16.0 CTA CSS */
.uza-cta-area {
  position: relative;
  z-index: 1; }

.cta-content {
  position: relative;
  z-index: 1; }
  .cta-content h2 {
    font-size: 48px;
    margin-bottom: 10px; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .cta-content h2 {
        font-size: 36px; } }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .cta-content h2 {
        font-size: 42px; } }
    @media only screen and (max-width: 767px) {
      .cta-content h2 {
        font-size: 30px; } }
  .cta-content h6 {
    font-size: 18px;
    margin-bottom: 0;
    color: #a6a6a6; }
  .cta-content .call-now-btn a {
    display: inline-block;
    font-size: 30px;
    color: #1583e9; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .cta-content .call-now-btn a {
        font-size: 22px; } }
    @media only screen and (max-width: 767px) {
      .cta-content .call-now-btn a {
        font-size: 24px; } }
    .cta-content .call-now-btn a span {
      font-size: 18px;
      color: #a6a6a6; }
      @media only screen and (max-width: 767px) {
        .cta-content .call-now-btn a span {
          font-size: 14px; } }

/* :: 17.0 CFA CSS */
.single-cf-area {
  position: relative;
  z-index: 1; }
  .single-cf-area h2 {
    margin-bottom: 0;
    font-size: 60px;
    color: #1583e9;
    margin-right: 20px; }
  .single-cf-area .cf-text h6 {
    margin-bottom: 0;
    text-transform: uppercase;
    font-weight: 600; }
  .single-cf-area .bg-icon {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: -1;
    font-size: 60px;
    color: #eaeaea; }

/* :: 18.0 Team CSS */
.single-team-slide {
  position: relative;
  z-index: 1;
  margin-bottom: 50px; }
  .single-team-slide img {
    position: relative;
    z-index: 1;
    width: 100%; }
  .single-team-slide .overlay-effect {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background-color: rgba(231, 242, 253, 0.9);
    padding: 40px 30px;
    opacity: 0;
    visibility: hidden; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-team-slide .overlay-effect {
        padding: 30px; } }
    @media only screen and (max-width: 767px) {
      .single-team-slide .overlay-effect {
        padding: 30px; } }
    .single-team-slide .overlay-effect h6 {
      font-size: 14px;
      color: #1583e9;
      margin-bottom: 5px;
      text-transform: uppercase; }
    .single-team-slide .overlay-effect h4 {
      display: block;
      margin-bottom: 10px;
      font-weight: 600; }
      @media only screen and (max-width: 767px) {
        .single-team-slide .overlay-effect h4 {
          margin-bottom: 5px;
          font-size: 20px; } }
    .single-team-slide .overlay-effect p {
      margin-bottom: 0;
      line-height: 1.6; }
      @media only screen and (max-width: 767px) {
        .single-team-slide .overlay-effect p {
          font-size: 14px; } }
  .single-team-slide .team-social-info {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    bottom: 40px;
    left: 80px;
    z-index: 100;
    visibility: hidden;
    opacity: 0; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-team-slide .team-social-info {
        bottom: 30px; } }
    @media only screen and (max-width: 767px) {
      .single-team-slide .team-social-info {
        bottom: 30px; } }
    .single-team-slide .team-social-info a {
      display: inline-block;
      color: #ffffff;
      margin-right: 5px;
      background-color: #1583e9;
      width: 40px;
      height: 40px;
      border-radius: 20px;
      text-align: center;
      line-height: 40px; }
      .single-team-slide .team-social-info a.facebook {
        background-color: #4c60ac; }
      .single-team-slide .team-social-info a.twitter {
        background-color: #00bae3; }
      .single-team-slide .team-social-info a.pinterest {
        background-color: #d91a18; }
      .single-team-slide .team-social-info a.instagram {
        background-color: #0085d7; }
      .single-team-slide .team-social-info a.youtube {
        background-color: #e20000; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-team-slide .team-social-info a {
          width: 30px;
          height: 30px;
          line-height: 30px;
          font-size: 14px; } }
      @media only screen and (max-width: 767px) {
        .single-team-slide .team-social-info a {
          width: 30px;
          height: 30px;
          line-height: 30px;
          font-size: 14px; } }
  .single-team-slide:focus, .single-team-slide:hover {
    -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
    box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15); }
    .single-team-slide:focus .overlay-effect, .single-team-slide:hover .overlay-effect {
      opacity: 1;
      visibility: visible; }
    .single-team-slide:focus .team-social-info, .single-team-slide:hover .team-social-info {
      visibility: visible;
      opacity: 1;
      left: 30px; }

.team-sildes {
  position: relative;
  z-index: 1; }
  .team-sildes .owl-dots {
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center; }
    .team-sildes .owl-dots .owl-dot {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 8px;
      flex: 0 0 8px;
      max-width: 8px;
      margin: 0 5px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #e7f2fd; }
      .team-sildes .owl-dots .owl-dot.active {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 38px;
        flex: 0 0 38px;
        max-width: 38px;
        width: 38px;
        border-radius: 15px;
        background-color: #1583e9; }

/* :: 19.0 Footer CSS */
.footer-area {
  position: relative;
  z-index: 1; }

.single-footer-widget {
  position: relative;
  z-index: 1; }
  .single-footer-widget .widget-title {
    color: #303030;
    margin-bottom: 20px;
    display: block;
    font-weight: 600; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .single-footer-widget p {
      font-size: 14px; } }
  .single-footer-widget .footer-social-info a {
    display: inline-block;
    color: #ffffff;
    margin-right: 5px;
    background-color: #1583e9;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    text-align: center;
    line-height: 40px; }
    .single-footer-widget .footer-social-info a.facebook {
      background-color: #4c60ac; }
    .single-footer-widget .footer-social-info a.twitter {
      background-color: #00bae3; }
    .single-footer-widget .footer-social-info a.pinterest {
      background-color: #d91a18; }
    .single-footer-widget .footer-social-info a.instagram {
      background-color: #0085d7; }
    .single-footer-widget .footer-social-info a.youtube {
      background-color: #e20000; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-footer-widget .footer-social-info a {
        width: 30px;
        height: 30px;
        line-height: 30px;
        font-size: 14px; } }
  .single-footer-widget .our-link {
    position: relative;
    z-index: 1; }
    .single-footer-widget .our-link li a {
      position: relative;
      z-index: 1;
      font-size: 16px;
      color: #707070;
      margin-bottom: 15px;
      display: block;
      font-weight: normal; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-footer-widget .our-link li a {
          font-size: 14px; } }
      .single-footer-widget .our-link li a::after {
        -webkit-transition-duration: 500ms;
        -o-transition-duration: 500ms;
        transition-duration: 500ms;
        position: absolute;
        top: 50%;
        left: 0;
        width: 0;
        height: 3px;
        background-color: #1583e9;
        content: '';
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%); }
      .single-footer-widget .our-link li a:focus, .single-footer-widget .our-link li a:hover {
        color: #1583e9;
        padding-left: 25px; }
        .single-footer-widget .our-link li a:focus::after, .single-footer-widget .our-link li a:hover::after {
          width: 15px; }
    .single-footer-widget .our-link li:last-child a {
      margin-bottom: 0; }
  .single-footer-widget .footer-content {
    position: relative;
    z-index: 1; }
    .single-footer-widget .footer-content h3 {
      color: #1583e9; }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .single-footer-widget .footer-content h3 {
          font-size: 20px; } }

.copywrite-text {
  position: relative;
  z-index: 1;
  margin-top: 20px; }
  .copywrite-text p {
    font-size: 16px;
    color: #a6a6a6;
    margin-bottom: 0; }
    .copywrite-text p a {
      color: #a6a6a6; }
      .copywrite-text p a:focus, .copywrite-text p a:hover {
        color: #1583e9; }

/* :: 20.0 Contact Area */
.uza-contact-area {
  position: relative;
  z-index: 1; }
  .uza-contact-area .google-maps {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 500px; }
    @media only screen and (max-width: 767px) {
      .uza-contact-area .google-maps {
        height: 280px; } }
    .uza-contact-area .google-maps iframe {
      width: 100%;
      height: 100%;
      border: none; }

.single-contact-card {
  position: relative;
  z-index: 1; }
  .single-contact-card h4 {
    margin-bottom: 15px; }
  .single-contact-card h3 {
    color: #1583e9; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-contact-card h3 {
        font-size: 20px; } }
  .single-contact-card h6 {
    margin-bottom: 0;
    color: #707070;
    line-height: 1.5;
    font-weight: 400; }
    @media only screen and (max-width: 767px) {
      .single-contact-card h6 {
        font-size: 14px; } }

  .uza-contact-form .form-control {
    width: 100%;
    margin-left: 20em;
    height: 50px;
    padding: 0 20px;
    border-radius: 30px;
    color: #a6a6a6;
    font-size: 16px;
    text-align: center; }
    .uza-contact-form .form-control:focus {
      box-shadow: none;
      border-color: #1583e9; }
  .uza-contact-form textarea.form-control {
    height: 110px;
    padding: 20px;
  }
 
  
  .uza-contact-form .forme-control {
    width: 100%;
    margin-left: 25em;
    height: 50px;
    padding: 0 20px;
    border-radius: 30px;
    color: #a6a6a6;
    font-size: 16px;
    text-align: center; }
    .uza-contact-form .forme-control:focus {
      box-shadow: none;
      border-color: #1583e9; }
  .uza-contact-form textarea.forme-control {
    height: 110px;
    padding: 20px;
  }



    body{
      background-color:transparent;
    }
    .fill{
      background-image: url('https://source.unsplash.com/random/150x150');
      position: relative;
      height: 150px;
      width: 150px;
      top: 5px;
      cursor: pointer;
    }
    .empty{
      display: inline-block;
      height:160px ;
      width: 160px;
      margin: 10px;
      border: 3px #1583e9 solid;
      background: white;
    }
    .hold {
      border:  double #ccc 4px;
    }
    .hovered {
      background: #f4f4f4;
      border-style: dashed;
    }
    .invisible {
      display: none;
    }
    .lien{
      margin-left: 34em;
    }
    .lienn{
      margin-left: 34em;
    }
.forme-controle {
margin-left: 25em;
}
.form-controle{
  margin-left: 39em;
}
/*# sourceMappingURL=style.css.map */
        </style>
    </body>
</html>