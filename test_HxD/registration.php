<!DOCTYPE html>
<?php 		
		$DefaultName = "Name";
		$DefaultEmail = "Email Address";
 ?>
<html>
<head>
  <meta charset="utf-8">
<!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="true" -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title>HxD Registration| Healthcare Experience Design Conference 2012</title>
  <!-- InstanceEndEditable -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  
 
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
	<meta name="description" content="The Healthcare Experience Design Conference blends the powerhouse perspectives of healthcare thought leaders, product developers, and design implementers across a broad spectrum of healthcare technologies and delivery channels." />

	
	<meta name="keywords" content="user experience design,healthcare, interaction design, usability, conference, design conference, experience design conference, healthcare conference, hxd, hxd conference, hxdconf" />   

  <!-- Mobile viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS links -->
  
	<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" /> 
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/contax.css" />
	<link rel="stylesheet" href="css/icon-font.css" />
	<link rel="stylesheet" href="css/tabs.css" />
	<link rel="stylesheet" href="css/twitter.css" />
	<link rel="stylesheet" href="css/colorbox.css" />
	<link rel="stylesheet" href="css/bgstretcher.css" />
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
  <!-- end CSS-->
  
  <!--JS links-->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- // <script src="js/libs/modernizr-2.0.6.min.js"></script> -->
	<!-- // <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/twitter.js"></script>
	<!-- // <script type="text/javascript" src="js/stickyPanel.js"></script> -->
	<script type="text/javascript" src="js/slide-fade-content.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- // <script src="js/jquery.colorbox-min.js"></script> -->
	<script type="text/javascript" src="js/jquery.colorbox-variations.js"></script>
	<script type="text/javascript" src="js/bgstretcher.js"></script>
	<!-- <script type="text/javascript">
	$(document).ready(function(){
	//  Initialize Backgound Stretcher
	$(document).bgStretcher({
	images: ['img/biker.jpg'], imageWidth: 1024, imageHeight: 768
	});
	});
	</script> -->
	
	<script type="text/javascript" language="javascript">
	<!---
	defaultNameValue = '<?php echo $DefaultName; ?>';
	defaultEmailValue = '<?php echo $DefaultEmail; ?>';

	$(document).ready(function() {
		$('#namefield').live('click', clearName);
		$('#namefield').live('focusout', defaultName);
		$('#emailfield').live('click', clearEmail);
		$('#emailfield').live('focusout', defaultEmail);
		$("form").submit(function(event) {
			validateForm(event);
		});

		defaultName();
		defaultEmail();
	});



	function clearName()
	{
		$('#namefield').val('');
		return false;
	}
	function clearEmail()
	{
		$('#emailfield').val('');
		return false;
	}
	function defaultName()
	{
		if ($('#namefield').val() == '')
			$('#namefield').val(defaultNameValue)
		return false;
	}
	function defaultEmail()
	{
		if ($('#emailfield').val() == '')
			$('#emailfield').val(defaultEmailValue)
		return false;
	}
	function hideForm()
	{
		$('#namefield').hide();
		$('#emailfield').hide();
		$('#button').hide();
		return false;
	}
	function validateForm(event)
	{

		var nameOk = false;
		var emailOk = false;
		var emailTest = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;

		var nameValue = $('#namefield').val();
		var emailValue = $('#emailfield').val();

		var emailMessage = 'Please fill out a valid email address.';
		var nameMessage = 'Please fill out your name.';
		var emailAndNameMessage = 'Please fill out your name and a valid email address.  ';

		if ((nameValue != '') && (nameValue != defaultNameValue))
			nameOk = true;
		if ((emailValue != '') && (emailValue != defaultEmailValue) && (emailTest.test(emailValue)))
			emailOk = true;

		if (!(nameOk && emailOk))
		{
			event.preventDefault();
			if (emailOk && (!nameOk))
				alert(nameMessage);

			else if (nameOk && (!emailOk))
				alert(emailMessage);

			else 
				alert(emailAndNameMessage);

			return false;
		}
		else
			return true;
	}
	-->
	</script>

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<?php include_once("analytics.php") ?>

	<form id="form1" name="form1" method="post" action="">
	<nav id="main-nav">
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="speakers.php">Speakers</a></li>
					<li><a href="agenda.php">Agenda</a></li>
					<li><a href="sponsor.php">Sponsor</a></li>
					<li class="mobile-bottom" id="social-media-icons-mobile">
						<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm-white.png" /></div></a>
						<a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm-white.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm-white.png" /></div></a>
					<a class="social-media-icon"  id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm-white.png" /></div>
					</a>
					</li>
					
					<li class="mobile-bottom"><a href="registration.php" id="selected">Registration</a></li>
					<li class="mobile-bottom"><a href="logistics.php">At the Event</a></li>	
					
					<li id="social-media-icons"><a class="social-media-icon" href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank" ><div class="social-icon-div"><img src="img/facebook-sm.png" /></div></a>
					<a class="social-media-icon" href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><div class="social-icon-div"><img src="img/linkedin-sm.png" /></div></a>
					<a class="social-media-icon" href="https://twitter.com/#!/hxdconf" target="_blank"><div class="social-icon-div"><img src="img/twitter-sm.png" /></div></a>
					<a class="social-media-icon"  id="crowdvine-small" href="http://www.hxdconference2012.crowdvine.com" target="_blank"><div class="social-icon-div"><img src="img/crowdvine-sm.png" /></div>
					</a>
					</li>	
				</ul>
			</nav>
  <div id="container">
    <header>
		<div id="header-wrapper" class="container_12">
			<div id="logo"><a href="index.php"><img src="img/logo-white.png" alt="Healthcare Experience Design Conference"/></a></div>

			<div id="organizers">
				<p><span style="color:white;">Brought to you by:</span></p>
				<div id="organizers-logos"><a href="http://madpow.com" target="_blank"><img src="img/madpow_logo-white.png" alt="Mad*Pow"/></a> <span style="color:white;">&amp;</span>
				<a href="http://claricode.com" target="_blank"><img id="claricode-logo" src="img/claricode_logo_white.png" alt="claricode"/></a></div>
			</div>

			<!-- <div id="social-media-icons">
						<a href="facebook.com">f</a>
						<a href="linkedin.com">i</a>
						<a href="twitter.com">t</a>
						<a href="crowdvine.com"><img class="icon-image" src="img/crowdvine.png"></a>
					</div> -->
			
		
		</div><!-- end header-wrapper div -->
    </header>
	
	<div id="top-spacer"></div> 
<!-- InstanceBeginEditable name="page-content" -->
<div id="sub-page-container" role="main" class="container_12">
	<div id="white-content-container">
	<h2 class="section-header">2012 HxD Conference Registration</h2>  <h3 id="register" class="action-button" style="margin-top:0em"><a href=" http://www.regonline.com/hxd2012" target="_blank">REGISTER NOW!</a></h3>
	<p class="body-text">This is the place to be to learn about best practices for the design and evaluation of healthcare technologies and digital care experiences. Over 500 industry professionals are expected to attend. Register today to secure your spot!</p>
<div id="registration-options" class="float-left">

 <div class="clearfix">&nbsp;</div>
<table id="registration-table">
	<thead>
		<th>&nbsp;</th>
		<th>Early-bird Registration <br />(must register by midnight 02/15/2012)</th>
		<th>Standard Registration <br />(02/15/2012 - 03/12/2012)</th>
		<th>Late and On-site Registration</th>
	</thead>
	<tbody>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Main Conference Registration (03/26/2012)</p></td>
			<td>$575</td>
			<td>$675</td>
			<td>$775</td>
		</tr>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Pre-Conference Full-Day Workshop (03/25/2012):</span> <br />BJ Fogg's Masterclass in Behavior Design</td>
			<td>$1800</td>
			<td>$1800</td>
			<td>N/A</td>
		</tr>	
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Post-Conference Full-Day Workshop (03/27/2012):</span> <br />Amy Cueva, Designing Communities of Care </td>
			<td>$550</td>
			<td>$600</td>
			<td>$700</td>
		</tr>
		<tr>
			<td class="reg-type"><span style="font-weight:bold">Post-Conference Half-Day Workshops (03/27/2012):</span>
				<ul>
					<li>Michael Hawley and Adam Connor: Research-Inspired Design Studio</li>
					<li>Jerilyn MacLaren-Hall and Megan Grocki, The Patient Journey</li>
					<li>Stephen Anderson, The Quest for Emotional Engagement</li>
					<li>Dustin DiTommaso, Beyond Gamification: Architecting Engagement through Game-Design Thinking </li>
					<li>Margot Bloomstein, Content Strategy</li>
					<li>Josh Clark, Designing for Touch</li>
				</ul>
				</td>
			<td>$300 (each)</td>
			<td>$350 (each)</td>
			<td>$400 (each)</td>
		</tr>
	</tbody>
</table>
<br />

	<p class="body-text float-left">Breakfast, snacks, lunch and cocktail hour refreshments are included with <a href="registration.php">registration.</a></p>
	<!-- <h4 id="register" class="action-button" style="margin-top:0em"><a href=" http://www.regonline.com/hxd2012" target="_blank"><h4 style="color:white; padding:0em 0.2em;">REGISTER!</h4></a></h4 -->
	
</div> <!-- end registration options div -->

	<div class="clearfix"></div>
	<h3 class="top-padding">Don't Forget...</h3>

	<p class="body-text">To book a room! The Westin Boston Waterfront Hotel is one of Boston’s premiere hotels that implements wellness and rejuvenation in every experience you have there. We invite you to consider adding an overnight stay to your conference experience. Don’t miss out on our discounted room rates ($219 + tax.) 
</p>
	<a href="https://www.starwoodmeeting.com/StarGroupsWeb/booking/reservation?id=1109065089&key=74AA4" target="_blank">BOOK NOW ></a>
	
	<h3 class="top-padding">Speakers</h3>

	<p class="body-text">The conference will have three simultaneous tracks giving you a variety of presentations. Topics are relevant to thought leaders, designers, developers, usability professionals, students, and people new to these fields. There’s something for everyone.
</p>
	<a href="agenda.html">EXPLORE THE AGENDA ></a>
	
	<h3 class="top-padding">Sponsorship Opportunities</h3>

	<p class="body-text">Our growing sponsor list means attendees will have more opportunity to network, discover companies that are hiring, meet local design and usability organizations and try out new technologies and products.</p>

	<a href="sponsor.html">SPONSORSHIP DETAILS ></a>
	<h3 class="top-padding">Networking</h3>

	<p class="body-text">The core of any conference is the networking opportunities. This event will attract attendees from all over the country and overseas. We feature the top names and talent in the interface and user experience world so you can connect with the best.</p>

	<p class="body-text">Please plan on joining us after the conference for cocktails and networking from 5-7 PM.</p>

</div> <!-- end white-content-container -->

</div> <!-- end of sub-page-container -->

</div><!-- end of container --> 

	<!-- InstanceEndEditable -->	
<div class="clearfix"></div>

<footer>
	<div id="footer-wrapper" class="container_12">
		<article id="contact-us" class="grid_4">
			<h2>Contact Us</h2>
			<p>Please feel free to send your comments, questions and feedback to: 
			<a href="mailto:hxdconf@gomeeting.com">hxdconf@gomeeting.com</a>
			<br /><br />
			We’ll be sure to respond to you as quickly as possible.</p>
		</article>
		
		<article id="get-updates" class="grid_3 alpha">
			<h2>Get Updates</h2>
			<table border="0">
				<?php
					if (isset($_POST['submitted']))
					{
						$fullnamepost = filter_input(INPUT_POST, 'namefield', FILTER_SANITIZE_STRING, array(FILTER_FLAG_STRIP_LOW, FILTER_FLAG_ENCODE_HIGH));
						$emailpost = filter_input(INPUT_POST, 'emailfield', FILTER_SANITIZE_EMAIL);


						if (strlen($fullnamepost)>0 && filter_var($emailpost, FILTER_VALIDATE_EMAIL))
						{
							$bodymessage = "Full Name:\n\t " . $fullnamepost . "\n\n Email:\n\t " . $emailpost . "\n\n";
							$bodymessage .= "IP:\n\t" . $_SERVER['REMOTE_ADDR'] . " (http://www.maxmind.com/app/locate_demo_ip?ips=" . $_SERVER['REMOTE_ADDR'] . ")" . "\n\n";


							//mail('info@healthcareexperiencedesign.com', 'healthcare experience design conference - web contact form', $bodymessage);
							//mail('hxd@gomeeting.com', 'healthcare experience design conference - web contact form', $bodymessage);

							$submissionsFilePath = "emaillist/submissions.csv";
							$file = fopen($submissionsFilePath, 'a') or die("Unable to open file.");
							fwrite($file, $fullnamepost . "," . $emailpost . ","  . $_SERVER['REMOTE_ADDR'] . "\n");
							fclose($file);

							$thankyou = true;
						}
						else
						{
							if (strlen($fullnamepost) == 0 || $fullnamepost == $DefaultName)
							  $errormessage .= "Please enter your name<br />\n";

							if (strlen($emailpost) == 0 || $emailpost == $DefaultEmail)
							  $errormessage = "Please enter your email address<br />\n";
							else
							  {
								if(!filter_var($emailpost, FILTER_VALIDATE_EMAIL))
							  		$errormessage .= "Please fix your email address<br />\n";
							  }
						}
					}
					else
					{
						$fullnamepost = $DefaultName;
						$emailpost = $DefaultEmail;
					}

				?>
								<?php if (isset($thankyou)) { ?><tr><td>Thank you for submitting your information</td></tr><?php } ?>
							<?php 
								if (isset($errormessage))
									echo "<tr><td><span style=\"color:pink;\">$errormessage</span></td></tr>";
							?>
				<?php if (!isset($thankyou)) { ?>
				<tr>
			    <td>
			      <label>
			        <input name="namefield" type="text" id="namefield" value="<?php echo $fullnamepost; ?>" title="Name" />
			      </label>
				</td>
			  </tr>
			  <tr>
			    <td>
				<label>
			    <input name="emailfield" type="text" id="emailfield" value="<?php echo $emailpost; ?>" title="Email" />
			    </label>
				</td>
			  </tr>
			  <tr id="button-box">
					<td>
						<label>
							<input type="submit" name="button" id="button" alt="Keep me posted!" value="Keep me posted!" class="action-button" />
							<input type="hidden" name="submitted" value="true" />
				    </label>
				</td>
				
				</tr><?php } ?>
			</table>
		</article>
		<article id="footer-social-media" class="grid_5 alpha">
			<div id="connect-headline"><h2>Connect</h2><p>before, during, and <br />after the event</p></div>
			<div id="footer-icons"><a href="http://www.linkedin.com/groups?home=&gid=1996303&trk=anet_ug_hm" target="_blank"><img src="img/linkedin-big.png" /></a>
			<a href="https://twitter.com/#!/hxdconf" target="_blank"><img src="img/twitter-big.png" /></a>
			<a href="http://www.hxdconference2012.crowdvine.com" target="_blank"><img src="img/crowdvine-big.png" /></a>
			<a href="https://www.facebook.com/pages/Healthcare-Experience-Design-Conference/175279145836929" target="_blank"><img src="img/facebook-big.png" /></a></div>
		</article>
		<section id="sponsors">
			<h2 class="top-padding grid_12">Sponsors</h2>
 							<div class="grid_2" style="margin-left:4%"><a href="http://gehealthcare.com" target="_blank"><img src="img/sponsorLogo-GEHealthcare.png" alt="GE Healthcare"/></a></div>
			                <div class="grid_2"><a href="http://continuuminnovation.com" target="_blank"><img src="img/sponsorlogo-continuum.png" alt="Continuum Innovation" /></a></div>
			                <div class="grid_2" style="margin-top:-1.5em;"><a href="http://userzoom.com" target="_blank"><img src="img/sponsorLogo-userzoom.png" alt="User Zoom" /></a></div>
			                <div class="grid_2" style="margin-top:1.5em;"><a href="http://aloftgroup.com" target="_blank"><img src="img/aloft-logo.png" alt="Aloft Group" /></a></div>
			<div class="grid_2" style="margin-top:1.5em;"><a href="http://axure.com" target="_blank"><img src="img/sponsorLogo-axure.png" alt="Axure" /></a></div>

						<div class="clearfix"></div>
			           	  <div class="grid_2" style="margin-top:1.5em; margin-left:4%"><a href="http://rosenfeldmedia.com" target="_blank"><img src="img/sponsorLogo-rosenfeld.png" alt="Rosenfeld" /></a></div>
						<div class="grid_2"  style="margin-top:1.5em;"><a href="http://www.connected-health.org" target="_blank"><img src="img/sponsorLogo-centerForConnectedHealth.png" alt="Connected Health"/></a></div>
			           <div class="grid_2"  style="margin-top:1em;"><a href="http://rockhealth.com" target="_blank"><img src="img/sponsorlogo-rockhealth.png" alt="Rock Health" /></a></div>
						<div class="grid_4"  style="margin-top:2em;"><a href="http://frontierhealth.org/" target="_blank"><img src="img/sponsorlogo-frontier.png" alt="Frontier Health" /></a></div>    
						<div class="clearfix"></div>
					   <div class="grid_2"  style="margin-top:3.5em; margin-left:7%"><a href="http://www.theatomgroup.com/" target="_blank"><img src="img/sponsorLogo-atom.png" alt="Atom" /></a></div> 
							    <div class="grid_2 omega"  style="margin-top:1.5em;"><a href="http://www.medcitynews.com/about-us-2/" target="_blank"><img src="img/sponsorLogo-medcityMedia.png" alt="MedCity Media" /></a></div>

					   <div class="grid_2 alpha" style="margin-top:2em;"><a href="http://www.mobihealthnews.com/" target="_blank"><img src="img/sponsorLogo-mobiHealthNews.png" alt="Mobi Health News" /></a></div>

		</section>
	
	<div class="clearfix"></div>
	</div>
</footer>
  

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    //   <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script> -->


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  
</form>
</body>
<!-- InstanceEnd --></html>