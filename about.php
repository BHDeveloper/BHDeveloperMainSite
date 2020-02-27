<?php
	include("php/shared.php");
	getHead();
	getNav();
?>
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 font-weight-normal">Brad Hammond</h1>
            <h1 class="display-5 font-weight-normal">Web Developer</h1>
			<p class="lead font-weight-normal">This is probably where all the cool things I've done would go. But, nah. I'm a web developer. I don't brag about myself.
                But, if you really want to know what I've been up to, you can check out my resume.</p>
			<a class="btn btn-primary" href="resume.php">Resume</a>
		</div>
		<div class="product-device box-shadow d-none d-md-block"></div>
		<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
	</div>

    <!--<div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
            <h1 class="display-4 font-weight-normal">Brad Hammond</h1>
            <h1 class="display-5 font-weight-normal">Web Developer</h1>
        </div>
        <div class="bg-white box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <p class="lead font-weight-normal">This is probably where all the cool things I've done would go. But, nah. I'm a web developer. I don't brag about myself. But, if you really want to know what I've been up to, you can check out my resume.</p>
                <a class="btn btn-primary" href="resume.php">Resume</a>
            </div>
        </div>
    </div>-->
<?php
    getScripts();
    getFooter();
?>