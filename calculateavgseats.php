<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculate average number of seats</title>
        <link rel="stylesheet" type="text/css" href="airline2.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1> Display the average number of seats available on all flights on a day of the week:</h1>
<form action="getseats.php" method="post">
<?php
include 'getoffereddate.php'
?>
<input type="submit" value="Display the average number of seats now">
<?php
$connection =- NULL;
?>
</body>
</html>