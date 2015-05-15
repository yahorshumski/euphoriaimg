
<?php

if(empty($contact)) {
$answer="Please enter your e-mail<br><center><a href='contact.html'>back</a></center>";
}
else {
$answer="Thank you. I will contact you soon.";
}

if(empty($text)) {
$answer="Please, enter your message<br><center><a href='contact.html'>back</a></center>";
}
else {
$answer='Thank you. I will contact you soon';
}


$subj = "photo retoucher";
$body = "Message from $name\n\nContact: $contact\n\nOrg:$org\n\n$text";
mail('info@euphoria-imaging.com',$subj,$body); 
mail($contact,'Your message for euphoria-imaging.com is received', 'Thanks for your interest in our services. We\'ve received your message and will respond at the first convenience.


Many thanks,
Yahor Shumski

www.euphoria-imaging.com
photo retouching and 3D visualization services

e-mail: info@euphoria-imaging.com
New York: +1 (718) 312-8780
London: +44 20 8123 6049
kype: shumski
twitter.com/euphoriaimg');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<!-- Google Website Optimizer Tracking Script -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['gwo._setAccount', 'UA-136126-13']);
  _gaq.push(['gwo._trackPageview', '/0829727786/goal']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End of Google Website Optimizer Tracking Script -->



	<title>Euphoria-imaging.com | PHOTO EDITING SERVICS</title>
	<meta name="Description" content="Dreaming of Being Photographed With Paris Hilton? I will cut your face and place it into a photo with Paris Hilton.">
	<meta name="Keywords" content="paris, hilton, photo, collage">
<style type="text/css" media="screen">
<!--
@import url("style.css");
.boldtext {
	letter-spacing: -1px;
	font-weight: bolder;
	font-family: sans-serif;
}
-->
</style>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


	<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-136126-1', 'euphoria-imaging.com');
  ga('send', 'pageview');

</script>
		<!-- Analytics -->

	 	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body bgcolor="#343E4B" style="background-image: url('image/wings.gif'); background-repeat: no-repeat; background-position: top;" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" rightmargin="0" bottommargin="0">



<div align="center">
	<font color="#3399ff" style="font-size: 45px; font-weight: bolder; font-family: Arial, Helvetica, sans-serif; font-stretch: ultra-condensed;"><strong>euphoria</strong></font><br>
	<font color="#7D7D7D" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-stretch: ultra-condensed;">photo retouching services</font><br><br>


<img src="images/spacer.gif" width="1" height="10" alt="" border="0"><br>


<table cellpadding="0"  cellspacing="0"  align="center" width="432" height="158"><tr><td valign="middle" align="center">

<table border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" valign="middle"><div class="text">  <strong><font color="#FF3385" style="font-size: 40px;" class="boldtext"><?php  print $answer;

if(isset($text)) {
include ('conversion.php');
}

         ?><br></font></strong><BR>
		</td>
	</tr>
</table>

</td></tr></table>

<br>
<a href="http://www.euphoria-imaging.com"><font color="#3399FF" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-stretch: ultra-condensed;">about us</a></font> | <a href="mailto:info@magnat.org"><font color="#3399FF" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-stretch: ultra-condensed;">contact us</a></font><br>
<font color="#7D7D7D" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-stretch: ultra-condensed;">copyright &copy; 2008. euphoria-imaging.com</font>

</div>






</body>
</html>

