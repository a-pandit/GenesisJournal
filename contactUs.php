<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include 'title.php';?>
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/TitilliumText15L_100-TitilliumText15L_400.font.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<style type="text/css">

body {
	background: #f9fafb url(images/pages/bg.gif) top repeat-x;
}

</style>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#contactForm input, #contactForm textarea').focus(function(){ $(this).stop().animate({backgroundColor: "#fff3c5"}, 500), $(this).css("borderColor", "#f89d1c") })
	
	$('#contactForm input, #contactForm textarea').blur(function(){ $(this).stop().animate({backgroundColor: "#fffff"}, 500), $(this).css("borderColor", "#97b2cd") });
})

$('#main').ready(function(){
	//process possible form errors
})
</script>
</head>

<body>
	<div class="container_16" id="main">
		<?php include ('header.php')?>
		
		<!-- SUBMENU -->
		<div class="grid_16" id="display">
			<ul id="subNavigation">
				<li><a href="contactUs.php" class="current">get in touch with us</a></li>
			</ul>
		</div>
		<!-- /SUBMENU -->
		<div class="clear"></div>
		
	</div><!-- /#main -->
			
	<div class="container_16" id="content">
		
		<div class="grid_11 content contact" id="two_col">
		<h2>Contact Information</h2>
		<h3>Editorial Office</h3>
		<p>
		<b>Dr. Rajesh K.S.</b><br/>
		Parul Institute of Pharmacy, Limda<br/>
		Waghodia-391760, Vadodara<br/>
		Tel. No. 02668-262327<br/>
		E Mail: <a href="mailto:editorpharmagene@gmail.com">editorpharmagene@gmail.com</a><br/>
		</p>
		
		<!--<h2>Contact form</h2>
			<p>
			Fields marked with a <span>*</span> are required
			</p>
			
						
						<form action="http://chillyblues.chillyorange.com/contact.php" method="post" id="contactForm">
				<br/>
				<div>
					<label>Name:<span>*</span></label>
					<input type="text" name="name" id="name"  />
				</div>
				<div>
					<label>email address:<span>*</span></label>
					<input type="text" name="email" id="email"  />
				</div>
				<div>
					<label>Organization:</label>
					<input type="text" name="org" id="org" />
				</div>
				<div>
					<label>Message:<span>*</span></label>
					<textarea name="message" rows="10" cols="20" id="message"></textarea>
				</div>
				<a class="button" href="#" onclick="$('#contactForm')[0].submit(); return false;" id="send"><span>send message</span></a>
			</form>-->
						
		</div><!-- /#left -->
		<div class="grid_5" id="one_col">
			<?php include ('sidebar.php'); ?>

		</div><!-- /#right -->
		<div class="clear"></div>
		
	</div><!-- /#content -->
		
	<div id="footerwrapper">

		<?php include('footer.php'); ?>

	</div><!-- /#footerwrapper -->

<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10567708-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
