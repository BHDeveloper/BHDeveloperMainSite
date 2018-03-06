<?php
	function getHead()
	{
		echo '
		<!doctype html>
			<head>
				<title>Brad Hammond</title>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="description" content="I am a Full Stack Developer and I like goats.">
				<meta name="keywords" content="Brad,Hammond,bhdeveloper,developer">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
				<link rel="stylesheet" href="../css/style.css">
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
				<script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
			</head
		';
	}
	
	function getNav()
	{
		echo '
			<div id="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar" style="background: black;"></span>
							<span class="icon-bar" style="background: black;"></span>
							<span class="icon-bar" style="background: black;"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="navbar_li"><a href="../">Home</a></li>
							<li class="navbar_li"><a href="../career">Career</a></li>
							<li class="navbar_li"><a href="../code">Code</a></li>
							<li class="navbar_li"><a href="../contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		';
	}
	
	function getFooter()
	{
		echo '
			<footer>
				<div class="container">
					<a href="https://www.facebook.com/brad.hammond.779" target="_blank"><img class="socialmedia" src="../img/FacebookBw.png"></img></a>
					<a href="https://www.linkedin.com/in/bhdeveloper" target="_blank"><img class="socialmedia" src="../img/LinkedInBw.png"></img></a>
					<a href="https://github.com/bhammond42" target="_blank"><img class="socialmedia" src="../img/GitHubBw.png"></img></a>
					<a href="https://bradehammond.wordpress.com/" target="_blank"><img class="socialmedia" src="../img/WordpressBw.png"></img></a>
					<a href="mailto:b.e.hammond@hotmail.com" target="_blank"><img class="socialmedia" src="../img/EmailBw.jpg"></img></a>
					<a href="callto:16152955463" target="_blank"><img class="socialmedia" src="../img/PhoneBw.png"></img></a>
				</div>
			</footer>
		';
	}
?>