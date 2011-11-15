<!doctype html>

<!-- 
320 and Up boilerplate extension
Andy Clarke http://about.me/malarkey
Keith Clark http://twitter.com/keithclarkcouk
Version: 2
URL: http://stuffandnonsense.co.uk/projects/320andup/
License: http://creativecommons.org/licenses/MIT
-->

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title> Title / Escrow Order Form |  Klickitat County Title Company </title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

<!-- For all browsers -->
<link rel="stylesheet" href="css/style.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=IM+Fell+English' rel='stylesheet' type='text/css'>


<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="/favicon.ico">

<!--iOS. Delete if not required -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="img/splash.png">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->

<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">
</head>

<body class="clearfix">

<header role="banner">
	<div id="logo"><img src="img/Logo-small.png"></div>
	<a href="/" style="text-decoration: none;"><h1>Klickitat County Title Company</h1></a>

	<nav class="top-nav">
		<ul>
			<li><a href="index.html" name="home" class="nav">Home</a></li>
			<li><a href="contact.php" name="contact" class="nav">Contact</a></li>
			<li><a href="order.php" name="order" class="nav">Order</a></li>
			<li><a href="service.php" name="service" class="nav">Service</a></li>
		</ul>
	</nav>
</header>

<div class="content clearfix">

<div role="main" class="main">
   <script>
var RecaptchaOptions = {
	theme : 'white'
};
</script>
<section class="content">
  <h1>Title / Escrow Order Form</h1>
  <form class="expandedform"  action="f.php" method="post">
  	<input type="hidden" name="f" value="order" />
  	<h3>Seller</h3>
  	<hr>

  	<div class="row"><label for="ownerName">Owner: </label>
  	<input type="text" placeholder="Owner's Name" name="ownerName" required autofocus /></div>

  	<div class="row"><label for="ownerEmail">Email: </label>
  	<input type="email" placeholder="joe@i.c.wa.us.gov.edu" name="ownerEmail" required /></div>

  	<div class="row"><label for="ownerPhone">Phone: </label><input type="tel" class="phone" name="ownerPhone" required /></div>

  	<div class="row"><label for="ownerAddress">Address: </label><input type="text" name="ownerAddress" required /></div>
  	
  	<h3>Buyer / Borrower</h3>
  	<hr>

  	<div class="row"><label for="buyerName">Buyer: </label>
  	<input type="text" placeholder="Buyer's Name" name="buyerName" required /></div>

  	<div class="row"><label for="buyerEmail">Email: </label>
  	<input type="email" placeholder="joe@i.c.wa.us.gov.edu" name="buyerEmail" required /></div>

  	<div class="row"><label for="buyerPhone">Phone: </label><input type="tel" class="phone" name="buyerPhone" required /></div>

  	<div class="row"><label for="buyerAddress">Address: </label><input type="text" name="buyerAddress" /></div>

  	<h3>Property</h3>
  	<hr>

  	<div class="row"><label for="propertyAddress">Address: </label><input type="text" id="propertyAddress" name="propertyAddress" onblur="loadMap()" required /></div>

  	<div class="row"><label for="parcelNumber">Parcel Number: </label><input type="num" name="parcelNumber" required /></div>

	<div class="row"><label for="parcelNumber">Legal Description: </label><input type="num" name="legalDescription" required /></div>

  	<img class="imgmobile imgcenter hide" id="map" src="" />

  	<h3>Product(s) Requested</h3>
  	<hr>
  	<div class="legal">

	<div class="row ">
		<label for ="stdOwners">STD Owners: </label>
		<input type="text" name="stdOwnersVal" style="width: 60px;" value="$" />
		<input type="text" name="stdOwnersIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="purchasers">Purchasers: </label>
		<input type="text" name="purchasersVal" style="width: 60px;" value="$" />
		<input type="text" name="purchasersIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="stdMortgage">STD Mortgage: </label>
		<input type="text" name="stdMortgageVal" style="width: 60px;" value="$" />
		<input type="text" name="stdMortgageIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="extMortgage">EXT Mortgage: </label>
		<input type="text" name="extMortgageVal" style="width: 60px;" value="$" />
		<input type="text" name="extMortgageIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="litigation">Litigation: </label>
		<input type="text" name="litigationVal" style="width: 60px;" value="$" />
		<input type="text" name="litigationIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="trusteeSale">Trustee Sale: </label>
		<input type="text" name="trusteeSaleVal" style="width: 60px;" value="$" />
		<input type="text" name="trusteeSaleIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="lotBookSearch">Lot Book Search: </label>
		<input type="text" name="lotBookSearchVal" style="width: 60px;" value="$" />
		<input type="text" name="lotBookSearchIns" placeholder="Insuring"/>
	</div>

	<div class="row ">
		<label for ="limited">Limited: </label>
		<input type="text" name="limitedVal" style="width: 60px;" value="$" />
		<input type="text" name="limitedIns" placeholder="Insuring"/>
	</div>

	</div>

  	<h3>Send copies to:</h3>
  	<hr>

  	<div class="copies">

  	<div class="row">
  	<label for="sendToOwner">Owner:</label>
  	<input type="checkbox" name="sendToOwner" />
  	</div>

  	<div class="row">
  	<label for="sendToSeller">Seller:</label>
  	<input type="checkbox" name="sendToSeller" />
  	</div>

  	<div class="row">
  	<label for="sendToListing">Listing Agent:</label>
  	<input type="checkbox" name="sendToListing" />
  	</div>

  	<div class="row">
  	<label for="sendToSelling">Selling Agent:</label>
  	<input type="checkbox" name="sendToSelling" />
  	</div>
  	
  	<div class="row">
  	<label for="sendToLender">Lender:</label>
  	<input type="checkbox" name="sendToLender" />
  	</div>

	<div class="row">
  	<label for="sendToLender">Escrow Requested:</label>
  	<input type="checkbox" name="escrowRequested" />
  	</div>

  	</div>

  	<div class="row" id="noteLink"><a href="javascript:addNote()">Add a note</a></div>

  	<div id="note" class="hide">
  		<div class="row"><label for="note">Note: </label><textarea name="notes"></textarea></div>
  	</div>

  	<div class="row">
  	<label for=""></label>
  	<?php
          require_once('recaptchalib.php');
          $publickey = "6LdwpckSAAAAACzu6wTfcnj8RdgxnsNsBi1_FtLf"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
    ?>
    </div>

  	<div class="row"><label for="submit"></label><input type="submit" value="Submit" name="submit"></div>

</section>

<script>
	function Map(address, map) {
		this.address = address;
		this.map = map;
	}

	m = new Map();

	m.map = document.getElementById('map');

	function loadMap() {
		$('#map').removeClass('hide');
		m.address = document.getElementById('propertyAddress').value;
		m.map.src = ('http://maps.googleapis.com/maps/api/staticmap?center=' +  m.address.split(' ').join('+') + '&size=150x150&scale=2&maptype=hybrid&sensor=false');
		m.map
	}

	function addNote() {
		$('#note').removeClass('hide');
		$('#noteLink').addClass('hide');
	}

</script>

</div>

<div role="complementary" id="complementary">

</div>
</div>

<footer role="contentinfo" class="clearfix">
</footer>

<!-- Scripts -->
<script src="js/libs/jquery-1.6.2.min.js"></script>
<script src="js/scripts.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
yepnope({
	test : Modernizr.mq('(min-width)'),
	nope : ['js/libs/respond.min.js']
});

$('.phone').mask("(999) 999-9999", {placeholder:"_"});

// StickyScroller
$(document).scroll(function(){
	if ($(window).width() >= 992) {
		if ($(document).scrollTop() >= 150) {
			$('#complementary').removeClass('locked').addClass('floating');
		} else {
			$('#complementary').removeClass('floating').addClass('locked');
		}
	}
});
</script>

<!-- http://mths.be/aab -->
<!-- <script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script> -->


</body>
</html>
