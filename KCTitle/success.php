---
layout: default
---
<section class="content">
  <h1 class="center">Success!</h1>
  <p class="center">
  <?php 
  
  if ($_GET["t"] == "order") {
  	echo "Thanks so much for your order. You'll hear from us shortly!";
  } elseif ($_GET["t"] == "contact") {
  	echo "Thanks so much for contacting us. You'll hear from us shortly!";
  } elseif ($_GET["t"] == "contact") {
	echo "Thanks for requesting a service order. You'll hear from us shortly!";
  } else {
	echo "Thanks so much for contacting us. You'll hear from us shortly!";
  }

  ?>
  </p>

  
</section>
