<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   echo "Choose a airline company that you would like your flight belongs to: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airlinename" value="';
        echo $row["AirlineCode"];
        echo '">' . $row["AirlineName"] . "<br>";
   }
?>
<p>&nbsp;</p> 
<p></p> 
<?php
   $query = "SELECT * FROM airport";
   $result = $connection->query($query);
   echo "Choose a airport that you like your flight arrive: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airportarrive" value="';
        echo $row["AirportCode"];
        echo '">' . $row["AirportName"] . "<br>";
   }
?>
<p>&nbsp;</p> 
<p></p> 
<?php
   $query = "SELECT * FROM airport";
   $result = $connection->query($query);
   echo "Choose a airport that you like your flight departure from: </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="airportdeparture" value="';
        echo $row["AirportCode"];
        echo '">' . $row["AirportName"] . "<br>";
   }
?>

