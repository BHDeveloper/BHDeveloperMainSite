<?php
include("php/shared.php");
getHead();
getNav();
?>
    <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Services</h1>
            <p class="lead">Many service options for your budget, time frame, and customizability.</p>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Wix</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0*</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Free level includes Wix ads</li>
                        <li>And does NOT include custom domain name</li>
                        <li>Four levels of premium services</li>
                    </ul>
                    <a href="contact.php" class="btn btn-lg btn-block btn-primary">Get Started</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Squarespace**</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$144* <small class="text-muted">/ yr</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="contact.php" class="btn btn-lg btn-block btn-primary">Get Started</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">GoDaddy</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$120* <small class="text-muted">/ yr</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="contact.php" class="btn btn-lg btn-block btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Website Support</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">***</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Website Update</li>
                        <li>Website Repair</li>
                        <li>Website Completion</li>
                        <li>Website Maintenance</li>
                    </ul>
                    <a href="contact.php" class="btn btn-lg btn-block btn-primary">Get Started</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Website Consultant</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">***</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Website Guidance</li>
                        <li>Q & A</li>
                        <li>Project Management</li>
                        &nbsp;
                    </ul>
                    <a href="contact.php" class="btn btn-lg btn-block btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <p class="lead">*Website hosting fees. Does not include <a data-toggle="modal" href="#developmentFeesModal">development fees</a>.</p>
            <p class="lead">**My personal favorite</p>
            <p class="lead">***Pricing determined per scope of project</p>
        </div>
        <div class="modal fade" id="developmentFeesModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Development Fees</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Typical development fees include:</p>
                        <ul type="circle">
                            <li>Website Design</li>
                            <li>Website Development</li>
                            <li>Logo Design</li>
                            <li>Domain Name Setup</li>
                            <li>Wesbite Hosting Setup</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
getScripts();
getFooter();
?>