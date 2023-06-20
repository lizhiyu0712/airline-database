<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert new flight</title>
<link rel="stylesheet" type="text/css" href="airline2.css">
</head>
<body>
<?php
   include 'connectappdb.php';
?>
<ol>
<?php
   $whichAirline= $_POST["airlinename"];
   $whichArriveAirport= $_POST["airportarrive"];
   $whichDepartureAirport= $_POST["airportdeparture"];
   $schduledDepartureTime = $_POST["SchduledDepartureTime"];
   $actualDepartureTime = $_POST["SchduledDepartureTime"];
   $schduledArriveTime = $_POST["SchduledArriveTime"];
   $actualArriveTime = $_POST["SchduledArriveTime"];
   $flightNumber = $_POST["FlightNumber"];
   $offeredDate = $_POST["OfferedDate"];
   $airplaneID = $_POST["AirplaneId"];
   $query1 = 'INSERT INTO flight values("' . $flightNumber . '","' . $whichAirline . '","'. $actualArriveTime . '","' . $schduledArriveTime . '","' . 
                                          $actualDepartureTime . '","' . $schduledDepartureTime . '","' . 
                                          $whichArriveAirport . '","'.   $whichDepartureAirport . '","'. $airplaneID . '")';
   $numRows = $connection->exec($query1);
   $query2 = 'INSERT INTO offereddate values("' . $flightNumber . '","' . $whichAirline . '","' . $offeredDate . '")';
   $numRows = $connection->exec($query2);
   echo "Your flight was added!";
   $connection = NULL;
?>
</ol>
</body>
</html>