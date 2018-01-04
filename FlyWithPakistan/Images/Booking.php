<!DOCTYPE html>
<html>
	<header>
		<title>Fly with Pakistan</title>
		<link rel="stylesheet" type="text/css" href="flywithpakistan.css">
	</header>
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
				<li class="current"> <a href="Booking.html">Booking</a>
				<li> <a href="Contact_Us.php">Contact Us</a>
				<li> <a href="About_Us.html">About Us</a>
				<li> <a href="FAQ.html">FAQ</a>
				</ul>
			</div><!---Ending Buttons --->
			
			 
	
			<div id="container"><!--- Starting Body --->
				<div class="fomrinter">
					<h4 class="formheading">Booking</h4>
					<div id="mainbookingform">
						<h1>Flight Booking</h1>
						<p>Please make sure that you fill in the name which is in your passport.</p><hr>
						<form action="Booking.php" method="post">
							<br><br><h4>Passengers Name</h4>
							<input type="text" name="first_name" id="formbox1"/>
							<input type="text" name="last_name" id="formbox2"/><br>
							<span>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name</span><br><br>
							<h4>Date of Birth</h4>
							<input type="date" name="dob" id="formbox1"/><br><br><br><br><hr><br><br><br><br><br>
							<h1>Booking Details</h1><br><hr>
							<br><br><h4>Contact Person</h4>
							<input type="text" name="b_first_name" id="formbox1"/>
							<input type="text" name="b_last_name" id="formbox2"/><br>
							<span>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name</span><br><br>
							<h4>Email</h4>
							<input placeholder="ex: my name@myname.com" name="email" id="formbox4" /><br><br>
							<h4>Phone Number</h4>
							<input type="text" name="code" id="formbox5"/> &nbsp;&nbsp;-
							<input type="text" name="mbl_number" id="formbox6"/><br><br>
							<h4>Address</h4>
							<input type="text" name="address1" id="formbox7"/><br>
							<span>Address 1</span><br><br><br>
							<input type="text" name="address2" id="formbox7"/><br>
							<span>Address 2</span><br><br><br>
							<input type="text" name="city" id="formbox8"/>
							<input type="text" name="stateprovince" id="formbox9"/><br>
							<span>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State/Province</span><br><br><br>
							<input type="text" name="zip_code" id="formbox8"/>
							<select name="country" id="formbox9"/><br>
								<option >Pakistan</option>
								<option >India</option>
								<option >USA</option>
								<option >South Africa</option>
								<option >Saudia Arabaia</option>
								<option >London</option>
								<option >Australia</option>
								<option >UK</option>
								<option >UAE</option>
								<option >Italy</option>
							</select><br>
							<span>Zip code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country</span><br><br><br>
							<h4>Departure Date & Time</h4>
							<input type="text" name="departure_month" id="formbox5"/> &nbsp;&nbsp;-
							<input type="text" name="departure_day" id="formbox10"/> &nbsp;&nbsp;-
							<input type="text" name="departure_Year" id="formbox11"/> &nbsp;&nbsp;at
							<input type="time" name="d_time" id="formbox12"/><br>
							<span>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours/Minutes</span><br><br><br>
							<h4>Return Date & Time</h4>
							<input type="text" name="return_month" id="formbox5"/> &nbsp;&nbsp;-
							<input type="text" name="return_day" id="formbox10"/> &nbsp;&nbsp;-
							<input type="text" name="retunr_Year" id="formbox11"/> &nbsp;&nbsp;at
							<input type="time" name="r_time" id="formbox12"/><br>
							<span>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours/Minutes</span><br><br><br>
							<h4>Departing From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</h4>
							<select name="departing_from" id="formbox13"/><br>
								<option >Pakistan</option>
								<option >India</option>
								<option >USA</option>
								<option >South Africa</option>
								<option >Saudia Arabaia</option>
								<option >London</option>
								<option >Australia</option>
								<option >UK</option>
								<option >UAE</option>
								<option >Itly</option>
							</select>
							<input type="text" name="depr_city" id="formbox14"/><br><br><br>
							<h4>Destination From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</h4>
							<select name="destination_to" id="formbox13"/><br>
								<option >India</option>
								<option >Pakistan</option>
								<option >USA</option>
								<option >South Africa</option>
								<option >Saudia Arabaia</option>
								<option >London</option>
								<option >Australia</option>
								<option >UK</option>
								<option >UAE</option>
								<option >Italy</option>
							</select>
							<input type="text" name="desti_city" id="formbox14"/><br><br><br>
							<h4>Airline&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</h4>
							<select name="airline" id="formbox13"/><br>
								<option >Shaheen Airline</option>
								<option >PIA</option>
								<option >Fly Dubai</option>
								<option >Emirtes</option>
								<option >Gulf Airline</option>
								
							</select>
							<select name="class"  id="formbox14"/>
								<option >Economy Class</option>
								<option >Business Class</option>
							</select><br><br><br><br>
							<input type="submit" name="submit" value="Book Flight" id="submitbuttonbooking2"/><br><br><br><br><br><br><br><br>
						</form>
					</div>
					
				</div>
<!---**************************************footer**************************************************--->				
				<div id="footerinter">
					<h6 class="departure2inter">
						<ul id="footerbuttoninter">
							<li> <a href="index.html">Home</a>
							<li> <a href="International.html">International</a>
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
	</body>
	
	<?php
if(isset($_POST['submit'])){
	
$con = mysql_connect("localhost","Qasim","password");
if(!$con){
	die("Can not connect: " .mysql_error());
}

mysql_select_db("fwp",$con);

$sql="INSERT INTO book (First_Name,Last_Name,DOB,B_First_Name,B_Last_Name,Email,Code,Mbl_Number,Address1,Address2,City,StateProvince,Zip_Code,Country,Departure_Month,Departure_Day,Departure_Year,D_Time,Return_Month,Return_Day,Return_Year,R_Time,Departing_From,Depar_City,Destination_To,Desti_City,Airline,Class) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[dob]','$_POST[b_first_name]','$_POST[b_last_name]','$_POST[email]','$_POST[code]','$_POST[mbl_number]','$_POST[address1]','$_POST[address2]','$_POST[City]','$_POST[stateprovince]','$_POST[zip_code]','$_POST[country]','$_POST[departure_month]','$_POST[departure_day]','$_POST[departure_Year]','$_POST[d_time]','$_POST[return_month]','$_POST[return_day]','$_POST[retunr_Year]','$_POST[r_time]','$_POST[departing_from]','$_POST[depr_city]','$_POST[destination_to]','$_POST[desti_city]','$_POST[airline]','$_POST[class]')";

mysql_query($sql,$con);

mysql_close($con);
}

?>

</html>
