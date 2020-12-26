
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
							<form action="index.html" method="post">
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
								<li><a href="./sign-in.php">Sign in</a></li>
								<li class="current-item"><a href="./sign-up.php">Sign up</a></liclass="current-item">
							</ul>
	
							
						</div>
						<!-- Nav End -->
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
					<h1 style="text-align: left;" style="margin :10em">Sign-Up</h1>
					<div class="breadcumb--con">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-n.php"><i class="fa fa-home"></i> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sign-up</li>
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
						<form class = "form-detail" id="myform" action="adddata.php" method="post">
							<fieldset>
								<br/>
								<div class="                                                                                                                                                                                         ">
									<div class="uza-contact-form mb-80">
										<div class="contact-heading mb-50">
											<h4 style="text-align: center;">Thank you for your interest. <br>Please fill out the form below to inquire about our work in Digital.</h4>
										</div >
											<div class="row" style="margin-left: 300px">
												<div class="col-lg-6">	
													<div class="form-group">
														<input type="text" class="form-control mb-30" name="full-name" id="name" placeholder="nom complete">
													</div>
													<div class="form-group">
														<input type="mail" class="form-control mb-30" name="Email" id="Email" placeholder="Email"> 
													</div>	
                                                    <div class ="form-group">
                                                        <input class="form-control mb-30" type="tel"name="tel" id ="tel"  placeholder = "Numero de Telephone ">
													</div>
                                                    <div class = "form-group">
                                                        <label for="naissance" class = "forme-controle" >Votre date de naissance :</label>
                                                        <input class="form-control mb-30" type ="date" id="naissance" name = "naissance">
													</div>
                                                    <div class = "form-group" id="sex">
                                                        <label for="Sexe" class = "forme-controle" >Votre sexe est : </label><br>
                                                        <input type = "radio" class = "forme-controle" id="Homme" name ="sexe" value = "Homme" >
                                                        <label for = "Homme" > Homme </label><br>
                                                        <input type = "radio" class = "forme-controle" id="Femme" name ="sexe" value = "Femme" >
                                                        <label for = "Femme" > Femme </label> <br>
													</div>
													    <input type = "password" class="form-control mb-30" id = "pass" name ="pass" placeholder = "password"> 
													    <input type = "password" class="form-control mb-30" id = "pass1" name ="pass1" placeholder = "confirmer password"> 
												</div>
												
										    </div>	
								<div class="div1" style="margin-left: 300px">
									<a href="sign-in.php" class="lien">I am already a member</a><br/><br/>
                                
                                <div class="div1">
									<button href="" type="submit" id="btn" class="btn uza-btn btn-2 mt-4" >Sign-in</button>
									<a href="" class="btn uza-btn btn-2 mt-4">Cancel</a>
									
								</div><br/>
                            
							</fieldset>	
						</form>
					</div>
                </div>
            </div>
        </div>
        
        <!--
        <script src="Code JS.js"></script>
        -->
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/uza.bundle.js"></script>
        <script src="js/default-assets/active.js"></script>
        
    </body>
