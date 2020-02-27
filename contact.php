<?php
include("php/shared.php");
getHead();
getNav();
?>

    <div class="container">
        <section class="my-5">
            <div class="row">
                <div class="col-lg-5">
                    <h3>Brad Hammond</h3>
                    <a href="https://www.facebook.com/brad.hammond.779" title="Brad Hammond"><i class="fa fa-facebook-official" style="font-size:24px;"></i></a>
                    <a href="https://www.facebook.com/bhwebdeveloper/" title="BHDeveloper"><i class="fa fa-facebook" style="font-size:22px;"></i></a>
                    <a href="https://www.instagram.com/b.e.hammond/" title="Brad Hammond"><i class="fa fa-instagram" style="font-size:24px;"></i></a>
                    <a href="https://www.linkedin.com/in/bhdeveloper/" title="Brad Hammond"><i class="fa fa-linkedin-square" style="font-size:24px;"></i></a>
                </div>
                <!--<form class="needs-validation">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <h2>Contact</h2>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="First name*" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <input type="email" class="form-control" id="emailAddress" placeholder="Email Address*" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <input type="tel" class="form-control" id="phoneNumber" data-format="(ddd)ddd-dddd" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                </form>-->
                <div class="col-lg-7">
                    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190256.0989878385!2d-87.87204604171882!3d41.83364785089312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL!5e0!3m2!1sen!2sus!4v1577671564317!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <i class="fa fa-map-marker" style="font-size:24px;"></i>
                            <p><a href="https://goo.gl/maps/G5UWPTPiF5MiaaBy9" target="_blank">Chicago, IL</a></p>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-phone" style="font-size:24px;"></i>
                            <p><a href="tel:1-615-295-5463">(615)295-5463</a></p>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-envelope" style="font-size:24px;"></i>
                            <p><a href="mailto:brad@bhdeveloper.com">brad@bhdeveloper.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
getScripts();
?>
    <script>
        $("#submit").click(function(){
            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var emailAddress = $("#emailAddress").val();
            var phoneNumber = $("#phoneNumber").val();
            var message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "php/processContactForm.php",
                data: $("form").serialize(),
                beforeSend: function(){
                    $("#submit").attr('disabled', true);
                },
                complete: function(result){
                    $("#submit").attr('disabled', false);
                    alert(result);
                }
            });
        });
    </script>
<?php
getFooter();
?>