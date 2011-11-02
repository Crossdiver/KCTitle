#!/usr/bin/env ruby

require 'cgi'
#require 'pony'
cgi = CGI.new
cgi.header("text/html")

h = cgi.params

message = ""

# find out which form is being submitted
if h['f'].to_s() == "order"

	legalDesc = ""

	legalDesc += "STD Owners..........." + h['stdOwnersVal'].to_s() + " -- Insured by: " + h['stdOwnersIns'].to_s() + "<br>"
	
	legalDesc += "Purchasers..........." + h['purchasersVal'].to_s() + " -- Insured by: " + h['purchasersIns'].to_s() + "<br>"
	
	legalDesc += "EXT Mortgage........." + h['extMortgageVal'].to_s() + " -- Insured by: " + h['extMortgageIns'].to_s() + "<br>"

	legalDesc += "Litigation..........." + h['litigationVal'].to_s() + " -- Insured by: " + h['litigationIns'].to_s() + "<br>"

	legalDesc += "Trustee Sale........." + h['trusteeSaleVal'].to_s() + " -- Insured by: " + h['trusteeSaleIns'].to_s() + "<br>"

	legalDesc += "Lot Book Search......" + h['lotBookSearchVal'].to_s() + " -- Insured by: " + h['lotBookSearchIns'].to_s() + "<br>"

	legalDesc += "Limited.............." + h['limitedVal'].to_s() + " -- Insured by: " + h['limitedIns'].to_s() + "<br>"


	message = "Hi there, <br> 
				You just got an email from " + h['ownerName'].to_s() + 
				" about escrow services. Woohoo!<br>" +
				"-----<br><br>" +
				"<b>Owner</b><br>" +
				"Name:    " + h['ownerName'].to_s() + "<br> " +
				"Email:   " + h['ownerEmail'].to_s() + "<br> " +
				"Phone:   " + h['ownerPhone'].to_s() + "<br> " +
				"Address: " + h['ownerAddress'].to_s() + "<br> " +

				"<br><br>" +

				"<b>Buyer</b><br>" +
				"Name:    " + h['buyerName'].to_s() + "<br> " +
				"Email:   " + h['buyerEmail'].to_s() + "<br> " +
				"Phone:   " + h['buyerPhone'].to_s() + "<br> " +
				"Address: " + h['buyerAddress'].to_s() + "<br> " +

				"<br><br>" +

				"<b>Property</b><br>" +
				"Address:       " + h['propertyAddress'].to_s() + "<br> " +
				"Parcel Number: " + h['parcelNumber'].to_s() + "<br> " +

				"<br><br>" +
				
				"<b>Legal Description</b><br><pre>" +

				legalDesc +

				"</pre><br><br>"

else 
	if h['f'].to_s() == "contact"
		message = "<p style=\"color: #444;\">Hey! You just got an email from the website. Here's what " + h['name'].to_s() +
					" said:</p>" +
					"<p style=\"font-size:1.3em\">\"" + h['message'].to_s() + "\"</p>" +
					"<p style=\"color: #444;\">You can get back with " + h['name'].to_s() + " at his email address: " + h['email'].to_s() + "</p>"
	end
end

#Pony.mail(:to => "ikelewis678@gmail.com", :from => "kctitle@kctitle.net", :subject => "Mail from website", :body => message)