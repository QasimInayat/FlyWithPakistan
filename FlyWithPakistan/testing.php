<?php

require 'start.php';

$usersQuery= "
	SELECT
		sno.id,
		sno.place,
		flight.ToFrom,
		flight.Departure1,
		flight.Arival1,
		flight.Departure2,
		flight.Arival2,
		flight.Departure3,
		flight.Arival3,
		flight.Duration,
		flight.Price,
		flight.To,
		flight.From,
		flight.StopNonStop
	FROM sno
	LEFT JOIN flight
	ON sno.id = flight.id
";


$users = $db->query($usersQuery);

if( isset($_POST['user']))
{
	$userQuery = "
		{$usersQuery}
		WHERE sno.id = :id
	";
	
	$user = $db->prepare($userQuery);
	$user->execute(['id' => $_POST['user']]);
	
	$selectedUser = $user->fetch(PDO::FETCH_ASSOC);
	
	
	
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Practice</title>
	</head>
	<body>
		<form action="testing.php" method="post">
			<select name="user">
				<option value="">Choose</option>
				<?php foreach($users->fetchAll() as $user): ?>
					<option value="<?php echo $user['id']; ?>"><?php echo $user['place']; ?></option>
				<?php endforeach; ?>
			</select><br><br>
			<input type="date" name="date"><br><br>
			<input type="text" name="adult"><br><br>
			<input type="text" name="children"><br><br><br>
			<input type="submit" value="Search" name="submit"/>
			<input type="reset" value="Clear"/>
			
		</form>
		
		<?php if(isset($selectedUser)): ?>
		<table >
			<tr>
				<td><?php echo $selectedUser['ToFrom']; ?></td>
				<td><?php echo $selectedUser['Departure1']; ?></td>
				<td><?php echo $selectedUser['Arival1']; ?></td>
				<td><?php echo $selectedUser['Duration']; ?></td>
				<td><?php echo $selectedUser['Price']; ?></td><br>
			</tr>
			<tr>
				<td><?php echo $selectedUser['To']; ?></td>
				<td><?php echo $selectedUser['From']; ?></td>
				<td><?php echo $selectedUser['StopNonStop']; ?></td><br><br>
			</tr>
		</table>
			<?php echo $selectedUser['ToFrom']; ?>
			<?php echo $selectedUser['Departure2']; ?>
			<?php echo $selectedUser['Arival2']; ?>
			<?php echo $selectedUser['Duration']; ?>
			<?php echo $selectedUser['Price']; ?><br>
			<?php echo $selectedUser['To']; ?>
			<?php echo $selectedUser['From']; ?>
			<?php echo $selectedUser['StopNonStop']; ?><br><br>
			
			<?php echo $selectedUser['ToFrom']; ?>
			<?php echo $selectedUser['Departure3']; ?>
			<?php echo $selectedUser['Arival3']; ?>
			<?php echo $selectedUser['Duration']; ?>
			<?php echo $selectedUser['Price']; ?><br>
			<?php echo $selectedUser['To']; ?>
			<?php echo $selectedUser['From']; ?>
			<?php echo $selectedUser['StopNonStop']; ?>
			
	
		<?php endif; ?>

		
		
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