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
				<li > <a href="International.html">International</a>
				<li class="current"> <a href="Domestic.html">Domestic</a>
				<li> <a href="Booking.php">Booking</a>
				<li> <a href="Contact_Us.php">Contact Us</a>
				<li> <a href="About_Us.html">About Us</a>
				<li> <a href="FAQ.html">FAQ</a>
				</ul>
			</div><!---Ending Buttons --->
			
			 
	
			<div id="container"><!--- Starting Body --->
				<div class="fomrinter">
					<h4 class="formheading">Domestic</h4>
						<div id="formboxd">
							<br><br><Br><br><h1>Search Domestic Flights</h1><br>
							<div id="formboxdinsider">
							<form action="Domestic.php" method="get">
								<b style="color:black;">From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To</b><br>
								<select id="boxd1" name="user">
									<option value="">Choose</option>
									<option value="Karachi">Karachi</option>
								</select>
								
								<select id="boxd2" name="to">
									<option value="">Choose</option>
									<option value="Kashmir">Kashmir</option>
									<option value="Muree">Muree</option>
									<option value="Peshawar">Peshawar</option>
									<option value="Islamabad">Islamabad</option>
									<option value="Karachi">Karachi</option>
								</select><br><br><Br><br>
								
								<b style="color:black;">Outboundb</b><br>
								<input type="date" name="outbound" id="boxd1"><br><br><br>
								<b style="color:black;">Adult</b><br>
								<input type="text" name="adult" id="boxd3"><br><br><br>
								<b style="color:black;">Children</b><br>
								<input type="text" name="children" id="boxd3" value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
								<table id="buttonsd">
								<tr >
								<td><input type="reset" value="Clear" id="resetd"></td>
								<td><input type="Submit" value="Search" id="resetd"></td>
								</tr>
								</table>
							</form>
							</div>
						</div>
					
					
				</div>
<!---**************************************footer**************************************************--->				
				<div id="footerdom">
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
</html>
