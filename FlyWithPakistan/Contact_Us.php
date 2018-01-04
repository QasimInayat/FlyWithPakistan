<!DOCTYPE html>
<html>
	<head>
		<title>Fly with Pakistan</title>
		<link rel="stylesheet" type="text/css" href="flywithpakistan.css">
	</head>
		<link rel="shortcut icon" href="icon.png" />
	<body>
		 <div id="main"> <!--- Starting of Main Body --->
			<div id="header"> <!-- Starting of Header --->
				<div> <!--- Logo (image) --->
					<img  src="123456789.png" id="logof" alt="Fly with Pakistan">
				</div> <!---  Ending Logo (image) --->
				<div id="logoS"> <!--- Slogen --->
					<h1>Your Destination, Our Aim</h1>
				</div> <!--- Ending Slogen --->
			</div> <!-- Ending of Header --->
			
			<div id="buttons_bar"> <!--- Starting Buttons --->
				<ul id="buttons">
				<li > <a href="index.html">Home</a>
				<li> <a href="International.html">International</a>
				<li> <a href="Domestic.html">Domestic</a>
				<li> <a href="Booking.php">Booking</a>
				<li class="current"> <a href="Contact_Us.php">Contact Us</a>
				<li> <a href="Contact_Us.html">About Us</a>
				<li> <a href="FAQ.html">FAQ</a>
				</ul>
			</div><!---Ending Buttons --->
			
			 
	
			<div id="container"><!--- Starting Body --->
				<div class="fomrinter">
					<h4 class="formheading">Contact</h4>
					<div id="Contacinsider">
						<br><h4 class="departure">Contact Us</h4>
							<div id="contactno">
								<div id="contactnoinsider">
									<br><br><br><table>
										<tr>
											<td><b>Contact</b></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+92-3001234567</td>
										</tr>
										<tr>
											<td><b>Coutnry</b></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pakistan</td>
										</tr>
										<tr>
											<td><b>Address</b></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00-F,Karachi,</td>
										</tr>
										<tr>
											<td><b>Email</b></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;abc@abc.com</td>
										</tr>
									</table>
								</div>
							
							</div>
					</div>
					
					<div id="miscllenous">
						<h4 class="departure">Miscellaneous Info</h4>
						<div id="miscllenousinsider">
							<br><p>Either the document entitled "Passenger Ticket and Baggage Check" or the Electronic Ticket, in each case issued by a carrier or a travel agent, for carriage of a passenger and/or baggage, containing flight coupon and passenger coupon or passenger receipt, or electronic flight coupon and Itinerary/Receipt in the case of Electronic Ticket.<br><br>
							A document issued by a Carrier or its Authorized Agent. It is worth the price written on the MCO, and is used for payment for the types of service written on the MCO.
When an MCO is issued and/or honored for air transportation and related charges, applicable currency regulations shall apply.<br><br>A ticket and an MCO are valid only for the person named in the "PASSENGER NAME" box of the ticket. A ticket and an MCO are not transferable.
</p>
						</div>
						
						<div id="contactform">
							<br><br><h1>Contact Form</h1><hr>
							<form action="Booking_Details.php" method="post">
								<br><br>
								<span><b>Name:</b></span>
								<input type="text" name="name" id="cformbox1"/><br><br>
								<span><b>Email:</b></span>
								<input type="text" name="email" id="cformbox2"/><br>
								<h6>Message</h6>
								<textarea name="message"  id="cformbox3"/></textarea><br><br>
								<table>
									<tr>
										<td><input type="reset" name="reset" value="Clear" id="clearbutton"/></td>
										<td><input type="submit" name="submit" value="Send" id="clearbutton2"/></td>
									</tr>
								</table>
							</form>
							
						</div>
					</div>
					
				</div>
<!---**************************************footer**************************************************--->				
				<div id="footerinter">
					<h6 class="departure2inter">
						<ul id="footerbuttoninter">
							<li> <a href="index.html">Home</a>
							<li> <a href="International.html">Internationcal</a>
							<li> <a href="Domestic.html">Domestic</a>
							<li> <a href="Booking.php">Booking</a>
							<li> <a href="Contact_Us.php">Contact Us</a>
							<li> <a href="About_Us.html">About Us</a>
							<li> <a href="FAQ.html">FAQ</a>
					
						</ul>
					</h6>
					<p id="copyrightsinter"> &copy; <i>Copyrights Fly with Pakistan 2015</i></p>
				
				</div>
			
			</div><!--- Ending of  Body --->
			
			
			
		
			
		 </div> <!--- Ending of Main Body --->
		 
		 
<?php
if(isset($_POST['submit'])){
	
$con = mysql_connect("localhost","Qasim","password");
if(!$con){
	die("Can not connect: " .mysql_error());
}

mysql_select_db("fwp",$con);

$sql="INSERT INTO contact_us (Name,Email,message) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')";

mysql_query($sql,$con);

mysql_close($con);
}

?>
	 
	</body>
</html>
