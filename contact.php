<?php

	include("shared.php");
	getHead();
	getNav();
?>
	
		<div class="altBackground container">
			<h1 class="section-heading text-center" data-wow-delay="0.3s">Contact</h1>
			<div id="contactInfo">
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<span class="glyphicon glyphicon-envelope"></span>
						b.e.hammond@hotmail.com
					</div>
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<span class="glyphicon glyphicon-phone"></span>
						(615)295-5463
					</div>
				</div>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<span class="glyphicon glyphicon-map-marker"></span>
						Nashville, TN
					</div>
				</div>
			</div>
			<br>
			<div id="contactForm">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-2" style="text-align: right;">Name:</div>
					<div class="col-md-4"><input type="text" class="form-control" id="name"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-2" style="text-align: right;">E-mail Address:</div>
					<div class="col-md-4"><input type="text" class="form-control" id="email"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-2" style="text-align: right;">Message:</div>
					<div class="col-md-4"><textarea class="form-control" rows="5" id="message"></textarea></div>
				</div>
				<div id="error_row" class="row" style="display:hidden;">
					<div class="col-md-5"></div>
					<div id="error_message" class="col-md-5"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-4"><button onclick="javascript:contact();" type="button" class="btn btn-default">Submit</button></div>
				</div>
			</div>
			<br>
		</div>
		<script>
			function contact(){
				$.ajax({
					url:'../php/contact.php',
					type: 'POST',
					data:{
						name:$('#name').val(),
						email:$('#email').val(),
						message:$('#message').val()
					},
					success:function(result){
						$("#error_row").show();
						$("#error_row").css('padding','20px');
						if(result!='success'){
							$("#error_message").addClass("alert alert-danger");
							$("#error_message").html(result);
						}else{
							$("#error_message").addClass("alert alert-success");
							$("#error_message").html('Thank you! Your email has been processed.');
						}
					},
					error:function(){
						$("#error_message").addClass("alert alert-danger");
						$("#error_message").html('Error Sending Message. Please, try again later.');
					}
				});
				$("#error_row").fadeOut(7000);
			}
		</script>
<?php
	getFooter();
?>
	</body>
</html>