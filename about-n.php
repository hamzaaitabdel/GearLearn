<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>GerLearn</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
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
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i
                                class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index-n.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control"
                                placeholder="Search and hit enter...">
                            <button type="submit" id="search">Search</button>
                            <script>var s = document.querySelector('input[type="search"]'),
                                    p = document.querySelector('p'),
                                    find = function () {
                                        var words = p.innerText.split(' '),
                                            i = words.length,
                                            word = '';

                                        while (--i) {
                                            word = words[i];
                                            if (word.toLowerCase() == s.value.toLowerCase()) {
                                                words[i] = '<span class="highlight">' + word + "</span>";
                                            }
                                            else {

                                            }
                                        }

                                        p.innerHTML = words.join(' ');
                                    }

                                s.addEventListener('keydown', find, false);
                                s.addEventListener('keyup', find, false);</script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index-n.php"><img src="./img/core-img/logo.png" alt=""></a>

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
                                <li><a href="./index-n.php">Home</a></li>
                                <li><a href="./service-n.php">Services</a></li>
                                <li class="current-item"><a href="./about-n.php">About</a></li>
                                <li><a href="./contact-n.php">Contact</a></li>
                            </ul>
  <!-- Get A Quote -->

  <style>
                                body {
                                    font-family: Arial, Helvetica, sans-serif;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none;
                                    /* Hidden by default */
                                    position: fixed;
                                    /* Stay in place */
                                    z-index: 1;
                                    /* Sit on top */
                                    padding-top: 100px;
                                    /* Location of the box */
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    /* Full width */
                                    height: 100%;
                                    /* Full height */
                                    overflow: auto;
                                    /* Enable scroll if needed */
                                    background-color: rgb(0, 0, 0);
                                    /* Fallback color */
                                    background-color: rgba(0, 0, 0, 0.4);
                                    /* Black w/ opacity */
                                }

                                /* Modal Content */
                                .modal-content {
                                    background-color: #fefefe;
                                    margin: auto;
                                    padding: 20px;
                                    border: 1px solid #888;
                                    width: 80%;
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaaaaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: #000;
                                    text-decoration: none;
                                    cursor: pointer;
                                }
                            </style>
                            </head>

                            <body>


                                <!-- Trigger/Open The Modal -->
                                <div class="get-a-quote ml-4 mr-3">
                                    <a id="myBtn" class="btn uza-btn">Get A Quote</a>

                                </div>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->


                                    <div class="author-quote-wrap">
                                        <span class="close1">&times;</span>
                                        <input class="toggle-quote" type="radio" id="AQ-1" name="quote" checked>
                                        <div class="author-quote">
                                            <div class="pull-left author-photo photo-a animated bounceInLeft">
                                                <div class="navigate">
                                                    <label class="label left" for="AQ-5">&nbsp;</label>
                                                    <label class="label right" for="AQ-2">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="pull-right quote-content">
                                                <div class="clearfix animated zoomIn">
                                                    <div class="quote-like pull-right"><span class="love"></span> 423
                                                    </div>
                                                </div>
                                                <div class="quote-text animated rotateInDownRight">Kinder<br>und
                                                    Betrunkene<br>sagen immer<br>die Wahrheit.</div>
                                            </div>
                                        </div>

                                        <input class="toggle-quote" type="radio" id="AQ-2" name="quote">
                                        <div class="author-quote">
                                            <div class="pull-left author-photo photo-b animated bounceInLeft">
                                                <div class="navigate">
                                                    <label class="label left" for="AQ-1">&nbsp;</label>
                                                    <label class="label right" for="AQ-3">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="pull-right quote-content">
                                                <div class="clearfix animated zoomIn">
                                                    <div class="quote-like pull-right"><span class="love"></span> 512
                                                    </div>
                                                </div>
                                                <div class="quote-text animated zoomInDown">Was ich
                                                    nicht<br>weiß,<br>macht mich nicht<br>heiß.</div>

                                            </div>
                                        </div>

                                        <input class="toggle-quote" type="radio" id="AQ-3" name="quote">
                                        <div class="author-quote">
                                            <div class="pull-left author-photo photo-c animated bounceInLeft">
                                                <div class="navigate">
                                                    <label class="label left" for="AQ-2">&nbsp;</label>
                                                    <label class="label right" for="AQ-4">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="pull-right quote-content">
                                                <div class="clearfix animated zoomIn">
                                                    <div class="quote-like pull-right"><span class="love"></span> 618
                                                    </div>
                                                </div>
                                                <div class="quote-text animated bounceInRight">Was Hänschen<br>nicht
                                                    lernt,<br>lernt Hans<br>nimmermehr.</div>

                                            </div>
                                        </div>

                                        <input class="toggle-quote" type="radio" id="AQ-4" name="quote">
                                        <div class="author-quote">
                                            <div class="pull-left author-photo photo-d animated bounceInLeft">
                                                <div class="navigate">
                                                    <label class="label left" for="AQ-3">&nbsp;</label>
                                                    <label class="label right" for="AQ-5">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="pull-right quote-content">
                                                <div class="clearfix animated zoomIn">
                                                    <div class="quote-like pull-right" style="margin-right: 0px;"><span
                                                            class="love"></span> 741</div>
                                                </div>
                                                <div class="quote-text animated lightSpeedIn">Nur die
                                                    Harten<br>kommen<br>in den Garten.</div>

                                            </div>
                                        </div>

                                        <input class="toggle-quote" type="radio" id="AQ-5" name="quote">
                                        <div class="author-quote">
                                            <div class="pull-left author-photo photo-e animated bounceInLeft">
                                                <div class="navigate">
                                                    <label class="label left" for="AQ-4">&nbsp;</label>
                                                    <label class="label right" for="AQ-1">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="pull-right quote-content">
                                                <div class="clearfix animated zoomIn">
                                                    <div class="quote-like pull-right"><span class="love"></span> 824
                                                    </div>
                                                </div>
                                                <div class="quote-text animated flipInX">Alles hat<br>ein Ende,<br>nur
                                                    die Wurst<br>hat zwei</div>

                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        body {
                                            margin: 0;
                                            color: #444;
                                            background: transparent;
                                            font: 300 18px/18px Roboto, sans-serif;
                                        }

                                        *,
                                        :after,
                                        :before {
                                            box-sizing: border-box
                                        }

                                        .pull-left {
                                            float: left
                                        }

                                        .pull-right {
                                            float: right
                                        }

                                        .clearfix:after,
                                        .clearfix:before {
                                            content: '';
                                            display: table
                                        }

                                        .clearfix:after {
                                            clear: both;
                                            display: block
                                        }

                                        .author-quote-wrap .author-quote,
                                        .author-quote-wrap .author-photo:before {
                                            top: 0;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;
                                            position: absolute;
                                        }

                                        .author-quote-wrap {
                                            color: #fff;
                                            width: 100%;
                                            overflow: hidden;
                                            max-width: 560px;
                                            min-height: 390px;
                                            margin: 50px auto 0;
                                            background: #17a0ff;
                                            position: relative;
                                            box-shadow: 0 16px 28px 0 #1583E9, 0 25px 55px 0 #1583E9;
                                        }

                                        .author-quote-wrap .author-quote {
                                            display: none;
                                        }

                                        .author-quote-wrap .toggle-quote {
                                            display: none;
                                        }

                                        .author-quote-wrap .toggle-quote:checked+.author-quote {
                                            display: block;
                                        }

                                        .author-quote-wrap .author-quote a {
                                            color: inherit;
                                            text-decoration: none;
                                        }

                                        .author-quote-wrap .author-photo,
                                        .author-quote-wrap .quote-content {
                                            height: 100%;
                                            position: relative;
                                        }

                                        .author-quote-wrap .author-photo {
                                            width: 140px;
                                            background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            quotes: '\201C''\201D''\2018''\2019';
                                        }

                                        .author-quote-wrap .author-photo.photo-a {
                                            background-image: url(./photo1.jpg);
                                        }

                                        .author-quote-wrap .author-photo.photo-b {
                                            background-image: url(./photo2.jpg);
                                        }

                                        .author-quote-wrap .author-photo.photo-c {
                                            background-image: url(./photo3.jpg);
                                        }

                                        .author-quote-wrap .author-photo.photo-d {
                                            background-image: url(./photo4.jpg);
                                        }

                                        .author-quote-wrap .author-photo.photo-e {
                                            background-image: url(./photo5.jpg);
                                        }

                                        .author-quote-wrap .author-photo:before {
                                            content: '';
                                            background: rgba(22, 160, 255, .5);
                                        }

                                        .author-quote-wrap .author-photo:after {
                                            top: 15px;
                                            left: 60px;
                                            font-size: 72px;
                                            line-height: 72px;
                                            position: absolute;
                                            font-family: serif;
                                            content: open-quote;
                                        }

                                        .author-quote-wrap .author-photo .navigate {
                                            left: 15px;
                                            z-index: 10;
                                            right: 15px;
                                            bottom: 15px;
                                            position: absolute;
                                            text-align: center;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label {
                                            width: 15px;
                                            height: 30px;
                                            cursor: pointer;
                                            position: relative;
                                            display: inline-block;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.left {
                                            left: -30px;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.right {
                                            right: -30px;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.disabled {
                                            cursor: not-allowed;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label:before,
                                        .author-quote-wrap .author-photo .navigate .label:after {
                                            content: '';
                                            height: 2px;
                                            width: 15px;
                                            background: #ccc;
                                            position: absolute;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label:before {
                                            top: 62%;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label:after {
                                            bottom: 62%;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.left:before,
                                        .author-quote-wrap .author-photo .navigate .label.right:after {
                                            transform: rotate(45deg);
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.right:before,
                                        .author-quote-wrap .author-photo .navigate .label.left:after {
                                            transform: rotate(-45deg);
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.left:before,
                                        .author-quote-wrap .author-photo .navigate .label.left:after {
                                            left: 0;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.right:before,
                                        .author-quote-wrap .author-photo .navigate .label.right:after {
                                            right: 0;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label.disabled:before,
                                        .author-quote-wrap .author-photo .navigate .label.disabled:after,
                                        .author-quote-wrap .author-photo .navigate .label.disabled:hover:before,
                                        .author-quote-wrap .author-photo .navigate .label.disabled:hover:after {
                                            background: #bbb;
                                        }

                                        .author-quote-wrap .author-photo .navigate .label:hover:before,
                                        .author-quote-wrap .author-photo .navigate .label:hover:after {
                                            background: #fff;
                                        }

                                        .author-quote-wrap .quote-content {
                                            padding: 15px;
                                            width: calc(560px - 140px);
                                        }

                                        .quote-content .quote-like {
                                            font-size: 12px;
                                            font-weight: 400;
                                            padding: 4px 8px;
                                            border-radius: 15px;
                                            display: inline-block;
                                            background: rgba(0, 0, 0, .2);
                                        }

                                        .quote-content .quote-like .love {
                                            width: 18px;
                                            height: 10px;
                                            position: relative;
                                            display: inline-block;
                                        }

                                        .quote-content .quote-like .love:before,
                                        .quote-content .quote-like .love:after {
                                            top: 0;
                                            left: 7px;
                                            content: '';
                                            width: 7px;
                                            height: 12px;
                                            background: #fff;
                                            position: absolute;
                                            transform: rotate(-45deg);
                                            transform-origin: 0 100%;
                                            border-radius: 20px 20px 0 0;
                                        }

                                        .quote-content .quote-like .love:after {
                                            left: 0;
                                            transform: rotate(45deg);
                                            transform-origin: 100% 100%;
                                        }

                                        .quote-content .quote-text,
                                        .quote-content .quote-author {
                                            text-transform: uppercase;
                                        }

                                        .quote-content .quote-text {
                                            font-size: 48px;
                                            font-weight: 900;
                                            line-height: 55px;
                                        }

                                        .quote-content .quote-author {
                                            bottom: 15px;
                                            font-size: 14px;
                                            font-weight: 500;
                                            position: absolute;
                                        }

                                        .quote-content .quote-author:before {
                                            content: '- ';
                                        }
                                    </style>


                                </div>

                                <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");

                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");

                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close1")[0];

                                    // When the user clicks the button, open the modal 
                                    btn.onclick = function () {
                                        modal.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function (event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                                </script>

                            </body>


                            <!-- Login / Register -->

                            <div class="classynav">
                                <ul id="nav">
                                    <li id="#current_yes"><h class="search-icon" id="user" data-toggle="modal" href="#">
                                              <i  class="icon_profile" id="username"></i><?php echo $_SESSION['name']; ?></h>
                                           
                                        <ul class="dropdown">
                                            
                                            <style>
                                                body {
                                                    font-family: Arial, Helvetica, sans-serif;
                                                }

                                                /* The Modal (background) */
                                                .modal {
                                                    display: none;
                                                    /* Hidden by default */
                                                    position: fixed;
                                                    /* Stay in place */
                                                    z-index: 1;
                                                    /* Sit on top */
                                                    padding-top: 100px;
                                                    /* Location of the box */
                                                    left: 0;
                                                    top: 0;
                                                    width: 100%;
                                                    /* Full width */
                                                    height: 100%;
                                                    /* Full height */
                                                    overflow: auto;
                                                    /* Enable scroll if needed */
                                                    background-color: rgb(0, 0, 0);
                                                    /* Fallback color */
                                                    background-color: rgba(0, 0, 0, 0.4);
                                                    /* Black w/ opacity */
                                                }

                                                /* Modal Content */
                                                .modal-content {
                                                    background-color: #fefefe;
                                                    margin: auto;
                                                    padding: 20px;
                                                    border: 1px solid #888;
                                                    width: 80%;
                                                }

                                                /* The Close Button */
                                                .close {
                                                    color: #aaaaaa;
                                                    float: right;
                                                    font-size: 28px;
                                                    font-weight: bold;
                                                }

                                                .close:hover,
                                                .close:focus {
                                                    color: #000;
                                                    text-decoration: none;
                                                    cursor: pointer;
                                                }
                                            </style>
                                            <li><a  id="myBtn1">- Profile</a></li>
                                            <li><a href="log-out.php">- Deconnexion</a></li>
                                        </ul>
                                    
                                </ul>
                                <!-- The Modal -->
                                <div id="myModal1" class="modal">

                                    <!-- Modal content -->
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <style>
                                        .card {
                                            box-shadow: 0 4px 8px 0 rgb(0, 0, 0);
                                            max-width: 300px;
                                            margin: auto;
                                            text-align: center;
                                            font-family: arial;
                                        }

                                        .title {
                                            color: grey;
                                            font-size: 18px;
                                        }

                                        button {
                                            border: none;
                                            outline: 0;
                                            display: inline-block;
                                            padding: 8px;
                                            color: white;
                                            background-color: #1583E9;
                                            text-align: center;
                                            cursor: pointer;
                                            width: 100%;
                                            font-size: 18px;
                                        }

                                        a {
                                            text-decoration: none;
                                            font-size: 22px;
                                            color: #1583E9;
                                        }

                                        button:hover,
                                        a:hover {
                                            opacity: 0.7;
                                        }
                                    </style>






                                    <div class="card">

                                        <img src="man.jpg" alt="John" style="width:100%">
                                        <h1><?php echo $_SESSION['name']; ?></h1>
                                        <p class="title"><?php echo $_SESSION['Email']; ?></p>
                                        <p class="title"><?php echo $_SESSION['score']; ?></p>
                                        <p><?php echo $_SESSION['birthday']; ?></p>
                                        
                                        <p ><button id="myBtn2"><li></li>Deconnexion </button></p>
                                        <script>
                                            var btn2 = document.getElementById('myBtn2');
                                            btn2.addEventListener('click', function() {
                                             document.location.href = 'log-out.php';
                                               });
                                        </script>
                                    </div>


                                    <script>

                                        // Get the modal
                                        var modal1 = document.getElementById("myModal1");

                                        // Get the button that opens the modal
                                        var btn1 = document.getElementById("myBtn1");

                                        // Get the <span> element that closes the modal
                                        var span1 = document.getElementsByClassName("close")[0];

                                        // When the user clicks the button, open the modal 
                                        btn1.onclick = function () {
                                            modal1.style.display = "block";
                                        }

                                        // When the user clicks on <span> (x), close the modal
                                        span1.onclick = function () {
                                            modal1.style.display = "none";
                                        }

                                        // When the user clicks anywhere outside of the modal, close it
                                        window.onclick = function (event) {
                                            if (event.target == modal1) {
                                                modal1.style.display = "none";
                                            }
                                        }
                                    </script>
                                </div>
                           
                                    <!-- Search Icon -->
                                    <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                        <i class="icon_search"></i>
                                    </div>
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
                    <div class="breadcumb--con">
                        <h2 class="title">About</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
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

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/24.jpg" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>Our Mission</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">CREATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> ANALYSIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">STRATEGY</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <a href="./contact.html" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <a href="./contact.html" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet gubergren no sea takimata. Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <p>sanctus est Lorem ipsum dolor sit amet ipsumlor eut consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore et dolore magna liquyam erat.</p>
                                        <a href="./contact.html" class="btn uza-btn mt-30">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Choose Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-content mb-80">
                        <div class="section-heading mb-4">
                            <h2>Why Choose Us</h2>
                            <p>We’re The Way To Master German.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> New And Entertaining Ways Of Learning</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Several Exercices With Divert Difficulties Level</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Interactif Exercices To Get You In Touch With German</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Generating Best Results Through Enjoyement</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Extensive Marketing Research Generates Valuable Insights</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> We are Results-Driven, Oriented, We deliver results</li>
                        </ul>
                    </div>
                </div>
                <!-- Choose Us Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mb-80">
                        <img class="w-100" src="img/bg-img/22.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Why Choose Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Team of Experts</h2>
                        <p>We stay on top of our industry by being experts in yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel">

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/21.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Developper</h6>
                            <h4>Hamza Ait Abdelouahab</h4>
                            <p>He created exercices pages.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/18.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Developper</h6>
                            <h4>Mohamed Wail Homan</h4>
                            <p>He created all the digramms related to the project.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/19.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Developper</h6>
                            <h4>Afnane Tilali</h4>
                            <p>She created the sign up and sign in pages.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/20.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Developper</h6>
                            <h4>Ilias Ouztato</h4>
                            <p>He choosed exercices and participed in exercices pages developpment.</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/21.jpg" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Scrum Master</h6>
                            <h4>Khalid Naimi</h4>
                            <p>He created the homepage and the database .</p>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-80"></div>
        </div>
    </section>
    <!-- ***** Team Member Area End ***** -->

       <!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Contact Us</h4>

                    <!-- Footer Content -->
                    <div class="footer-content mb-15">
                        <h3>(+212) 1234 5678</h3>
                        <p>La présidence de l'umi ,Meknes 50000 <br> gerlearn2000@gmail.com</p>
                    </div>
                    <p class="mb-0">Mon - Fri: 8:30 - 18:45 <br>
                        Closed on Weekends</p>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Quick Link</h4>

                    <!-- Nav -->
                    <nav>
                        <ul class="our-link">
                            <li><a href="about-n.php">About Us</a></li>
                            <li><a href="contact-n.php">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Resources</h4>

                    <!-- Nav -->
                    <nav>
                        <ul class="our-link">
                            <li><a href="about-n.php">Our Team</a></li>
                            <li><a href="contact-n.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">About Us</h4>
                    <p>The best website of German learning ever.</p>

                    <!-- Copywrite Text -->
                    <div class="copywrite-text mb-30">
                        <p>&copy; Copyright 2019 <a href="#">UMI</a>.</p>
                    </div>

                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

        </div>

<div class="row" style="margin-bottom: 30px;">
            
        </div>

    </div>
</footer>
<!-- ***** Footer Area End ***** -->
        <!-- ******* All JS Files ******* -->
        <!-- jQuery js -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All js -->
        <script src="js/uza.bundle.js"></script>
        <!-- Active js -->
        <script src="js/default-assets/active.js"></script>
    

</body>

</html>