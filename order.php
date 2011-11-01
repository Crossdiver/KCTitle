---
layout: default
---
<script>
var RecaptchaOptions = {
	theme : 'clean'
};
</script>
<section class="content">
  <h1>Title / Escrow Order Form</h1>
  <form class="expandedform"  action="f.php" method="post">
  	<input type="hidden" name="f" value="order" />
  	<h3>Owner</h3>
  	<hr>

  	<div class="row"><label for="ownerName">Owner: </label>
  	<input type="text" placeholder="Owner's Name" name="ownerName" required autofocus /></div>

  	<div class="row"><label for="ownerEmail">Email: </label>
  	<input type="email" placeholder="joe@i.c.wa.us.gov.edu" name="ownerEmail" required /></div>

  	<div class="row"><label for="ownerPhone">Phone: </label><input type="tel" class="phone" name="ownerPhone" required /></div>

  	<div class="row"><label for="ownerAddress">Address: </label><input type="text" name="ownerAddress" required /></div>
  	
  	<h3>Buyer</h3>
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

  	<img class="imgmobile imgcenter hide" id="map" src="" />

  	<h3>Legal Description</h3>
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

  	<div class="row"><label for="submit"></label><input type="submit" value="Lick. Stamp. Flag up." name="submit"></div>

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