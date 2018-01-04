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
				<li> <a href="Booking_Details.html">Contact Us</a>
				<li> <a href="About_Us.html">About Us</a>
				<li> <a href="FAQ.html">FAQ</a>
				</ul>
			</div><!---Ending Buttons --->
			
			 
	
			<div id="container"><!--- Starting Body --->
				<div class="fomrinter">
					<h4 class="formheading">Booking</h4>
					<div id="mainbookingform">
						
					
						<form action="Booking.php" method="post">
							<hr>
							<br><br><h1>Booking Details</h1><br><hr>
							<p>Please make sure that you fill in the name which is in your passport.</p><hr>
							<br><br><h4>Contact Person</h4>
							<input type="text" name="First_Name" id="formbox1"/>
							<input type="text" name="Last_Name" id="formbox2"/><br>
							<span>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name</span><br><br>
							<h4>Email</h4>
							<input placeholder="ex: my name@myname.com" name="Email" id="formbox4" /><br><br>
							<h4>Phone Number</h4>
							<input type="text" name="Code" id="formbox5"/> &nbsp;&nbsp;-
							<input type="text" name="Mbl_Number" id="formbox6"/><br><br>
							<h4>Address</h4>
							<input type="text" name="Address1" id="formbox7"/><br>
							<span>Address 1</span><br><br><br>
							<input type="text" name="Address2" id="formbox7"/><br>
							<span>Address 2</span><br><br><br>
							<input type="text" name="City" id="formbox8"/>
							<input type="text" name="StateProvince" id="formbox9"/><br>
							<span>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State/Province</span><br><br><br>
							<input type="text" name="Zip_Code" id="formbox8"/>
							<select name="Country" id="formbox9"/><br>
								<option >Please Select</option>
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
							<select name="Departure_Month" id="formbox5"> &nbsp;&nbsp;-
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							<select name="Departure_Day" id="formbox10"> &nbsp;&nbsp;-
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
							</select>
							<select name="Departure_Year" id="formbox11"> &nbsp;&nbsp;at
								<option>0000</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
							</select>
							<input type="time" name="D_Time" id="formbox12"/><br>
							<span>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours/Minutes</span><br><br><br>
							<h4>Return Date & Time</h4>
							<select name="Return_Month" id="formbox5"> &nbsp;&nbsp;-
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							<select name="Return_Day" id="formbox10"> &nbsp;&nbsp;-
								<option>00</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
							</select>
							<select name="Return_Year" id="formbox11"> &nbsp;&nbsp;at
								<option>0000</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
							<select>
							<input type="time" name="R_Time" id="formbox12"/><br>
							<span>Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hours/Minutes</span><br><br><br>
							<h4>Departing From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</h4>
							<select name="Departing_From" id="formbox13"/><br>
								<option >Please Select</option>
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
							<input type="text" name="Depar_City" id="formbox14"/><br><br><br>
							<h4>Destination From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City</h4>
							<select name="Destination_To" id="formbox13"/><br>
								<option >Please Select</option>
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
							<input type="text" name="Desi_City" id="formbox14"/><br><br><br>
							<h4>Airline&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</h4>
							<select name="Airline" id="formbox13"/><br>
								<option >Please Select</option>
								<option >Shaheen Airline</option>
								<option >PIA</option>
								<option >Fly Dubai</option>
								<option >Emirtes</option>
								<option >Gulf Airline</option>
								
							</select>
							<select name="Class"  id="formbox14"/>
								<option >Please Select</option>
								<option >Economy Class</option>
								<option >Business Class</option>
							</select><br><br><br><br>
							<input type="submit" name="submit" value="Book Flight" id="submitbuttonbooking2"/><br><br><br><br><br><br><br><br>
						</form>
					</div>
					
				</div>
<!---**************************************footer**************************************************--->				
				<div id="footerremain">
					<h6 class="departure2inter">
						<ul id="footerbuttoninter">
							<li> <a href="index.html">Home</a>
							<li> <a href="International.html">International</a>
							<li> <a href="Domestic.html">Domestic</a>
							<li> <a href="Booking.php">Booking</a>
							<li> <a href="Booking_Details.php">Contact Us</a>
							<li> <a href="About_Us.html">About Us</a>
							<li> <a href="FAQ.html">FAQ</a>
					
						</ul>
					</h6>
					<p id="copyrightsinter"> &copy; <i>Copyrights Fly with Pakistan 2015</i></p>
				<?php display_confirm() ?>
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

$sql="INSERT INTO book (First_Name,Last_Name,Email,Code,Mbl_Number,Address1,Address2,City,StateProvince,Zip_Code,Country,Departure_Month,Departure_Day,Departure_Year,D_Time,Return_Month,Return_Day,Return_Year,R_Time,Departing_From,Depar_City,Destination_To,Desi_City,Airline,Class) VALUES ('$_POST[First_Name]','$_POST[Last_Name]','$_POST[Email]','$_POST[Code]','$_POST[Mbl_Number]','$_POST[Address1]','$_POST[Address2]','$_POST[City]','$_POST[StateProvince]','$_POST[Zip_Code]','$_POST[Country]','$_POST[Departure_Month]','$_POST[Departure_Day]','$_POST[Departure_Year]','$_POST[D_Time]','$_POST[Return_Month]','$_POST[Return_Day]','$_POST[Return_Year]','$_POST[R_Time]','$_POST[Departing_From]','$_POST[Depar_City]','$_POST[Destination_To]','$_POST[Desi_City]','$_POST[Airline]','$_POST[Class]')";
 
mysql_query($sql,$con);

mysql_close($con);
}

?>

</html>
