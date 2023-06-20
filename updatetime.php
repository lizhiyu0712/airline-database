<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update flight time</title>
        <link rel="stylesheet" type="text/css" href="airline2.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1> Update the actual departure time of a flight:</h1>
<form action="insertnewtime.php" method="post">
<?php
   $query = "SELECT * FROM flight";
   $result = $connection->query($query);
   echo "Choose a flight you want to update it's actual departure time: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="flightcode" value="';
        echo $row["FlightNumber"];
        echo '">' . $row["FlightNumber"] . "<br>";
   }
?>
<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   echo "Choose a Airline code of your flight: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airlinecode" value="';
        echo $row["AirlineCode"];
        echo '">' . $row["AirlineCode"] . "<br>";
   }
?>
<p></p> 
Flight's new actual departure time: <input type="text" name="ActualDepartureTime"><br>
<input type="submit" value="Add a new actual departure time now">
<?php
$connection =- NULL;
?>
</body>
</html>