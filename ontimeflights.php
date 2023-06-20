<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>On time flights</title>
    <link rel="stylesheet" type="text/css" href="airline1.css">
</head>
<body>
<?php
include 'connectappdb.php';
?>
    <h1>Below flights were on time</h1>
<?php
include 'getflights.php';
?>
<img src="airplane-insurance-header.jpg">
</body>
</html>