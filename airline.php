<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>airline</title>
        <link rel="stylesheet" type="text/css" href="airline1.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1>Welcome to the airline database main page!</h1>
<h2>What would you like to do today?</h2>
<form action="ontimeflights.php" method="post">
<input type="submit" value="Check which flights were on time">
</form>
<form action="findflights.php" method="post">
<input type="submit" value="Find flights in a given day of the week">
</form>
<form action="addflights.php" method="post">
<input type="submit" value="Add a new flight">
</form>
<form action="updatetime.php" method="post">
<input type="submit" value="Update the actual departure time of a flight ">
</form>
<form action="calculateavgseats.php" method="post">
<input type="submit" value="Get the information of the average number of seats in a day of the week">
</form>
<img src="intro-1567189774.jpg">
<?php
$connection = NULL;
?>
</body>
</html> 