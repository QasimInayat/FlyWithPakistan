<form action="input.php" method="post">

	Name:<input type="text" name="name"/> <br>
	Father Name:<input type="text" name="father_name"/> <br>
	Date:<input type="date" name="date"/> <br>
	<select name="book" />
		<option>English</option>
		<option>Urdu</option>
		<option>Math</option>
		<option>Sindhi</option>
	</select><br>
	Time:<input type="time" name="time"/>
	<input type="submit" name="submit"/>
</form>

<?php
if(isset($_POST['submit'])){
	
$con = mysql_connect("localhost","Qasim","password");
if(!$con){
	die("Can not connect: " .mysql_error());
}

mysql_select_db("fwp",$con);

$sql="INSERT INTO abc (Name,Father_Name,Date,Book,Time) VALUES ('$_POST[name]','$_POST[father_name]','$_POST[date]','$_POST[book]','$_POST[time]')";

mysql_query($sql,$con);

mysql_close($con);
}

?>