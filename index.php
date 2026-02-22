<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ['en', 'dk', 'nl'];
$lang = in_array($lang, $acceptLang) ? $lang : 'en';

if(isset($_GET['lang']))
{
	$lang = $_GET['lang'];	
}

require_once "localization/$lang/index.php";

?>
<!doctype html>
<html lang="<?php echo $lang ?>" dir="ltr">

	<head>

		<title>Alex Lamond</title>

		<!--  Linked Files and Browser Icons  -->
		
		<link rel="preload" href="style/style.css" as="style">
		<link rel="preload" href="https://fonts.googleapis.com/css?family=Poiret+One" as="style">
		
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One">

		<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
		<link rel="mask-icon" href="images/favicons/apple-touch-icon.png" color="#121212">
		<link rel="manifest" href="images/favicons/manifest.json">
		<link rel="shortcut icon" href="images/favicons/favicon.ico">
		
		<meta name="msapplication-TileColor" content="#e0e0e0">
		<meta name="msapplication-TileImage" content="images/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#e0e0e0">
		<meta name="Cache-Control" content="max-age=3600">
		
		<!-- Headers and app connections -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Standard SEO Meta Data -->
		
		<meta name="google-site-verification" content="mr7_MrjTnvITyhFR8_0BDBtGUwFPRiLhhAYGGt1FNAo" />
		<meta name="description" content="Alex is a BSc Computing Graduate and IT Specialist currently living in Denmark" />
		<meta name="keywords" content="Alex Lamond, Alex, Web Developer, BSc Computing Graduate, Graduate, Graduate Web Developer, Denmark" />
		
		<!-- Facebook Open Graph Meta Data -->

		<meta property="og:title" content="Alex Lamond" />
		<meta property="og:description" content="Alex is a BSc Computing Graduate and IT Specialist currently living in Denmark" />
		<meta property="og:url" content="https://alexlamond.co.uk" />
		<meta property="og:image" content="https://alexlamond.co.uk/images/Copenhagen_compressed.JPG" />
		<meta property="og:image:url" content="https://alexlamond.co.uk/images/Copenhagen_compressed.JPG" />
		
		<meta property="og:type" content="website" />
		
		<!-- Twitter Meta Data -->

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@alexlamond1" />
		<meta name="twitter:creator" content="@alexlamond1" />
		
		<!-- Tooltipster and JQuery -->

		<link rel="preload" href="tooltipster/dist/css/tooltipster.bundle.min.css" as="style">
		<link rel="preload" href="tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-punk-white.min.css" as="style">

		<link rel="stylesheet" href="tooltipster/dist/css/tooltipster.bundle.min.css">
		<link rel="stylesheet" href="tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-punk-white.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="tooltipster/dist/js/tooltipster.bundle.min.js" defer></script>
		<script src="scripts/script.js" defer></script>

		<!-- Matomo -->
		
		<script>
			var _paq = _paq || [];
			_paq.push(["setCookieDomain", "*.alexlamond.co.uk"]);
			_paq.push(["setDoNotTrack", true]);
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u = "//analytics.alexlamond.co.uk/";
				_paq.push(['setTrackerUrl', u + 'piwik.php']);
				_paq.push(['setSiteId', '2']);
				var d = document,
					g = d.createElement('script'),
					s = d.getElementsByTagName('script')[0];
				g.type = 'text/javascript';
				g.async = true;
				g.defer = true;
				g.src = u + 'piwik.js';
				s.parentNode.insertBefore(g, s);
			})();
		</script>
		
		<!-- End Matomo Code -->

		<!-- Setup Tooltipster -->

		<script>
			$(document).ready(function() {
				$('.tooltip').tooltipster({
					theme: 'tooltipster-punk',
					animationDuration: 750,
					animation: 'fade',
					side: 'bottom'
				});
			});
		</script>
	</head>
	
	<body>
		
		<!-- Prevent scrolling -->
		
		<script>
			
			document.ontouchmove = function(event) {
				event.preventDefault();
			}
		</script>

		<?php

			// Start the Memcached instance

			$m = new Memcached();
			$m->addServer('localhost', 11211);

		?>
    
		<div id="bgimg" style="background-image:url('images/Copenhagen_compressed.JPG')"></div>

		<div id="main">
			<h1>Alex Lamond</h1>
			<p>
				<b><?php echo $phrases["developer_of_xtravel"] ?></b>
				<br><br>
				<?php echo $phrases["photography"] ?>
        	</p>
			<br>
		</div>
		
		<!-- Links area -->
		
		<div id="social">

	    	<a href="https://bsky.app/profile/alexlamond.co.uk" target="_blank" rel="noreferrer">
	                <img src="images/bluesky.png" class="tooltip" title="@alexlamond.co.uk 
					  <?php echo $phrases["on_word"] ?> BlueSky" alt="BlueSky" />
			<a>
																																			  
			<!-- Can't use 'Instagram' because it gets blocked by ADP -->
        	<a href="https://instagram.com/alextakesphotosofthings" target="_blank" rel="noreferrer">
                <img src="https://cdn1.iconfinder.com/data/icons/rounded-social-media/512/instagram-512.png" class="tooltip" title="@alextakesphotosofthings <?php echo $phrases["on_word"] ?> Instagram" alt="Insta" />
        	</a>

        	<a href="https://github.com/alexlamond" target="_blank" rel="noreferrer">
                <img src="https://cdn1.iconfinder.com/data/icons/rounded-social-media/512/github-512.png" class="tooltip" title="@AlexLamond <?php echo $phrases["on_word"] ?> GitHub" alt="Github" />
        	</a>

    	</div>
	</body>
</html>
