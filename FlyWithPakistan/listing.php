<?php

require 'start.php';

$usersQuery= "
	SELECT
		sno.id,
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
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Practice</title>
	</head>
	<body>
		<?php foreach($users->fetchAll() as &user): ?>
			<?php echo $user['ToFrom']; ?>
		<?php endforeach; ?>
	</body>
</html>