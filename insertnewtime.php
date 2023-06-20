<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert new time</title>
<link rel="stylesheet" type="text/css" href="airline2.css">
</head>
<body>
<?php
   include 'connectappdb.php';
?>
<ol>
<?php
    $whichAirline = $_POST["airlinecode"];
    $whichFlight = $_POST["flightcode"];
    $whichTime =$_POST["ActualDepartureTime"];
    $query = 'UPDATE flight 
    SET ActualDepartureTime = "' . $whichTime . '"
	WHERE AirlineCode = "' . $whichAirline . '"
	AND FlightNumber = "' . $whichFlight . '"';
    $numRows = $connection->exec($query);
    echo "The time had been updated";
    $connection = NULL;
?>
</ol>
</body>
</html>
