<?php

require 'start.php';

$usersQuery= "
	SELECT
		sno2.id,
		sno2.place,
		flightinter.ToFrom,
		flightinter.Departure1,
		flightinter.Arival1,
		flightinter.Departure2,
		flightinter.Arival2,
		flightinter.Departure3,
		flightinter.Arival3,
		flightinter.Duration,
		flightinter.Price,
		flightinter.To,
		flightinter.From,
		flightinter.StopNonStop
	FROM sno2
	LEFT JOIN flightinter
	ON sno2.id = flightinter.id
";


$users = $db->query($usersQuery);

if( isset($_POST['user']))
{
	$userQuery = "
		{$usersQuery}
		WHERE sno2.id = :id
	";
	
	$user = $db->prepare($userQuery);
	$user->execute(['id' => $_POST['user']]);
	
	$selectedUser = $user->fetch(PDO::FETCH_ASSOC);
	
	
	
}

?>





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
				<li class="current"> <a href="International.html">International</a>
				<li> <a href="Domestic.html">Domestic</a>
				<li> <a href="Booking.php">Booking</a>
				<li> <a href="Booking_Details.php">Contact Us</a>
				<li> <a href="About_Us.html">About Us</a>
				<li> <a href="FAQ.html">FAQ</a>
				</ul>
			</div><!---Ending Buttons --->
			
			 
	
			<div id="container"><!--- Starting Body --->
				<div class="fomrinter">
					<h4 class="formheading">Domestic</h4>
						<div id="formscroll">
							
								<div id="formboxdd">
							<br><br><br><Br><br><h1>Search Domestic Flights</h1><br><br><br>
								<div id="formboxdinsider">
							<form action="International.php" method="post">
								<b style="color:black;">Location</b><br>
								<select name="user" id="boxd1">
									<option value="">Choose</option>
									<?php foreach($users->fetchAll() as $user): ?>
										<option value="<?php echo $user['id']; ?>"><?php echo $user['place']; ?></option>
									<?php endforeach; ?>
								</select><br><br>
								<b style="color:black;">Outbound</b><br>
								<input type="date" name="date" id="boxd2"><br><br>
								<b style="color:black;">Adults</b><br>
								<input type="text" name="adult" id="boxd3"><br><br>
								<b style="color:black;">Children</b><br>
								<input type="text" name="children" id="boxd3" value="0"><br><br><br>
							<table id="buttonsd">
								<tr>
									<td><input type="submit" value="Search" name="submit" id="resetd"/></td>
									<td><input type="reset" value="Clear" id="resetd"/></td>
								</tr>
							</table>
							</form>
								</div><br>
														
						<?php if(isset($selectedUser)): ?>
		
			<div id="tableheading">
				<br><table>
					<tr>
						<td width="11%">DEPARTURE</td>
						<td width="10%">ARRIVAL</td>
						<td width="10%">DURATION</td >
						<td width="5%">PRICE</td>
					</tr>
					</table>
				</div>
		<h6 id="h6"><?php echo $selectedUser['ToFrom']; ?></h6>		
		<div id="firstflight">
		
			
			<br>	
			<b id="departure1"><?php echo $selectedUser['Departure1']; ?></b>
			<b id="arrival1"><?php echo $selectedUser['Arival1']; ?></b>
			<b id="duration1"><?php echo $selectedUser['Duration']; ?></b>
			<b id="price1"><?php echo $selectedUser['Price']; ?></b><br>
			
			<b id="to1"><?php echo $selectedUser['To']; ?></b>
			<b id="form1"><?php echo $selectedUser['From']; ?></b>
			<b id="spnsp"><?php echo $selectedUser['StopNonStop']; ?></b><br><br>
			
		
		</div>
		
		<h6 id="h6"><?php echo $selectedUser['ToFrom']; ?></h6>	
		<div id="firstflight">
			<br>
			<b id="departure1"><?php echo $selectedUser['Departure2']; ?></b>
			<b id="arrival1"><?php echo $selectedUser['Arival2']; ?></b>
			<b id="duration1"><?php echo $selectedUser['Duration']; ?></b>
			<b id="price1"><?php echo $selectedUser['Price']; ?></b><br>
			
			<b id="to1"><?php echo $selectedUser['To']; ?></b>
			<b id="form1"><?php echo $selectedUser['From']; ?></b>
			<b id="spnsp"><?php echo $selectedUser['StopNonStop']; ?></b><br><br>
		</div>
		
		<h6 id="h6"><?php echo $selectedUser['ToFrom']; ?></h6>	
		<div id="firstflight">
		
		<br>
			<b id="departure1"><?php echo $selectedUser['Departure3']; ?></b>
			<b id="arrival1"><?php echo $selectedUser['Arival3']; ?></b>
			<b id="duration1"><?php echo $selectedUser['Duration']; ?></b>
			<b id="price1"><?php echo $selectedUser['Price']; ?></b><br>
			
			<b id="to1"><?php echo $selectedUser['To']; ?></b>
			<b id="form1"><?php echo $selectedUser['From']; ?></b>
			<b id="spnsp"><?php echo $selectedUser['StopNonStop']; ?><b>	
		</div>
		<br><br><br><br>
		<?php endif; ?>
					</div>
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
		 
<?php
if(isset($_POST['submit'])){
	
$con = mysql_connect("localhost","Qasim","password");
if(!$con){
	die("Can not connect: " .mysql_error());
}

mysql_select_db("fwp",$con);

$sql="INSERT INTO flightdata (Outbound,Adults,Children) VALUES ('$_POST[date]','$_POST[adult]','$_POST[children]')";

mysql_query($sql,$con);

mysql_close($con);
}

?>


	</body>
</html>
