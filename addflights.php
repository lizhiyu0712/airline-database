<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add new flight</title>
        <link rel="stylesheet" type="text/css" href="airline2.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1> Add a new flight:</h1>
<form action="insertnewflight.php" method="post">
<?php
   include 'getairlineandairport.php';
?>
<p>&nbsp;</p> 
<p></p> 
New flight's departure time: <input type="text" name="SchduledDepartureTime"><br>
New flight's arrival time: <input type="text" name="SchduledArriveTime"><br>
New flight's flight number (please enter a 3 digit number): <input type="text" name="FlightNumber"><br>
New flight's offered day of the week (please enter character such as Monday, Tuesday): <input type="text" name="OfferedDate"><br>
New flight's Airplane ID (please enter a 6 digit character start with a Capital letter): <input type="text" name="AirplaneId"><br>
<input type="submit" value="Add a new flight now">
</form>
<?php
$connection =- NULL;
?>
</body>