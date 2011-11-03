---
layout: default
---
<script>
var RecaptchaOptions = {
	theme : 'clean'
};
</script>
<section class="content">
  <h1>Contact Us</h1>
  	<h3>General Contact Info</h3>
  	<hr>

  	<img class="imgmobile contactmap" src="http://maps.googleapis.com/maps/api/staticmap?center=129+West+Main+Street+Goldendale,+WA+98620-8911&size=150x150&scale=2&maptype=hybrid&sensor=false">

  	<p>Address: <br>
  	129 West Main Street<br>
	Goldendale, WA 98620-8911<p>

	<p>Phone: (509) 773-5804</p>

  	<div class="nowrap">
  	<h3>Contact Details</h3>
  	<hr>

  	<p>Manager: 
	  	<ul>
	  		<li><b>Shawn Phipps</b> - County Manager/Title Officer - <a href="mailto:Shawn@kctitle.net">Shawn@kctitle.net</a></li>
	  	</ul>
	</p>
 
	<p>Title:
		<ul>
			<li><b>Ron Nelson</b> - Advisory Title Officer - <a href="mailto:Ron@kctitle.net">Ron@kctitle.net</a></li>
			<li><b>Kelli Marshall</b> - Title Examiner - <a href="mailto:Kelli@kctitle.net">Kelli@kctitle.net</a></li>
		</ul>
	</p>
		 
	<p>Escrow:
		<ul>
			<li><b>Brooke Johnson</b> - Limited Practice Officer/Manager - <a href="mailto:Brooke@kctitle.net">Brooke@kctitle.net</a></li>
			<li><b>Karol Tate</b> - Escrow Closer - <a href="mailto:Karol@kctitle.net">Karol@kctitle.net</a></li>
			<li><b>Shayne Thacker</b> - Collection Services/ Escrow Assistant - <a href="mailto:Shayne@kctitle.net">Shayne@kctitle.net</a></li>
		</ul>
	</p>
	 
	<p>Accounts Receivable:
		<ul>
			<li><b>Janet Lieurance</b> - <a href="mailto:Janet@kctitle.net">Janet@kctitle.net</a></li>
		</ul>
	</p>


  <h3>Drop us a line:</h3>
  <hr>

  <form class="expandedform" action="f.php" method="post">
  	<input type="hidden" name="f" value="contact" />
  	<div class="row"><label for="name">Name: </label>
  	<input type="text" placeholder="Your Name" name="name" required /></div>
  	<div class="row"><label for="email">Email: </label>
  	<input type="email" placeholder="joe@i.c.wa.us.gov.edu" name="email" required /></div>
  	<div class="row"><label for="message">Message: </label>
  	<textarea name="message" required> </textarea></div>

  	<div class="row">
  	<label for=""></label>
  	<?php
          require_once('recaptchalib.php');
          $publickey = "6LdwpckSAAAAACzu6wTfcnj8RdgxnsNsBi1_FtLf"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
    ?>
    </div>

  	<div class="row"><label for="submit"></label><input type="submit" value="Submit" name="submit"></div>

  </form>

  </div>

</section>
