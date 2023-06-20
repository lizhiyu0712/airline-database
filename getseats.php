<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Seat number</title>
        <link rel="stylesheet" type="text/css" href="airline2.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1>Average number of seats available:</h1>
<?php
    $whichDate= $_POST["dateofweek"];
    $count = 0;
    $query = ' SELECT AVG(airplanetype.AirplaneTypeMaxSeat) AS AverageSeats
    FROM offereddate,flight,airplane,airplanetype
	WHERE OfferedDate = "' . $whichDate . '" 
	AND offereddate.AirlineCode = flight.AirlineCode
	AND offereddate.FlightNumber = flight.FlightNumber
	AND flight.AirplaneId = airplane.AirplaneId
	AND airplane.AirplaneTypeName = airplanetype.AirplaneTypeName';
    $result=$connection->query($query);
	while ($row=$result->fetch()) {
        echo "<tr><td>".$row["AverageSeats"]."</td></tr>";
        $count= $count + 1;
    }

    if($count == 0){
        echo "Sorry, there is no flight avaliable.<br>";
    }
?>
<?php
   $connection = NULL;
?>
</body>
</html>