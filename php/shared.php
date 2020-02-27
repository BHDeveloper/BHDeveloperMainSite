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
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>BHDeveloper</title>

            <link href="'. $baseUrl. 'vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <link href="'. $baseUrl. 'css/small-business.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>';
    }

    function getNav()
	{
        $baseUrl = getBaseUrl();

        echo
        '<body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="'. $baseUrl. '">BHDeveloper</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="'. $baseUrl. '">Home
                        <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="'. $baseUrl. 'about.php">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="'. $baseUrl. 'services.php">Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="'. $baseUrl. 'contact.php">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>';
    }

    function getScripts()
    {
        $baseUrl = getBaseUrl();

        echo
        '<script src="'. $baseUrl. 'vendor/jquery/jquery.min.js"></script>
        <script src="'. $baseUrl. 'vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="'. $baseUrl. 'javascript/index.js"></script>';
    }

    function getFooter()
	{
        $baseUrl = getBaseUrl();

        echo
        '<footer class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; BHDeveloper 2020</p>
            </div>
        </footer>
    </body>
</html>';
    }
?>