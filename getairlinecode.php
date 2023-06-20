<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   echo "Which airline code are you looking up? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airlineCode" value="';
        echo $row["AirlineCode"];
        echo '">' . $row["AirlineCode"] . "<br>";
   }
?>
<?php
   include 'getoffereddate.php';
?>
