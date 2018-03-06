<?php
	include ("shared.php");
	getHead();
?>
	<body class="notranslate">
		
		<script>
			$(document).ready(function(){
				getViewPortSizeAndSetStuffAccordingly();
			});
			
			$(window).resize(function() {
				getViewPortSizeAndSetStuffAccordingly();
			});
			
			function getViewPortSizeAndSetStuffAccordingly(){
				var viewportWidth = $(window).width();
				
				if(viewportWidth > 750){
					var body = '\
<pre>\
	&lt;!doctype html&gt;<br>\
		&lt;div id="navigation"&gt;<br>\
			&lt;div class="container"&gt;<br>\
				&lt;div class="navbar-header"&gt;<br>\
					&lt;button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"&gt;<br>\
						&lt;span class="sr-only"&gt;Toggle Navigation&lt;/span&gt;<br>\
						&lt;span class="icon-bar"&gt;&lt;/span&gt;<br>\
						&lt;span class="icon-bar"&gt;&lt;/span&gt;<br>\
						&lt;span class="icon-bar"&gt;&lt;/span&gt;<br>\
					&lt;/button&gt;<br>\
					&lt;a class="navbar-brand" href="../"&gt;<a href="../">BHDeveloper</a><br>\
				&lt;/div&gt;<br>\
				&lt;div class="navbar-collapse collapse"&gt;<br>\
					&lt;ul class="nav navbar-nav navbar-right"&gt;<br>\
						&lt;li&gt;&lt;a href="../"&gt;<a href="../">Home</a>&lt;/a&gt;&lt;/li&gt;<br>\
						&lt;li&gt;&lt;a href="../career"&gt;<a href="../career">Career</a>&lt;/a&gt;&lt;/li&gt;<br>\
						&lt;li&gt;&lt;a href="../code"&gt;<a href="../code">Code</a>&lt;/a&gt;&lt;/li&gt;<br>\
						&lt;li&gt;&lt;a href="../contact"&gt;<a href="../contact">Contact</a>&lt;/a&gt;&lt;/li&gt;<br>\
					&lt;/ul&gt;<br>\
				&lt;/div&gt;<br>\
			&lt;/div&gt;<br>\
		&lt;/div&gt;<br>\
		&lt;footer&gt;<br>\
			&lt;div class="container"&gt;<br>\
				&lt;a href="<a href="https://www.facebook.com/brad.hammond.779">https://www.facebook.com/brad.hammond.779</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/FacebookBw.png"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
				&lt;a href="<a href="https://www.linkedin.com/in/bhdeveloper">https://www.linkedin.com/in/bhdeveloper</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/LinkedInBw.png"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
				&lt;a href="<a href="https://github.com/bhammond42">https://github.com/bhammond42</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/GitHubBw.png"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
				&lt;a href="<a href="https://bradehammond.wordpress.com/">https://bradehammond.wordpress.com/</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/WordpressBw.png"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
				&lt;a href="<a href="mailto:b.e.hammond@hotmail.com">mailto:b.e.hammond@hotmail.com</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/EmailBw.jpg"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
				&lt;a href="<a href="callto:16152955463">callto:16152955463</a>" target="_blank"&gt;&lt;img class="socialmedia" src="../img/PhoneBw.png"&gt;&lt;/img&gt;&lt;/a&gt;<br>\
			&lt;/div&gt;<br>\
		&lt;/footer&gt;<br>\
	&lt;/html&gt;<br>\
</pre>\
					';
					$("body").html(body);
				}
				else
				{
					var body = '\
<pre>\
&lt;!doctype html&gt;<br>\
&lt;div id="navigation"&gt;<br>\
&lt;div class="container"&gt;<br>\
&lt;div class="navbar-header"&gt;<br>\
&lt;button type="button"&gt;<br>\
&lt;span&gt;Toggle Navigation&lt;/span&gt;<br>\
&lt;span&gt;&lt;/span&gt;<br>\
&lt;span&gt;&lt;/span&gt;<br>\
&lt;span&gt;&lt;/span&gt;<br>\
&lt;/button&gt;<br>\
&lt;a href="../"&gt;<a href="../">BHDeveloper</a><br>\
&lt;/div&gt;<br>\
&lt;div class="navbar-collapse collapse"&gt;<br>\
&lt;ul class="nav navbar-nav navbar-right"&gt;<br>\
&lt;li&gt;&lt;a href="../"&gt;<a href="../">Home</a>&lt;/a&gt;&lt;/li&gt;<br>\
&lt;li&gt;&lt;a href="../career"&gt;<a href="../career">Career</a>&lt;/a&gt;&lt;/li&gt;<br>\
&lt;li&gt;&lt;a href="../code"&gt;<a href="../code">Code</a>&lt;/a&gt;&lt;/li&gt;<br>\
&lt;li&gt;&lt;a href="../contact"&gt;<a href="../contact">Contact</a>&lt;/a&gt;&lt;/li&gt;<br>\
&lt;/ul&gt;<br>\
&lt;/div&gt;<br>\
&lt;/div&gt;<br>\
&lt;/div&gt;<br>\
&lt;/html&gt;<br>\
</pre>\
					';
					$("body").html(body);
				}
			}
		</script>
	</body>
</html>