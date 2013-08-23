<!DOCTYPE html>
<html lang="en">
<head>
	<meta property="og:title" content="Movee Monkee" />
	<meta property="og:type" content="company" />
	<meta property="og:url" content="http://moveemonkee.com/" />
	<meta property="og:image" content="http://moveemonkee.com/resources/images/MM_Twitterpic.jpg" />
	<meta property="og:site_name" content="Movee Monkee" />
	<meta property="fb:admins" content="660103975" />
	<title>Welcome to MoveeMonkee!<?= isset($title) ? ' - '.$title : '' ?></title>

	<!-- CSS, JavaScript, etc. -->
	<link href="<?php echo base_url()?>/resources/css/style.css" rel="stylesheet"  media="screen" type="text/css" />
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-25682750-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<?php 	// Define the redirection URL //
		$redirect_uri = base_url("index.php/profile");
		$deal_id = NULL;
		
		// If the 'deal_id' is set, we append the id to the redirect_uri //
		if( isset($_GET["deal_id"]) ){
			$deal_id = $_GET["deal_id"];
			$redirect_uri.= "/deal/" . $deal_id;
		}
		
		
		// If the 'event_name' is set, we append immediately redirect to the deal //
		if( isset($_GET["promo"]) ){
			$promo_id = $_GET["promo"];
			$redirect_uri = base_url("/index.php/event");
			$header_param = 'Location: ' . $redirect_uri;
			header( $header_param ) ;
		}
		?>

<body id="page">	
	<div id="content">
		<a 	href="<?php echo base_url()?>"
			style="position: relative; top: -150px;"
			>
			<img src="<?php echo base_url()?>/resources/images/MM logoR.jpg"
				height="850px"
				>
		</a>
		<div class="main-content">			
			<div class="email-form">
		<?php 	// If the user has entered an email, display a message instead //
				if( isset($_POST['email'])){ 
					$to = "email-collection@moveemonkee.com";
					$subject = "MoveeMonkee.com Email Subscriber";
					$msg = $_POST['email'];
					mail($to, $subject, $msg);
					?>
				<div class="attention">Thanks, look for us in your inbox soon!</div>	
		<?php 	} else {	?>
				<div class="attention">Save money on Movie Tickets.</div><br />
				<div class="info">Launching soon. Sign up to stay in the loop.</div>
				<form action="" method="post" onsubmit="">
			        <div id="subscribe">
			            <input type="text" placeholder="" name="email">
			            <input type="hidden" value="" name="uri"/>
			            <input type="hidden" name="loc" value="en_US"/>
						<br />
			            <input type="submit" value="Go!" id="submit">
			            <div class="clear"></div>
			        </div>
			    </form>
		<?php 	}	?>
			</div>
			
			
		</div>
	</div>
	
	<div id="footer">
		<div class="twitter-follow-div">
			<span class="twitter-follow">
				<a href="https://twitter.com/moveemonkee" class="twitter-follow-button" data-show-count="true">
					Follow @moveemonkee
				</a>
				<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
			</span>
		</div>
		<div class="mm-auth">
			<div class="fb-login">
				<div id="fb-root"></div>
				<script>(function(d){
				  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
				  js = d.createElement('script'); js.id = id; js.async = true;
				  js.src = "//connect.facebook.net/en_US/all.js#appId=174614292613877&xfbml=1";
				  d.getElementsByTagName('head')[0].appendChild(js);
				}(document));</script>
		
				<div id="fb-root"></div>
				<!-- <script src="http://connect.facebook.net/en_US/all.js"></script>
				<script>
				  	FB.init({ 
				     	appId:'174614292613877', cookie:true, 
				     	status:true, xfbml:true 
				  	});
				
				  	FB.Event.subscribe('auth.login', function () {
				     	window.location = "<?php echo $redirect_uri; ?>";
				  	});
				</script> -->
				
				
				<!-- <fb:login-button>Connect with Facebook</fb:login-button> -->
			</div>

			<div class="fb-like" 
				data-href="http://www.facebook.com/pages/Movee-Monkee/173412572737075" 
				data-send="false" 
				data-layout="box_count" 
				data-width="50" 
				data-show-faces="true">
			</div>
		</div>
	</div>
</body>
<!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p> -->
</html>