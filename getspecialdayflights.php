<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Special date flight number</title>
<link rel="stylesheet" type="text/css" href="airline2.css">
</head>
<body>
<?php
include 'connectappdb.php';
?>
<h1>Here is(are) associated flighted number:</h1>
<table>
<?php
    $whichDate= $_POST["dateofweek"];
    $whichCode= $_POST["airlineCode"];
    $count = 0;
    $query = 'SELECT flight.AirlineCode, flight.FlightNumber, A1.AirportCity AS DepartureCity, A2.AirportCity AS ArrivalCity, offereddate.OfferedDate
    FROM flight, offereddate,airport A1, airport A2 
	WHERE offereddate.OfferedDate ="' . $whichDate . '"
	AND flight.AirlineCode = offereddate.AirlineCode
	AND flight.AirlineCode = "' . $whichCode . '"
	AND flight.FlightNumber = offereddate.FlightNumber
	AND flight.DepartureAirport  = A1.AirportCode
	AND flight.ArrivalAirport  = A2.AirportCode';
    $result=$connection->query($query);
    
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["AirlineCode"].
	"</td><td>".$row["FlightNumber"]." From".
	"</td><td>".$row["DepartureCity"]. " to".
	"</td><td>".$row["ArrivalCity"]."</td></tr>";
    $count= $count + 1;
    }
    
    if($count == 0){
        echo "Sorry, there is no flight avaliable.<br>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>
