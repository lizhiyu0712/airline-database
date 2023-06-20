<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>find flights</title>
        <link rel="stylesheet" type="text/css" href="airline2.css">
    </head>
<body>
<?php
include 'connectappdb.php';
?>
<h1>Please make your selection!</h1>
<h2>Our available airline codes</h2>
<form action="getspecialdayflights.php" method="post">
<?php
   include 'getairlinecode.php';
?>
<input type="submit" value="Get Flights">
</form>
<?php
$connection = NULL;
?>
</body>
</html> 