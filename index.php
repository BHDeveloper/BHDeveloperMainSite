<?php
	include("php/shared.php");
	getHead();
	getNav();
?>
    <div class="jumbotron text-center">
	  <h1>BHDeveloper</h1> 
	  <p>I specialize in back-end web development</p>
	</div>

	<!-- Container (About Section) -->
	<div id="about" class="container-fluid">
	  <div class="row">
		<div class="col-sm-8">
		  <h2>About BHDeveloper</h2><br>
		  <h4>I have provided back-end focused development services for various companies across the US.</h4><br>
		  <p>Hire a back-end deveoper to build a solid foundation for all your business projects.</p>
		  <p>I have maintained positions as a full-stack developer, back-end developer, and development support engineer/SRE.</p>
		  <p>Let my past experiences provide you with the tools needed to improve your existing services and create a solid base for new adventures.</p>
		  <!--<br><a href="mailto:brad@bhdeveloper.com" class="btn btn-default btn-lg">Get in Touch</a>-->
		  <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#contactModal">Get in Touch</button>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-signal logo"></span>
		</div>
	  </div>
	</div>
	
	<div id="contactModal" class="modal fade" style="padding-top: 60px" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">CONTACT</h4>
		  </div>
		  <div class="modal-body">
			<p><span class="glyphicon glyphicon-phone"></span> <a href="tel:1-615-295-5463">615.295.5463</a></p>
		    <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:brad@bhdeveloper.com">brad@bhdeveloper.com</a></p>
			<a href="https://www.facebook.com/brad.hammond.779" title="Brad Hammond"><i class="fa fa-facebook-official" style="font-size:24px;"> </i></a>
			<a href="https://www.facebook.com/bhwebdeveloper/" title="BHDeveloper"><i class="fa fa-facebook" style="font-size:22px;"> </i></a>
			<a href="https://www.instagram.com/b.e.hammond/" title="Brad Hammond"><i class="fa fa-instagram" style="font-size:24px;"> </i></a>
			<a href="https://www.linkedin.com/in/bhdeveloper/" title="Brad Hammond"><i class="fa fa-linkedin-square" style="font-size:24px;"></i></a>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>

	<div class="container-fluid bg-grey">
	  <div class="row">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-globe logo slideanim"></span>
		</div>
		<div class="col-sm-8">
		  <h2>My Values</h2><br>
		  <h4><strong>MISSION:</strong> My mission is to leave everything better than the way I found it.</h4><br>
		  <p><strong>VISION:</strong> My vision is to further my knowledge and experience to give you the most reliable product.</p>
		</div>
	  </div>
	</div>

	<!-- Container (Services Section) -->
	<div id="services" class="container-fluid text-center">
	  <h2>SERVICES</h2>
	  <h4>What I offer</h4>
	  <br>
	  <div class="row slideanim">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-cloud-upload logo-small"></span>
		  <h4>DEVELOPMENT</h4>
		  <p>Full stack experience.</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-fire logo-small"></span>
		  <h4>TROUBLESHOOTING</h4>
		  <p>Finding your biggest issues.</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-wrench logo-small"></span>
		  <h4>BUG FIXES</h4>
		  <p>Fixing the problem areas.</p>
		</div>
	  </div>
	  <div class="row slideanim">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-ok logo-small"></span>
		  <h4>COMPLETION</h4>
		  <p>I'll get the job done for you.</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-heart logo-small"></span>
		  <h4>PASSION</h4>
		  <p>If you're happy, I'm happy.</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-earphone logo-small"></span>
		  <h4>AVAILABLE</h4>
		  <p>Call me. Text me. Email me.</p>
		</div>
	  </div>
	</div>
	<br><br>
	
	<div id="portfolio" class="container-fluid text-center bg-grey">
	  <h2>Places I've worked</h2>
	  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		  <li data-target="#myCarousel" data-slide-to="4"></li>
		  <li data-target="#myCarousel" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
			<h4>CellTrak<br><span>Chicago, IL</span></h4>
		  </div>
		  <div class="item">
			<h4>8angleStrength<br><span>San Diego, CA</span></h4>
		  </div>
		  <div class="item">
			<h4>Trilliant Health<br><span>Nashville, TN</span></h4>
		  </div>
		  <div class="item">
			<h4>Platform Science<br><span>San Diego, CA</span></h4>
		  </div>
		  <div class="item">
			<h4>LBMC Information Security<br><span>Brentwood, TN</span></h4>
		  </div>
		  <div class="item">
			<h4>TRX Tax Alliance<br><span>Murfreesboro, TN</span></h4>
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>

	<div id="technologies" class="container-fluid text-center">
	  <h2>Technologies</h2>
	  <div class="row">
		<div class="col-sm-4">
		  <h4>PHP<br>Laravel<br>Python<br>MSSQL/MySql<br>JavaScript<br>JQuery<br>HTML</h4>
		</div>
		<div class="col-sm-4"> 
		  <h4>CSS<br>C#.Net<br>APIs<br>D3.js<br>JSON<br>XML<br>SSIS/SSRS</h4>
		</div>
		<div class="col-sm-4"> 
		  <h4>BitBucket<br>Confluence<br>GitHub<br>JIRA<br>Kibana/ElasticSearch<br>Docker<br>DataDog</h4>
		</div>
	  </div>
	</div>

	<!-- Container (Contact Section) -->
	<div id="contact" class="container-fluid bg-grey">
	  <h2 class="text-center">CONTACT</h2>
	  <div class="row">
		<div class="text-center">
		  <p><span class="glyphicon glyphicon-map-marker"></span> <a href="https://goo.gl/maps/Z99utPrKuLEuyRHx8" target="_blank">San Diego, CA</a></p>
		  <p><span class="glyphicon glyphicon-phone"></span> <a href="tel:1-615-295-5463">615.295.5463</a></p>
		  <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:brad@bhdeveloper.com">brad@bhdeveloper.com</a></p>
		</div>
	  </div>
	</div>

	<img src="/images/BHDeveloperLogo.png" class="w3-image w3-greyscale-min" style="width:100%">
	<!--<div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 650px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214577.51183178183!2d-117.24940370866695!3d32.824762631018636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9530fad921e4b%3A0xd3a21fdfd15df79!2sSan%20Diego%2C%20CA!5e0!3m2!1sen!2sus!4v1619404423948!5m2!1sen!2sus" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>-->
    <?php
      getScripts();
      getFooter();
    ?>