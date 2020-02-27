<?php
	include("php/shared.php");
	getHead();
	getNav();
?>
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-7">
          <img class="img-fluid rounded mb-4 mb-lg-0" src="images/BHDeveloperLogo.png" alt="">
        </div>
        <div class="col-lg-5">
          <h1 class="font-weight-light">BHDeveloper</h1>
          <p>You want a website? Cool. I'll help you make one, or make one for you. Already have a website and want to make changes? Cool. I'll help you make the changes, or do them for you.</p>
          <a class="btn btn-primary" href="contact.php">Contact</a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row my-5">
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Background</h2>
              <p class="card-text">Eight years of bartending, followed by seven years of Web Development. I can pour you a Wild Turkey while we talk turkey.</p>
            </div>
            <div class="card-footer">
              <a href="about.php" class="btn btn-primary btn-sm">About Me</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Projects</h2>
              <p class="card-text">Most of my projects completed have been while being an employee at other companies. I am now branching out to helping friends and family with their website needs. Let's be friends.</p>
            </div>
            <div class="card-footer">
              <a href="contact.php" class="btn btn-primary btn-sm">Friend Me</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Clients</h2>
              <p class="card-text">
                <ul type="circle">
                    <li>8angleStrength</li>
                    <li>Trilliant Health</li>
                    <li>Platform Science</li>
                    <li>LBMC Technology Solutions</li>
                    <li>TRX Tax Alliance</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      getScripts();
      getFooter();
    ?>