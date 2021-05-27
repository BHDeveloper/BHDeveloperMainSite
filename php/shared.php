<?php
    function getBaseUrl(){
        return 'http://bhdeveloper.com/';
    }

	function getHead()
	{
	    $baseUrl = getBaseUrl();

        echo 
        '<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>BHDeveloper Web Development</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" href="'. $baseUrl . 'images/BHDeveloperFavicon.png">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<style>
			body {
				font: 400 15px Lato, sans-serif;
				line-height: 1.8;
				color: #818181;
			}
			h2 {
				font-size: 24px;
				text-transform: uppercase;
				color: #303030;
				font-weight: 600;
				margin-bottom: 30px;
				font-family: Roboto;
			}
			h4 {
				font-size: 19px;
				line-height: 1.375em;
				color: #303030;
				font-weight: 400;
				margin-bottom: 30px;
				font-family: Roboto;
			}  
			.jumbotron {
				background-color: #000;
				color: #edbe00;
				padding: 100px 25px;
				font-family: Audiowide, cursive;
			}
			.container-fluid {
				padding: 60px 50px;
			}
			.bg-grey {
				background-color: #f6f6f6;
			}
			.logo-small {
				color: #000;
				font-size: 50px;
			}
			.logo {
				color: #000;
				font-size: 200px;
			}
			.thumbnail {
				padding: 0 0 15px 0;
				border: none;
				border-radius: 0;
			}
			.thumbnail img {
				width: 100%;
				height: 100%;
				margin-bottom: 10px;
			}
			.carousel-control.right, .carousel-control.left {
				background-image: none;
				color: #000;
			}
			.carousel-indicators li {
				border-color: #000;
			}
			.carousel-indicators li.active {
				background-color: #000;
			}
			.item h4 {
				font-size: 25px;
				line-height: 1.375em;
				font-weight: 400;
				margin: 70px 0;
			}
			.item span {
				font-size: 19px;
			}
			.panel {
				border: 1px solid #000; 
				border-radius:0 !important;
				transition: box-shadow 0.5s;
			}
			.panel:hover {
				box-shadow: 5px 0px 40px rgba(0,0,0, .2);
			}
			.panel-footer .btn:hover {
				border: 1px solid #000;
				background-color: #8c8c8c !important;
				color: #000;
			}
			.panel-heading {
				color: #fff !important;
				background-color: #000 !important;
				padding: 25px;
				border-bottom: 1px solid transparent;
				border-top-left-radius: 0px;
				border-top-right-radius: 0px;
				border-bottom-left-radius: 0px;
				border-bottom-right-radius: 0px;
			}
			.panel-footer {
				background-color: white !important;
			}
			.panel-footer h3 {
				font-size: 32px;
			}
			.panel-footer h4 {
				color: #aaa;
				font-size: 14px;
			}
			.panel-footer .btn {
				margin: 15px 0;
				background-color: #000;
				color: #fff;
			}
			.navbar {
				margin-bottom: 0;
				background-color: #000;
				z-index: 9999;
				border: 0;
				font-size: 12px !important;
				line-height: 1.42857143 !important;
				letter-spacing: 4px;
				border-radius: 0;
				font-family: Roboto;
			}
			.navbar li a, .navbar .navbar-brand {
				color: #fff !important;
			}
			.navbar-nav li a:hover, .navbar-nav li.active a {
				color: #000 !important;
				background-color: #8c8c8c !important;
			}
			.navbar-default .navbar-toggle {
				border-color: transparent;
				color: #fff !important;
			}
			footer .glyphicon {
				font-size: 20px;
				margin-bottom: 20px;
				color: #000;
			}
			.slideanim {visibility:hidden;}
			.slide {
				animation-name: slide;
				-webkit-animation-name: slide;
				animation-duration: 1s;
				-webkit-animation-duration: 1s;
				visibility: visible;
			}
			@keyframes slide {
				0% {
					opacity: 0;
					transform: translateY(70%);
				} 
				100% {
					opacity: 1;
					transform: translateY(0%);
				}
			}
			@-webkit-keyframes slide {
				0% {
					opacity: 0;
					-webkit-transform: translateY(70%);
				} 
				100% {
					opacity: 1;
					-webkit-transform: translateY(0%);
				}
			}
			@media screen and (max-width: 768px) {
				.col-sm-4 {
					text-align: center;
					margin: 25px 0;
				}
				.btn-lg {
					width: 100%;
					margin-bottom: 35px;
				}
			}
			@media screen and (max-width: 480px) {
				.logo {
					font-size: 150px;
				}
			}
			</style>
		</head>';
    }

    function getNav()
	{
        $baseUrl = getBaseUrl();

        echo
        '<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" style="font-family: Audiowide, cursive; color: #edbe00 !important;" href="#home">BHDeveloper</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#services">SERVICES</a></li>
					<li><a href="#portfolio">PORTFOLIO</a></li>
					<li><a href="#technologies">TECHNOLOGIES</a></li>
					<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>';
    }

    function getScripts()
    {
        $baseUrl = getBaseUrl();

        echo
        '<script>
		$(document).ready(function(){
			$(".navbar a, footer a[href=\'#home\']").on("click", function(event) {
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					var hash = this.hash;

					$("html, body").animate({
					scrollTop: $(hash).offset().top
					}, 900, function(){
						window.location.hash = hash;
					});
				}
			});
			
			$(window).scroll(function() {
				$(".slideanim").each(function(){
					var pos = $(this).offset().top;

					var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
						$(this).addClass("slide");
					}
				});
			});
		})
		</script>';
    }

    function getFooter()
	{
        $baseUrl = getBaseUrl();

        echo
        '<footer class="container-fluid text-center">
			<a href="#home" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<p class="m-0 text-center text-white">Copyright &copy; BHDeveloper 2021</p>
		</footer>
    </body>
</html>';
    }
?>